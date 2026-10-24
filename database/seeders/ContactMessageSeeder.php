<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder  extends Seeder
{
    public function run(): void
    {
        $messages = [
            [
                'request_type' => 'project',
                'name' => 'علی احمدی',
                'phone' => '09123456789',
                'project_type' => 'ecommerce',
                'message' => 'برای کسب‌وکار خود به یک سایت فروشگاهی مدرن نیاز دارم.',
            ],
            [
                'request_type' => 'project',
                'name' => 'سارا محمدی',
                'phone' => '09121234567',
                'project_type' => 'corporate',
                'message' => 'برای شرکت خود به یک سایت شرکتی حرفه‌ای نیاز دارم.',
            ],
            [
                'request_type' => 'project',
                'name' => 'رضا کریمی',
                'phone' => '09129876543',
                'project_type' => 'portfolio',
                'message' => 'برای نمایش نمونه‌کارهایم به یک سایت نمونه‌کار نیاز دارم.',
            ],
            [
                'request_type' => 'project',
                'name' => 'مینا حسینی',
                'phone' => '09122345678',
                'project_type' => 'resume',
                'message' => 'یک سایت رزومه‌ای ساده و حرفه‌ای می‌خواهم.',
            ],
            [
                'request_type' => 'project',
                'name' => 'محمد رضایی',
                'phone' => '09123456780',
                'project_type' => 'student-projects',
                'message' => 'برای پروژه دانشجویی خود به طراحی سایت نیاز دارم.',
            ],
        ];

        foreach ($messages as $message) {
            ContactMessage::create($message);
        }
    }
}
