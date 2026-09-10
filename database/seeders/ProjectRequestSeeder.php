<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectRequest;

class ProjectRequestSeeder extends Seeder
{
    /** * اجرای Seeder */ public function run(): void
    {
        ProjectRequest::create([
            'name' => 'علی رضایی',
            'email' => 'ali@example.com',
            'phone' => '09120000001',
            'project_type' => 'طراحی فروشگاه اینترنتی
',
            'budget' => '۵۰ تا ۱۰۰ میلیون تومان',

            'description' => 'برای یک فروشگاه اینترنتی نیاز به طراحی سایت دارم.',
            'status' => 'new',
        ]);
        ProjectRequest::create([
            'name' => 'محمد احمدی',
            'email' => 'mohammad@example.com',
            'phone' => '09120000002',
            'project_type' => 'طراحی سایت شرکتی',
            'budget' => '۳۰ تا ۵۰ میلیون تومان',
            'description' => 'برای شرکت خودم به 
یک وب‌سایت حرفه‌ای و مدرن نیاز دارم.',

            'status' => 'new',
        ]);
        ProjectRequest::create([
            'name' => 'سارا کریمی',
            'email' => 'sara@example.com',

            'phone' => '09120000003',
            'project_type' => 'طراحی وب‌سایت شخصی',
            'budget' => '۲۰ تا ۳۰ میلیون تومان',
            'description' => 'می‌خواهم یک وب‌سایت شخصی برای معرفی نمونه‌کارها و رزومه خودم داشته باشم.',

            'status' => 'contacted',
        ]);
        ProjectRequest::create([
            'name' => 'رضا محمدی',
            'email' => 'reza@example.com',

            'phone' => '09120000004',
            'project_type' => 'اپلیکیشن',
            'budget' => '۱۰۰ تا ۲۰۰ میلیون تومان',
            'description' => 'برای کسب‌وکار خودم نیاز به طراحی و توسعه یک اپلیکیشن موبایل دارم.',
            'status' => 'new',
        ]);
        ProjectRequest::create([
            'name' => 'نگار حسینی',
            'email' => 'negar@example.com',
            'phone' => '09120000005',
            'project_type' => 'فروشگاه اینترنتی',
            'budget' => '۵۰ تا ۱۰۰ میلیون تومان',
            'description' => 'یک فروشگاه اینترنتی با پنل مدیریت و امکان پرداخت آنلاین می‌خواهم.',
            'status' => 'completed',
        ]);
    }
}
