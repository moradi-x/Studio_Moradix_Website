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

                       
                        <p class="sv-hero-desc">با تحقیق کلمات کلیدی، بهینه‌سازی فنی و محتوایی و تحلیل رقبا، به بهبود جایگاه سایت شما در نتایج گوگل کمک می‌کنیم.</p>

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

        {{-- Is This For You Section --}}
        <section class="sv-section sv-fit">
            <div class="container">
                <h2 class="sv-section-title">سئو برای شما مناسب است اگر...</h2>

                <div class="sv-fit-grid">

                    {{-- Good Fit --}}
                    <div class="sv-fit-card sv-fit-yes">
                        <h3 class="sv-fit-title">سئو مناسب توئه</h3>

                        <ul class="sv-fit-list">
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>
                                    سایت دارید و می‌خواهید مشتریان بالقوه از طریق جست‌وجوی گوگل شما را پیدا کنند.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>
                                    صفحات خدمات یا محصولاتتان بازدید و جایگاه مناسبی در نتایج جست‌وجو ندارند.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>
                                    برای تولید محتوای هدفمند و بهبود مستمر سایت آمادگی دارید.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>
                                    می‌خواهید عملکرد سایت را با داده‌هایی مانند کلیک، نمایش، رتبه و سرنخ‌های ورودی ارزیابی
                                    کنید.
                                </span>
                            </li>
                        </ul>
                    </div>

                    {{-- Not a Fit --}}
                    <div class="sv-fit-card sv-fit-no">
                        <h3 class="sv-fit-title">شاید ابتدا به خدمت دیگری نیاز دارید</h3>

                        <ul class="sv-fit-list">
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 6l12 12M18 6L6 18" />
                                </svg>
                                <span>
                                    هنوز سایت ندارید و برای شروع به طراحی و توسعه وب‌سایت نیاز دارید.
                                    <a href="{{ route('services.web-design') }}" class="sv-alt-link">
                                        طراحی سایت ←
                                    </a>
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 6l12 12M18 6L6 18" />
                                </svg>
                                <span>
                                    سایت مشکلات اساسی در دسترسی، عملکرد یا ساختار دارد و پیش از سئو باید اصلاح شود.
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 6l12 12M18 6L6 18" />
                                </svg>
                                <span>
                                    انتظار دارید بدون زمان، بودجه و همکاری مستمر، نتیجه قطعی و فوری به دست آورید.
                                </span>
                            </li>
                        </ul>
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


    </div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
@endpush
