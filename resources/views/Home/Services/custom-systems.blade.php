@extends('Home.Layouts.layout')

@section('title', 'طراحی سامانه‌های اختصاصی | Moradix Studio')

@section('description', 'طراحی و توسعه سامانه‌های نرم‌افزاری اختصاصی برای مدیریت فرایندها، اتوماسیون کسب‌وکار، تحلیل
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

                        <p class="sv-hero-desc">
                            از مدیریت فرایندهای پیچیده و گردش کارهای چندمرحله‌ای
                            تا تحلیل اطلاعات و اتوماسیون عملیات؛ سامانه‌ای طراحی
                            می‌کنیم که با منطق واقعی کسب‌وکارت هماهنگ باشه و
                            همراه با نیازهای آینده توسعه پیدا کنه.
                        </p>

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

                        <p>
                            اطلاعات پراکنده و فایل‌های متعدد رو به یک فرایند
                            منظم تبدیل می‌کنه تا سوابق و وضعیت کارها قابل پیگیری باشن.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>

                        <p>
                            کارهای تکراری و دستی رو با قوانین مشخص خودکار می‌کنه
                            تا زمان کمتری صرف ورود اطلاعات و پیگیری بشه.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>

                        <p>
                            وضعیت عملیات، عملکرد تیم و نقاط تأخیر رو با گزارش‌های
                            کاربردی مشخص می‌کنه تا تصمیم‌ها بر اساس اطلاعات باشن.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-3a2 2 0 00-2-2H6a2 2 0 00-2 2v3a2 2 0 002 2zm10-9V7a4 4 0 00-8 0v3h8z" />
                        </svg>

                        <p>
                            دسترسی هر فرد رو بر اساس مسئولیتش مشخص می‌کنه و
                            تغییرات مهم و سوابق عملیات رو قابل بررسی نگه می‌داره.
                        </p>
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
            </div>
        </section>

        {{-- Portfolio Section --}}
        <section class="sv-section sv-portfolio">
            <div class="container">

                <h2 class="sv-section-title">
                    نمونه‌هایی از سامانه‌های قابل توسعه
                </h2>

                <div class="sv-portfolio-grid">

                    {{-- Example 1 --}}
                    <article class="sv-portfolio-card">
                        <div class="sv-portfolio-image">
                            <div class="sv-portfolio-placeholder">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 3v18h18M18 17V9m-5 8V5m-5 12v-4" />
                                </svg>
                            </div>
                        </div>

                        <div class="sv-portfolio-content">
                            <p class="sv-portfolio-type">سامانه عملیاتی</p>
                            <h3 class="sv-portfolio-title">مدیریت فرایندهای کاری</h3>

                            <div class="sv-portfolio-tags">
                                <span class="sv-tag">گردش کار</span>
                                <span class="sv-tag">گزارش‌گیری</span>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="sv-portfolio-link">
                            بررسی ایده مشابه
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                    </article>

                    {{-- Example 2 --}}
                    <article class="sv-portfolio-card">
                        <div class="sv-portfolio-image">
                            <div class="sv-portfolio-placeholder">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 17v-2a4 4 0 014-4h2m-2-4h.01M3 3h18v18H3z" />
                                </svg>
                            </div>
                        </div>

                        <div class="sv-portfolio-content">
                            <p class="sv-portfolio-type">سامانه اطلاعاتی</p>
                            <h3 class="sv-portfolio-title">مدیریت داده و گزارش‌ها</h3>

                            <div class="sv-portfolio-tags">
                                <span class="sv-tag">تحلیل اطلاعات</span>
                                <span class="sv-tag">داشبورد</span>
                            </div>
                        </div>

                        <a href="{{ route('contact') }}" class="sv-portfolio-link">
                            بررسی ایده مشابه
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                    </article>

                </div>

                <div class="sv-portfolio-all">
                    <a href="{{ route('contact') }}">
                        درباره سامانه موردنیازت صحبت کنیم
                    </a>
                </div>

            </div>
        </section>

        {{-- FAQ Section --}}
        <section class="sv-section sv-faq">
            <div class="container">

                <h2 class="sv-section-title">
                    سوالات متداول
                </h2>

                <div class="sv-faq-list">

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>سامانه اختصاصی چه تفاوتی با سایت معمولی داره؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    سایت معمولی بیشتر برای معرفی محتوا، خدمات یا محصولات استفاده می‌شه.
                                    سامانه اختصاصی علاوه بر رابط کاربری، منطق کاری، قوانین، ارتباط بین
                                    اطلاعات، نقش‌های مختلف و فرایندهای عملیاتی متناسب با نیاز پروژه داره.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>برای شروع باید تمام امکانات مشخص باشن؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    نه. ابتدا مسئله اصلی و فرایندهای ضروری رو مشخص می‌کنیم.
                                    می‌شه نسخه اولیه‌ای با قابلیت‌های ضروری ساخت و بعد از بررسی
                                    استفاده واقعی، امکانات بعدی رو به‌صورت مرحله‌ای توسعه داد.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>هزینه طراحی سامانه چطور مشخص می‌شه؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    هزینه به تعداد فرایندها، نقش‌های کاربری، پیچیدگی قوانین،
                                    گزارش‌ها، اتصال به سرویس‌های دیگر و محدوده نسخه اولیه بستگی داره.
                                    بعد از بررسی نیازها، محدوده و برآورد پروژه مشخص می‌شه.
                                    می‌تونی <a href="{{ route('pricing') }}">تعرفه‌های پایه</a> رو هم ببینی.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>آیا سامانه بعداً قابل توسعه است؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    بله. ساختار پروژه از ابتدا با توجه به محدوده و نیازهای قابل پیش‌بینی
                                    طراحی می‌شه تا در صورت نیاز، قابلیت‌ها، نقش‌های جدید، گزارش‌ها یا
                                    اتصال به سرویس‌های دیگر به آن اضافه بشن.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" aria-expanded="false">
                            <span>اگر بخشی از فرایند با ابزارهای فعلی انجام بشه، باز هم سامانه اختصاصی لازمه؟</span>
                            <svg class="sv-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    نه لزوماً. ابتدا راهکار فعلی رو بررسی می‌کنیم. اگر ابزار آماده یا
                                    ترکیبی از ابزارهای موجود مسئله رو با هزینه و پیچیدگی کمتر حل کنه،
                                    ساخت سامانه از صفر همیشه انتخاب بهتری نیست.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Related Services --}}
        <section class="sv-section sv-related">
            <div class="container">

                <h2 class="sv-section-title">
                    خدمات مرتبط
                </h2>

                <div class="sv-related-grid">

                    <a href="{{ route('services') }}" class="sv-related-card">
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>

                        <h3>طراحی وب‌سایت</h3>
                        <p>برای معرفی خدمات، شرکت یا محصولات</p>
                    </a>

                    <a href="{{ route('services') }}" class="sv-related-card">
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

        {{-- Final CTA --}}
        <section class="sv-final-cta">
            <div class="container">
                <div class="sv-final-content">

                    <h2>
                        ایده یا فرایند پیچیده‌ای برای حل کردن داری؟
                    </h2>

                    <p>
                        درباره مسئله صحبت کنیم تا راهکار مناسب و محدوده اجرای اون رو مشخص کنیم.
                    </p>

                    <a href="{{ route('contact') }}" class="btn btn-primary">
                        مشاوره رایگان
                    </a>

                </div>
            </div>
        </section>

        {{-- Mobile Sticky CTA --}}
        <div class="sv-mobile-sticky" id="mobileStickyBar" hidden>
            <div class="sv-mobile-sticky-content">
                <a href="{{ route('contact') }}" class="sv-mobile-sticky-btn">
                    مشاوره رایگان
                </a>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
@endpush
