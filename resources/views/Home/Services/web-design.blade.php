{{-- resources/views/Home/Services/web-design.blade.php --}}

@extends('Home.Layouts.layout')

@section('title', 'طراحی وب‌سایت | Moradix Studio')

@section('description',
    'خدمات طراحی و توسعه‌ی وب‌سایت با Laravel و کدنویسی اختصاصی. برای شرکت‌ها، آموزشگاه‌ها، دفاتر
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

                    {{-- جایگزین mockup قدیمی داخل هیروی web-design.blade.php (فقط همان بخش تصویر، نه کل هیرو) --}}
                    <div class="wd-art" aria-hidden="true">
                        <span class="wd-glow"></span>

                        {{-- مرورگر: سایت از وایرفریم تا طراحی نهایی ساخته می‌شود --}}
                        <div class="wd-win">
                            <div class="wd-bar"><i></i><i></i><i></i><span dir="ltr">your-website.ir</span></div>

                            <div class="wd-screen" dir="rtl">
                                <span class="wd-grid"></span>

                                {{-- نوار بالا --}}
                                <div class="wd-blk" style="--k:0;--s:6;--t:6;--w:15;--h:6"><span
                                        class="wd-fill wd-f-bar is-dark"></span></div>
                                <div class="wd-blk" style="--k:1;--s:28;--t:7.5;--w:7;--h:3"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:2;--s:37;--t:7.5;--w:7;--h:3"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:3;--s:46;--t:7.5;--w:7;--h:3"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:4;--s:80;--t:5.5;--w:14;--h:7;--r:99px"><span
                                        class="wd-fill wd-f-pill is-teal"></span></div>

                                {{-- تیتر و متن --}}
                                <div class="wd-blk" style="--k:5;--s:6;--t:24;--w:50;--h:8"><span
                                        class="wd-fill wd-f-bar is-dark"></span></div>
                                <div class="wd-blk" style="--k:6;--s:6;--t:35;--w:34;--h:8"><span
                                        class="wd-fill wd-f-bar is-dark"></span></div>
                                <div class="wd-blk" style="--k:7;--s:6;--t:48;--w:46;--h:2.6;--r:4px"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:8;--s:6;--t:53;--w:38;--h:2.6;--r:4px"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>

                                {{-- دکمه‌ها --}}
                                <div class="wd-blk" style="--k:9;--s:6;--t:62;--w:16;--h:8;--r:99px"><span
                                        class="wd-fill wd-f-pill is-teal"></span></div>
                                <div class="wd-blk" style="--k:10;--s:24;--t:62;--w:16;--h:8;--r:99px"><span
                                        class="wd-fill wd-f-pill is-line"></span></div>

                                {{-- تصویر اصلی هیرو --}}
                                <div class="wd-blk" style="--k:11;--s:58;--t:20;--w:36;--h:46;--r:16px">
                                    <span class="wd-fill wd-f-img">
                                        <span class="wd-circle"></span>
                                        <span class="wd-chart"><i style="--h:42%"></i><i style="--h:68%"></i><i
                                                style="--h:54%"></i><i style="--h:86%"></i></span>
                                        <span class="wd-glass"><b></b><b class="s"></b></span>
                                    </span>
                                </div>

                                {{-- کارت‌ها --}}
                                <div class="wd-blk" style="--k:12;--s:6;--t:76;--w:27;--h:18;--r:12px"><span
                                        class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b class="s"></b></span>
                                </div>
                                <div class="wd-blk" style="--k:13;--s:36.5;--t:76;--w:27;--h:18;--r:12px"><span
                                        class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b class="s"></b></span>
                                </div>
                                <div class="wd-blk" style="--k:14;--s:67;--t:76;--w:27;--h:18;--r:12px"><span
                                        class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b class="s"></b></span>
                                </div>

                                {{-- ابزار طراحی: کادر انتخاب و نشانگر --}}
                                <span class="wd-sel"></span>
                                <span class="wd-cursor"><svg viewBox="0 0 24 24">
                                        <path d="M5 3l14 7-6 2-2 6z" fill="#0A0A0A" stroke="#fff" stroke-width="1.6"
                                            stroke-linejoin="round" />
                                    </svg></span>
                            </div>
                        </div>

                        {{-- نسخه‌ی موبایل --}}
                        <div class="wd-phone">
                            <span class="wd-ph-notch"></span>
                            <span class="wd-ph-bar"></span>
                            <span class="wd-ph-l"></span><span class="wd-ph-l s"></span>
                            <span class="wd-ph-img"></span>
                            <span class="wd-ph-btn"></span>
                            <span class="wd-ph-card"></span>
                        </div>

                        {{-- پالت رنگ --}}
                        <div class="wd-pal">
                            <span class="sw sw-w"></span><span class="sw sw-k"></span><span class="sw sw-t"></span>
                            <b dir="ltr">Aa</b>
                        </div>

                        {{-- نتیجه --}}
                        <div class="wd-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            ریسپانسیو و آماده‌ی انتشار
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
                                <span>می‌خوای آنلاین محصول بفروشی ← <a href="{{ route('services.ecommerce') }}"
                                        class="sv-alt-link">فروشگاه اینترنتی
                                        مناسب‌تره</a></span>
                                {{-- DYNAMIC: لینک به صفحه‌ی فروشگاه اینترنتی --}}
                            </li>
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>سایت داری و فقط ظاهرش قدیمیه ← <a href="{{ route('services.redesign') }}"
                                        class="sv-alt-link">بازطراحی و
                                        ارتقا</a></span>
                                {{-- DYNAMIC: لینک به صفحه‌ی بازطراحی --}}
                            </li>
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>سایتت هست ولی دیده نمی‌شه ← <a href="{{ route('services.seo') }}"
                                        class="sv-alt-link">سئو</a></span>
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

                <p class="sv-process-cta">
                    هنوز نمی‌دونی کدوم خدمت برات مناسبه؟
                    <a href="{{ route('contact') }}">برای مشاوره رایگان با ما در ارتباط باش.</a>
                </p>

            </div>
        </section>

        {{-- Related Projects --}}
        @if (isset($relatedProjects) && $relatedProjects->isNotEmpty())
            <section class="pf-related-section" id="related-projects">
                <div class="container">

                    <div class="pf-related-heading">
                        <div>
                            <h2>پروژه‌های مرتبط</h2>
                            <p>
                                نمونه‌کارهای بیشتری را در همین زمینه بررسی کنید.
                            </p>
                        </div>

                        <a href="{{ route('portfolio') }}" class="pf-related-all">
                            مشاهده همه پروژه‌ها
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M19 12H5M11 18l-6-6 6-6" />
                            </svg>
                        </a>
                    </div>

                    <div class="pf-related-grid">
                        @foreach ($relatedProjects as $relatedProject)
                            <div class="pf-related-card">

                                <div class="pf-related-image">
                                    @if ($relatedProject->primary_image)
                                        <img src="{{ asset('uploads/projects/images/' . $relatedProject->primary_image) }}"
                                            alt="{{ $relatedProject->title }}" loading="lazy">
                                    @else
                                        <div class="pf-related-placeholder">
                                            <span>Moradix Studio</span>
                                        </div>
                                    @endif

                                    <span class="pf-related-arrow" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <path d="M7 17 17 7M7 7h10v10" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="pf-related-content">
                                    @if ($relatedProject->category)
                                        <span class="pf-related-category">
                                            {{ $relatedProject->category->name }}
                                        </span>
                                    @endif

                                    <h3>{{ $relatedProject->title }}</h3>

                                    @if ($relatedProject->short_description)
                                        <p>{{ $relatedProject->short_description }}</p>
                                    @endif
                                </div>

                                <a href="{{ route('portfolio.show', $relatedProject->slug) }}" class="pf-related-link">
                                    مشاهده جزئیات
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M19 12H5M11 18l-6-6 6-6" stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        @endif


        {{-- Related Services --}}
        <section class="sv-section sv-related">
            <div class="container">
                <h2 class="sv-section-title">خدمات مرتبط</h2>

                <div class="sv-related-grid">
                    <a href="{{ route('services.ecommerce') }}" class="sv-related-card">
                        {{-- DYNAMIC: لینک به صفحه‌ی فروشگاه اینترنتی --}}
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3>فروشگاه اینترنتی</h3>
                        <p>برای فروش آنلاین محصولات</p>
                    </a>

                    <a href="{{ route('services.seo') }}" class="sv-related-card">
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


    @endsection

    @push('scripts')
        <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
    @endpush
