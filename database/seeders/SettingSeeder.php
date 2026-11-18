
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            'site_name' => 'Moradix',
            'site_email' => 'info@moradix.com',
            'site_phone' => '09120000000',
            'site_description' => 'طراحی و توسعه وب‌سایت‌های مدرن',
            'site_status' => 'active',
            'profile_image' => null,
        ];

        foreach ($settings as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
