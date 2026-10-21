@extends('Home.Layouts.layout')

@section('title', 'طراحی فروشگاه اینترنتی | Moradix Studio')
@section('description', 'طراحی فروشگاه اینترنتی اختصاصی با کدنویسی برای کسب‌وکارهایی که می‌خوان بدون واسطه آنلاین بفروشن. سبد خرید، پرداخت، پنل مدیریت و پشتیبانی.')

@push('styles')
    <link
        rel="stylesheet"
        href="{{ asset('site/css/services/service-page.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('site/css/services/ecommerce-design.css') }}"
    >
@endpush

@section('content')

{{-- Breadcrumb --}}
<nav class="sv-breadcrumb" aria-label="مسیر صفحه">
    <div class="container">
        <ol class="sv-breadcrumb-list">
            <li class="sv-breadcrumb-item">
                <a href="{{ route('services') }}" class="sv-breadcrumb-link">خدمات</a>
                <svg class="sv-breadcrumb-separator" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
                    <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </li>
            <li class="sv-breadcrumb-item">
                <span class="sv-breadcrumb-current" aria-current="page">طراحی فروشگاه اینترنتی</span>
            </li>
        </ol>
    </div>
</nav>

{{-- Hero Section --}}
<section class="sv-hero">
    <div class="container">
        <div class="sv-hero-grid">
            <div class="sv-hero-content">
                <h1 class="sv-hero-title">طراحی فروشگاه اینترنتی</h1>
                <p class="sv-hero-subtitle">فروشگاهی که مال خودته: محصول، سبد خرید، پرداخت و سفارش‌ها، همه‌چیز دست خودت</p>
                <p class="sv-hero-description">
                    برای مغازه‌دارها و برندهایی که می‌خوان بدون واسطه و با هویت خودشون آنلاین بفروشن. فروشگاه اختصاصی با کدنویسی، از مشاوره تا بعد از تحویل کنارتیم.
                </p>
                <div class="sv-hero-actions">
                    <a href="{{ route('contact') }}" class="sv-btn sv-btn-primary">مشاوره‌ی رایگان</a>
                    <a href="{{ route('pricing') }}" class="sv-btn sv-btn-outline">{{-- بعداً: ?tab=store برای باز شدن تب فروشگاه --}}مقایسه‌ی پلن‌ها و تعرفه‌ها</a>
                </div>
                <p class="sv-hero-note">مشاوره رایگانه و تعهدی نداره</p>
            </div>
            <div class="sv-hero-visual">
                {{-- جایگزینی با اسکرین‌شات واقعی از فروشگاه‌های تحویل‌شده --}}
                <div class="sv-store-mockup-wrapper">
                    <div class="sv-store-browser">
                        <div class="sv-store-browser-bar">
                            <span class="sv-store-browser-dot"></span>
                            <span class="sv-store-browser-dot"></span>
                            <span class="sv-store-browser-dot"></span>
                        </div>
                        <div class="sv-store-browser-content">
                            <div class="sv-store-products-grid">
                                <div class="sv-store-product-card">
                                    <div class="sv-store-product-image"></div>
                                    <div class="sv-store-product-info">
                                        <div class="sv-store-product-name"></div>
                                        <div class="sv-store-product-price"></div>
                                        <div class="sv-store-product-btn"></div>
                                    </div>
                                </div>
                                <div class="sv-store-product-card">
                                    <div class="sv-store-product-image"></div>
                                    <div class="sv-store-product-info">
                                        <div class="sv-store-product-name"></div>
                                        <div class="sv-store-product-price"></div>
                                        <div class="sv-store-product-btn"></div>
                                    </div>
                                </div>
                                <div class="sv-store-product-card">
                                    <div class="sv-store-product-image"></div>
                                    <div class="sv-store-product-info">
                                        <div class="sv-store-product-name"></div>
                                        <div class="sv-store-product-price"></div>
                                        <div class="sv-store-product-btn"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sv-store-mobile">
                        <div class="sv-store-mobile-screen">
                            <div class="sv-store-mobile-product">
                                <div class="sv-store-mobile-product-img"></div>
                                <div class="sv-store-mobile-product-name"></div>
                                <div class="sv-store-mobile-product-price"></div>
                                <div class="sv-store-mobile-add-btn">
                                    <span class="sv-store-mobile-cart-icon">
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <path d="M9 11V6C9 4.34315 10.3431 3 12 3C13.6569 3 15 4.34315 15 6V11M3.5 10H20.5L19.5 20H4.5L3.5 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- فروشگاه اختصاصی برای کسب‌وکارت چی عوض می‌کنه؟ --}}
<section class="sv-section sv-section-alt">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">فروشگاه اختصاصی برای کسب‌وکارت چی عوض می‌کنه؟</h2>
        <div class="sv-grid sv-grid-4">
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M8 10H16M8 14H16M6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="sv-feature-text">
                    هر بار مشتری می‌پرسه «موجوده؟ قیمتش چنده؟» باید جداگونه جواب بدی؛ فروشگاه این جواب‌ها رو همیشه آماده داره.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M9 12H15M9 16H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="sv-feature-text">
                    سفارش‌ها از دایرکت و تلگرام و تلفن می‌رسن و قاطی می‌شن؛ توی فروشگاه همه‌ی سفارش‌ها یه‌جا ثبت می‌شن.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 5H7C5.89543 5 5 5.89543 5 7V19C5 20.1046 5.89543 21 7 21H17C18.1046 21 19 20.1046 19 19V7C19 5.89543 18.1046 5 17 5H15M9 5C9 6.10457 9.89543 7 11 7H13C14.1046 7 15 6.10457 15 5M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5M12 12H15M12 16H15M9 12H9.01M9 16H9.01" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="sv-feature-text">
                    موجودی رو یادت می‌ره به‌روز کنی و بعد مجبوری از مشتری عذرخواهی کنی؛ پنل مدیریت موجودی رو دقیق نگه می‌داره.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <p class="sv-feature-text">
                    مارکت‌پلیس‌ها مشتری رو به نام خودشون نگه می‌دارن؛ فروشگاه خودت برند و ارتباطت با مشتری رو مال خودت نگه می‌داره.
                </p>
            </div>
        </div>
        <p class="sv-section-note" data-animate>
            لازم نیست از فنی چیزی بدونی. راه‌اندازی، پرداخت و پنل رو ما انجام می‌دیم و کار با پنل رو یادت می‌دیم.
        </p>
    </div>
</section>

{{-- این خدمت مناسب توئه اگه... --}}
<section class="sv-section">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">این خدمت مناسب توئه اگه...</h2>
        <div class="sv-fit-grid">
            <div class="sv-fit-card sv-fit-card-good" data-animate>
                <h3 class="sv-fit-title">
                    <svg class="sv-fit-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    مناسب توئه
                </h3>
                <ul class="sv-fit-list">
                    <li>محصول فیزیکی یا دیجیتال داری و می‌خوای مستقیم آنلاین بفروشی</li>
                    <li>فروشت الان از پیام، تلفن یا مارکت‌پلیس انجام می‌شه و می‌خوای فروشگاه خودت رو داشته باشی</li>
                    <li>می‌خوای سفارش‌ها، موجودی و محصولات رو خودت از یک پنل ساده مدیریت کنی</li>
                    <li>می‌خوای پرداخت آنلاین امن و ثبت خودکار سفارش داشته باشی</li>
                </ul>
            </div>
            <div class="sv-fit-card sv-fit-card-alt" data-animate>
                <h3 class="sv-fit-title">
                    <svg class="sv-fit-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M13 16H12V12H11M12 8H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    مناسب تو نیست اگه...
                </h3>
                <ul class="sv-fit-list sv-fit-list-alt">
                    <li>
                        فقط می‌خوای کسب‌وکارت رو معرفی کنی و محصولی برای فروش آنلاین نداری
                        <a href="{{ route('services.web-design') }}" class="sv-fit-link">طراحی وب‌سایت مناسب‌تره</a>
                    </li>
                    <li>
                        فروشگاه داری و فقط ظاهرش قدیمیه
                        <a href="#" class="sv-fit-link">{{-- TODO: لینک بعد از ساخت صفحه --}}بازطراحی و ارتقا</a>
                    </li>
                    <li>
                        سیستمی مثل رزرو یا مدیریت مشتری می‌خوای
                        <a href="#" class="sv-fit-link">{{-- TODO: لینک بعد از ساخت صفحه --}}سیستم‌های اختصاصی</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- چرا فروشگاه اختصاصی با کدنویسی؟ --}}
<section class="sv-section sv-section-alt">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">چرا فروشگاه اختصاصی با کدنویسی؟</h2>
        <div class="sv-grid sv-grid-3">
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 12L11 14L15 10M20.618 5.984A11.955 11.955 0 0112 3C7.029 3 3 7.029 3 12s4.029 9 9 9 9-4.029 9-9c0-2.41-.948-4.601-2.491-6.22l-1.815 1.815A8.948 8.948 0 0121 12a9 9 0 11-9-9c1.788 0 3.436.521 4.832 1.42L15 6.253V5h3v3h-1.253l-1.129-1.129z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">فقط چیزی که لازم داری، بدون بار اضافه</h3>
                <p class="sv-feature-text">
                    فروشگاه دقیقاً برای نیاز تو ساخته می‌شه؛ نه قابلیت اضافه و نه محدودیت قالب آماده.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4 7V17C4 18.1046 4.89543 19 6 19H18C19.1046 19 20 18.1046 20 17V7M4 7L6.5 4.5H17.5L20 7M4 7H20M10 11V15M14 11V15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">قابل توسعه</h3>
                <p class="sv-feature-text">
                    هر قابلیت جدیدی لازم شد، اضافه می‌شه. محدود به امکانات قالب یا افزونه نیستی.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 6V4M12 6C10.8954 6 10 6.89543 10 8C10 9.10457 10.8954 10 12 10M12 6C13.1046 6 14 6.89543 14 8C14 9.10457 13.1046 10 12 10M6 18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18C18 16.8954 17.1046 16 16 16H8C6.89543 16 6 16.8954 6 18ZM12 10V16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">پنل مدیریت ساده و فارسی</h3>
                <p class="sv-feature-text">
                    پنل مدیریت برای تو و به زبان فارسی ساخته می‌شه. آموزش کامل کار با اون رو هم می‌دیم.
                </p>
            </div>
        </div>
        <p class="sv-section-note" data-animate>
            اگه نیازت ساده‌تر از اینه و راه ساده‌تری وجود داره، توی مشاوره صادقانه می‌گیم.
        </p>
    </div>
</section>

{{-- دو پلن به‌صورت خلاصه --}}
<section class="sv-section">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">دو پلن برای شروع و رشد فروشگاهت</h2>
        <p class="sv-section-subtitle">بدون قیمت‌گذاری پیچیده. پلن رو انتخاب می‌کنی، هزینه رو قبل از شروع می‌بینی.</p>
        <div class="sv-pricing-grid">
            <div class="sv-pricing-card" data-animate>
                <h3 class="sv-pricing-title">پایه</h3>
                <p class="sv-pricing-description">مناسب شروع فروش آنلاین</p>
                <ul class="sv-pricing-features">
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        فروشگاه اختصاصی با طراحی بر پایه‌ی کیت Moradix
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        دسته‌بندی و صفحه‌ی محصول
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        سبد خرید، تسویه و یک درگاه پرداخت
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        پنل مدیریت محصول، سفارش و موجودی
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        ۱ ماه پشتیبانی فنی رایگان
                    </li>
                </ul>
            </div>
            <div class="sv-pricing-card sv-pricing-card-featured" data-animate>
                <span class="sv-pricing-badge">پیشنهاد ما</span>
                <h3 class="sv-pricing-title">حرفه‌ای</h3>
                <p class="sv-pricing-description">مناسب فروشگاه در حال رشد</p>
                <ul class="sv-pricing-features">
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        طراحی اختصاصی فروشگاه و صفحه‌ی محصول
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        فیلتر و جستجوی پیشرفته
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        تنوع محصول (رنگ، سایز و...)
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        پیامک سفارش، کمپین و کد تخفیف
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        سئوی دسته‌بندی‌ها و صفحات محصول
                    </li>
                    <li>
                        <svg class="sv-pricing-check" width="20" height="20" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        ۲ ماه پشتیبانی فنی رایگان
                    </li>
                </ul>
            </div>
        </div>
        <div class="sv-section-cta" data-animate>
            <a href="{{ route('pricing') }}" class="sv-btn sv-btn-outline">مقایسه‌ی کامل پلن‌ها و تعرفه‌ها</a>
        </div>
    </div>
</section>

{{-- چی تحویل می‌گیری؟ --}}
<section class="sv-section sv-section-alt">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">چی تحویل می‌گیری؟</h2>
        <div class="sv-grid sv-grid-3">
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 18H12.01M8 21H16C17.1046 21 18 20.1046 18 19V5C18 3.89543 17.1046 3 16 3H8C6.89543 3 6 3.89543 6 5V19C6 20.1046 6.89543 21 8 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">فروشگاه ریسپانسیو</h3>
                <p class="sv-feature-text">
                    فروشگاه روی موبایل، تبلت و دسکتاپ کامل کار می‌کنه و قابل لمسه.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M10.325 4.317C10.751 2.561 13.249 2.561 13.675 4.317C13.7389 4.5808 13.8642 4.82578 14.0407 5.032C14.2172 5.23822 14.4399 5.39985 14.6907 5.50375C14.9414 5.60764 15.2132 5.65085 15.4838 5.62987C15.7544 5.60889 16.0162 5.5243 16.248 5.383C17.791 4.443 19.558 6.209 18.618 7.753C18.4769 7.98466 18.3924 8.24634 18.3715 8.51677C18.3506 8.78721 18.3938 9.05877 18.4975 9.30938C18.6013 9.55999 18.7627 9.78258 18.9687 9.95905C19.1747 10.1355 19.4194 10.2609 19.683 10.325C21.439 10.751 21.439 13.249 19.683 13.675C19.4192 13.7389 19.1742 13.8642 18.968 14.0407C18.7618 14.2172 18.6001 14.4399 18.4963 14.6907C18.3924 14.9414 18.3491 15.2132 18.3701 15.4838C18.3911 15.7544 18.4757 16.0162 18.617 16.248C19.557 17.791 17.791 19.558 16.247 18.618C16.0153 18.4769 15.7537 18.3924 15.4832 18.3715C15.2128 18.3506 14.9412 18.3938 14.6906 18.4975C14.44 18.6013 14.2174 18.7627 14.0409 18.9687C13.8645 19.1747 13.7391 19.4194 13.675 19.683C13.249 21.439 10.751 21.439 10.325 19.683C10.2611 19.4192 10.1358 19.1742 9.95929 18.968C9.7828 18.7618 9.56011 18.6001 9.30935 18.4963C9.05859 18.3924 8.78683 18.3491 8.51621 18.3701C8.24559 18.3911 7.98375 18.4757 7.752 18.617C6.209 19.557 4.442 17.791 5.382 16.247C5.5231 16.0153 5.60755 15.7537 5.62848 15.4832C5.64942 15.2128 5.60624 14.9412 5.50247 14.6906C5.3987 14.44 5.23726 14.2174 5.03127 14.0409C4.82529 13.8645 4.58056 13.7391 4.317 13.675C2.561 13.249 2.561 10.751 4.317 10.325C4.5808 10.2611 4.82578 10.1358 5.032 9.95929C5.23822 9.7828 5.39985 9.56011 5.50375 9.30935C5.60764 9.05859 5.65085 8.78683 5.62987 8.51621C5.60889 8.24559 5.5243 7.98375 5.383 7.752C4.443 6.209 6.209 4.442 7.753 5.382C8.753 5.99 10.049 5.452 10.325 4.317Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">پنل مدیریت</h3>
                <p class="sv-feature-text">
                    پنل فارسی و ساده برای مدیریت محصول، سفارش، موجودی و تنظیمات.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M3 10H21M7 15H8M12 15H13M6 19H18C19.1046 19 20 18.1046 20 17V7C20 5.89543 19.1046 5 18 5H6C4.89543 5 4 5.89543 4 7V17C4 18.1046 4.89543 19 6 19Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">اتصال به درگاه پرداخت</h3>
                <p class="sv-feature-text">
                    اتصال به درگاه پرداخت معتبر و تنظیم روش‌های ارسال مناسب کسب‌وکارت.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 6.253V13L16 15M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">آموزش کار با پنل</h3>
                <p class="sv-feature-text">
                    کامل آموزش می‌بینی چطور محصول اضافه کنی، سفارش مدیریت کنی و موجودی به‌روز کنی.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 12H15M9 16H15M17 21H7C5.89543 21 5 20.1046 5 19V5C5 3.89543 5.89543 3 7 3H12.5858C12.851 3 13.1054 3.10536 13.2929 3.29289L18.7071 8.70711C18.8946 8.89464 19 9.149 19 9.41421V19C19 20.1046 18.1046 21 17 21Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">قرارداد و زمان‌بندی شفاف</h3>
                <p class="sv-feature-text">
                    قرارداد مکتوب، محدوده‌ی کار مشخص و زمان‌بندی واقع‌گرایانه قبل از شروع.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M18.364 5.636L16.95 7.05M7.05 16.95L5.636 18.364M16.95 16.95L18.364 18.364M5.636 5.636L7.05 7.05M12 3V5M12 19V21M3 12H5M19 12H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">پشتیبانی فنی رایگان</h3>
                <p class="sv-feature-text">
                    بعد از تحویل، برای رفع مشکلات فنی و سوال‌هایی که داری پشتیبانی می‌کنیم.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- قبل از شروع چی لازم داری؟ --}}
<section class="sv-section">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">قبل از شروع چی لازم داری؟</h2>
        <div class="sv-grid sv-grid-3">
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4 16L8.586 11.414C8.96106 11.0391 9.46967 10.8284 10 10.8284C10.5303 10.8284 11.0389 11.0391 11.414 11.414L16 16M14 14L15.586 12.414C15.9611 12.0391 16.4697 11.8284 17 11.8284C17.5303 11.8284 18.0389 12.0391 18.414 12.414L20 14M14 8H14.01M6 20H18C19.1046 20 20 19.1046 20 18V6C20 4.89543 19.1046 4 18 4H6C4.89543 4 4 4.89543 4 6V18C4 19.1046 4.89543 20 6 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">اطلاعات و عکس محصولات</h3>
                <p class="sv-feature-text">
                    اسم، توضیح، قیمت و عکس محصولاتت. اگه عکس حرفه‌ای نداری، توی مشاوره راهنمایی‌ت می‌کنیم.
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M9 12H15M9 16H15M9 8H15M7 20H17C18.1046 20 19 19.1046 19 18V6C19 4.89543 18.1046 4 17 4H7C5.89543 4 5 4.89543 5 6V18C5 19.1046 5.89543 20 7 20Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">مدارک لازم برای درگاه پرداخت</h3>
                <p class="sv-feature-text">
                    برای فعال شدن درگاه پرداخت معمولاً مدارک کسب‌وکار لازمه. توی مشاوره بهت می‌گیم چی آماده کنی و مسیرش چیه.
                    {{-- TODO: دقیق‌ترین مدارک رو خودم تأیید می‌کنم --}}
                </p>
            </div>
            <div class="sv-feature-card" data-animate>
                <div class="sv-feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M5 8H19M5 8C3.89543 8 3 8.89543 3 10V18C3 19.1046 3.89543 20 5 20H19C20.1046 20 21 19.1046 21 18V10C21 8.89543 20.1046 8 19 8M5 8L9.5 4M19 8L14.5 4M10 14H14" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-feature-title">روش ارسال</h3>
                <p class="sv-feature-text">
                    تصمیم می‌گیریم محصولاتت چطور و با چه روشی ارسال بشن و هزینه‌ش چطور محاسبه بشه.
                </p>
            </div>
        </div>
        <div class="sv-note-box" data-animate>
            <svg class="sv-note-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M13 16H12V12H11M12 8H12.01M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>
                <strong>جدا حساب می‌شه:</strong> دامنه و هاست، عکاسی و متن محصولات، اعتبار پیامک، کارمزد درگاه پرداخت.
            </p>
        </div>
    </div>
</section>

{{-- مراحل کار --}}
<section class="sv-section sv-section-alt">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">مراحل کار</h2>
        <div class="sv-timeline">
            <div class="sv-timeline-item" data-animate>
                <div class="sv-timeline-marker">
                    <span class="sv-timeline-number">۱</span>
                </div>
                <div class="sv-timeline-content">
                    <h3 class="sv-timeline-title">نیازسنجی و مشاوره‌ی رایگان</h3>
                    <p class="sv-timeline-text">
                        درباره‌ی فروشگاه، محصولات و نیازهات صحبت می‌کنیم. راه‌حل مناسب و واقع‌بینانه رو پیشنهاد می‌دیم.
                    </p>
                </div>
            </div>
            <div class="sv-timeline-item" data-animate>
                <div class="sv-timeline-marker">
                    <span class="sv-timeline-number">۲</span>
                </div>
                <div class="sv-timeline-content">
                    <h3 class="sv-timeline-title">تعیین محدوده و هزینه</h3>
                    <p class="sv-timeline-text">
                        محدوده‌ی کار، پلن و هزینه رو شفاف مشخص می‌کنیم. قبل از شروع، همه‌چی رو می‌دونی.
                    </p>
                </div>
            </div>
            <div class="sv-timeline-item" data-animate>
                <div class="sv-timeline-marker">
                    <span class="sv-timeline-number">۳</span>
                </div>
                <div class="sv-timeline-content">
                    <h3 class="sv-timeline-title">طراحی و توسعه</h3>
                    <p class="sv-timeline-text">
                        فروشگاه و پنل مدیریت رو بر اساس نیازت می‌سازیم. در طول کار در جریان پیشرفت هستی.
                    </p>
                </div>
            </div>
            <div class="sv-timeline-item" data-animate>
                <div class="sv-timeline-marker">
                    <span class="sv-timeline-number">۴</span>
                </div>
                <div class="sv-timeline-content">
                    <h3 class="sv-timeline-title">تست و تحویل</h3>
                    <p class="sv-timeline-text">
                        فروشگاه رو تست می‌کنیم، آموزش کار با پنل رو می‌دیم و تحویل می‌گیری.
                    </p>
                </div>
            </div>
        </div>
        <p class="sv-section-note" data-animate>
            <a href="{{ route('home') }}#process" class="sv-text-link">جزئیات بیشتر در بخش فرآیند کار</a>
        </p>
    </div>
</section>

{{-- نمونه‌کار مرتبط --}}
<section class="sv-section">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">نمونه‌کارهای مرتبط</h2>
        <div class="sv-portfolio-grid">
            {{-- TODO DYNAMIC: فروشگاه‌های واقعی تحویل‌شده اینجا بیان --}}
            <a href="#" class="sv-portfolio-card" data-animate>
                <div class="sv-portfolio-image">
                    <div class="sv-portfolio-placeholder">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                            <path d="M3 3H21V21H3V3Z M7 7H17V17H7V7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="sv-portfolio-info">
                    <h3 class="sv-portfolio-title">نام فروشگاه</h3>
                    <p class="sv-portfolio-type">فروشگاه اینترنتی</p>
                    <div class="sv-portfolio-tags">
                        <span class="sv-tag">Laravel</span>
                        <span class="sv-tag">طراحی اختصاصی</span>
                    </div>
                </div>
            </a>
            <a href="#" class="sv-portfolio-card" data-animate>
                <div class="sv-portfolio-image">
                    <div class="sv-portfolio-placeholder">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                            <path d="M3 3H21V21H3V3Z M7 7H17V17H7V7Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="sv-portfolio-info">
                    <h3 class="sv-portfolio-title">نام فروشگاه دوم</h3>
                    <p class="sv-portfolio-type">فروشگاه اینترنتی</p>
                    <div class="sv-portfolio-tags">
                        <span class="sv-tag">Laravel</span>
                        <span class="sv-tag">پنل مدیریت</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="sv-section-cta" data-animate>
            <a href="{{ route('home') }}#portfolio" class="sv-btn sv-btn-outline">مشاهده‌ی همه‌ی نمونه‌کارها</a>
        </div>
    </div>
</section>

{{-- سوالات متداول --}}
<section class="sv-section sv-section-alt">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">سوالات متداول</h2>
        <div class="sv-faq">
            <div class="sv-faq-item" data-animate>
                <button class="sv-faq-question" aria-expanded="false">
                    <span>چند محصول می‌تونم داشته باشم؟</span>
                    <svg class="sv-faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="sv-faq-answer">
                    <p>
                        تعداد محصول محدودیت خاصی نداره. در مشاوره بر اساس حجم محصولاتت، ساختار مناسب رو انتخاب می‌کنیم تا مدیریت راحت باشه و فروشگاه سریع کار کنه.
                        {{-- TODO: تأیید محدودیت‌های فنی و توصیه برای حجم بالا --}}
                    </p>
                </div>
            </div>
            <div class="sv-faq-item" data-animate>
                <button class="sv-faq-question" aria-expanded="false">
                    <span>از کدوم درگاه پرداخت استفاده می‌شه؟</span>
                    <svg class="sv-faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="sv-faq-answer">
                    <p>
                        بر اساس نیازت و مدارکت، توی مشاوره درگاه پرداخت مناسب (زرین‌پال، پی‌دات‌آی‌آر یا سایر درگاه‌ها) رو انتخاب می‌کنیم و راه‌اندازیش رو کمکت می‌کنیم.
                        {{-- TODO: لیست دقیق درگاه‌های پشتیبانی‌شده --}}
                    </p>
                </div>
            </div>
            <div class="sv-faq-item" data-animate>
                <button class="sv-faq-question" aria-expanded="false">
                    <span>سفارش‌ها و موجودی رو خودم مدیریت می‌کنم؟</span>
                    <svg class="sv-faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="sv-faq-answer">
                    <p>
                        بله، از پنل مدیریت که برات می‌سازیم. محصول اضافه می‌کنی، موجودی به‌روز می‌کنی، سفارش‌ها رو می‌بینی و وضعیتشون رو تغییر می‌دی. کار با اون رو بهت آموزش می‌دیم.
                    </p>
                </div>
            </div>
            <div class="sv-faq-item" data-animate>
                <button class="sv-faq-question" aria-expanded="false">
                    <span>هزینه چطور مشخص می‌شه؟</span>
                    <svg class="sv-faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="sv-faq-answer">
                    <p>
                        بر اساس پلنی که انتخاب می‌کنی و قابلیت‌هایی که لازم داری. تعرفه‌های دو پلن «پایه» و «حرفه‌ای» رو در
                        <a href="{{ route('pricing') }}" class="sv-text-link">صفحه‌ی تعرفه</a>
                        می‌بینی. توی مشاوره هزینه‌ی دقیق رو قبل از شروع مشخص می‌کنیم.
                    </p>
                </div>
            </div>
            <div class="sv-faq-item" data-animate>
                <button class="sv-faq-question" aria-expanded="false">
                    <span>دامنه و هاست شامل می‌شه؟</span>
                    <svg class="sv-faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div class="sv-faq-answer">
                    <p>
                        دامنه و هاست جدا حساب می‌شن و مستقیم به ارائه‌دهنده پرداخت می‌کنی. در انتخاب و راه‌اندازیشون کمکت می‌کنیم و توصیه‌های مناسب بودجه و نیازت رو می‌دیم.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- خدمات مرتبط --}}
<section class="sv-section">
    <div class="container">
        <h2 class="sv-section-title sv-section-title-center">خدمات مرتبط</h2>
        <div class="sv-grid sv-grid-2">
            <a href="#" class="sv-related-card" data-animate>
                {{-- TODO: لینک بعد از ساخت صفحه --}}
                <div class="sv-related-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-related-title">سئو و بهینه‌سازی</h3>
                <p class="sv-related-description">
                    فروشگاهت رو برای موتورهای جستجو بهینه کن تا مشتری بیشتری پیدات کنن.
                </p>
            </a>
            <a href="#" class="sv-related-card" data-animate>
                {{-- TODO: لینک بعد از ساخت صفحه --}}
                <div class="sv-related-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 6V4M12 6C10.8954 6 10 6.89543 10 8C10 9.10457 10.8954 10 12 10M12 6C13.1046 6 14 6.89543 14 8C14 9.10457 13.1046 10 12 10M6 18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18C18 16.8954 17.1046 16 16 16H8C6.89543 16 6 16.8954 6 18ZM12 10V16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="sv-related-title">سیستم‌های اختصاصی</h3>
                <p class="sv-related-description">
                    اگه نیازی خاص داری که فراتر از فروشگاه معمولیه، سیستم اختصاصی برات می‌سازیم.
                </p>
            </a>
        </div>
    </div>
</section>

{{-- دعوت پایانی --}}
<section class="sv-section sv-cta-section">
    <div class="container">
        <div class="sv-cta-content" data-animate>
            <h2 class="sv-cta-title">درباره‌ی فروشگاهت صحبت کنیم؟</h2>
            <p class="sv-cta-text">مشاوره‌ی اولیه رایگانه و تعهدی نداره. محصولاتت و نیازهات رو می‌شنویم و راه‌حل مناسب رو پیشنهاد می‌دیم.</p>
            <a href="{{ route('contact') }}" class="sv-btn sv-btn-light">مشاوره‌ی رایگان</a>
        </div>
    </div>
</section>

{{-- نوار چسبیده‌ی موبایل --}}
<div class="sv-mobile-sticky-bar">
    <div class="sv-mobile-sticky-content">
        <a href="{{ route('contact') }}" class="sv-btn sv-btn-primary sv-btn-full">مشاوره‌ی رایگان</a>
        <a href="{{ route('pricing') }}" class="sv-btn sv-btn-outline sv-btn-full">مقایسه‌ی پلن‌ها</a>
    </div>
</div>

@endsection

@push('scripts')
    <script
        src="{{ asset('site/js/services/ecommerce-design.js') }}"
        defer
    ></script>
@endpush
