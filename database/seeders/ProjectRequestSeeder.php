<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProjectRequest;
use Illuminate\Database\Seeder;

class ProjectRequestSeeder extends Seeder
{
    public function run(): void
    {
        $ecommerce = Category::where('slug', 'ecommerce')->first();
        $corporate = Category::where('slug', 'corporate')->first();
        $portfolio = Category::where('slug', 'portfolio')->first();
        $resume = Category::where('slug', 'resume')->first();
        $studentProjects = Category::where('slug', 'student-projects')->first();

        ProjectRequest::create([
            'name' => 'علی احمدی',
            'email' => 'ali@example.com',
            'phone' => '09123456789',
            'category_id' => $ecommerce->id,
            'budget' => '۱۰۰ تا ۲۰۰ میلیون تومان',
            'description' => 'برای کسب‌وکار خود به یک سایت فروشگاهی مدرن نیاز دارم.',
            'status' => 'new',
        ]);

        ProjectRequest::create([
            'name' => 'سارا محمدی',
            'email' => 'sara@example.com',
            'phone' => '09121234567',
            'category_id' => $corporate->id,
            'budget' => '۲۰۰ تا ۴۰۰ میلیون تومان',
            'description' => 'برای شرکت خود به یک سایت شرکتی حرفه‌ای نیاز دارم.',
            'status' => 'contacted',
        ]);

        ProjectRequest::create([
            'name' => 'رضا کریمی',
            'email' => null,
            'phone' => '09129876543',
            'category_id' => $portfolio->id,
            'budget' => '۵۰ تا ۱۰۰ میلیون تومان',
            'description' => 'برای نمایش نمونه‌کارهایم به یک سایت نمونه کار نیاز دارم.',
            'status' => 'new',
        ]);

        ProjectRequest::create([
            'name' => 'مینا حسینی',
            'email' => 'mina@example.com',
            'phone' => '09122345678',
            'category_id' => $resume->id,
            'budget' => '۵۰ تا ۱۰۰ میلیون تومان',
            'description' => 'یک سایت رزومه‌ای ساده و حرفه‌ای می‌خواهم.',
            'status' => 'completed',
        ]);

        ProjectRequest::create([
            'name' => 'محمد رضایی',
            'email' => 'mohammad@example.com',
            'phone' => '09123456780',
            'category_id' => $studentProjects->id,
            'budget' => '۳۰ تا ۷۰ میلیون تومان',
            'description' => 'برای پروژه دانشجویی خود به طراحی سایت نیاز دارم.',
            'status' => 'rejected',
        ]);
    }
}