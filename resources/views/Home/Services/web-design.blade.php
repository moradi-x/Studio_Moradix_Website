{{-- resources/views/Home/Services/web-design.blade.php --}}

@extends('Home.Layouts.layout')

@section('title', 'طراحی وب‌سایت | Moradix Studio')

@section('description', 'خدمات طراحی و توسعه‌ی وب‌سایت با Laravel و کدنویسی اختصاصی. برای شرکت‌ها، آموزشگاه‌ها، دفاتر
    گردشگری و نمونه‌کار شخصی. مشاوره‌ی رایگان.')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('site/css/services/service-page.css') }}">
    @endpush

@section('content')
    <div class="sv-page">
        {{-- Breadcrumb --}}
        <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                     <li class="sv-breadcrumb-item">
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('services') }}">خدمات</a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        طراحی وب‌سایت
                    </li>
                </ol>
            </div>
        </nav>

        {{-- Hero Section --}}
        <section class="sv-hero">
            <div class="container">
                <div class="sv-hero-content">
                    <div class="sv-hero-text">
                        <h1 class="sv-hero-title">طراحی وب‌سایت</h1>
                        <p class="sv-hero-subtitle">سایتی که کسب‌وکارت رو درست معرفی کنه و مشتری رو به تو برسونه</p>
                        <p class="sv-hero-desc">برای شرکت، آموزشگاه، دفتر گردشگری یا نمونه‌کار شخصی. طراحی و کدنویسی
                            اختصاصی، از اولین مشاوره تا بعد از تحویل کنارتیم.</p>
                        <div class="sv-hero-buttons">
                            <a href="{{ route('contact') }}" class="btn btn-primary">مشاوره‌ی رایگان</a>
                            {{-- بعداً: {{ route('pricing') }}?tab=website برای باز شدن تب طراحی سایت --}}
                            <a href="{{ route('pricing') }}" class="btn btn-outline">مقایسه‌ی پلن‌ها و تعرفه‌ها</a>
                        </div>
                    </div>

                    <div class="sv-hero-visual">
                        {{-- جایگزینی با اسکرین‌شات واقعی از پروژه‌های خودم --}}
                        <div class="sv-mockup-wrapper">
                            {{-- Desktop Browser --}}
                            <div class="sv-mockup-desktop">
                                <div class="sv-mockup-browser-bar">
                                    <span class="sv-browser-dot sv-dot-red"></span>
                                    <span class="sv-browser-dot sv-dot-yellow"></span>
                                    <span class="sv-browser-dot sv-dot-green"></span>
                                </div>
                                <div class="sv-mockup-screen">
                                    <div class="sv-mockup-content">
                                        <div class="sv-content-line sv-line-header"></div>
                                        <div class="sv-content-line sv-line-short"></div>
                                        <div class="sv-content-line sv-line-medium"></div>
                                        <div class="sv-content-button"></div>
                                    </div>
                                </div>
                            </div>

                            {{-- Mobile Device --}}
                            <div class="sv-mockup-mobile">
                                <div class="sv-mobile-notch"></div>
                                <div class="sv-mockup-screen sv-mobile-screen">
                                    <div class="sv-mockup-content">
                                        <div class="sv-content-line sv-line-short"></div>
                                        <div class="sv-content-line sv-line-medium"></div>
                                        <div class="sv-content-button sv-button-small"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- What Changes Section --}}
        <section class="sv-section sv-changes">
            <div class="container">
                <h2 class="sv-section-title">سایت برای کسب‌وکارت چیو عوض می‌کنه؟</h2>
                <div class="sv-changes-grid">
                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <p>مشتری‌هات قبل از تماس، اسمت رو توی گوگل جستجو می‌کنن. اگه چیزی پیدا نکنن، سراغ رقیبت می‌رن.</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <p>هر بار که کسی می‌پرسه "کارهات چیه؟" لازم نیست عکس‌ها رو از گوشی برای یکی‌یکی بفرستی.</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <p>یه صفحه‌ی اینستاگرام و یه شماره، برای اعتماد کافی نیست؛ آدم‌ها دنبال یه آدرس جدی می‌گردن.</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                        <p>می‌خوای مستقیم و بدون واسطه معرفی بشی و پیام مشتری مستقیم به خودت برسه.</p>
                    </div>
                </div>
                <p class="sv-changes-note">لازم نیست از فنی چیزی بدونی. از ایده تا تحویل، همه‌ی بخش فنی با ماست.</p>
            </div>
        </section>

        {{-- Is This For You Section --}}
        <section class="sv-section sv-fit">
            <div class="container">
                <h2 class="sv-section-title">این خدمت مناسب توئه اگه...</h2>
                <div class="sv-fit-grid">
                    
                    {{-- Good Fit --}}
                    <div class="sv-fit-card sv-fit-yes">
                        <h3 class="sv-fit-title">مناسب توئه</h3>
                        <ul class="sv-fit-list">
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>می‌خوای کسب‌وکارت، خدماتت یا نمونه‌کارهات رو حرفه‌ای معرفی کنی</span>
                            </li>
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>سایت نداری و می‌خوای از صفر و درست شروع کنی</span>
                            </li>
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>یه سایت معرفی ساده یا شرکتی کامل می‌خوای که خودت بتونی محتواش رو ویرایش کنی</span>
                            </li>
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>می‌خوای مشتری از طریق فرم تماس یا راه‌های ارتباطی بهت برسه</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Not a Fit --}}
                    <div class="sv-fit-card sv-fit-no">
                    <h3 class="sv-fit-title">مناسب تو نیست اگه...</h3>
                        <ul class="sv-fit-list">
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>می‌خوای آنلاین محصول بفروشی ← <a href="#" class="sv-alt-link">فروشگاه اینترنتی
                                        مناسب‌تره</a></span>
                                {{-- DYNAMIC: لینک به صفحه‌ی فروشگاه اینترنتی --}}
                            </li>
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>سایت داری و فقط ظاهرش قدیمیه ← <a href="#" class="sv-alt-link">بازطراحی و
                                        ارتقا</a></span>
                                {{-- DYNAMIC: لینک به صفحه‌ی بازطراحی --}}
                            </li>
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>سایتت هست ولی دیده نمی‌شه ← <a href="#" class="sv-alt-link">سئو</a></span>
                                {{-- DYNAMIC: لینک به صفحه‌ی سئو --}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- Types Section --}}
        <section class="sv-section sv-types">
            <div class="container">
                <h2 class="sv-section-title">برای چه نوع کسب‌وکاری؟</h2>
                <div class="sv-types-grid">
                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <h3>شرکتی</h3>
                        <p>معرفی شرکت، خدمات، تیم و راه‌های تماس</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3>گردشگری</h3>
                        <p>معرفی تورها، مقاصد و رزرو آنلاین</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <h3>آموزشی و دانشجویی</h3>
                        <p>معرفی دوره‌ها، اساتید و ثبت‌نام</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h3>رزومه و نمونه‌کار</h3>
                        <p>نمایش تخصص، پروژه‌ها و راه‌های ارتباطی</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Plans Section (No Price) --}}
        <section class="sv-section sv-plans">
            <div class="container">
                <h2 class="sv-section-title">کدوم پلن مناسب توئه؟</h2>
                <div class="sv-plans-grid">
                    {{-- Basic Plan --}}
                    <div class="sv-plan-card">
                        <h3 class="sv-plan-name">پایه</h3>
                        <p class="sv-plan-for">ویترین ساده و نمونه‌کار</p>
                        <ul class="sv-plan-features">
                            <li>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>تا ۶ صفحه</span>
                            </li>
                            <li>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>پنل مدیریت برای ویرایش متن و تصاویر</span>
                            </li>
                            <li>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>۱ ماه پشتیبانی فنی رایگان</span>
                            </li>
                        </ul>
                    </div>

                    {{-- Pro Plan (Featured) --}}
                    <div class="sv-plan-card sv-plan-featured">
                        <span class="sv-plan-badge">پیشنهاد ما</span>
                        <h3 class="sv-plan-name">حرفه‌ای</h3>
                        <p class="sv-plan-for">سایت شرکتی کامل و رشدپذیر</p>
                        <ul class="sv-plan-features">
                            <li>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>طراحی رابط کاربری اختصاصی</span>
                            </li>
                            <li>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>بلاگ و سئوی فنی</span>
                            </li>
                            <li>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>۲ ماه پشتیبانی فنی رایگان</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sv-plans-cta">
                    <a href="{{ route('pricing') }}" class="btn btn-outline">مقایسه‌ی کامل پلن‌ها و تعرفه‌ها</a>
                </div>
            </div>
        </section>

        {{-- Deliverables Section --}}
        <section class="sv-section sv-deliverables">
            <div class="container">
                <h2 class="sv-section-title">چی تحویل می‌گیری؟</h2>
                <div class="sv-deliverables-grid">
                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <h3>طراحی ریسپانسیو</h3>
                        <p>موبایل، تبلت و دسکتاپ</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <h3>کدنویسی اختصاصی و تمیز</h3>
                        <p>برای توسعه‌های آینده</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                        </svg>
                        <h3>پنل مدیریت محتوا</h3>
                        <p>برای ویرایش متن و تصاویر</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <h3>آموزش کار با پنل</h3>
                        <p>ویدیو یا جلسه‌ی آنلاین</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <h3>قرارداد و زمان‌بندی شفاف</h3>
                        <p>از قبل از شروع</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <h3>پشتیبانی فنی رایگان</h3>
                        <p>بعد از تحویل</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Process Section --}}
        <section class="sv-section sv-process">
            <div class="container">
                <h2 class="sv-section-title">مراحل کار</h2>
                <div class="sv-process-steps">
                    <div class="sv-process-step">
                        <div class="sv-step-number">۱</div>
                        <h3>نیازسنجی و مشاوره‌ی رایگان</h3>
                        <p>درباره‌ی پروژه حرف می‌زنیم</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۲</div>
                        <h3>تعیین محدوده و هزینه</h3>
                        <p>شفاف و قبل از شروع</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۳</div>
                        <h3>طراحی و توسعه</h3>
                        <p>مرحله‌به‌مرحله با گزارش پیشرفت</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۴</div>
                        <h3>تست و تحویل</h3>
                        <p>بررسی، آموزش و تحویل نهایی</p>
                    </div>
                </div>
               
            </div>
        </section>

        {{-- Portfolio Section --}}
        <section class="sv-section sv-portfolio">
            <div class="container">
                <h2 class="sv-section-title">نمونه‌کار مرتبط</h2>
                <div class="sv-portfolio-grid">
                    {{-- DYNAMIC: نمونه‌کارهای مرتبط با طراحی وب‌سایت --}}
                    <article class="sv-portfolio-card">
                        <div class="sv-portfolio-image">
                            {{-- جایگزین با تصویر واقعی پروژه --}}
                            <div class="sv-portfolio-placeholder">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="sv-portfolio-content">
                            <p class="sv-portfolio-type">سایت شرکتی</p>
                            <h3 class="sv-portfolio-title">نام پروژه</h3>
                            <div class="sv-portfolio-tags">
                                <span class="sv-tag">Laravel</span>
                                <span class="sv-tag">طراحی اختصاصی</span>
                            </div>
                        </div>
                        <a href="#" class="sv-portfolio-link">
                            مشاهده پروژه
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                    </article>

                    <article class="sv-portfolio-card">
                        <div class="sv-portfolio-image">
                            <div class="sv-portfolio-placeholder">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="sv-portfolio-content">
                            <p class="sv-portfolio-type">رزومه و نمونه‌کار</p>
                            <h3 class="sv-portfolio-title">نام پروژه</h3>
                            <div class="sv-portfolio-tags">
                                <span class="sv-tag">Laravel</span>
                                <span class="sv-tag">مینیمال</span>
                            </div>
                        </div>
                        <a href="#" class="sv-portfolio-link">
                            مشاهده پروژه
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                    </article>
                </div>
                <div class="sv-portfolio-all">
                    <a href="{{ route('home') }}#portfolio">مشاهده‌ی همه‌ی نمونه‌کارها</a>
                </div>
            </div>
        </section>

        {{-- FAQ Section --}}
        <section class="sv-section sv-faq">
            <div class="container">
                <h2 class="sv-section-title">سوالات متداول</h2>
                <div class="sv-faq-list">
                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>چقدر طول می‌کشه؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                {{-- TODO: بازه‌ی زمانی رو خودم تعیین می‌کنم --}}
                                <p>زمان به تعداد صفحات و آماده بودن محتوا بستگی داره. بعد از مشاوره‌ی رایگان، یک زمان‌بندی
                                    مشخص و شفاف قبل از شروع بهت می‌دیم.</p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>هزینه چطور مشخص می‌شه؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>بعد از مشاوره‌ی رایگان و شنیدن نیازت، محدوده‌ی کار (چند صفحه، چه قابلیت‌هایی) رو مشخص
                                    می‌کنیم و هزینه رو شفاف بهت می‌گیم. می‌تونی <a href="{{ route('pricing') }}">تعرفه‌های
                                        پایه رو اینجا ببینی</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>بعد از تحویل خودم می‌تونم متن و عکس‌ها رو عوض کنم؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>بله، با پنل مدیریت و آموزشی که تحویل می‌دیم، خودت می‌تونی متن‌ها، تصاویر و محتوای صفحات
                                    رو ویرایش کنی بدون نیاز به دانش فنی.</p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>دامنه و هاست هم شامل می‌شه؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>دامنه و هاست جدا حساب می‌شن و خودت باید تهیه کنی. ولی در انتخاب و راه‌اندازیشون کمکت
                                    می‌کنیم و نصب سایت رو روی هاست انجام می‌دیم.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Related Services --}}
        <section class="sv-section sv-related">
            <div class="container">
                <h2 class="sv-section-title">خدمات مرتبط</h2>
                <div class="sv-related-grid">
                    <a href="#" class="sv-related-card">
                        {{-- DYNAMIC: لینک به صفحه‌ی فروشگاه اینترنتی --}}
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3>فروشگاه اینترنتی</h3>
                        <p>برای فروش آنلاین محصولات</p>
                    </a>

                    <a href="#" class="sv-related-card">
                        {{-- DYNAMIC: لینک به صفحه‌ی سئو --}}
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <h3>سئو و بهینه‌سازی</h3>
                        <p>دیده‌شدن و سرعت بهتر</p>
                    </a>
                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section class="sv-final-cta">
            <div class="container">
                <div class="sv-final-content">
                    <h2>درباره‌ی سایتت صحبت کنیم؟</h2>
                    <p>مشاوره‌ی اولیه رایگانه</p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">مشاوره‌ی رایگان</a>
                </div>
            </div>
        </section>

        {{-- Mobile Sticky CTA --}}
        <div class="sv-mobile-sticky" id="mobileStickyBar" hidden>
            <div class="sv-mobile-sticky-content">
                <a href="{{ route('contact') }}" class="sv-mobile-sticky-btn">مشاوره‌ی رایگان</a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
@endpush
