@extends('Home.Layouts.layout')

@section('title', 'خدمات سئو سایت | Moradix Studio')

@section('description',
    'خدمات سئو سایت به‌صورت ماهانه؛ از تحقیق کلمات کلیدی و سئوی تکنیکال تا بهینه‌سازی محتوا، تحلیل
    رقبا و بهبود ورودی هدفمند گوگل.')

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
                        خدمات سئو سایت
                    </li>
                </ol>
            </div>
        </nav>


        {{-- Hero Section --}}
        <section class="sv-hero">
            <div class="container">
                <div class="sv-hero-content">
                    <div class="sv-hero-text">
                        <h1 class="sv-hero-title">خدمات سئو سایت</h1>

                        <p class="sv-hero-subtitle">
                            فقط دیده‌شدن کافی نیست؛ مهم این است که مخاطب درست شما را پیدا کند.
                        </p>

                        <p class="sv-hero-desc">
                            با برنامه‌ریزی و اجرای مستمر سئو، کمک می‌کنیم صفحات سایت شما
                            برای جست‌وجوهای مرتبط با خدمات و محصولاتتان آماده‌تر شوند.
                            از تحقیق کلمات کلیدی و بررسی فنی تا بهینه‌سازی محتوا و تحلیل رقبا


                        </p>

                        <div class="sv-hero-buttons">
                            <a href="{{ route('contact') }}" class="btn btn-primary">
                                مشاوره سئو سایت
                            </a>

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


        {{-- What SEO Improves --}}
        <section class="sv-section sv-changes">
            <div class="container">

                <h2 class="sv-section-title">
                    سئو چه مشکلاتی از کسب‌وکار شما را حل می‌کند؟
                </h2>

                <div class="sv-changes-grid">

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="10.5" cy="10.5" r="6.5" stroke-width="1.8" />
                            <path d="M15.5 15.5 21 21" stroke-width="1.8" stroke-linecap="round" />
                            <path d="M7.5 10.5h6" stroke-width="1.8" stroke-linecap="round" />
                            <path d="M10.5 7.5v6" stroke-width="1.8" stroke-linecap="round" />
                        </svg>

                        <p>
                            جذب بازدیدکنندگان هدفمند از طریق جست‌وجوهای مرتبط در گوگل.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path d="M4 19V5M4 19h16" stroke-width="1.8" stroke-linecap="round" />
                            <path d="m7 15 4-4 3 2 5-7" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.5 6H19v3.5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <p>
                            بهبود جایگاه صفحات مهم خدمات و محصولات در نتایج جست‌وجو.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path d="M4 5.5h16v13H4z" stroke-width="1.8" stroke-linejoin="round" />
                            <path d="M8 9h8M8 12h5" stroke-width="1.8" stroke-linecap="round" />
                            <path d="m14 16 2 2 4-4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <p>
                            برنامه‌ریزی مستمر و تحلیل داده‌ها برای بهبود عملکرد سئو.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke-width="1.8" />
                            <path d="M12 7v5l3.5 2" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7 3.8 5.5 5.3M17 3.8l1.5 1.5" stroke-width="1.8" stroke-linecap="round" />
                        </svg>

                        <p>
                            سئو؛ از تحلیل وضعیت سایت تا بهینه‌سازی و بررسی نتایج.

                        </p>
                    </div>

                </div>

                <p class="sv-changes-note">
                    سئو یک فرایند مستمر است؛ از بررسی وضعیت فعلی سایت تا

                    ارزیابی نتایج، در کنار شما هستیم.
                </p>

            </div>
        </section>

        <section class="sv-section sv-fit">
            <div class="container">
                <h2 class="sv-section-title"> سئو برای شما مناسب است اگر... </h2>
                <div class="sv-fit-grid">
                    <div class="sv-fit-card sv-fit-yes">
                        <h3 class="sv-fit-title"> سئو مناسب توئه</h3>

                        <ul class="sv-fit-list">
                            <li>
                                <span class="sv-fit-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>
                                    سایت دارید و می‌خواهید مشتریان بالقوه از طریق جست‌وجوی
                                    گوگل شما را پیدا کنند.
                                </span>
                            </li>

                            <li>
                                <span class="sv-fit-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>
                                    صفحات خدمات یا محصولاتتان بازدید و جایگاه مناسبی در
                                    نتایج جست‌وجو ندارند.
                                </span>
                            </li>

                            <li>
                                <span class="sv-fit-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>
                                    برای تولید محتوای هدفمند و بهبود مستمر سایت آمادگی دارید.
                                </span>
                            </li>

                            <li>
                                <span class="sv-fit-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>
                                    می‌خواهید عملکرد سایت را با داده‌هایی مانند کلیک،
                                    نمایش، رتبه و سرنخ‌های ورودی ارزیابی کنید.
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="sv-fit-card sv-fit-no">
                        <h3 class="sv-fit-title">شاید ابتدا به خدمت دیگری نیاز دارید</h3>

                        <ul class="sv-fit-list">
                            <li>
                                <span class="sv-fit-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                                <span>
                                    هنوز سایت ندارید و برای شروع به طراحی و توسعه وب‌سایت
                                    نیاز دارید.
                                </span>
                            </li>

                            <li>
                                <span class="sv-fit-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                                <span>
                                    سایت مشکلات اساسی در دسترسی، عملکرد یا ساختار دارد و
                                    پیش از سئو باید اصلاح شود.
                                </span>
                            </li>

                            <li>
                                <span class="sv-fit-icon" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </span>
                                <span>
                                    انتظار دارید بدون زمان، بودجه و همکاری مستمر، نتیجه
                                    قطعی و فوری به دست آورید.
                                </span>
                            </li>

                        </ul>

                        <a href="{{ route('contact') }}" class="sv-fit-consult-link">
                            برای انتخاب مسیر مناسب مشورت کنید
                            <span aria-hidden="true">←</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- SEO Services --}}


        <section class="sv-section sv-types">
            <div class="container">

                <h2 class="sv-section-title">
                    خدمات سئو سایت شامل چه مواردی است؟
                </h2>

                <div class="sv-types-grid">

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3 4 7v5c0 5 3.4 8 8 9 4.6-1 8-4 8-9V7l-8-4z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4" />
                        </svg>

                        <h3>سئوی فنی</h3>
                        <p>
                            بررسی سرعت، ساختار سایت، ایندکس صفحات و مشکلات فنی مؤثر بر سئو.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5h16v14H4zM8 9h8M8 13h6M8 16h4" />
                        </svg>

                        <h3>تحقیق کلمات کلیدی</h3>
                        <p>
                            شناسایی جست‌وجوهای مرتبط با خدمات شما و فرصت‌های جذب مخاطب هدفمند.
                        </p>
                    </div>



                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="10.5" cy="10.5" r="6.5" stroke-width="2" />
                            <path d="m15.5 15.5 5 5" stroke-width="2" stroke-linecap="round" />
                            <path d="M8 10.5h5M10.5 8v5" stroke-width="2" stroke-linecap="round" />
                        </svg>

                        <h3>تحلیل رقبا</h3>
                        <p>
                            بررسی عملکرد رقبا و شناسایی فرصت‌های بهبود جایگاه صفحات سایت.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 19V5M4 19h16M7 15l4-4 3 2 5-7" />
                        </svg>

                        <h3>پایش و تحلیل نتایج</h3>
                        <p>
                            ارزیابی ورودی گوگل، عملکرد صفحات و روند پیشرفت اقدامات سئو.
                        </p>
                    </div>



                </div>
            </div>
        </section>

        {{-- Plans / Engagement Levels --}}
        <section class="sv-section sv-plans">
            <div class="sv-section-heading">
                <h2 class="sv-section-title">
                    برنامه سئو را از کجا شروع می‌کنیم؟
                </h2>
            </div>

            <div class="sv-plans-grid">
                <article class="sv-plan-card">
                    <div class="sv-plan-header">
                        <h3 class="sv-plan-name">شروع و ارزیابی</h3>

                        <p class="sv-plan-for">
                            مناسب سایت‌هایی که به نقشه راه روشن نیاز دارند
                        </p>
                    </div>

                    <div class="sv-plan-body">
                        <ul class="sv-plan-features">
                            <li>بررسی وضعیت فعلی سایت</li>
                            <li>شناسایی خطاها و موانع مهم سئو</li>
                            <li>تحقیق اولیه کلمات کلیدی</li>
                            <li>بررسی صفحات مهم و رقبای اصلی</li>
                            <li>ارائه اولویت‌های اجرایی</li>
                        </ul>
                    </div>
                </article>

                <article class="sv-plan-card sv-plan-featured">
                    <div class="sv-plan-badge">همکاری مستمر</div>

                    <div class="sv-plan-header">
                        <h3 class="sv-plan-name">سئوی ماهانه</h3>

                        <p class="sv-plan-for">
                            مناسب کسب‌وکارهایی که به رشد تدریجی و پیگیری منظم نیاز دارند
                        </p>
                    </div>

                    <div class="sv-plan-body">
                        <ul class="sv-plan-features">
                            <li>برنامه‌ریزی و اولویت‌بندی اقدامات ماهانه</li>
                            <li>پایش کلمات کلیدی و عملکرد صفحات</li>
                            <li>بررسی فنی و پیگیری اصلاحات</li>
                            <li>گزارش عملکرد و برنامه ماه بعد</li>
                        </ul>
                    </div>
                </article>


            </div>



            <div class="sv-plans-cta">
                <p>
                    نمی‌دانید کدام مسیر مناسب سایت شماست؟ ابتدا وضعیت فعلی و هدف کسب‌وکارتان
                    را بررسی می‌کنیم و سپس درباره دامنه همکاری تصمیم می‌گیریم.
                </p>


                <a href="{{ route('pricing') }}" class="btn btn-outline">
                    مقایسه‌ی کامل پلن‌ها و تعرفه‌ها
                </a>


            </div>
        </section>

        {{-- Deliverables --}}
        <section class="sv-section sv-deliverables">
            <div class="container">

                <h2 class="sv-section-title">
                    در همکاری سئو چه چیزهایی دریافت می‌کنید؟
                </h2>

                <div class="sv-deliverables-grid">

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="10.5" cy="10.5" r="6.5" stroke-width="2" />
                            <path d="m15.5 15.5 5 5" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <h3>تحلیل سایت و نقشه راه</h3>
                        <p>بررسی وضعیت فعلی و تعیین اولویت‌های سئو</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h14v16H5zM8 8h8M8 12h8M8 16h5" />
                        </svg>
                        <h3>تحقیق کلمات کلیدی</h3>
                        <p>شناسایی جست‌وجوهای مرتبط با کسب‌وکار شما</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5h16v14H4zM8 9h8M8 12h6M8 15h4" />
                        </svg>
                        <h3>بهینه‌سازی صفحات و محتوا</h3>
                        <p>بهبود محتوا، عنوان‌ها و لینک‌های داخلی</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3 20 7.5v9L12 21l-8-4.5v-9L12 3zM4.5 7.8l7.5 4.4 7.5-4.4M12 12.2V20" />
                        </svg>
                        <h3>بررسی فنی سایت</h3>
                        <p>شناسایی مشکلات فنی مؤثر بر عملکرد سئو</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 19V5M4 19h16m-13-4 4-4 3 2 5-7" />
                        </svg>
                        <h3>گزارش عملکرد</h3>
                        <p>ارزیابی کلیک‌ها، نمایش‌ها و وضعیت صفحات</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke-width="2" />
                            <path d="M12 7v5l3 2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3>برنامه اقدامات بعدی</h3>
                        <p>تعیین اولویت‌های ادامه مسیر بهینه‌سازی</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- SEO Process --}}
        <section class="sv-section sv-process" id="seo-process">
            <div class="container">

                <h2 class="sv-section-title">مراحل انجام سئو</h2>

                <div class="sv-process-steps">

                    <div class="sv-process-step">
                        <div class="sv-step-number">۱</div>
                        <h3>بررسی سایت و نیازسنجی</h3>
                        <p>شناخت کسب‌وکار و وضعیت فعلی سایت</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۲</div>
                        <h3>تحقیق و برنامه‌ریزی</h3>
                        <p>تحلیل کلمات کلیدی و تعیین اولویت‌ها</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۳</div>
                        <h3>اجرا و بهینه‌سازی</h3>
                        <p>اصلاح فنی و بهبود صفحات سایت</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۴</div>
                        <h3>بررسی نتایج و ادامه مسیر</h3>
                        <p>تحلیل عملکرد و تنظیم برنامه بعدی</p>
                    </div>

                </div>

            </div>
        </section>


        {{-- Portfolio / Example Areas --}}
        <section class="sv-section sv-portfolio">
            <div class="sv-section-heading">

                <h2 class="sv-section-title">نمونه‌کار مرتبط</h2>



            </div>

            <div class="sv-portfolio-grid">
                <article class="sv-portfolio-card">
                    <div class="sv-portfolio-image">
                        <div class="sv-portfolio-placeholder">
                            <svg viewBox="0 0 120 90" fill="none" aria-hidden="true">
                                <rect x="10" y="12" width="100" height="66" rx="5" stroke="currentColor"
                                    stroke-width="2" />
                                <path d="M10 27h100" stroke="currentColor" stroke-width="2" />
                                <circle cx="19" cy="20" r="2" fill="currentColor" />
                                <circle cx="26" cy="20" r="2" fill="currentColor" />
                                <circle cx="33" cy="20" r="2" fill="currentColor" />
                                <path d="M24 62V48M39 62V39M54 62V52M69 62V34M84 62V43M99 62V29" stroke="currentColor"
                                    stroke-width="5" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="sv-portfolio-content">
                        <span class="sv-portfolio-type">سئوی کسب‌وکار خدماتی</span>

                        <h3 class="sv-portfolio-title">
                            جذب مخاطب برای صفحات خدمات
                        </h3>

                        <p>
                            تمرکز بر جست‌وجوهای مرتبط با خدمات، بهینه‌سازی صفحات
                            فرود و ایجاد مسیر روشن برای درخواست مشاوره یا تماس.
                        </p>

                        <div class="sv-portfolio-tags">
                            <span class="sv-tag">کلمات کلیدی</span>
                            <span class="sv-tag">صفحات خدمات</span>
                            <span class="sv-tag">تبدیل</span>
                        </div>
                    </div>
                </article>

                <article class="sv-portfolio-card">
                    <div class="sv-portfolio-image">
                        <div class="sv-portfolio-placeholder">
                            <svg viewBox="0 0 120 90" fill="none" aria-hidden="true">
                                <rect x="14" y="10" width="92" height="70" rx="5" stroke="currentColor"
                                    stroke-width="2" />
                                <rect x="24" y="20" width="28" height="25" rx="3" stroke="currentColor"
                                    stroke-width="2" />
                                <rect x="59" y="20" width="37" height="5" rx="2" fill="currentColor"
                                    opacity=".65" />
                                <rect x="59" y="30" width="29" height="4" rx="2" fill="currentColor"
                                    opacity=".4" />
                                <rect x="59" y="38" width="33" height="4" rx="2" fill="currentColor"
                                    opacity=".4" />
                                <path d="M24 55h72M24 64h60M24 73h43" stroke="currentColor" stroke-width="3"
                                    stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>

                    <div class="sv-portfolio-content">
                        <span class="sv-portfolio-type">سئوی فروشگاه اینترنتی</span>

                        <h3 class="sv-portfolio-title">
                            بهبود دیده‌شدن محصولات و دسته‌بندی‌ها
                        </h3>

                        <p>
                            بررسی ساختار دسته‌بندی‌ها، صفحات محصول، محتوای تکراری
                            احتمالی و فرصت‌های جست‌وجوی مرتبط با خرید.
                        </p>

                        <div class="sv-portfolio-tags">
                            <span class="sv-tag">صفحات محصول</span>
                            <span class="sv-tag">ساختار سایت</span>
                            <span class="sv-tag">جست‌وجوی خرید</span>
                        </div>
                    </div>
                </article>


            </div>
        </section>

        {{-- FAQ --}}
        <section class="sv-section sv-faq">
            <div class="sv-section-heading">
                <h2 class="sv-section-title">
                    سؤالات متداول
                </h2>
            </div>

            <div class="sv-faq-list">
                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>سئو سایت چقدر زمان می‌برد تا نتیجه بدهد؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                زمان مشاهده تغییرات به عواملی مانند سابقه و وضعیت فعلی
                                سایت، شدت رقابت، کیفیت محتوا، مشکلات فنی و منابع اجرایی
                                بستگی دارد. برخی اصلاحات فنی ممکن است زودتر اثر خود را
                                نشان دهند، اما رشد پایدار در جست‌وجوی ارگانیک معمولاً
                                به پیگیری مستمر نیاز دارد. زمان یا رتبه مشخصی را نمی‌توان
                                برای همه سایت‌ها تضمین کرد.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>آیا رتبه یک گوگل را تضمین می‌کنید؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                خیر. جایگاه نتایج جست‌وجو تحت تأثیر الگوریتم‌ها،
                                رقبا، رفتار کاربران و عوامل متعددی است که کنترل کامل
                                آن‌ها در اختیار هیچ متخصص سئویی نیست. تعهد ما بر
                                تحلیل دقیق، اجرای اصولی، شفافیت در اقدامات و بهبود
                                مستمر بر اساس داده‌های واقعی است، نه وعده رتبه قطعی.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>هزینه خدمات سئو چگونه تعیین می‌شود؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                هزینه به وضعیت سایت، تعداد و نوع صفحات، میزان رقابت،
                                حجم اقدامات فنی و محتوایی، نیاز به تولید محتوا و دامنه
                                همکاری بستگی دارد. پس از شناخت نیازها و بررسی اولیه،
                                می‌توان درباره محدوده کار، مسئولیت‌ها و هزینه همکاری
                                برآورد دقیق‌تری ارائه کرد.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>آیا برای سئو باید سایت را از نو طراحی کنیم؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                در بسیاری از موارد نیازی به طراحی مجدد نیست. ابتدا
                                ساختار، عملکرد و وضعیت فنی سایت را بررسی می‌کنیم.
                                اگر مشکلات قابل اصلاح باشند، بهینه‌سازی در همان ساختار
                                انجام می‌شود. بازطراحی زمانی مطرح است که محدودیت‌های
                                موجود مانع جدی رشد، تجربه کاربری یا اجرای اصلاحات ضروری
                                باشند.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>تولید محتوا هم جزو خدمات سئو است؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                استراتژی محتوا و تعیین موضوعات و اولویت‌های تولید
                                می‌تواند بخشی از برنامه سئو باشد. نگارش، ویرایش،
                                بارگذاری یا تولید محتوای تخصصی بر اساس دامنه توافق‌شده
                                انجام می‌شود و در صورت نیاز، حجم و مسئولیت هر بخش پیش
                                از شروع مشخص خواهد شد.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>گزارش سئو شامل چه اطلاعاتی است؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                گزارش بر اساس داده‌های قابل دسترس و اهداف پروژه تنظیم
                                می‌شود و می‌تواند روند نمایش و کلیک در گوگل، عملکرد
                                صفحات و کلمات کلیدی مهم، اقدامات انجام‌شده، مشکلات
                                شناسایی‌شده و اولویت‌های دوره بعد را پوشش دهد. در صورت
                                فراهم بودن داده‌های تحلیلی مناسب، شاخص‌های مرتبط با
                                سرنخ‌ها و تبدیل‌ها نیز بررسی می‌شوند.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>اگر سایت قبلاً سئو شده باشد، باز هم می‌توان همکاری کرد؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                بله. ابتدا اقدامات قبلی، وضعیت فعلی صفحات، تغییرات
                                ترافیک و مشکلات احتمالی را بررسی می‌کنیم. سپس مشخص
                                می‌شود که ادامه مسیر قبلی، اصلاح استراتژی یا تمرکز
                                روی فرصت‌های جدید منطقی‌تر است.
                            </p>
                        </div>
                    </div>
                </article>

                <article class="sv-faq-item">
                    <button class="sv-faq-question" type="button" aria-expanded="false">
                        <span>آیا می‌توانیم هم‌زمان روی چند خدمت یا شهر کار کنیم؟</span>

                        <span class="sv-faq-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </button>

                    <div class="sv-faq-answer">
                        <div class="sv-faq-answer-content">
                            <p>
                                بله، اما لازم است موضوعات و صفحات بر اساس نیاز واقعی
                                مخاطب و ظرفیت اجرایی اولویت‌بندی شوند. برای کسب‌وکارهای
                                محلی نیز محدوده جغرافیایی، نوع خدمت و تفاوت نیاز کاربران
                                بررسی می‌شود تا از ساخت صفحات تکراری و کم‌ارزش جلوگیری
                                شود.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </section>



        {{-- Mobile Sticky CTA --}}
        <div class="sv-mobile-sticky" id="mobileStickyBar">
            <a href="{{ route('contact') }}" class="sv-btn sv-btn-primary">
                مشاوره سئو سایت
            </a>
        </div>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
@endpush
