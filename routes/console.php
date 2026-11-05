<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');



// Daily database backup at 2 AM
Schedule::command('backup:run --only-db')
    ->dailyAt('02:00');

// Clean old backups at 3 AM
Schedule::command('backup:clean')
    ->dailyAt('03:00');