<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\FeatureCategory;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'قابلیت‌ها و امکانات',
                'slug' => 'functionality',
                'description' => 'امکانات اصلی و کاربردی پروژه',
                'sort_order' => 1,
                'features' => [
                    ['name' => 'ثبت‌نام و ورود کاربران', 'slug' => 'user-authentication'],
                    ['name' => 'پنل کاربری اختصاصی', 'slug' => 'user-dashboard'],
                    ['name' => 'سیستم نقش‌ها و دسترسی‌ها', 'slug' => 'roles-permissions'],
                    ['name' => 'جستجوی پیشرفته', 'slug' => 'advanced-search'],
                    ['name' => 'فیلتر و مرتب‌سازی', 'slug' => 'filtering-sorting'],
                    ['name' => 'سیستم نظرات و امتیازدهی', 'slug' => 'reviews-ratings'],
                    ['name' => 'سیستم علاقه‌مندی‌ها', 'slug' => 'wishlist'],
                    ['name' => 'سیستم رزرو و نوبت‌دهی', 'slug' => 'booking-system'],
                    ['name' => 'سبد خرید', 'slug' => 'shopping-cart'],
                    ['name' => 'مدیریت سفارش‌ها', 'slug' => 'order-management'],
                    ['name' => 'کد تخفیف و پیشنهاد ویژه', 'slug' => 'discount-coupons'],
                    ['name' => 'سیستم اشتراک و پرداخت دوره‌ای', 'slug' => 'subscriptions'],
                ],
            ],
            [
                'name' => 'ظاهر و تجربه کاربری',
                'slug' => 'appearance',
                'description' => 'طراحی رابط کاربری و تجربه استفاده',
                'sort_order' => 2,
                'features' => [
                    ['name' => 'طراحی اختصاصی UI/UX', 'slug' => 'custom-ui-ux'],
                    ['name' => 'طراحی کاملاً واکنش‌گرا', 'slug' => 'responsive-design'],
                    ['name' => 'حالت روشن و تاریک', 'slug' => 'dark-light-mode'],
                    ['name' => 'انیمیشن و تعاملات پویا', 'slug' => 'animations-interactions'],
                    ['name' => 'طراحی اختصاصی موبایل', 'slug' => 'mobile-first-design'],
                    ['name' => 'دسترس‌پذیری رابط کاربری', 'slug' => 'accessibility'],
                ],
            ],
            [
                'name' => 'زبان و بومی‌سازی',
                'slug' => 'localization',
                'description' => 'قابلیت‌های زبان، تاریخ و استانداردهای محلی',
                'sort_order' => 3,
                'features' => [
                    ['name' => 'پشتیبانی از چند زبان', 'slug' => 'multilingual'],
                    ['name' => 'تقویم شمسی', 'slug' => 'persian-calendar'],
                    ['name' => 'پشتیبانی از تاریخ میلادی', 'slug' => 'gregorian-calendar'],
                    ['name' => 'پشتیبانی از زبان فارسی و RTL', 'slug' => 'persian-rtl'],
                    ['name' => 'قیمت‌گذاری و نمایش تومان', 'slug' => 'toman-currency'],
                    ['name' => 'مدیریت ترجمه محتوا', 'slug' => 'translation-management'],
                ],
            ],
            [
                'name' => 'فنی و عملکرد',
                'slug' => 'technical',
                'description' => 'سرعت، معماری و کیفیت فنی پروژه',
                'sort_order' => 4,
                'features' => [
                    ['name' => 'بهینه‌سازی سرعت سایت', 'slug' => 'performance-optimization'],
                    ['name' => 'سیستم کش', 'slug' => 'caching-system'],
                    ['name' => 'بارگذاری تنبل تصاویر', 'slug' => 'lazy-loading'],
                    ['name' => 'API اختصاصی', 'slug' => 'custom-api'],
                    ['name' => 'معماری ماژولار', 'slug' => 'modular-architecture'],
                    ['name' => 'بهینه‌سازی نسخه موبایل', 'slug' => 'mobile-optimization'],
                    ['name' => 'بهینه‌سازی پایگاه داده', 'slug' => 'database-optimization'],
                ],
            ],
            [
                'name' => 'مدیریت و پنل ادمین',
                'slug' => 'management',
                'description' => 'امکانات مدیریتی و کنترل محتوای پروژه',
                'sort_order' => 5,
                'features' => [
                    ['name' => 'پنل مدیریت اختصاصی', 'slug' => 'custom-admin-panel'],
                    ['name' => 'مدیریت کاربران', 'slug' => 'user-management'],
                    ['name' => 'مدیریت محتوا و صفحات', 'slug' => 'content-management'],
                    ['name' => 'مدیریت رسانه و فایل‌ها', 'slug' => 'media-management'],
                    ['name' => 'گزارش‌گیری و آمار', 'slug' => 'reports-analytics'],
                    ['name' => 'داشبورد آماری', 'slug' => 'analytics-dashboard'],
                    ['name' => 'مدیریت فعالیت مدیران', 'slug' => 'admin-activity-log'],
                ],
            ],
            [
                'name' => 'امنیت و پشتیبان‌گیری',
                'slug' => 'security',
                'description' => 'امکانات امنیتی و حفاظت از اطلاعات',
                'sort_order' => 6,
                'features' => [
                    ['name' => 'اعتبارسنجی و ایمن‌سازی ورودی‌ها', 'slug' => 'input-validation-security'],
                    ['name' => 'محدودسازی درخواست‌ها', 'slug' => 'rate-limiting'],
                    ['name' => 'احراز هویت دومرحله‌ای', 'slug' => 'two-factor-authentication'],
                    ['name' => 'پشتیبان‌گیری خودکار', 'slug' => 'automatic-backups'],
                    ['name' => 'ثبت رویدادهای امنیتی', 'slug' => 'security-logging'],
                ],
            ],
            [
                'name' => 'سئو و بازاریابی',
                'slug' => 'seo',
                'description' => 'قابلیت‌های بهبود دیده‌شدن و بازاریابی',
                'sort_order' => 7,
                'features' => [
                    ['name' => 'مدیریت متا تگ‌ها', 'slug' => 'meta-tags-management'],
                    ['name' => 'تولید نقشه سایت XML', 'slug' => 'xml-sitemap'],
                    ['name' => 'مدیریت آدرس‌های canonical', 'slug' => 'canonical-management'],
                    ['name' => 'داده‌های ساختاریافته', 'slug' => 'structured-data'],
                    ['name' => 'اتصال به گوگل آنالیتیکس', 'slug' => 'google-analytics'],
                    ['name' => 'اتصال به سرچ کنسول', 'slug' => 'google-search-console'],
                    ['name' => 'مدیریت ریدایرکت‌ها', 'slug' => 'redirect-management'],
                ],
            ],
            [
                'name' => 'بازطراحی و ارتقا',
                'slug' => 'redesign',
                'description' => 'بهبود و توسعه پروژه‌های موجود',
                'sort_order' => 8,
                'features' => [
                    ['name' => 'بازطراحی رابط کاربری', 'slug' => 'ui-redesign'],
                    ['name' => 'ارتقای پنل مدیریت', 'slug' => 'admin-panel-upgrade'],
                    ['name' => 'بهینه‌سازی ساختار کد', 'slug' => 'code-refactoring'],
                    ['name' => 'مهاجرت از وردپرس', 'slug' => 'wordpress-migration'],
                    ['name' => 'ارتقای ساختار پایگاه داده', 'slug' => 'database-upgrade'],
                    ['name' => 'حفظ آدرس‌های قبلی سایت', 'slug' => 'url-preservation'],
                ],
            ],
            [
                'name' => 'اتصال به سرویس‌ها',
                'slug' => 'integration',
                'description' => 'اتصال به درگاه‌ها و سرویس‌های بیرونی',
                'sort_order' => 9,
                'features' => [
                    ['name' => 'پرداخت آنلاین', 'slug' => 'online-payment'],
                    ['name' => 'اتصال به درگاه بانکی', 'slug' => 'bank-gateway'],
                    ['name' => 'پرداخت کارت‌به‌کارت', 'slug' => 'card-to-card-payment'],
                    ['name' => 'ارسال پیامک', 'slug' => 'sms-sending'],
                    ['name' => 'ارسال ایمیل خودکار', 'slug' => 'automated-emails'],
                    ['name' => 'اتصال به سرویس نقشه', 'slug' => 'map-integration'],
                    ['name' => 'اتصال به سرویس‌های خارجی از طریق API', 'slug' => 'external-api-integration'],
                    ['name' => 'اتصال به سیستم حسابداری', 'slug' => 'accounting-integration'],
                    ['name' => 'اتصال به CRM', 'slug' => 'crm-integration'],
                ],
            ],
        ];

        foreach ($categories as $categoryData) {
            $features = $categoryData['features'];

            unset($categoryData['features']);

            $category = FeatureCategory::updateOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );

            foreach ($features as $index => $featureData) {
                Feature::updateOrCreate(
                    ['slug' => $featureData['slug']],
                    [
                        'feature_category_id' => $category->id,
                        'name' => $featureData['name'],
                        'sort_order' => $index + 1,
                        'is_active' => true,
                    ]
                );
            }
        }
    }
}
