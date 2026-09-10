<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::create([
            'key' => 'site_name',
            'value' => 'Moradix',
        ]);

        Setting::create([
            'key' => 'site_email',
            'value' => 'info@moradix.com',
        ]);

        Setting::create([
            'key' => 'site_phone',
            'value' => '09120000000',
        ]);

        Setting::create([
            'key' => 'site_description',
            'value' => 'طراحی و توسعه وب‌سایت‌های مدرن',
        ]);

        Setting::create([
            'key' => 'site_status',
            'value' => 'active',
        ]);
    }
}