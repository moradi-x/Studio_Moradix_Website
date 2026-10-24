
<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProjectRequest;
use Illuminate\Database\Seeder;
use RuntimeException;

class ProjectRequestSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'ecommerce',
            'corporate',
            'portfolio',
            'resume',
            'student-projects',
        ];

        $foundCategories = Category::whereIn('slug', $categories)
            ->get()
            ->keyBy('slug');

        foreach ($categories as $slug) {
            if (! $foundCategories->has($slug)) {
                throw new RuntimeException(
                    "دسته‌بندی با اسلاگ '{$slug}' در جدول categories پیدا نشد."
                );
            }
        }

        $requests = [
            [
                'name' => 'علی احمدی',
                'email' => 'ali@example.com',
                'phone' => '09123456789',
                'category_id' => $foundCategories['ecommerce']->id,
                'budget' => '۱۰۰ تا ۲۰۰ میلیون تومان',
                'description' => 'برای کسب‌وکار خود به یک سایت فروشگاهی مدرن نیاز دارم.',
                'status' => 'new',
            ],
            [
                'name' => 'سارا محمدی',
                'email' => 'sara@example.com',
                'phone' => '09121234567',
                'category_id' => $foundCategories['corporate']->id,
                'budget' => '۲۰۰ تا ۴۰۰ میلیون تومان',
                'description' => 'برای شرکت خود به یک سایت شرکتی حرفه‌ای نیاز دارم.',
                'status' => 'contacted',
            ],
            [
                'name' => 'رضا کریمی',
                'email' => null,
                'phone' => '09129876543',
                'category_id' => $foundCategories['portfolio']->id,
                'budget' => '۵۰ تا ۱۰۰ میلیون تومان',
                'description' => 'برای نمایش نمونه‌کارهایم به یک سایت نمونه‌کار نیاز دارم.',
                'status' => 'new',
            ],
            [
                'name' => 'مینا حسینی',
                'email' => 'mina@example.com',
                'phone' => '09122345678',
                'category_id' => $foundCategories['resume']->id,
                'budget' => '۵۰ تا ۱۰۰ میلیون تومان',
                'description' => 'یک سایت رزومه‌ای ساده و حرفه‌ای می‌خواهم.',
                'status' => 'completed',
            ],
            [
                'name' => 'محمد رضایی',
                'email' => 'mohammad@example.com',
                'phone' => '09123456780',
                'category_id' => $foundCategories['student-projects']->id,
                'budget' => '۳۰ تا ۷۰ میلیون تومان',
                'description' => 'برای پروژه دانشجویی خود به طراحی سایت نیاز دارم.',
                'status' => 'rejected',
            ],
        ];

        foreach ($requests as $request) {
            ProjectRequest::create($request);
        }
    }
}
