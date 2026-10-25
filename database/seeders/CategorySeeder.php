<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            // طراحی وب‌سایت
            [
                'name' => 'طراحی سایت اختصاصی',
                'slug' => 'custom-website-design',
            ],
            [
                'name' => 'طراحی سایت شرکتی',
                'slug' => 'corporate',
            ],
            [
                'name' => 'طراحی سایت فروشگاهی',
                'slug' => 'ecommerce',
            ],
            [
                'name' => 'طراحی سایت شخصی و رزومه',
                'slug' => 'resume',
            ],
            [
                'name' => 'طراحی سایت نمونه‌کار',
                'slug' => 'portfolio',
            ],
            [
                'name' => 'طراحی لندینگ پیج',
                'slug' => 'landing-page',
            ],
            [
                'name' => 'طراحی وبلاگ و مجله',
                'slug' => 'blog-magazine',
            ],

            // فروشگاه و تجارت آنلاین
            [
                'name' => 'فروشگاه اینترنتی پیشرفته',
                'slug' => 'advanced-ecommerce',
            ],
            [
                'name' => 'بازارگاه اینترنتی',
                'slug' => 'marketplace',
            ],

            // بازطراحی و ارتقا
            [
                'name' => 'بازطراحی و ارتقای سایت',
                'slug' => 'redesign',
            ],
            [
                'name' => 'بهینه‌سازی سرعت سایت',
                'slug' => 'performance-optimization',
            ],
            [
                'name' => 'بهبود رابط کاربری و تجربه کاربری',
                'slug' => 'ui-ux',
            ],
            [
                'name' => 'مهاجرت و انتقال سایت',
                'slug' => 'website-migration',
            ],
            [
                'name' => 'پشتیبانی و توسعه سایت',
                'slug' => 'maintenance',
            ],

            // سئو و بهینه‌سازی
            [
                'name' => 'سئو و بهینه‌سازی موتورهای جست‌وجو',
                'slug' => 'seo',
            ],
            [
                'name' => 'سئوی تکنیکال',
                'slug' => 'technical-seo',
            ],

            // سیستم‌های اختصاصی
            [
                'name' => 'طراحی سیستم‌های اختصاصی',
                'slug' => 'custom-systems',
            ],
            [
                'name' => 'طراحی پنل مدیریت',
                'slug' => 'admin-dashboard',
            ],
            [
                'name' => 'طراحی نرم‌افزارهای تحت وب',
                'slug' => 'web-applications',
            ],
            [
                'name' => 'سیستم مدیریت ارتباط با مشتری',
                'slug' => 'crm',
            ],
            [
                'name' => 'سیستم رزرو و نوبت‌دهی',
                'slug' => 'booking-system',
            ],
            [
                'name' => 'اتوماسیون و گردش کار',
                'slug' => 'automation',
            ],

            // یکپارچه‌سازی
            [
                'name' => 'اتصال API و سرویس‌های خارجی',
                'slug' => 'api-integration',
            ],
            [
                'name' => 'درگاه پرداخت و خدمات مالی',
                'slug' => 'payment-integration',
            ],

            // حوزه‌های تخصصی
            [
                'name' => 'طراحی سایت آموزشی',
                'slug' => 'education',
            ],
            [
                'name' => 'طراحی سایت املاک',
                'slug' => 'real-estate',
            ],
            [
                'name' => 'طراحی سایت پزشکی و سلامت',
                'slug' => 'healthcare',
            ],
            [
                'name' => 'طراحی سایت رستوران و کافه',
                'slug' => 'restaurant',
            ],
            [
                'name' => 'پروژه‌های دانشجویی',
                'slug' => 'student-projects',
            ],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['slug' => $category['slug']],
                ['name' => $category['name']]
            );
        }
    }
}