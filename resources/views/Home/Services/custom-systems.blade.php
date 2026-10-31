@extends('Home.Layouts.layout')

@section('title', 'طراحی سامانه‌های اختصاصی | Moradix Studio')

@section('description',
    'طراحی و توسعه سامانه‌های نرم‌افزاری اختصاصی برای مدیریت فرایندها، اتوماسیون کسب‌وکار، تحلیل
    اطلاعات و حل مسائل پیچیده عملیاتی.')

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
                        طراحی سامانه‌های اختصاصی
                    </li>
                </ol>
            </div>
        </nav>

        {{-- Hero Section --}}
        <section class="sv-hero">
            <div class="container">
                <div class="sv-hero-content">

                    <div class="sv-hero-text">
                        <h1 class="sv-hero-title">
                            طراحی سامانه‌های اختصاصی
                        </h1>

                        <p class="sv-hero-subtitle">
                            وقتی کسب‌وکارت به راهکاری فراتر از یک سایت معمولی نیاز داره
                        </p>



                        <p class="sv-hero-desc">سامانه‌ای متناسب با فرایندهای کسب‌وکارت طراحی می‌کنیم؛ از
                            مدیریت عملیات و اتوماسیون تا تحلیل اطلاعات و توسعه امکانات آینده.</p>

                        <div class="sv-hero-buttons">
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                مشاوره رایگان
                            </a>

                            <a href="{{ route('pricing') }}" class="btn btn-outline">
                                مقایسه پلن‌ها و تعرفه‌ها
                            </a>
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

                <h2 class="sv-section-title">
                    سامانه اختصاصی چه چیزی رو تغییر می‌ده؟
                </h2>

                <div class="sv-changes-grid">

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>

                        <p>اطلاعات و فعالیت‌ها رو یکپارچه و منظم مدیریت کن.</p>

                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>

                        <p>کارهای تکراری رو خودکار کن و در زمان صرفه‌جویی کن.</p>

                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>

                        <p>با گزارش‌های کاربردی، عملکرد و روند کارها رو بررسی کن.</p>

                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-3a2 2 0 00-2-2H6a2 2 0 00-2 2v3a2 2 0 002 2zm10-9V7a4 4 0 00-8 0v3h8z" />
                        </svg>

                        <p>دسترسی کاربران و سوابق فعالیت‌ها رو دقیق مدیریت کن.</p>
                    </div>

                </div>

                <p class="sv-changes-note">
                    اول مسئله و فرایند کاری رو بررسی می‌کنیم؛ بعد مشخص می‌کنیم
                    چه بخش‌هایی واقعاً به نرم‌افزار اختصاصی نیاز دارن.
                </p>

            </div>
        </section>

        {{-- Is This For You Section --}}
        <section class="sv-section sv-fit">
            <div class="container">

                <h2 class="sv-section-title">
                    این خدمت مناسب توئه اگه...
                </h2>

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
                                <span>
                                    فرایندهای کاری پیچیده‌ای داری که با فایل‌ها و ابزارهای فعلی به‌سختی مدیریت می‌شن.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>
                                    به گردش کار چندمرحله‌ای، تأیید درخواست‌ها یا تخصیص خودکار وظایف نیاز داری.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>
                                    می‌خوای اطلاعات چند بخش رو به هم متصل کنی و گزارش‌های عملیاتی بگیری.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>
                                    قوانین و محاسبات کسب‌وکارت خاصه و ابزارهای عمومی پاسخ‌گوی نیازت نیستن.
                                </span>
                            </li>
                        </ul>
                    </div>

                    {{-- Not a Fit --}}
                    <div class="sv-fit-card sv-fit-no">
                        <h3 class="sv-fit-title">احتمالاً مناسب تو نیست اگه...</h3>

                        <ul class="sv-fit-list">
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>
                                    فقط به معرفی شرکت و خدمات نیاز داری؛
                                    <a href="{{ route('services.web-design') }}" class="sv-alt-link">طراحی وب‌سایت</a>
                                    انتخاب مناسب‌تریه.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>
                                    فقط می‌خوای ظاهر یا عملکرد سایت فعلیت بهتر بشه؛
                                    <a href="{{ route('services.redesign') }}" class="sv-alt-link">بازطراحی و ارتقای
                                        سایت</a>
                                    رو بررسی کن.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>
                                    نیازت با یک ابزار آماده و کم‌هزینه به‌خوبی برطرف می‌شه و توسعه اختصاصی ارزش اضافه‌ای
                                    ایجاد نمی‌کنه.
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        {{-- Types Section --}}
        <section class="sv-section sv-types">
            <div class="container">

                <h2 class="sv-section-title">
                    چه نوع سامانه‌هایی می‌تونیم بسازیم؟
                </h2>

                <div class="sv-types-grid">

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>

                        <h3>سامانه‌های مدیریتی</h3>
                        <p>
                            مدیریت درخواست‌ها، وظایف، پروژه‌ها، منابع و گردش
                            اطلاعات بین اعضای تیم.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>

                        <h3>اتوماسیون فرایندها</h3>
                        <p>
                            اجرای خودکار قوانین، یادآوری موعدها، ارجاع کارها و
                            پیگیری مراحل انجام عملیات.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3v18h18M18 17V9m-5 8V5m-5 12v-4" />
                        </svg>

                        <h3>تحلیل و گزارش‌گیری</h3>
                        <p>
                            ترکیب داده‌ها، محاسبه شاخص‌ها، شناسایی تأخیرها و
                            ارائه گزارش برای تصمیم‌گیری.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5V4H2v16h5m5-16v16m-5-8h5m-5 4h5" />
                        </svg>

                        <h3>پلتفرم‌های تخصصی</h3>
                        <p>
                            ارتباط چند گروه کاربری، مدیریت سفارش‌ها یا درخواست‌ها
                            و اجرای قوانین متناسب با هر طرف.
                        </p>
                    </div>



                </div>
            </div>
        </section>



        {{-- Deliverables Section --}}
        <section class="sv-section sv-deliverables">
            <div class="container">

                <h2 class="sv-section-title">
                    در پایان چه چیزی تحویل می‌گیری؟
                </h2>

                <div class="sv-deliverables-grid">

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h3>منطق کاری مشخص</h3>
                        <p>قوانین و فرایندهای تعریف‌شده بر اساس نیاز پروژه</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m16 0v-2a4 4 0 00-3-3.87M12 7a4 4 0 11-8 0 4 4 0 018 0zm8 4a4 4 0 100-8" />
                        </svg>
                        <h3>مدیریت کاربران</h3>
                        <p>نقش‌ها و دسترسی‌های متناسب با مسئولیت افراد</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3v18h18M18 17V9m-5 8V5m-5 12v-4" />
                        </svg>
                        <h3>گزارش‌های کاربردی</h3>
                        <p>نمایش وضعیت کارها و اطلاعات موردنیاز تصمیم‌گیری</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v13a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z" />
                        </svg>
                        <h3>ثبت سوابق عملیات</h3>
                        <p>پیگیری تغییرات مهم و تاریخچه فعالیت‌ها</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        <h3>ساختار توسعه‌پذیر</h3>
                        <p>امکان افزودن قابلیت‌های جدید در مراحل بعدی</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <h3>مستندات و آموزش</h3>
                        <p>راهنمای استفاده و توضیح بخش‌های اصلی سامانه</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Process Section --}}
        <section class="sv-section sv-process">
            <div class="container">

                <h2 class="sv-section-title">
                    مراحل طراحی و توسعه سامانه
                </h2>

                <div class="sv-process-steps">

                    <div class="sv-process-step">
                        <div class="sv-step-number">۱</div>
                        <h3>شناخت مسئله و نیازسنجی</h3>
                        <p>بررسی کاربران، اطلاعات و فرایندهای فعلی</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۲</div>
                        <h3>تعریف محدوده و راهکار</h3>
                        <p>تعیین قابلیت‌های ضروری، قوانین و زمان‌بندی</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۳</div>
                        <h3>توسعه مرحله‌ای</h3>
                        <p>پیاده‌سازی قابلیت‌ها و بررسی نتیجه هر مرحله</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۴</div>
                        <h3>آزمایش و تحویل</h3>
                        <p>بررسی سناریوها، آموزش کاربران و تحویل سامانه</p>
                    </div>

                </div>
                <p class="sv-process-cta">
                    هنوز نمی‌دونی کدوم خدمت برات مناسبه؟
                    <a href="{{ route('contact') }}">برای مشاوره رایگان با ما در ارتباط باش.</a>
                </p>
            </div>
        </section>

        {{-- Portfolio Section --}}
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

                <h2 class="sv-section-title">
                    خدمات مرتبط
                </h2>

                <div class="sv-related-grid">

                    <a href="{{ route('services.web-design') }}" class="sv-related-card">
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>

                        <h3>طراحی وب‌سایت</h3>
                        <p>برای معرفی خدمات، شرکت یا محصولات</p>
                    </a>

                    <a href="{{ route('services.redesign') }}" class="sv-related-card">
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h5M20 20v-5h-5M5.64 18.36A9 9 0 0018.36 5.64M18.36 18.36A9 9 0 015.64 5.64" />
                        </svg>

                        <h3>بازطراحی و ارتقای سایت</h3>
                        <p>برای اصلاح و توسعه سامانه یا سایت فعلی</p>
                    </a>

                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
@endpush
