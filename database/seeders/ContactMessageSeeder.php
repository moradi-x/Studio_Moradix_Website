<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{
    public function run(): void
    {
        $messages = [
            [
                'phone' => '09123456789',
                'request_type' => 'project',
                'name' => 'علی احمدی',
                'project_type' => 'online-shop',
                'message' => 'برای کسب‌وکار خود به یک سایت فروشگاهی مدرن نیاز دارم.',
            ],
            [
                'phone' => '09121234567',
                'request_type' => 'project',
                'name' => 'سارا محمدی',
                'project_type' => 'website-design',
                'message' => 'برای شرکت خود به یک سایت شرکتی حرفه‌ای نیاز دارم.',
            ],
            [
                'phone' => '09129876543',
                'request_type' => 'project',
                'name' => 'رضا کریمی',
                'project_type' => 'wordpress-upgrade',
                'message' => 'برای سایت فعلی خود به بازطراحی و ارتقا نیاز دارم.',
            ],
            [
                'phone' => '09122345678',
                'request_type' => 'consultation',
                'name' => 'مینا حسینی',
                'project_type' => 'seo-speed',
                'message' => 'برای بهبود سئو و سرعت سایتم به مشاوره نیاز دارم.',
            ],
            [
                'phone' => '09123456780',
                'request_type' => 'project',
                'name' => 'محمد رضایی',
                'project_type' => 'custom-system',
                'message' => 'برای کسب‌وکار خود به یک سیستم اختصاصی نیاز دارم.',
            ],
        ];

        foreach ($messages as $message) {
            ContactMessage::updateOrCreate(
                ['phone' => $message['phone']],
                $message
            );
        }
    }
}
