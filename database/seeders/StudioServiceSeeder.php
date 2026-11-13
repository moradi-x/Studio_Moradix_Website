<?php

namespace Database\Seeders;

use App\Models\StudioService;
use Illuminate\Database\Seeder;

class StudioServiceSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['توسعه اختصاصی وب‌سایت', 'Custom Website Development', 'code'],
            ['طراحی رابط کاربری UI/UX', 'UI/UX Design', 'layout'],
            ['توسعه Back-End', 'Back-End Development', 'server'],
            ['بهینه‌سازی سئو', 'SEO Optimization', 'search'],
            ['بهبود سرعت وب‌سایت', 'Website Speed Optimization', 'gauge'],
            ['پنل مدیریت اختصاصی', 'Custom Admin Panel', 'panel'],
            ['طراحی واکنش‌گرا', 'Responsive Design', 'device'],
            ['طراحی پایگاه داده', 'Database Design', 'database'],
            ['امنیت و پایداری', 'Security and Reliability', 'shield'],
            ['معماری اصولی نرم‌افزار', 'Software Architecture', 'layers'],
            ['بازطراحی و ارتقای سایت', 'Website Redesign and Enhancement', 'refresh'],
            ['یکپارچه‌سازی API', 'API Integration', 'puzzle'],
            ['توسعه فروشگاه اینترنتی', 'E-commerce Development', 'cart'],
            ['کدنویسی تمیز و قابل توسعه', 'Clean and Scalable Code', 'git'],
            ['بهینه‌سازی تصاویر', 'Image Optimization', 'image'],
            ['پشتیبانی پس از تحویل', 'Post-Delivery Support', 'support'],
            ['تجربه کاربری هدفمند', 'Strategic User Experience', 'target'],
            ['ساختار ماژولار', 'Modular Architecture', 'blocks'],
            ['آمادگی برای رشد کسب‌وکار', 'Business Growth Readiness', 'rocket'],
            ['توسعه و نگهداری وب‌سایت', 'Website Development and Maintenance', 'wrench'],
        ];

        foreach ($items as $index => [$title, $titleEn, $icon]) {
            StudioService::updateOrCreate(
                ['title' => $title],
                [
                    'title_en' => $titleEn,
                    'icon' => $icon,
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
