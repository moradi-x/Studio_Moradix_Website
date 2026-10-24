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
                        برای رشد آنلاین کسب‌وکارت،
                        <span>راهکار مناسب رو پیدا کن.</span>
                    </h1>

                    <p class="si-hero-description">
                        از طراحی وب‌سایت و فروشگاه اینترنتی تا بازطراحی،
                        سیستم‌های اختصاصی و سئو؛ کمک می‌کنیم حضور آنلاین
                        کسب‌وکارت رو متناسب با نیازها و اهدافت توسعه بدی.
                    </p>

                    <div class="si-hero-actions">
                        <a href="" class="btn btn-primary">
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

                    <div class="si-hero-note">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M12 11v5" />
                            <path d="M12 8h.01" />
                        </svg>

                        <span>
                            هر پروژه، با توجه به نیاز واقعی کسب‌وکار شما
                            شروع می‌شه.
                        </span>
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
                                MORADIX STUDIO
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

    {{-- Services Overview --}}
    <section class="si-services" id="services" aria-labelledby="si-services-title">
        <div class="container">

            <div class="si-services-heading">
                <span class="si-services-eyebrow">
                    خدمات ما
                </span>

                <h2 class="si-services-title" id="si-services-title">
                    چه چیزی برای رشد کسب‌وکارت نیاز داری؟
                </h2>

                <p class="si-services-description">
                    از راه‌اندازی وب‌سایت تا توسعه و بهینه‌سازی؛
                    راهکار مناسب کسب‌وکارت رو از بین خدمات Moradix پیدا کن.
                </p>
            </div>

            <div class="si-services-grid">

                {{-- Website Design --}}
                <a href="{{ url('/web-design') }}" class="si-service-card">
                    <div class="si-service-card-top">
                        <span class="si-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="M3 9h18M7 6.5h.01M10 6.5h.01" />
                                <path d="M8 13h8M8 16h5" />
                            </svg>
                        </span>

                        <span class="si-service-number">01</span>
                    </div>

                    <h3>طراحی وب‌سایت</h3>

                    <p>
                        طراحی وب‌سایتی حرفه‌ای، متناسب با هویت برند
                        و نیاز واقعی کسب‌وکار شما.
                    </p>

                    <span class="si-service-link">
                        مشاهده جزئیات
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M19 12H5" />
                            <path d="m12 19-7-7 7-7" />
                        </svg>
                    </span>
                </a>

                {{-- E-commerce --}}
                <a href="{{ url('/ecommerce') }}" class="si-service-card">
                    <div class="si-service-card-top">
                        <span class="si-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 2-1.6L22 7H6" />
                                <circle cx="10" cy="20" r="1" />
                                <circle cx="18" cy="20" r="1" />
                            </svg>
                        </span>

                        <span class="si-service-number">02</span>
                    </div>

                    <h3>طراحی فروشگاه اینترنتی</h3>

                    <p>
                        ساخت فروشگاهی آنلاین با تجربه خرید ساده،
                        مدیریت آسان و مسیر فروش شفاف.
                    </p>

                    <span class="si-service-link">
                        مشاهده جزئیات
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M19 12H5" />
                            <path d="m12 19-7-7 7-7" />
                        </svg>
                    </span>
                </a>

                {{-- Redesign --}}
                <a href="{{ url('/redesign') }}" class="si-service-card">
                    <div class="si-service-card-top">
                        <span class="si-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 20h9" />
                                <path d="M16.5 3.5a2.1 2.1 0 0 1 3 3L8 18l-4 1 1-4Z" />
                                <path d="m15 5 4 4" />
                            </svg>
                        </span>

                        <span class="si-service-number">03</span>
                    </div>

                    <h3>بازطراحی و ارتقای سایت</h3>

                    <p>
                        بهبود ظاهر، تجربه کاربری، سرعت و مدیریت
                        سایت فعلی بدون شروع غیرضروری از صفر.
                    </p>

                    <span class="si-service-link">
                        مشاهده جزئیات
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M19 12H5" />
                            <path d="m12 19-7-7 7-7" />
                        </svg>
                    </span>
                </a>

                {{-- Custom Systems --}}
                <a href="{{ url('/custom-systems') }}" class="si-service-card">
                    <div class="si-service-card-top">
                        <span class="si-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="4" y="4" width="6" height="6" rx="1" />
                                <rect x="14" y="4" width="6" height="6" rx="1" />
                                <rect x="4" y="14" width="6" height="6" rx="1" />
                                <rect x="14" y="14" width="6" height="6" rx="1" />
                                <path d="M10 7h4M7 10v4m10-4v4M10 17h4" />
                            </svg>
                        </span>

                        <span class="si-service-number">04</span>
                    </div>

                    <h3>سیستم‌های اختصاصی</h3>

                    <p>
                        توسعه سامانه‌ها و ابزارهای اختصاصی
                        متناسب با فرایندهای خاص کسب‌وکار شما.
                    </p>

                    <span class="si-service-link">
                        مشاهده جزئیات
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M19 12H5" />
                            <path d="m12 19-7-7 7-7" />
                        </svg>
                    </span>
                </a>

                {{-- SEO --}}
                <a href="{{ url('/seo') }}" class="si-service-card">
                    <div class="si-service-card-top">
                        <span class="si-service-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="10.5" cy="10.5" r="6.5" />
                                <path d="m16 16 5 5M7.5 12l2-2 2 1 2.5-3" />
                            </svg>
                        </span>

                        <span class="si-service-number">05</span>
                    </div>

                    <h3>سئو سایت</h3>

                    <p>
                        بهینه‌سازی سایت برای دیده‌شدن در جست‌وجوی گوگل
                        و جذب مخاطبان مرتبط با کسب‌وکار شما.
                    </p>

                    <span class="si-service-link">
                        مشاهده جزئیات
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M19 12H5" />
                            <path d="m12 19-7-7 7-7" />
                        </svg>
                    </span>
                </a>

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

                        <span class="si-process-number">01</span>
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

                        <span class="si-process-number">02</span>
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

                        <span class="si-process-number">03</span>
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

                        <span class="si-process-number">04</span>
                    </div>

                    <h3>بررسی و تحویل</h3>

                    <p>
                        بررسی نتیجه، رفع موارد توافق‌شده و تحویل خروجی‌های
                        مشخص‌شده در پروژه.
                    </p>
                </div>

            </div>

            <div class="si-process-footer">
                <p>
                    از ابتدا تا انتها، مسیر همکاری بر اساس نیاز و محدوده
                    واقعی پروژه مشخص می‌شه.
                </p>

                <a href="#contact" class="si-process-cta">
                    درباره پروژه‌ات صحبت کنیم
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M19 12H5" />
                        <path d="m12 19-7-7 7-7" />
                    </svg>
                </a>
            </div>

        </div>
    </section>



    {{-- FAQ Section --}}
    <section class="si-faq" id="faq">
        <div class="container">

            <div class="si-faq-layout">

                {{-- FAQ Heading --}}
                <div class="si-faq-intro">
                    <span class="si-faq-eyebrow">
                        سوالات متداول
                    </span>

                    <h2 class="si-faq-title">
                        قبل از شروع همکاری،
                        <span>چه چیزهایی باید بدانید؟</span>
                    </h2>

                    <p class="si-faq-description">
                        اگر برای انتخاب خدمت مناسب یا شروع پروژه سوالی دارید،
                        پاسخ بعضی از رایج‌ترین پرسش‌ها را اینجا پیدا می‌کنید.
                    </p>

                    <div class="si-faq-help">
                        <span class="si-faq-help-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M21 11.5a8.4 8.4 0 0 1-.9 3.8
                                                     8.5 8.5 0 0 1-7.6 4.7
                                                     8.4 8.4 0 0 1-3.8-.9L3 21l1.9-5.7
                                                     a8.4 8.4 0 0 1-.9-3.8
                                                     8.5 8.5 0 0 1 4.7-7.6
                                                     8.4 8.4 0 0 1 3.8-.9h.5
                                                     a8.5 8.5 0 0 1 8 8v.5Z" stroke="currentColor" stroke-width="1.6"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 12h.01M12 12h.01M16 12h.01" stroke="currentColor" stroke-width="2.4"
                                    stroke-linecap="round" />
                            </svg>
                        </span>

                        <div>
                            <strong>هنوز سوالی دارید؟</strong>
                            <p>
                                درباره نیاز پروژه‌تان با ما صحبت کنید.
                            </p>

                            <a href="#contact" class="si-faq-contact-link">
                                ارتباط با مورادیکس
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- FAQ Accordion --}}
                <div class="si-faq-list">

                    <details class="si-faq-item" open>
                        <summary class="si-faq-question">
                            <span class="si-faq-question-text">
                                برای شروع پروژه از کجا باید شروع کنم؟
                            </span>

                            <span class="si-faq-toggle" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </summary>

                        <div class="si-faq-answer">
                            <p>
                                کافیه از طریق راه‌های ارتباطی سایت با ما تماس بگیرید
                                و درباره هدف، نیازها و انتظاراتتون از پروژه توضیح بدید.
                                بعد از بررسی اولیه، خدمت مناسب و مسیر پیشنهادی اجرا
                                مشخص می‌شه.
                            </p>
                        </div>
                    </details>

                    <details class="si-faq-item">
                        <summary class="si-faq-question">
                            <span class="si-faq-question-text">
                                آیا می‌تونم فقط یکی از خدمات رو سفارش بدم؟
                            </span>

                            <span class="si-faq-toggle" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </summary>

                        <div class="si-faq-answer">
                            <p>
                                بله. می‌تونید متناسب با نیاز کسب‌وکارتون، فقط یک خدمت
                                مثل طراحی سایت، سئو، فروشگاه اینترنتی، بازطراحی یا
                                توسعه سیستم اختصاصی رو انتخاب کنید. اگر پروژه به
                                خدمات مکمل نیاز داشته باشه، گزینه‌های مرتبط هم
                                بررسی می‌شن.
                            </p>
                        </div>
                    </details>

                    <details class="si-faq-item">
                        <summary class="si-faq-question">
                            <span class="si-faq-question-text">
                                هزینه و زمان انجام پروژه چطور مشخص می‌شه؟
                            </span>

                            <span class="si-faq-toggle" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </summary>

                        <div class="si-faq-answer">
                            <p>
                                هزینه و زمان اجرا به نوع خدمت، پیچیدگی پروژه،
                                امکانات موردنیاز و محدوده کار بستگی داره.
                                بعد از شناخت نیازها و مشخص‌شدن جزئیات، برآورد
                                متناسب با پروژه ارائه می‌شه.
                            </p>
                        </div>
                    </details>

                    <details class="si-faq-item">
                        <summary class="si-faq-question">
                            <span class="si-faq-question-text">
                                اگر از قبل سایت داشته باشم، امکان بازطراحی وجود داره؟
                            </span>

                            <span class="si-faq-toggle" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </summary>

                        <div class="si-faq-answer">
                            <p>
                                بله. اگر سایت فعلی از نظر ظاهر، تجربه کاربری،
                                سرعت یا پنل مدیریت نیاز به بهبود داشته باشه،
                                می‌تونیم وضعیت فعلی رو بررسی کنیم و راهکار مناسب
                                برای بازطراحی، بهینه‌سازی یا توسعه اون پیشنهاد بدیم.
                            </p>
                        </div>
                    </details>

                    <details class="si-faq-item">
                        <summary class="si-faq-question">
                            <span class="si-faq-question-text">
                                آیا بعد از تحویل پروژه هم پشتیبانی ارائه می‌شه؟
                            </span>

                            <span class="si-faq-toggle" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                        </summary>

                        <div class="si-faq-answer">
                            <p>
                                شرایط پشتیبانی و خدمات پس از تحویل، متناسب با نوع
                                پروژه و توافق انجام‌شده مشخص می‌شه. جزئیات این
                                موارد پیش از شروع همکاری قابل بررسی و هماهنگیه.
                            </p>
                        </div>
                    </details>

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
                        <a href="/contact" class="si-cta-primary">
                            شروع گفتگو درباره پروژه

                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <a href="#services" class="si-cta-secondary">
                            مشاهده خدمات
                        </a>
                    </div>

                    <div class="si-cta-note">
                        <span class="si-cta-note-dot"></span>
                        <span>
                            هر پروژه با شناخت نیازهای واقعی شما شروع می‌شه.
                        </span>
                    </div>

                </div>

                {{-- Decorative Visual --}}
                <div class="si-cta-visual" aria-hidden="true">

                    <div class="si-cta-visual-glow"></div>

                    <div class="si-cta-visual-card si-cta-visual-card-back">
                        <span class="si-cta-visual-line"></span>
                        <span class="si-cta-visual-line short"></span>
                        <span class="si-cta-visual-block"></span>
                    </div>

                    <div class="si-cta-visual-card si-cta-visual-card-front">

                        <div class="si-cta-visual-header">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="si-cta-visual-body">
                            <div class="si-cta-visual-symbol">
                                <svg viewBox="0 0 48 48" fill="none">
                                    <rect x="5" y="5" width="38" height="38" rx="12" stroke="currentColor"
                                        stroke-width="1.5" />

                                    <path d="M15 24h18M24 15v18" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </div>

                            <span class="si-cta-visual-line"></span>
                            <span class="si-cta-visual-line short"></span>

                            <div class="si-cta-visual-progress">
                                <span></span>
                            </div>
                        </div>

                    </div>

                    <span class="si-cta-floating si-cta-floating-one">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>

                    <span class="si-cta-floating si-cta-floating-two">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="m12 3 2.7 5.5L21 9.4l-4.5 4.4
                                                 1.1 6.2L12 17l-5.6 3 1.1-6.2L3 9.4
                                                 l6.3-.9L12 3Z" stroke="currentColor" stroke-width="1.5"
                                stroke-linejoin="round" />
                        </svg>
                    </span>

                </div>

            </div>

        </div>
    </section>


@endsection

@push('scripts')
    <script src="{{ asset('site/js/services.js') }}" defer></script>
@endpush
