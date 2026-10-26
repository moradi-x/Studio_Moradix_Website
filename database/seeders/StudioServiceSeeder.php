<?php

namespace Database\Seeders;

use App\Models\StudioService;
use Illuminate\Database\Seeder;

class StudioServiceSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['توسعه اختصاصی وب‌سایت', 'code'],
            ['طراحی رابط کاربری UI/UX', 'layout'],
            ['توسعه Back-End', 'server'],
            ['بهینه‌سازی سئو', 'search'],
            ['بهبود سرعت وب‌سایت', 'gauge'],
            ['پنل مدیریت اختصاصی', 'panel'],
            ['طراحی واکنش‌گرا', 'device'],
            ['طراحی پایگاه داده', 'database'],
            ['امنیت و پایداری', 'shield'],
            ['معماری اصولی نرم‌افزار', 'layers'],
            ['بازطراحی و ارتقای سایت', 'refresh'],
            ['یکپارچه‌سازی API', 'puzzle'],
            ['توسعه فروشگاه اینترنتی', 'cart'],
            ['کدنویسی تمیز و قابل توسعه', 'git'],
            ['بهینه‌سازی تصاویر', 'image'],
            ['پشتیبانی پس از تحویل', 'support'],
            ['تجربه کاربری هدفمند', 'target'],
            ['ساختار ماژولار', 'blocks'],
            ['آمادگی برای رشد کسب‌وکار', 'rocket'],
            ['توسعه و نگهداری وب‌سایت', 'wrench'],
        ];

        foreach ($items as $index => [$title, $icon]) {
            StudioService::updateOrCreate(
                ['title' => $title],
                [
                    'icon' => $icon,
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
