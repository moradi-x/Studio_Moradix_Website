{{-- resources/views/Home/Pricing/pricing.blade.php --}}

@extends('Home.Layouts.layout')

@section('title', 'تعرفه‌ها و پلن‌ها | Moradix Studio')

@section('description', 'تعرفه‌های شفاف طراحی سایت و فروشگاه اینترنتی Moradix Studio. پلن‌های پایه و حرفه‌ای با قیمت‌گذاری واضح، مشاوره‌ی رایگان و بدون هزینه‌ی پنهان.')

@push('styles')
<link rel="stylesheet" href="{{ asset('site/css/pricing.css') }}">
@endpush

@section('content')
<div class="pr-page">
    {{-- Hero Section --}}
    <section class="pr-hero">
        <div class="container">
            <div class="pr-hero-content">
                <h1>تعرفه‌ها و پلن‌ها</h1>
                <p class="pr-hero-desc">قیمت‌گذاری شفاف و بدون هزینه‌ی پنهان. قبل از شروع پروژه، همه‌چی رو با هم روشن می‌کنیم.</p>

                {{-- Trust Bar --}}
                <div class="pr-trust-bar">
                    <div class="pr-trust-item">
                        <svg class="pr-trust-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                        <span>قرارداد شفاف</span>
                    </div>
                    <div class="pr-trust-item">
                        <svg class="pr-trust-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                        </svg>
                        <span>قیمت قبل از شروع مشخص می‌شه</span>
                    </div>
                    <div class="pr-trust-item">
                        <svg class="pr-trust-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                        </svg>
                        <span>مشاوره‌ی رایگان</span>
                    </div>
                </div>

                {{-- Last Update --}}
                <p class="pr-last-update">آخرین به‌روزرسانی تعرفه: مهر ۱۴۰۵</p>
            </div>
        </div>
    </section>

    {{-- Category Toggle --}}
    <section class="pr-category-section" id="plans">
        <div class="container">
            <div class="pr-category-toggle" role="tablist" aria-label="انتخاب نوع پروژه">
                <button class="pr-tab" role="tab" aria-selected="true" aria-controls="panel-website" id="tab-website" data-category="website">
                    طراحی سایت
                </button>
                <button class="pr-tab" role="tab" aria-selected="false" aria-controls="panel-shop" id="tab-shop" data-category="shop" tabindex="-1">
                    فروشگاه اینترنتی
                </button>
                <span class="pr-tab-indicator" aria-hidden="true"></span>
            </div>
        </div>
    </section>

    {{-- Plans Grid --}}
    <section class="pr-plans-section">
        <div class="container">
            {{-- Website Plans --}}
            <div class="pr-panel" role="tabpanel" id="panel-website" aria-labelledby="tab-website">
                <div class="pr-plans-grid">
                    {{-- DYNAMIC: plans از جدول plans --}}

                    {{-- Plan 1: پایه --}}
                    <article class="pr-plan-card">
                        <div class="pr-plan-header">
                            <h3 class="pr-plan-name">پایه</h3>
                            <p class="pr-plan-for">مناسب ویترین ساده و نمونه‌کار</p>
                        </div>

                        <div class="pr-plan-price">
                            {{-- PRICE: قیمت پایه طراحی سایت --}}
                            <span class="pr-price-label">از</span>
                            <span class="pr-price-amount">۸,۰۰۰,۰۰۰</span>
                            <span class="pr-price-currency">تومان</span>
                        </div>
                        <p class="pr-price-note">قیمت نهایی بعد از تعیین محدوده‌ی کار، قبل از شروع، شفاف مشخص می‌شه</p>

                        <div class="pr-plan-meta">
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{-- TIME: زمان اجرا --}}
                                <span>۲ تا ۳ هفته</span>
                            </div>
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                <span>۱ ماه پشتیبانی فنی رایگان</span>
                            </div>
                        </div>

                        <div class="pr-plan-features">
                            <h4 class="pr-features-title">امکانات:</h4>
                            <ul class="pr-features-list">
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>طراحی بر پایه‌ی کیت طراحی Moradix با تنظیم رنگ و فونت برند</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>تا ۶ صفحه: خانه، درباره ما، خدمات، گالری و نمونه‌کار، تماس</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>فرم تماس و راه‌های ارتباطی</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>ریسپانسیو کامل (موبایل، تبلت، دسکتاپ)</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>پنل مدیریت برای ویرایش متن و تصاویر، همراه آموزش کار با آن</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>ساختار آماده‌ی سئو (عنوان و توضیحات متا، بهینه‌سازی اولیه‌ی تصاویر)</span>
                                </li>
                            </ul>

                            <h4 class="pr-not-included-title">شامل نمی‌شه:</h4>
                            <ul class="pr-not-included-list">
                                <li>
                                    <svg class="pr-minus-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                    </svg>
                                    <span>سبد خرید و پرداخت آنلاین</span>
                                </li>
                                <li>
                                    <svg class="pr-minus-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                    </svg>
                                    <span>بلاگ</span>
                                </li>
                                <li>
                                    <svg class="pr-minus-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                    </svg>
                                    <span>ورود و پنل کاربری</span>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('contact') }}?plan=website-basic" class="pr-plan-btn">
                            شروع این پلن
                        </a>
                        <a href="{{ route('contact') }}" class="pr-plan-consult">
                            مطمئن نیستی؟ مشاوره‌ی رایگان
                        </a>
                    </article>

                    {{-- Plan 2: حرفه‌ای (Featured) --}}
                    <article class="pr-plan-card pr-plan-featured">
                        <span class="pr-featured-badge">پیشنهاد ما</span>
                        <div class="pr-plan-header">
                            <h3 class="pr-plan-name">حرفه‌ای</h3>
                            <p class="pr-plan-for">مناسب سایت شرکتی کامل و رشدپذیر</p>
                        </div>

                        <div class="pr-plan-price">
                            {{-- PRICE: قیمت پایه طراحی سایت حرفه‌ای --}}
                            <span class="pr-price-label">از</span>
                            <span class="pr-price-amount">۱۵,۰۰۰,۰۰۰</span>
                            <span class="pr-price-currency">تومان</span>
                        </div>
                        <p class="pr-price-note">قیمت نهایی بعد از تعیین محدوده‌ی کار، قبل از شروع، شفاف مشخص می‌شه</p>

                        <div class="pr-plan-meta">
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{-- TIME: زمان اجرا --}}
                                <span>۴ تا ۶ هفته</span>
                            </div>
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                <span>۲ ماه پشتیبانی فنی رایگان</span>
                            </div>
                        </div>

                        <div class="pr-plan-features">
                            <h4 class="pr-features-title">همه‌ی امکانات پایه، به‌علاوه:</h4>
                            <ul class="pr-features-list pr-collapsible">
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>طراحی رابط کاربری اختصاصی متناسب با برند</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>تا ۱۵ صفحه</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>بلاگ و مدیریت محتوا</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>ورود و پنل کاربری</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>سئوی فنی (ساختار هدینگ‌ها، sitemap، robots، لینک‌سازی داخلی)</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>بهینه‌سازی سرعت</span>
                                </li>
                            </ul>
                            <button class="pr-show-more" aria-expanded="false" hidden>
                                <span class="pr-show-more-text">نمایش همه‌ی امکانات</span>
                                <svg class="pr-show-more-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </div>

                        <a href="{{ route('contact') }}?plan=website-pro" class="pr-plan-btn pr-plan-btn-primary">
                            شروع این پلن
                        </a>
                        <a href="{{ route('contact') }}" class="pr-plan-consult">
                            مطمئن نیستی؟ مشاوره‌ی رایگان
                        </a>
                    </article>
                </div>
            </div>

            {{-- Shop Plans --}}
            <div class="pr-panel pr-panel-hidden" role="tabpanel" id="panel-shop" aria-labelledby="tab-shop" hidden>
                <div class="pr-plans-grid">
                    {{-- Shop Plan 1: پایه --}}
                    <article class="pr-plan-card">
                        <div class="pr-plan-header">
                            <h3 class="pr-plan-name">پایه</h3>
                            <p class="pr-plan-for">فروشگاه ساده برای شروع فروش آنلاین</p>
                        </div>

                        <div class="pr-plan-price">
                            {{-- PRICE: قیمت پایه فروشگاه --}}
                            <span class="pr-price-label">از</span>
                            <span class="pr-price-amount">۱۵,۰۰۰,۰۰۰</span>
                            <span class="pr-price-currency">تومان</span>
                        </div>
                        <p class="pr-price-note">قیمت نهایی بعد از تعیین محدوده‌ی کار، قبل از شروع، شفاف مشخص می‌شه</p>

                        <div class="pr-plan-meta">
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{-- TIME: زمان اجرا --}}
                                <span>۴ تا ۶ هفته</span>
                            </div>
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                <span>۱ ماه پشتیبانی فنی رایگان</span>
                            </div>
                        </div>

                        <div class="pr-plan-features">
                            <h4 class="pr-features-title">امکانات:</h4>
                            <ul class="pr-features-list pr-collapsible">
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>فروشگاه اختصاصی با کدنویسی و طراحی بر پایه‌ی کیت Moradix</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>صفحات فروشگاه، دسته‌بندی و محصول</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>سبد خرید و تسویه</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>اتصال به یک درگاه پرداخت و روش‌های ارسال</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>پنل مدیریت محصول، سفارش و موجودی، همراه آموزش</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>ریسپانسیو کامل</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>ساختار آماده‌ی سئو</span>
                                </li>
                            </ul>
                            <button class="pr-show-more" aria-expanded="false" hidden>
                                <span class="pr-show-more-text">نمایش همه‌ی امکانات</span>
                                <svg class="pr-show-more-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </div>

                        <a href="{{ route('contact') }}?plan=shop-basic" class="pr-plan-btn">
                            شروع این پلن
                        </a>
                        <a href="{{ route('contact') }}" class="pr-plan-consult">
                            مطمئن نیستی؟ مشاوره‌ی رایگان
                        </a>
                    </article>

                    {{-- Shop Plan 2: حرفه‌ای (Featured) --}}
                    <article class="pr-plan-card pr-plan-featured">
                        <span class="pr-featured-badge">پیشنهاد ما</span>
                        <div class="pr-plan-header">
                            <h3 class="pr-plan-name">حرفه‌ای</h3>
                            <p class="pr-plan-for">فروشگاه کامل و رشدپذیر</p>
                        </div>

                        <div class="pr-plan-price">
                            {{-- PRICE: قیمت پایه فروشگاه حرفه‌ای --}}
                            <span class="pr-price-label">از</span>
                            <span class="pr-price-amount">۲۵,۰۰۰,۰۰۰</span>
                            <span class="pr-price-currency">تومان</span>
                        </div>
                        <p class="pr-price-note">قیمت نهایی بعد از تعیین محدوده‌ی کار، قبل از شروع، شفاف مشخص می‌شه</p>

                        <div class="pr-plan-meta">
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{-- TIME: زمان اجرا --}}
                                <span>۶ تا ۸ هفته</span>
                            </div>
                            <div class="pr-meta-item">
                                <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                                <span>۲ ماه پشتیبانی فنی رایگان</span>
                            </div>
                        </div>

                        <div class="pr-plan-features">
                            <h4 class="pr-features-title">همه‌ی امکانات پایه، به‌علاوه:</h4>
                            <ul class="pr-features-list pr-collapsible">
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>طراحی اختصاصی فروشگاه و صفحه‌ی محصول</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>فیلتر و جستجوی پیشرفته‌ی محصولات</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>ویژگی و تنوع محصول (رنگ، سایز و...)</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>اتصال اسنپ‌پی (در صورت تأیید پذیرندگی)</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>پیامک سفارش</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>کمپین تخفیف و کدهای تخفیف پیشرفته</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>سئوی دسته‌بندی‌ها و صفحات محصول</span>
                                </li>
                                <li>
                                    <svg class="pr-check-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span>بهینه‌سازی سرعت</span>
                                </li>
                            </ul>
                            <button class="pr-show-more" aria-expanded="false" hidden>
                                <span class="pr-show-more-text">نمایش همه‌ی امکانات</span>
                                <svg class="pr-show-more-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                        </div>

                        <a href="{{ route('contact') }}?plan=shop-pro" class="pr-plan-btn pr-plan-btn-primary">
                            شروع این پلن
                        </a>
                        <a href="{{ route('contact') }}" class="pr-plan-consult">
                            مطمئن نیستی؟ مشاوره‌ی رایگان
                        </a>
                    </article>
                </div>
            </div>

            {{-- Custom Projects Card --}}
            <div class="pr-custom-card">
                <h3 class="pr-custom-title">پروژه‌های سفارشی و ارتقا</h3>
                <div class="pr-custom-grid">
                    <div class="pr-custom-item">
                        <svg class="pr-custom-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span>سئو و بهینه‌سازی</span>
                    </div>
                    <div class="pr-custom-item">
                        <svg class="pr-custom-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                        <span>بازطراحی سایت</span>
                    </div>
                    <div class="pr-custom-item">
                        <svg class="pr-custom-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                        <span>ارتقای سایت وردپرسی و مهاجرت به کدنویسی اختصاصی</span>
                    </div>
                    <div class="pr-custom-item">
                        <svg class="pr-custom-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"/>
                        </svg>
                        <span>سیستم‌های اختصاصی (مثل سیستم رزرو و مدیریت مشتری)</span>
                    </div>
                </div>
                <p class="pr-custom-note">اول بررسی رایگان، بعد قیمت شفاف</p>
                <a href="{{ route('contact') }}" class="pr-custom-btn">مشاوره‌ی رایگان</a>
            </div>
        </div>
    </section>

    {{-- Which Plan Section --}}
    <section class="pr-which-plan">
        <div class="container">
            <h2>کدوم پلن مناسب منه؟</h2>
            <div class="pr-which-grid">
                <div class="pr-which-item">
                    <svg class="pr-which-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <p>فقط می‌خوای معرفی بشی ← <strong>پایه</strong></p>
                </div>
                <div class="pr-which-item">
                    <svg class="pr-which-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                    <p>می‌خوای رشد کنی و محتوا منتشر کنی ← <strong>حرفه‌ای</strong></p>
                </div>
                <div class="pr-which-item">
                    <svg class="pr-which-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                    <p>نیاز خاص داری ← <strong>سفارشی</strong></p>
                </div>
            </div>
        </div>
    </section>

    {{-- Price Factors --}}
    <section class="pr-factors">
        <div class="container">
            <h2>قیمت به چی بستگی داره؟</h2>
            <div class="pr-factors-grid">
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    <h3>تعداد صفحات و محصولات</h3>
                </div>
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/>
                    </svg>
                    <h3>قابلیت‌های اختصاصی</h3>
                </div>
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <h3>اتصال به سرویس‌های بیرونی<br>(درگاه، پیامک)</h3>
                </div>
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                    </svg>
                    <h3>چندزبانه بودن</h3>
                </div>
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                    </svg>
                    <h3>تولید یا آماده‌سازی محتوا</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- Included vs Separate --}}
    <section class="pr-included">
        <div class="container">
            <div class="pr-included-grid">
                <div class="pr-included-card pr-included-yes">
                    <h3>در همه‌ی پلن‌ها</h3>
                    <ul>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>قرارداد شفاف</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>زمان‌بندی مشخص از ابتدا</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>کد تمیز</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>آموزش کار با پنل</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>پشتیبانی فنی رایگان بعد از تحویل</span>
                        </li>
                    </ul>
                </div>

                <div class="pr-included-card pr-included-no">
                    <h3>جدا حساب می‌شه</h3>
                    <ul>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                            <span>دامنه و هاست</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                            <span>تولید متن و عکاسی</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                            <span>اعتبار پیامک</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                            <span>کارمزد درگاه پرداخت</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                            </svg>
                            <span>افزودن محتوا و تغییرات بعد از تحویل</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Support --}}
    <section class="pr-support">
        <div class="container">
            <h2>پشتیبانی</h2>
            <div class="pr-support-grid">
                <div class="pr-support-card">
                    <h3>پشتیبانی فنی رایگان</h3>
                    <p class="pr-support-badge">توی پلن</p>
                    <p class="pr-support-desc">فقط رفع باگ‌های پروژه‌ی خودمون در بازه‌ی مشخص‌شده. افزودن قابلیت جدید و تغییر محتوا شامل نمی‌شه.</p>
                </div>

                <div class="pr-support-card pr-support-paid">
                    <h3>نگهداری و محتوا</h3>
                    <p class="pr-support-badge pr-support-badge-paid">پولی، جدا</p>
                    <ul class="pr-support-list">
                        <li>بکاپ و بروزرسانی و امنیت</li>
                        <li>افزودن محصول و مطلب و عکس</li>
                        <li>تغییرات جزئی ظاهر و محتوا</li>
                    </ul>
                    <p class="pr-support-price">بر اساس بسته</p>
                    <a href="{{ route('contact') }}" class="pr-support-btn">مشاوره</a>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="pr-faq">
        <div class="container">
            <h2>سوالات متداول</h2>
            <div class="pr-faq-list">
                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>قیمت نهایی چطور مشخص می‌شه؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>بعد از مشاوره‌ی رایگان و شنیدن نیازت، محدوده‌ی کار رو دقیق مشخص می‌کنیم (چند صفحه، چه قابلیت‌هایی، چه اتصالاتی). بعد قیمت رو می‌گیم و توی قرارداد می‌نویسیم. این قیمت شفافه و هیچ هزینه‌ی پنهانی نداره.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>دامنه و هاست شامل پلن هست؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>نه، دامنه و هاست جداست و خودت باید تهیه کنی. ولی ما راهنماییت می‌کنیم که کدوم سرویس مناسب کسب‌وکارته، و نصب و راه‌اندازی رو روی هاست انجام می‌دیم.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>بعد از تحویل می‌تونم تغییر بخوام؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>تغییرات جزئی و رفع باگ در دوره‌ی پشتیبانی فنی رایگان شامل می‌شه. ولی افزودن قابلیت جدید، تغییر ظاهر یا محتوا، یا توسعه‌های بعدی، جدا قیمت‌گذاری می‌شن و پروژه‌ی جداگانه‌ای محسوب می‌شن.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>فرق پشتیبانی فنی و نگهداری چیه؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>پشتیبانی فنی رایگان فقط رفع باگ‌های پروژه‌ی خودمونه. نگهداری یعنی بکاپ، بروزرسانی امنیتی، افزودن محتوا و تغییرات مداوم، که پولی و بر اساس بسته‌ی ماهانه یا سالانه‌ست.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>نحوه‌ی پرداخت چطوره؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            {{-- TODO: نحوه‌ی پرداخت رو خودم تعیین می‌کنم --}}
                            <p>نحوه‌ی پرداخت بر اساس توافق و قرارداد مشخص می‌شه. معمولاً یک بخش در ابتدا و بقیه در مراحل مشخص یا پایان پروژه. جزئیات رو بعد از مشاوره‌ی اولیه باهات در میون می‌ذاریم.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="pr-final-cta">
        <div class="container">
            <div class="pr-final-grid">
                <div class="pr-final-card">
                    <h3>آماده‌ای؟</h3>
                    <p>پلنت رو انتخاب کن و شروع کن</p>
                    <a href="#plans" class="pr-final-btn pr-final-btn-primary">انتخاب پلن</a>
                </div>

                <div class="pr-final-card">
                    <h3>هنوز مطمئن نیستی؟</h3>
                    <p>بیا یه گپ بزنیم، مشاوره رایگانه</p>
                    <a href="{{ route('contact') }}" class="pr-final-btn">مشاوره‌ی رایگان</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script src="{{ asset('site/js/pricing.js') }}" defer></script>
@endpush
