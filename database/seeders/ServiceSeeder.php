<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create(['title' => 'طراحی سایت', 'slug' => 'web-design', 'description' => 'طراحی رابط کاربری مدرن، زیبا و حرفه‌ای برای وب‌سایت‌ها.', 'status' => true, 'order' => 1,]);
        Service::create([
            'title' => 'توسعه وب',
            'slug' => 'web-development',
            'description' => 'توسعه وب‌سایت‌های سریع، امن و مقیاس‌پذیر.',

            'status' => true,
            'order' => 2,
        ]);
        Service::create([
            'title' => 'طراحی فروشگاه اینترنتی',
            'slug' => 'ecommerce-development',
            'description' => 'طراحی و توسعه فروشگاه‌های اینترنتی حرفه‌ای و کاربردی.',
            'status' => true,
            'order' => 3,
        ]);
        Service::create([
            'title' => 'توسعه API',
            'slug' => 'api-development',
            'description' => 'طراحی و توسعه APIهای امن و قابل توسعه برای پروژه‌های وب.',
            'status' => true,
            'order' => 4,
        ]);
        Service::create([
            'title' => 'پشتیبانی و نگهداری',
            'slug' => 'maintenance',

            'description' => 'پشتیبانی، بروزرسانی و نگهداری وب‌سایت‌ها و پروژه‌ها.',
            'status' => true,
            'order' => 5,
        ]);
    }
}
