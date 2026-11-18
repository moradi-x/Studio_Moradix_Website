<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');



// Database backup every 10 days at 2 AM
Schedule::command('backup:run --only-db')
    ->cron('0 2 */10 * *');

// Clean old backups at 3 AM
Schedule::command('backup:clean')
    ->dailyAt('03:00');