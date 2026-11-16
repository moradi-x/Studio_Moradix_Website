<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Throwable;

class BackupDatabase extends Command
{
    protected $signature = 'backup:database';

    protected $description = 'Create a timestamped MySQL database backup';

    public function handle(): int
    {
        $connectionName = config('database.default');
        $db = config("database.connections.{$connectionName}");

        if (($db['driver'] ?? null) !== 'mysql') {
            $this->error('The configured database driver is not MySQL.');
            return self::FAILURE;
        }

        $database = $db['database'] ?? null;

        if (!$database) {
            $this->error('Database name is not configured.');
            return self::FAILURE;
        }

        $mysqldump = 'C:\\Program Files\\MySQL\\MySQL Server 8.0\\bin\\mysqldump.exe';

        if (!file_exists($mysqldump)) {
            $this->error('mysqldump.exe was not found.');
            return self::FAILURE;
        }

        $backupDirectory = storage_path('app/backups');

        if (!is_dir($backupDirectory)) {
            mkdir($backupDirectory, 0755, true);
        }

        $filename = $database . '_' . now()->format('Y-m-d_H-i-s') . '.sql';
        $backupPath = $backupDirectory . DIRECTORY_SEPARATOR . $filename;

        $credentialsFile = tempnam(storage_path('app'), 'mysql-backup-');
        $outputFile = null;

        if ($credentialsFile === false) {
            $this->error('Could not create a temporary credentials file.');
            return self::FAILURE;
        }

        $escapeOption = static function ($value): string {
            return '"' . str_replace(
                ["\\", '"', "\n", "\r"],
                ["\\\\", '\\"', '\\n', '\\r'],
                (string) $value
            ) . '"';
        };

        $options = [
            '[client]',
            'user=' . $escapeOption($db['username'] ?? ''),
            'password=' . $escapeOption($db['password'] ?? ''),
            'host=' . $escapeOption($db['host'] ?? '127.0.0.1'),
            'port=' . (int) ($db['port'] ?? 3306),
            'default-character-set=utf8mb4',
            'protocol=tcp',
        ];

        try {
            file_put_contents($credentialsFile, implode(PHP_EOL, $options));
            $outputFile = fopen($backupPath, 'wb');

            if ($outputFile === false) {
                throw new \RuntimeException('Could not create the backup file.');
            }

            $process = new Process([
                $mysqldump,
                '--defaults-extra-file=' . $credentialsFile,
                '--single-transaction',
                '--routines',
                '--triggers',
                '--events',
                '--hex-blob',
                $database,
            ]);

            $process->setTimeout(null);

            $errorOutput = '';

            $process->run(function ($type, $buffer) use ($outputFile, &$errorOutput) {
                if ($type === Process::OUT) {
                    fwrite($outputFile, $buffer);
                } else {
                    $errorOutput .= $buffer;
                }
            });

            fclose($outputFile);
            $outputFile = null;

            if (!$process->isSuccessful() || !filesize($backupPath)) {
                @unlink($backupPath);

                $this->error('Database backup failed.');

                if ($errorOutput !== '') {
                    $this->line($errorOutput);
                }

                return self::FAILURE;
            }

            $this->info('Database backup created successfully.');
            $this->line('File: ' . $backupPath);
            $this->line('Size: ' . number_format(filesize($backupPath)) . ' bytes');

            return self::SUCCESS;
        } catch (Throwable $e) {
            if (is_resource($outputFile)) {
                fclose($outputFile);
            }

            if (file_exists($backupPath)) {
                @unlink($backupPath);
            }

            $this->error('Backup error: ' . $e->getMessage());

            return self::FAILURE;
        } finally {
            if (file_exists($credentialsFile)) {
                @unlink($credentialsFile);
            }
        }
    }
}