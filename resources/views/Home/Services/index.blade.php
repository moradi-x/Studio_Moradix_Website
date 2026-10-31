{{-- resources/views/Home/services.blade.php --}}

@extends('Home.Layouts.layout')

@section('title', 'خدمات | Moradix Studio')

@section('description',
    'خدمات توسعه وب Moradix Studio: طراحی وب‌سایت، فروشگاه اینترنتی، ارتقای سایت وردپرسی، بازطراحی
    UI/UX، سئو و بهینه‌سازی، و سیستم‌های اختصاصی با Laravel')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('site/css/services/services-index.css') }}">
    @endpush

@section('content')

    {{-- Breadcrumb --}}
    <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
        <div class="container">
            <ol class="sv-breadcrumb-list">
                <li class="sv-breadcrumb-item">
                    <a href="{{ route('home') }}">صفحه اصلی</a>
                </li>

                <li class="sv-breadcrumb-item" aria-current="page">
                    خدمات
                </li>
            </ol>
        </div>
    </nav>

    {{-- Services Index Hero --}}
    <section class="si-hero" aria-labelledby="si-hero-title">
        <div class="container">

            <div class="si-hero-inner">

                {{-- Hero Content --}}
                <div class="si-hero-content">
                    <h1 class="si-hero-title" id="si-hero-title">
                        کسب‌وکارت آماده‌ی قدم بعدیه؛
                        <span>وب‌سایتت چطور؟</span>
                    </h1>

                    <p class="si-hero-description">
                        از طراحی وب‌سایت و فروشگاه اینترنتی تا بازطراحی،
                        سیستم‌های اختصاصی و سئو؛ کمک می‌کنیم حضور آنلاین
                        کسب‌وکارت رو متناسب با نیازها و اهدافت توسعه بدی.
                    </p>

                    <div class="si-hero-actions">
                        <a href="#services" class="btn btn-primary">
                            مشاهده خدمات
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M19 12H5" />
                                <path d="m12 19-7-7 7-7" />
                            </svg>
                        </a>

                        <a href="{{ route('contact') }}" class="btn btn-outline">
                            مشاوره پروژه
                        </a>
                    </div>



                </div>

                {{-- Hero Visual --}}
                <div class="si-hero-visual" aria-hidden="true">

                    <div class="si-hero-glow"></div>

                    <div class="si-hero-orbit si-hero-orbit-one"></div>
                    <div class="si-hero-orbit si-hero-orbit-two"></div>

                    <div class="si-hero-panel">

                        <div class="si-hero-panel-header">
                            <span class="si-hero-panel-label">
                                STUDIO MORADIX
                            </span>

                        </div>

                        <div class="si-hero-panel-heading">
                            <span>راهکارهای دیجیتال</span>
                            <span class="si-hero-panel-line"></span>
                        </div>

                        <div class="si-hero-service-list">

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="16" rx="2" />
                                        <path d="M3 9h18M8 4v5" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    طراحی وب‌سایت
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 2-1.6L22 7H6" />
                                        <circle cx="10" cy="20" r="1" />
                                        <circle cx="18" cy="20" r="1" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    فروشگاه اینترنتی
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="10.5" cy="10.5" r="6.5" />
                                        <path d="m16 16 5 5M8 11l2 2 3-4" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    بهینه‌سازی و سئو
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 7h16M7 4v16M4 17h16" />
                                        <path d="m14 10 3 3-3 3" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    بازطراحی و ارتقای سایت
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="4" y="4" width="6" height="6" rx="1" />
                                        <rect x="14" y="4" width="6" height="6" rx="1" />
                                        <rect x="4" y="14" width="6" height="6" rx="1" />
                                        <rect x="14" y="14" width="6" height="6" rx="1" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    سیستم‌های اختصاصی
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                        </div>

                        <div class="si-hero-panel-footer">
                            <span class="si-hero-footer-mark"></span>
                            <span>از ایده تا راهکار دیجیتال</span>
                        </div>

                    </div>

                    <div class="si-hero-floating si-hero-floating-top">
                        <span class="si-hero-floating-icon">✳</span>
                        <span>طراحی هدفمند</span>
                    </div>

                    <div class="si-hero-floating si-hero-floating-bottom">
                        <span class="si-hero-floating-check">✓</span>
                        <span>متناسب با نیاز کسب‌وکار</span>
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- Services Section --}}
    <section class="section services" id="services">
        <div class="container">

            <div class="si-services-heading">


                <h2 class="si-services-title" id="si-services-title">
                    چه چیزی برای رشد کسب‌وکارت نیاز داری؟
                </h2>
            </div>
            <div class="services-grid">

                {{-- Shared Background for All Services --}}
                <div class="services-featured" id="services-featured">

                    {{-- Popular Services Header --}}
                    <div class="services-featured-header">


                        <h2>خدمات پرفروش</h2>

                        <p>
                            دو راهکار محبوب برای شروع حرفه‌ای
                            کسب‌وکار شما در فضای وب
                        </p>
                    </div>

                    {{-- Primary Services --}}
                    <div class="services-row services-row-primary">

                        {{-- Website Design --}}
                        <article class="service-card service-card-primary">

                            <div class="service-card-top">
                                <span class="service-number">1</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="16" rx="2" />
                                        <path d="M3 9h18" />
                                        <path d="M7 6.5h.01" />
                                        <path d="M10 6.5h.01" />
                                        <path d="m9 14 2 2 4-4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>طراحی وب‌سایت</h3>

                                <p>اولین برخورد مشتری با برندت، اتفاقی نیست.

                                    سایتی بساز که در نگاه اول اعتماد ایجاد کنه و در هر دستگاه، حرفه‌ای و روان کار کنه.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.web-design') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- Ecommerce Design --}}
                        <article class="service-card service-card-primary">

                            <div class="service-card-top">
                                <span class="service-number">2</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M3 3h2l2.4 11.4a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 2-1.6L21 7H6" />
                                        <circle cx="10" cy="20" r="1" />
                                        <circle cx="18" cy="20" r="1" />
                                        <path d="M12 10h4" />
                                        <path d="M14 8v4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>طراحی فروشگاه اینترنتی</h3>

                                <p> محصولاتت رو آنلاین بفروش؛ با فروشگاهی منظم، فرایند خرید ساده و مدیریت آسان سفارش‌ها.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.ecommerce') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                    </div>

                    {{-- Specialized Services Header --}}
                    <div class="services-specialized-header">


                        <h2>خدمات تخصصی ما </h2>

                        <p>
                            از ارتقای سایت فعلی تا توسعه سیستم‌های اختصاصی
                            و افزایش دیده‌شدن کسب‌وکار شما در گوگل
                        </p>
                    </div>

                    {{-- Secondary Services --}}
                    <div class="services-row services-row-secondary">

                        {{-- Redesign Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">3</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M12 20h9" />
                                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z" />
                                        <path d="m15 5 4 4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>بازطراحی و ارتقای سایت</h3>

                                <p>سایت قدیمی، نباید جلوی رشدت رو بگیره.

                                    ظاهر، سرعت و تجربه کاربری سایتت رو ارتقا بده؛ بدون بازسازی غیرضروری از صفر.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.redesign') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- Custom Systems Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">4</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                        <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                        <path d="M10 6.5h4" />
                                        <path d="M17.5 10v4" />
                                        <path d="M10 17.5h4" />
                                        <path d="M6.5 10v4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>سیستم‌های اختصاصی</h3>

                                <p>سامانه و پنل مدیریتی متناسب با فرایندهای کسب‌وکارت توسعه بده و کارها رو هوشمندانه‌تر پیش
                                    ببر.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.custom-systems') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- SEO Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">5</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="11" cy="11" r="7" />
                                        <path d="m20 20-4-4" />
                                        <path d="M8 13V9" />
                                        <path d="M11 13V7" />
                                        <path d="M14 13v-2" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>سئو سایت</h3>

                                <p>وقتی مشتری دنبالت می‌گرده، پیدات می‌کنه؟

                                    با بهینه‌سازی اصولی سایت، شانس دیده‌شدن در جست‌وجوهای مرتبط گوگل رو بیشتر کن.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.seo') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                    </div>

                </div>
                {{-- End Shared Background --}}

            </div>
        </div>
    </section>


    {{-- Services Process --}}
    <section class="si-process" id="services-process">
        <div class="container">

            <div class="si-process-heading">
                <span class="si-process-eyebrow">روند همکاری</span>

                <h2 class="si-process-title">
                    از شناخت نیاز تا اجرای راهکار
                </h2>

                <p class="si-process-description">
                    هر پروژه مسیر خودش رو داره؛ اما هدف ما در تمام مراحل،
                    رسیدن به راهکاری متناسب با نیاز واقعی کسب‌وکار شماست.
                </p>
            </div>

            <div class="si-process-grid">

                {{-- Step 01 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="7" />
                                <path d="m16 16 4 4" />
                                <path d="M8.5 11h5M11 8.5v5" />
                            </svg>
                        </span>

                        <span class="si-process-number">1</span>
                    </div>

                    <h3>شناخت نیازها</h3>

                    <p>
                        بررسی هدف پروژه، نیازهای کسب‌وکار و انتظارات شما
                        از راهکار موردنظر.
                    </p>
                </div>

                {{-- Step 02 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7Z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                        </span>

                        <span class="si-process-number">2</span>
                    </div>

                    <h3>برنامه‌ریزی پروژه</h3>

                    <p>
                        تعیین محدوده کار، اولویت‌ها و مسیر اجرای پروژه
                        متناسب با نیازهای مشخص‌شده.
                    </p>
                </div>

                {{-- Step 03 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="m8 10 3 3-3 3M13 16h4" />
                            </svg>
                        </span>

                        <span class="si-process-number">3</span>
                    </div>

                    <h3>اجرا و توسعه</h3>

                    <p>
                        اجرای راهکار توافق‌شده با تمرکز بر کیفیت،
                        تجربه کاربری و نیازهای پروژه.
                    </p>
                </div>

                {{-- Step 04 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                        </span>

                        <span class="si-process-number">4</span>
                    </div>

                    <h3>بررسی و تحویل</h3>

                    <p>
                        بررسی نتیجه، رفع موارد توافق‌شده و تحویل خروجی‌های
                        مشخص‌شده در پروژه.
                    </p>
                </div>

            </div>



        </div>
    </section>


    {{-- FAQ Section --}}
    <section class="pr-faq si-faq" id="faq">
        <div class="container">

            <h2>سوالات متداول</h2>

            <div class="pr-faq-list si-faq-list">

                {{-- سؤال اول --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>برای شروع پروژه از کجا باید شروع کنم؟</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>کافیه از طریق راه‌های ارتباطی سایت با ما تماس بگیرید و درباره هدف، نیازها و انتظاراتتون از
                                پروژه توضیح بدید. بعد از بررسی اولیه، خدمت مناسب و مسیر پیشنهادی اجرا مشخص می‌شه.</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال دوم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>آیا می‌تونم فقط یکی از خدمات رو سفارش بدم؟</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>بله. می‌تونید متناسب با نیاز کسب‌وکارتون، فقط یک خدمت مثل طراحی سایت، سئو، فروشگاه اینترنتی،
                                بازطراحی یا توسعه سیستم اختصاصی رو انتخاب کنید. اگر پروژه به خدمات مکمل نیاز داشته باشه،
                                گزینه‌های مرتبط هم بررسی می‌شن.</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال سوم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>هزینه و زمان انجام پروژه چطور مشخص می‌شه؟</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>هزینه و زمان اجرا به نوع خدمت، پیچیدگی پروژه، امکانات موردنیاز و محدوده کار بستگی داره. بعد
                                از شناخت نیازها و مشخص‌شدن جزئیات، برآورد متناسب با پروژه ارائه می‌شه.</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال چهارم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>اگر از قبل سایت داشته باشم، امکان بازطراحی وجود داره؟</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>بله. اگر سایت فعلی از نظر ظاهر، تجربه کاربری، سرعت یا پنل مدیریت نیاز به بهبود داشته باشه،
                                می‌تونیم وضعیت فعلی رو بررسی کنیم و راهکار مناسب برای بازطراحی، بهینه‌سازی یا توسعه اون
                                پیشنهاد بدیم.</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال پنجم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>آیا بعد از تحویل پروژه هم پشتیبانی ارائه می‌شه؟</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>شرایط پشتیبانی و خدمات پس از تحویل، متناسب با نوع پروژه و توافق انجام‌شده مشخص می‌شه. جزئیات
                                این موارد پیش از شروع همکاری قابل بررسی و هماهنگیه.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


     {{-- Final CTA Section --}}
        <section class="si-cta" id="contact">
            <div class="container">

                <div class="si-cta-card">

                    {{-- Decorative Elements --}}
                    <span class="si-cta-orb si-cta-orb-one" aria-hidden="true"></span>

                    <span class="si-cta-orb si-cta-orb-two" aria-hidden="true"></span>

                    <div class="si-cta-content">

                        <span class="si-cta-eyebrow">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-2-5.8L4 11l6-2.2L12 3Z" stroke="currentColor"
                                    stroke-width="1.6" stroke-linejoin="round" />
                                <path d="m19 14 1.1 2.9L23 18l-2.9 1.1L19 22l-1.1-2.9L15 18l2.9-1.1L19 14Z"
                                    stroke="currentColor" stroke-width="1.4" stroke-linejoin="round" />
                            </svg>

                            آماده شروع هستیم
                        </span>

                        <h2 class="si-cta-title">
                            برای قدم بعدی
                            <span>کسب‌وکارت آماده‌ای؟</span>
                        </h2>

                        <p class="si-cta-description">
                            از طراحی یک وب‌سایت جدید تا بهبود و توسعه سایت فعلی؛
                            بیایید درباره نیازهای کسب‌وکارت صحبت کنیم و
                            راهکار مناسب پروژه‌ات رو پیدا کنیم.
                        </p>

                        <div class="si-cta-actions">
                            <a href="{{ route('contact') }}" class="si-cta-primary">
                                شروع گفتگو درباره پروژه

                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                            <a href="{{ route('services') }}" class="si-cta-secondary">
                                مشاهده خدمات
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </section>

@endsection

@push('scripts')
    <script src="{{ asset('site/js/services/services-index.js') }}" defer></script>
@endpush
