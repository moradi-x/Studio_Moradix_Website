@extends('Home.Layouts.layout')

@section('title', 'خدمات سئو سایت | Moradix Studio')

@section('description', 'خدمات سئو سایت به‌صورت ماهانه؛ از تحقیق کلمات کلیدی و سئوی تکنیکال تا بهینه‌سازی محتوا، تحلیل رقبا و بهبود ورودی هدفمند گوگل.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/services/service-page.css') }}">
@endpush

@section('content')
<div class="sv-page">

    {{-- Breadcrumb --}}
    <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
        <a href="{{ route('home') }}">صفحه اصلی</a>
        <span aria-hidden="true">/</span>
        <a href="{{ route('services') }}">خدمات</a>
        <span aria-hidden="true">/</span>
        <span aria-current="page">خدمات سئو سایت</span>
    </nav>

    {{-- Hero Section --}}
    <section class="sv-hero">
        <div class="sv-hero-content">
            <div class="sv-hero-text">
                <span class="sv-eyebrow">SEO & Organic Growth</span>

                <h1 class="sv-hero-title">
                    سئو سایت؛
                    <span>مسیر جذب مشتری از گوگل</span>
                </h1>

                <p class="sv-hero-subtitle">
                    فقط دیده‌شدن کافی نیست؛ مهم این است که مخاطب درست شما را پیدا کند.
                </p>

                <p class="sv-hero-desc">
                    با برنامه‌ریزی و اجرای مستمر سئو، کمک می‌کنیم صفحات سایت شما
                    برای جست‌وجوهای مرتبط با خدمات و محصولاتتان آماده‌تر شوند،
                    فرصت‌های رشد در گوگل را شناسایی کنید و بازدیدکنندگان هدفمندتری
                    به سایت جذب کنید. از بررسی فنی و تحقیق کلمات کلیدی تا بهینه‌سازی
                    محتوا و تحلیل عملکرد، هر اقدام بر اساس وضعیت واقعی سایت و اهداف
                    کسب‌وکار شما تعریف می‌شود.
                </p>

                <div class="sv-hero-buttons">
                    <a href="{{ route('contact') }}" class="sv-btn sv-btn-primary">
                        بررسی وضعیت سئو سایت
                    </a>

                    <a href="#seo-process" class="sv-btn sv-btn-secondary">
                        آشنایی با روند همکاری
                    </a>
                </div>
            </div>

            <div class="sv-hero-visual" aria-hidden="true">
                <div class="sv-mockup-wrapper">
                    <div class="sv-mockup-desktop">
                        <div class="sv-mockup-header">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="sv-mockup-body">
                            <div class="sv-mockup-sidebar">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <div class="sv-mockup-main">
                                <div class="sv-mockup-title"></div>

                                <div class="sv-mockup-stats">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>

                                <div class="sv-mockup-chart">
                                    <svg viewBox="0 0 300 100" role="presentation">
                                        <path
                                            d="M0 85 C30 78, 45 60, 70 68 S110 48, 135 55 S170 30, 195 40 S240 15, 300 8"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="3"
                                            stroke-linecap="round"
                                        />
                                    </svg>
                                </div>

                                <div class="sv-mockup-lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sv-mockup-mobile">
                        <div class="sv-mockup-mobile-header"></div>
                        <div class="sv-mockup-mobile-line"></div>
                        <div class="sv-mockup-mobile-line"></div>
                        <div class="sv-mockup-mobile-chart"></div>
                        <div class="sv-mockup-mobile-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- What SEO Improves --}}
    <section class="sv-section sv-changes">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">Why SEO Matters</span>

            <h2 class="sv-section-title">
                سئو چه مشکلاتی از کسب‌وکار شما را حل می‌کند؟
            </h2>

            <p class="sv-section-desc">
                وقتی سایت در جست‌وجوهای مناسب دیده نمی‌شود یا بازدیدکنندگان به
                مشتری تبدیل نمی‌شوند، باید علت را پیدا کرد. سئو از شناسایی این
                موانع شروع می‌شود و با بهینه‌سازی مستمر ادامه پیدا می‌کند.
            </p>
        </div>

        <div class="sv-changes-grid">
            <article class="sv-change-card">
                <div class="sv-change-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <circle cx="10.5" cy="10.5" r="6.5" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M15.5 15.5 21 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M7.5 10.5h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M10.5 7.5v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>ورودی ارگانیک کم</h3>

                <p>
                    اگر مخاطبان بالقوه خدمات شما را در گوگل جست‌وجو می‌کنند اما
                    به سایتتان نمی‌رسند، صفحات و فرصت‌های جست‌وجوی مرتبط را بررسی
                    می‌کنیم تا مسیر جذب بازدیدکننده هدفمند روشن‌تر شود.
                </p>
            </article>

            <article class="sv-change-card">
                <div class="sv-change-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 19V5M4 19h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="m7 15 4-4 3 2 5-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.5 6H19v3.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>رتبه ضعیف صفحات مهم</h3>

                <p>
                    صفحات خدمات و محصولات ممکن است با جست‌وجوهای ارزشمند فاصله
                    داشته باشند. با بررسی محتوا، ساختار صفحه، رقبا و وضعیت فنی،
                    اولویت‌های بهبود را مشخص می‌کنیم.
                </p>
            </article>

            <article class="sv-change-card">
                <div class="sv-change-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 5.5h16v13H4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="M8 9h8M8 12h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="m14 16 2 2 4-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>بازدید بدون جذب مشتری</h3>

                <p>
                    افزایش بازدید زمانی ارزشمند است که مخاطب مرتبط وارد سایت شود.
                    تناسب محتوا با نیت جست‌وجو، وضوح پیشنهاد شما و مسیر اقدام کاربر
                    را بررسی می‌کنیم تا فرصت تبدیل به مشتری بهتر شود.
                </p>
            </article>

            <article class="sv-change-card">
                <div class="sv-change-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M12 7v5l3.5 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 3.8 5.5 5.3M17 3.8l1.5 1.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>رشد ناپایدار و بدون برنامه</h3>

                <p>
                    سئو به پیگیری مداوم نیاز دارد. با تعیین اولویت‌ها، بررسی داده‌ها
                    و برنامه‌ریزی برای اقدامات بعدی، تصمیم‌ها را از حدس و گمان به
                    سمت تحلیل قابل‌اندازه‌گیری هدایت می‌کنیم.
                </p>
            </article>
        </div>
    </section>

    {{-- Who Is SEO For --}}
    <section class="sv-section sv-fit">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">Is SEO Right For You?</span>

            <h2 class="sv-section-title">
                آیا سئوی ماهانه برای کسب‌وکار شما مناسب است؟
            </h2>

            <p class="sv-section-desc">
                سئو زمانی بیشترین فایده را دارد که بخشی از یک برنامه واقعی برای
                جذب مخاطب و توسعه کسب‌وکار باشد؛ نه صرفاً تلاشی برای بالا بردن
                چند عدد در گزارش‌ها.
            </p>
        </div>

        <div class="sv-fit-grid">
            <div class="sv-fit-card sv-fit-yes">
                <div class="sv-fit-card-header">
                    <span class="sv-fit-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>

                    <h3>سئو برای شما مناسب است اگر...</h3>
                </div>

                <ul class="sv-fit-list">
                    <li>
                        <span class="sv-fit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
                                <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
                                <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span>
                            برای تولید محتوای هدفمند و بهبود مستمر سایت آمادگی دارید.
                        </span>
                    </li>

                    <li>
                        <span class="sv-fit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="m5 12 4 4L19 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
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
                <div class="sv-fit-card-header">
                    <span class="sv-fit-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </span>

                    <h3>شاید ابتدا به خدمت دیگری نیاز دارید اگر...</h3>
                </div>

                <ul class="sv-fit-list">
                    <li>
                        <span class="sv-fit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
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
                                <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
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
                                <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <span>
                            انتظار دارید بدون زمان، بودجه و همکاری مستمر، نتیجه
                            قطعی و فوری به دست آورید.
                        </span>
                    </li>

                    <li>
                        <span class="sv-fit-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="m6 6 12 12M18 6 6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <span>
                            در حال حاضر به جذب سریع ترافیک نیاز دارید؛ در این حالت
                            تبلیغات پولی می‌تواند در کنار برنامه بلندمدت سئو بررسی شود.
                        </span>
                    </li>
                </ul>

                <a href="{{ route('contact') }}" class="sv-alt-link">
                    برای انتخاب مسیر مناسب مشورت کنید
                    <span aria-hidden="true">←</span>
                </a>
            </div>
        </div>
    </section>

    {{-- SEO Services --}}
    <section class="sv-section sv-types">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">SEO Services</span>

            <h2 class="sv-section-title">
                خدمات سئو سایت شامل چه مواردی است؟
            </h2>

            <p class="sv-section-desc">
                سئوی مؤثر از چند بخش مرتبط تشکیل می‌شود. برنامه اجرایی بر اساس
                وضعیت سایت، میزان رقابت، منابع موجود و هدف کسب‌وکار تنظیم می‌شود؛
                بنابراین همه پروژه‌ها الزاماً به اقدامات یکسانی نیاز ندارند.
            </p>
        </div>

        <div class="sv-types-grid">
            <article class="sv-type-card">
                <div class="sv-type-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <circle cx="10.5" cy="10.5" r="6.5" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M15.5 15.5 21 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="M8 10.5h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>تحقیق کلمات کلیدی و تحلیل رقبا</h3>

                <p>
                    بررسی عبارت‌هایی که مخاطبان واقعی جست‌وجو می‌کنند، شناسایی
                    نیت جست‌وجو، ارزیابی صفحات رقبا و اولویت‌بندی فرصت‌ها بر اساس
                    ارتباط با خدمات، میزان رقابت و ارزش تجاری.
                </p>
            </article>

            <article class="sv-type-card">
                <div class="sv-type-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 5h16v14H4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="M8 9h8M8 12h6M8 15h4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>سئوی داخلی و استراتژی محتوا</h3>

                <p>
                    بهینه‌سازی عنوان‌ها، توضیحات، تیترها، لینک‌سازی داخلی و ساختار
                    صفحات؛ همچنین برنامه‌ریزی محتوا بر اساس نیاز مخاطب، هدف جست‌وجو
                    و مسیر تصمیم‌گیری مشتری.
                </p>
            </article>

            <article class="sv-type-card">
                <div class="sv-type-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M12 3 20 7.5v9L12 21l-8-4.5v-9L12 3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="m4.5 7.8 7.5 4.4 7.5-4.4M12 12.2V20" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>سئوی تکنیکال</h3>

                <p>
                    بررسی قابلیت خزش و ایندکس صفحات، وضعیت نقشه سایت، فایل robots.txt،
                    ریدایرکت‌ها، خطاهای فنی، نسخه موبایل، سرعت و تجربه صفحه؛ سپس
                    اولویت‌بندی اصلاحات متناسب با اثر احتمالی آن‌ها.
                </p>
            </article>

            <article class="sv-type-card">
                <div class="sv-type-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <circle cx="6" cy="12" r="2.5" stroke="currentColor" stroke-width="1.8"/>
                        <circle cx="18" cy="6" r="2.5" stroke="currentColor" stroke-width="1.8"/>
                        <circle cx="18" cy="18" r="2.5" stroke="currentColor" stroke-width="1.8"/>
                        <path d="m8.2 10.8 7.5-3.6M8.2 13.2l7.5 3.6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>اعتبارسازی و لینک‌سازی اصولی</h3>

                <p>
                    بررسی وضعیت لینک‌های ورودی و فرصت‌های مرتبط برای افزایش اعتبار
                    صفحات؛ با تمرکز بر ارتباط موضوعی، کیفیت منابع و کاهش ریسک
                    روش‌های غیرطبیعی و دست‌کاری‌شده.
                </p>
            </article>
        </div>
    </section>

    {{-- Plans / Engagement Levels --}}
    <section class="sv-section sv-plans">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">SEO Roadmap</span>

            <h2 class="sv-section-title">
                برنامه سئو را از کجا شروع می‌کنیم؟
            </h2>

            <p class="sv-section-desc">
                نقطه شروع و حجم اقدامات به وضعیت سایت و اهداف شما بستگی دارد.
                این سه سطح، مسیرهای متداول همکاری را نشان می‌دهند؛ دامنه دقیق کار
                پس از بررسی اولیه مشخص می‌شود.
            </p>
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

                <div class="sv-plan-footer">
                    <a href="{{ route('contact') }}" class="sv-btn sv-btn-secondary">
                        درخواست بررسی سایت
                    </a>
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
                        <li>بهینه‌سازی صفحات خدمات و محصولات</li>
                        <li>پایش کلمات کلیدی و عملکرد صفحات</li>
                        <li>برنامه محتوایی متناسب با فرصت‌های جست‌وجو</li>
                        <li>بررسی فنی و پیگیری اصلاحات</li>
                        <li>گزارش عملکرد و برنامه ماه بعد</li>
                    </ul>
                </div>

                <div class="sv-plan-footer">
                    <a href="{{ route('contact') }}" class="sv-btn sv-btn-primary">
                        شروع گفت‌وگو درباره سئو
                    </a>
                </div>
            </article>

            <article class="sv-plan-card">
                <div class="sv-plan-header">
                    <h3 class="sv-plan-name">رشد رقابتی</h3>

                    <p class="sv-plan-for">
                        مناسب سایت‌هایی با صفحات متعدد یا بازار رقابتی‌تر
                    </p>
                </div>

                <div class="sv-plan-body">
                    <ul class="sv-plan-features">
                        <li>تحلیل عمیق‌تر رقبا و فرصت‌های بازار</li>
                        <li>توسعه ساختار موضوعی محتوا</li>
                        <li>بررسی صفحات متعدد و اولویت‌های توسعه</li>
                        <li>ارزیابی فرصت‌های اعتبارسازی و لینک‌سازی</li>
                        <li>تحلیل روند رشد و صفحات اثرگذار</li>
                        <li>هماهنگی اقدامات فنی و محتوایی</li>
                    </ul>
                </div>

                <div class="sv-plan-footer">
                    <a href="{{ route('contact') }}" class="sv-btn sv-btn-secondary">
                        بررسی نیازهای پروژه
                    </a>
                </div>
            </article>
        </div>

        <div class="sv-plans-cta">
            <p>
                نمی‌دانید کدام مسیر مناسب سایت شماست؟ ابتدا وضعیت فعلی و هدف کسب‌وکارتان
                را بررسی می‌کنیم و سپس درباره دامنه همکاری تصمیم می‌گیریم.
            </p>

            <a href="{{ route('contact') }}" class="sv-text-link">
                دریافت مشاوره سئو
                <span aria-hidden="true">←</span>
            </a>
        </div>
    </section>

    {{-- Deliverables --}}
    <section class="sv-section sv-deliverables">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">What You Get</span>

            <h2 class="sv-section-title">
                در همکاری سئو چه چیزهایی دریافت می‌کنید؟
            </h2>

            <p class="sv-section-desc">
                هدف، انجام مجموعه‌ای از اقدامات پراکنده نیست؛ باید مشخص باشد چه
                چیزی بررسی شده، چه اقدامی انجام می‌شود و چگونه می‌توان اثر آن را
                ارزیابی کرد.
            </p>
        </div>

        <div class="sv-deliverables-grid">
            <article class="sv-deliverable-card">
                <div class="sv-deliverable-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <circle cx="10.5" cy="10.5" r="6.5" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M15.5 15.5 21 21" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>تحلیل و نقشه راه</h3>

                <p>
                    شناخت وضعیت سایت، شناسایی فرصت‌ها و تهیه فهرست اقدامات بر اساس
                    اهمیت، امکان اجرا و ارتباط با اهداف کسب‌وکار.
                </p>
            </article>

            <article class="sv-deliverable-card">
                <div class="sv-deliverable-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M5 4h14v16H5z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>تحقیق کلمات کلیدی</h3>

                <p>
                    شناسایی جست‌وجوهای مرتبط، دسته‌بندی موضوعات و تعیین اینکه هر
                    عبارت بهتر است به کدام صفحه از سایت هدایت شود.
                </p>
            </article>

            <article class="sv-deliverable-card">
                <div class="sv-deliverable-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 5h16v14H4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="M8 9h8M8 12h6M8 15h4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>بهینه‌سازی صفحات و محتوا</h3>

                <p>
                    پیشنهادها و اصلاحات مرتبط با عنوان‌ها، تیترها، محتوای صفحات،
                    لینک‌های داخلی و تناسب صفحه با نیت جست‌وجوی مخاطب.
                </p>
            </article>

            <article class="sv-deliverable-card">
                <div class="sv-deliverable-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M12 3 20 7.5v9L12 21l-8-4.5v-9L12 3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="m4.5 7.8 7.5 4.4 7.5-4.4M12 12.2V20" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>بررسی و پیگیری فنی</h3>

                <p>
                    شناسایی مسائل تکنیکال مؤثر بر دسترسی موتورهای جست‌وجو و تجربه
                    کاربران و پیگیری اصلاحات در هماهنگی با تیم فنی سایت.
                </p>
            </article>

            <article class="sv-deliverable-card">
                <div class="sv-deliverable-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 19V5M4 19h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="m7 15 4-4 3 2 5-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>پایش و گزارش عملکرد</h3>

                <p>
                    بررسی روند نمایش، کلیک، جایگاه صفحات و سایر شاخص‌های در دسترس
                    برای شناخت تغییرات و تعیین اولویت‌های بعدی.
                </p>
            </article>

            <article class="sv-deliverable-card">
                <div class="sv-deliverable-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M12 7v5l3.5 2" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>برنامه اقدامات بعدی</h3>

                <p>
                    مشخص‌کردن کارهای اولویت‌دار دوره بعد بر اساس داده‌ها، تغییرات
                    نتایج جست‌وجو و نیازهای جاری کسب‌وکار.
                </p>
            </article>
        </div>
    </section>

    {{-- SEO Process --}}
    <section class="sv-section sv-process" id="seo-process">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">Our Process</span>

            <h2 class="sv-section-title">
                روند همکاری سئو چگونه است؟
            </h2>

            <p class="sv-section-desc">
                برای اینکه اقدامات پراکنده و بدون اولویت انجام نشوند، همکاری را
                با شناخت وضعیت موجود آغاز می‌کنیم و بر اساس داده‌ها و نیازهای
                واقعی سایت ادامه می‌دهیم.
            </p>
        </div>

        <div class="sv-process-steps">
            <article class="sv-process-step">
                <div class="sv-step-number">01</div>

                <h3>شناخت کسب‌وکار و بررسی سایت</h3>

                <p>
                    درباره خدمات، مخاطبان، بازار هدف و اهداف شما گفت‌وگو می‌کنیم.
                    سپس وضعیت فعلی سایت، صفحات مهم و موانع احتمالی رشد ارگانیک
                    را بررسی می‌کنیم.
                </p>
            </article>

            <article class="sv-process-step">
                <div class="sv-step-number">02</div>

                <h3>تحقیق و اولویت‌بندی</h3>

                <p>
                    کلمات کلیدی، نیت جست‌وجو و رقبا را تحلیل می‌کنیم و بر اساس
                    ظرفیت سایت و منابع در دسترس، نقشه راه و اولویت‌های اجرایی
                    را مشخص می‌کنیم.
                </p>
            </article>

            <article class="sv-process-step">
                <div class="sv-step-number">03</div>

                <h3>اجرا و بهینه‌سازی مستمر</h3>

                <p>
                    اصلاحات فنی و داخلی، بهبود صفحات و برنامه محتوایی را مطابق
                    اولویت‌ها پیش می‌بریم. در صورت نیاز، اقدامات به همکاری تیم
                    فنی یا تولیدکننده محتوا وابسته خواهند بود.
                </p>
            </article>

            <article class="sv-process-step">
                <div class="sv-step-number">04</div>

                <h3>اندازه‌گیری و اصلاح مسیر</h3>

                <p>
                    داده‌های عملکرد را بررسی می‌کنیم، تغییرات مهم را توضیح می‌دهیم
                    و بر اساس نتایج به‌دست‌آمده، برنامه دوره بعد را به‌روزرسانی
                    می‌کنیم.
                </p>
            </article>
        </div>

        <div class="sv-process-link">
            <a href="{{ route('contact') }}" class="sv-text-link">
                برای بررسی سایتتان اقدام کنید
                <span aria-hidden="true">←</span>
            </a>
        </div>
    </section>

    {{-- Portfolio / Example Areas --}}
    <section class="sv-section sv-portfolio">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">SEO Opportunities</span>

            <h2 class="sv-section-title">
                سئو برای هر نوع کسب‌وکار مسیر متفاوتی دارد
            </h2>

            <p class="sv-section-desc">
                نوع جست‌وجوی مخاطبان، میزان رقابت و هدف صفحات تعیین می‌کند که
                برنامه سئو روی چه موضوعاتی متمرکز باشد. چند نمونه از مسیرهای
                قابل بررسی را ببینید.
            </p>
        </div>

        <div class="sv-portfolio-grid">
            <article class="sv-portfolio-card">
                <div class="sv-portfolio-image">
                    <div class="sv-portfolio-placeholder">
                        <svg viewBox="0 0 120 90" fill="none" aria-hidden="true">
                            <rect x="10" y="12" width="100" height="66" rx="5" stroke="currentColor" stroke-width="2"/>
                            <path d="M10 27h100" stroke="currentColor" stroke-width="2"/>
                            <circle cx="19" cy="20" r="2" fill="currentColor"/>
                            <circle cx="26" cy="20" r="2" fill="currentColor"/>
                            <circle cx="33" cy="20" r="2" fill="currentColor"/>
                            <path d="M24 62V48M39 62V39M54 62V52M69 62V34M84 62V43M99 62V29" stroke="currentColor" stroke-width="5" stroke-linecap="round"/>
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
                            <rect x="14" y="10" width="92" height="70" rx="5" stroke="currentColor" stroke-width="2"/>
                            <rect x="24" y="20" width="28" height="25" rx="3" stroke="currentColor" stroke-width="2"/>
                            <rect x="59" y="20" width="37" height="5" rx="2" fill="currentColor" opacity=".65"/>
                            <rect x="59" y="30" width="29" height="4" rx="2" fill="currentColor" opacity=".4"/>
                            <rect x="59" y="38" width="33" height="4" rx="2" fill="currentColor" opacity=".4"/>
                            <path d="M24 55h72M24 64h60M24 73h43" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
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

            <article class="sv-portfolio-card">
                <div class="sv-portfolio-image">
                    <div class="sv-portfolio-placeholder">
                        <svg viewBox="0 0 120 90" fill="none" aria-hidden="true">
                            <rect x="15" y="12" width="90" height="66" rx="5" stroke="currentColor" stroke-width="2"/>
                            <path d="M26 25h42M26 33h68" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                            <rect x="26" y="42" width="25" height="24" rx="3" stroke="currentColor" stroke-width="2"/>
                            <path d="M59 46h35M59 54h29M59 62h22" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <div class="sv-portfolio-content">
                    <span class="sv-portfolio-type">سئوی محتوایی</span>

                    <h3 class="sv-portfolio-title">
                        پاسخ‌گویی به نیازهای اطلاعاتی مخاطب
                    </h3>

                    <p>
                        طراحی ساختار موضوعی، شناسایی شکاف‌های محتوایی و برنامه‌ریزی
                        مطالبی که به پرسش‌های مخاطب پاسخ می‌دهند و به صفحات اصلی
                        سایت ارتباط دارند.
                    </p>

                    <div class="sv-portfolio-tags">
                        <span class="sv-tag">استراتژی محتوا</span>
                        <span class="sv-tag">تحقیق موضوع</span>
                        <span class="sv-tag">لینک داخلی</span>
                    </div>
                </div>
            </article>
        </div>

        <div class="sv-portfolio-all">
            <p>
                این موارد نمونه‌هایی از رویکردهای قابل بررسی هستند، نه ادعای
                اجرای پروژه یا نتایج تضمین‌شده. مسیر مناسب بر اساس شرایط سایت
                شما تعیین می‌شود.
            </p>

            <a href="{{ route('contact') }}" class="sv-text-link">
                درباره سئوی کسب‌وکار خود گفت‌وگو کنیم
                <span aria-hidden="true">←</span>
            </a>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="sv-section sv-faq">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">FAQ</span>

            <h2 class="sv-section-title">
                سؤالات متداول درباره خدمات سئو سایت
            </h2>

            <p class="sv-section-desc">
                پیش از شروع همکاری، بهتر است درباره زمان‌بندی، هزینه‌ها،
                مسئولیت‌ها و نحوه ارزیابی نتیجه دید روشنی داشته باشید.
            </p>
        </div>

        <div class="sv-faq-list">
            <article class="sv-faq-item">
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>سئو سایت چقدر زمان می‌برد تا نتیجه بدهد؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>آیا رتبه یک گوگل را تضمین می‌کنید؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>هزینه خدمات سئو چگونه تعیین می‌شود؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>آیا برای سئو باید سایت را از نو طراحی کنیم؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>تولید محتوا هم جزو خدمات سئو است؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>گزارش سئو شامل چه اطلاعاتی است؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>اگر سایت قبلاً سئو شده باشد، باز هم می‌توان همکاری کرد؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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
                <button
                    class="sv-faq-question"
                    type="button"
                    aria-expanded="false"
                >
                    <span>آیا می‌توانیم هم‌زمان روی چند خدمت یا شهر کار کنیم؟</span>

                    <span class="sv-faq-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
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

    {{-- Related Services --}}
    <section class="sv-section sv-related">
        <div class="sv-section-heading">
            <span class="sv-eyebrow">Related Services</span>

            <h2 class="sv-section-title">
                خدمات مکمل برای رشد بهتر سایت
            </h2>

            <p class="sv-section-desc">
                گاهی برای بهبود نتیجه سئو، علاوه بر بهینه‌سازی موتور جست‌وجو،
                لازم است بخش‌هایی از سایت یا مسیر جذب مشتری نیز اصلاح شوند.
            </p>
        </div>

        <div class="sv-related-grid">
            <a href="#" class="sv-related-card">
                <div class="sv-related-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <rect x="3" y="4" width="18" height="16" rx="2" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M3 9h18M8 4v5" stroke="currentColor" stroke-width="1.8"/>
                        <path d="M7 13h4M7 16h7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>طراحی و توسعه وب‌سایت</h3>

                <p>
                    برای کسب‌وکارهایی که هنوز سایت مناسبی ندارند یا به بستری
                    قابل توسعه برای رشد ارگانیک نیاز دارند.
                </p>

                <span class="sv-text-link">
                    آشنایی با خدمت
                    <span aria-hidden="true">←</span>
                </span>
            </a>

            <a href="#" class="sv-related-card">
                <div class="sv-related-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 5h16v14H4z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                        <path d="M8 9h8M8 12h6M8 15h4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                    </svg>
                </div>

                <h3>تولید و بهینه‌سازی محتوا</h3>

                <p>
                    برای تبدیل نیازهای جست‌وجوی مخاطبان به محتوای مفید، دقیق
                    و مرتبط با خدمات و محصولات کسب‌وکار.
                </p>

                <span class="sv-text-link">
                    آشنایی با خدمت
                    <span aria-hidden="true">←</span>
                </span>
            </a>

            <a href="#" class="sv-related-card">
                <div class="sv-related-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="M4 19V5M4 19h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        <path d="m7 15 4-4 3 2 5-7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>

                <h3>تحلیل عملکرد و بهبود تجربه کاربر</h3>

                <p>
                    برای شناخت رفتار کاربران، بررسی مسیرهای ورود و شناسایی
                    فرصت‌های بهبود در تبدیل بازدیدکننده به مشتری.
                </p>

                <span class="sv-text-link">
                    آشنایی با خدمت
                    <span aria-hidden="true">←</span>
                </span>
            </a>
        </div>
    </section>

    {{-- Final CTA --}}
    <section class="sv-final-cta">
        <div class="sv-final-content">
            <span class="sv-eyebrow">Let's Grow Organically</span>

            <h2>
                می‌خواهید سایتتان از گوگل مشتریان مرتبط‌تری جذب کند؟
            </h2>

            <p>
                از بررسی وضعیت فعلی شروع می‌کنیم؛ فرصت‌های رشد، موانع مهم و
                اولویت‌های سئو را مشخص می‌کنیم تا بدانید برای بهبود حضور سایت
                در نتایج جست‌وجو، چه اقداماتی ارزش بیشتری دارند.
            </p>

            <div class="sv-final-buttons">
                <a href="{{ route('contact') }}" class="sv-btn sv-btn-primary">
                    شروع گفت‌وگو درباره سئو
                </a>

                <a href="{{ route('services') }}" class="sv-btn sv-btn-secondary">
                    مشاهده سایر خدمات
                </a>
            </div>
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