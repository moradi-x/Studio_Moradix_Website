{{-- resources/views/Home/services.blade.php --}}

@extends('Home.Layouts.layout')

@section('title', 'خدمات | Moradix Studio')

@section('description', 'خدمات توسعه وب Moradix Studio: طراحی وب‌سایت، فروشگاه اینترنتی، ارتقای سایت وردپرسی، بازطراحی UI/UX، سئو و بهینه‌سازی، و سیستم‌های اختصاصی با Laravel')

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/services.css') }}">
@endpush

@section('content')
<div class="svc-page">
    {{-- Hero Section --}}
    <section class="svc-hero">
        <div class="container">
            <div class="svc-hero-content">
                <h1>خدماتی که کسب‌وکارت رو آنلاین می‌کنه</h1>
                <p class="svc-hero-desc">از طراحی وب‌سایت و فروشگاه اینترنتی تا بهینه‌سازی و سیستم‌های اختصاصی. هر چی برای حضور حرفه‌ای در وب لازم داری.</p>
                <div class="svc-hero-buttons">
                    <a href="{{ route('home') }}#contact" class="btn btn-primary">مشاوره‌ی رایگان</a>
                    <a href="#services-list" class="btn btn-outline">مشاهده‌ی خدمات</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Services List --}}
    <section class="svc-list-section" id="services-list">
        <div class="container">
            <div class="svc-grid">
                {{-- DYNAMIC: services از جدول services --}}

                {{-- Service 1: طراحی وب‌سایت --}}
                <article class="svc-card">
                    <svg class="svc-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <h3>طراحی وب‌سایت</h3>
                    <p class="svc-card-desc">سایتی که کسب‌وکارت رو درست معرفی کنه و بازدیدکننده رو به تماس با تو برسونه.</p>
                    <p class="svc-card-suitable">
                        <strong>مناسب برای:</strong>
                        <span class="svc-card-suitable-text">شرکت‌ها، آژانس‌ها، مدرس‌ها و کسانی که ویترین آنلاین می‌خوان.</span>
                    </p>
                    <div class="svc-tags">
                        <span class="svc-tag">شرکتی</span>
                        <span class="svc-tag">گردشگری</span>
                        <span class="svc-tag">آموزشی و دانشجویی</span>
                        <span class="svc-tag">رزومه و نمونه‌کار</span>
                        <span class="svc-tag">چندزبانه</span>
                    </div>
                    <button class="svc-details-btn" aria-expanded="false" aria-controls="details-1">
                        <span>جزئیات</span>
                        <svg class="svc-details-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="svc-details" id="details-1">
                        <div class="svc-details-content">
                            <p class="svc-details-title">چی تحویل می‌گیری:</p>
                            <ul class="svc-details-list">
                                <li>طراحی اختصاصی ریسپانسیو</li>
                                <li>پنل مدیریت محتوا</li>
                                <li>سئوی پایه</li>
                                <li>سرعت بالا</li>
                                <li>آموزش کار با پنل</li>
                            </ul>
                        </div>
                    </div>
                </article>

                {{-- Service 2: فروشگاه اینترنتی --}}
                <article class="svc-card">
                    <svg class="svc-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <h3>فروشگاه اینترنتی</h3>
                    <p class="svc-card-desc">فروشگاهی که محصول، سبد خرید، پرداخت و سفارش‌ها رو کامل مدیریت کنه.</p>
                    <p class="svc-card-suitable">
                        <strong>مناسب برای:</strong>
                        <span class="svc-card-suitable-text">مغازه‌دارها و برندهایی که می‌خوان آنلاین بفروشن.</span>
                    </p>
                    <button class="svc-details-btn" aria-expanded="false" aria-controls="details-2">
                        <span>جزئیات</span>
                        <svg class="svc-details-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="svc-details" id="details-2">
                        <div class="svc-details-content">
                            <p class="svc-details-title">چی تحویل می‌گیری:</p>
                            <ul class="svc-details-list">
                                <li>مدیریت محصول و دسته‌بندی</li>
                                <li>تنوع محصول (رنگ، سایز)</li>
                                <li>سبد خرید و ثبت سفارش</li>
                                <li>اتصال به درگاه پرداخت</li>
                                <li>مدیریت موجودی و کوپن</li>
                                <li>پنل مدیریت ساده</li>
                            </ul>
                        </div>
                    </div>
                </article>

                {{-- Service 3: ارتقای سایت وردپرسی --}}
                <article class="svc-card">
                    <svg class="svc-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                    <h3>ارتقای سایت وردپرسی</h3>
                    <p class="svc-card-desc">دو مسیر داری: بازطراحی ظاهر، یا مهاجرت کامل به کدنویسی اختصاصی با Laravel.</p>
                    <p class="svc-card-suitable">
                        <strong>مناسب برای:</strong>
                        <span class="svc-card-suitable-text">کسی که سایتش قدیمی و کند شده، یا از محدودیت‌های وردپرس و افزونه‌ها خسته شده.</span>
                    </p>
                    <div class="svc-honest-note">
                        اگه وردپرس برای کسب‌وکارت کافیه، همین رو بهت می‌گیم و بی‌دلیل سایتت رو عوض نمی‌کنیم.
                    </div>
                    <button class="svc-details-btn" aria-expanded="false" aria-controls="details-3">
                        <span>جزئیات</span>
                        <svg class="svc-details-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="svc-details" id="details-3">
                        <div class="svc-details-content">
                            <p class="svc-details-title">چی تحویل می‌گیری:</p>
                            <ul class="svc-details-list">
                                <li>بررسی سایت فعلی و پیشنهاد صادقانه</li>
                                <li>انتقال محتوا و آدرس‌ها بدون افت سئو</li>
                                <li>بازطراحی ظاهر</li>
                                <li>مهاجرت به Laravel در صورت نیاز</li>
                            </ul>
                        </div>
                    </div>
                </article>

                {{-- Service 4: بازطراحی UI/UX --}}
                <article class="svc-card">
                    <svg class="svc-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                    </svg>
                    <h3>بازطراحی و تجربه‌ی کاربری</h3>
                    <p class="svc-card-desc">ظاهر سایت فعلی‌ت رو از پایه مدرن و راحت‌تر می‌کنیم تا بازدیدکننده بمونه و اقدام کنه.</p>
                    <p class="svc-card-suitable">
                        <strong>مناسب برای:</strong>
                        <span class="svc-card-suitable-text">سایت‌هایی که ظاهر خسته‌کننده دارن یا در موبایل بد دیده می‌شن.</span>
                    </p>
                    <button class="svc-details-btn" aria-expanded="false" aria-controls="details-4">
                        <span>جزئیات</span>
                        <svg class="svc-details-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="svc-details" id="details-4">
                        <div class="svc-details-content">
                            <p class="svc-details-title">چی تحویل می‌گیری:</p>
                            <ul class="svc-details-list">
                                <li>بررسی مشکلات فعلی</li>
                                <li>طراحی مجدد صفحات کلیدی</li>
                                <li>ریسپانسیو کامل</li>
                                <li>یکدستی رنگ و فونت</li>
                            </ul>
                        </div>
                    </div>
                </article>

                {{-- Service 5: سئو و سرعت --}}
                <article class="svc-card">
                    <svg class="svc-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <h3>سئو و سرعت</h3>
                    <p class="svc-card-desc">سایتت سریع بشه و گوگل بهتر بفهمدش.</p>
                    <p class="svc-card-suitable">
                        <strong>مناسب برای:</strong>
                        <span class="svc-card-suitable-text">سایت‌هایی که کند هستن یا در جستجو دیده نمی‌شن.</span>
                    </p>
                    <button class="svc-details-btn" aria-expanded="false" aria-controls="details-5">
                        <span>جزئیات</span>
                        <svg class="svc-details-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="svc-details" id="details-5">
                        <div class="svc-details-content">
                            <p class="svc-details-title">چی تحویل می‌گیری:</p>
                            <ul class="svc-details-list">
                                <li>بهینه‌سازی سرعت و تصاویر</li>
                                <li>ساختار فنی سئو</li>
                                <li>تگ‌ها و نقشه‌ی سایت</li>
                                <li>بررسی مشکلات فنی</li>
                            </ul>
                        </div>
                    </div>
                </article>

                {{-- Service 6: پنل مدیریت و سیستم اختصاصی --}}
                <article class="svc-card">
                    <svg class="svc-card-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                    </svg>
                    <h3>پنل مدیریت و سیستم اختصاصی</h3>
                    <p class="svc-card-desc">نرم‌افزار و پنل مخصوص نیاز خاص کسب‌وکارت، مثل سیستم سفارش، رزرو یا مدیریت مشتری.</p>
                    <p class="svc-card-suitable">
                        <strong>مناسب برای:</strong>
                        <span class="svc-card-suitable-text">کسب‌وکارهایی که ابزار آماده براشون جواب نمی‌ده.</span>
                    </p>
                    <button class="svc-details-btn" aria-expanded="false" aria-controls="details-6">
                        <span>جزئیات</span>
                        <svg class="svc-details-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="svc-details" id="details-6">
                        <div class="svc-details-content">
                            <p class="svc-details-title">چی تحویل می‌گیری:</p>
                            <ul class="svc-details-list">
                                <li>تحلیل نیاز</li>
                                <li>طراحی دیتابیس و پنل</li>
                                <li>سطح دسترسی کاربران</li>
                                <li>توسعه‌ی بک‌اند و فرانت</li>
                                <li>تست و تحویل با مستندات</li>
                            </ul>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    {{-- Deliverables Section --}}
    <section class="svc-deliverables">
        <div class="container">
            <div class="svc-section-header">
                <h2>چی تحویل می‌گیری؟</h2>
                <p>در تمام پروژه‌ها این‌ها رو از ما انتظار داشته باش</p>
            </div>

            <div class="svc-deliverables-grid">
                {{-- Deliverable 1 --}}
                <div class="svc-deliverable-item">
                    <svg class="svc-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                    <h3>طراحی ریسپانسیو</h3>
                    <p>سایتت توی موبایل، تبلت و دسکتاپ عالی کار می‌کنه</p>
                </div>

                {{-- Deliverable 2 --}}
                <div class="svc-deliverable-item">
                    <svg class="svc-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3>تجربه‌ی کاربری ساده</h3>
                    <p>هر کسی راحت بتونه باهاش کار کنه</p>
                </div>

                {{-- Deliverable 3 --}}
                <div class="svc-deliverable-item">
                    <svg class="svc-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                    <h3>توسعه‌ی فنی تمیز</h3>
                    <p>کد استاندارد برای توسعه‌های آینده</p>
                </div>

                {{-- Deliverable 4 --}}
                <div class="svc-deliverable-item">
                    <svg class="svc-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"/>
                    </svg>
                    <h3>پنل مدیریت قابل استفاده</h3>
                    <p>خودت محتوا و تنظیمات رو مدیریت می‌کنی</p>
                </div>

                {{-- Deliverable 5 --}}
                <div class="svc-deliverable-item">
                    <svg class="svc-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <h3>تست قبل از تحویل</h3>
                    <p>سایت قبل از انتشار کامل بررسی می‌شه</p>
                </div>

                {{-- Deliverable 6 --}}
                <div class="svc-deliverable-item">
                    <svg class="svc-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                    <h3>آموزش کار با سایت</h3>
                    <p>یاد می‌گیری چطور سایتت رو مدیریت کنی</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Process Section --}}
    <section class="svc-process">
        <div class="container">
            <div class="svc-section-header">
                <h2>روند همکاری (خلاصه)</h2>
                <p>از شنیدن نیازت تا تحویل نهایی</p>
            </div>

            <div class="svc-process-steps">
                {{-- Step 1 --}}
                <div class="svc-process-step">
                    <div class="svc-process-number">۱</div>
                    <h3>نیازسنجی</h3>
                    <p>درباره‌ی پروژه حرف می‌زنیم و نیازت رو می‌شنویم</p>
                </div>

                {{-- Step 2 --}}
                <div class="svc-process-step">
                    <div class="svc-process-number">۲</div>
                    <h3>تعیین محدوده و هزینه</h3>
                    <p>چی ساخته می‌شه و چقدر زمان و هزینه می‌بره</p>
                </div>

                {{-- Step 3 --}}
                <div class="svc-process-step">
                    <div class="svc-process-number">۳</div>
                    <h3>طراحی و توسعه</h3>
                    <p>پروژه رو می‌سازیم و باهات در ارتباط هستیم</p>
                </div>

                {{-- Step 4 --}}
                <div class="svc-process-step">
                    <div class="svc-process-number">۴</div>
                    <h3>تست و تحویل</h3>
                    <p>پروژه تست می‌شه، آموزش می‌دیم و تحویل می‌گیری</p>
                </div>
            </div>

            <div class="svc-process-note">
                <p><strong>هزینه بعد از شنیدن نیازت و تعیین محدوده‌ی کار، شفاف و قبل از شروع مشخص می‌شه.</strong></p>
                <a href="{{ route('home') }}#process" class="svc-process-link">
                    <span>جزئیات بیشتر در بخش فرآیند کار</span>
                    <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Side Services Banner --}}
    <section class="svc-side-services">
        <div class="container">
            <div class="svc-side-services-content">
                <p>نیاز به طراحی لوگو یا هویت بصری داری؟ با همکاران طراح انجامش می‌دیم.</p>
                <a href="#">بیشتر بدانید</a>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="svc-final-cta">
        <div class="container">
            <div class="svc-final-cta-content">
                <h2>درباره‌ی پروژه‌ات صحبت کنیم؟</h2>
                <p>مشاوره‌ی اولیه رایگانه</p>
                <a href="{{ route('home') }}#contact" class="btn btn-primary">مشاوره‌ی رایگان</a>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/services.js') }}" defer></script>
@endpush
