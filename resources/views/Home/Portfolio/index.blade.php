
@extends('Home.Layouts.layout')

@section('title', 'نمونه‌کارها و پروژه‌های در حال توسعه | Moradix Studio')

@section('description', 'مروری بر پروژه‌های منتخب و پروژه‌های در حال توسعه Moradix Studio در زمینه طراحی وب‌سایت، فروشگاه اینترنتی و راهکارهای دیجیتال.')
@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/portfolio/portfolio-index.css') }}">
@endpush


@section('content')

<main class="pf-page" dir="rtl">

    {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
                <li class="sv-breadcrumb-item" aria-current="page">                        
                         نمونه کارها 
                    </li>
                </ol>
            </div>
        </nav>


    {{-- Hero --}}
    <section class="pf-hero">
        <div class="container pf-container">

            <div class="pf-hero-content">
               
                <h1>
                    ایده‌هایی که
                    <span class="pf-gradient-text">در مسیر ساخت</span>
                    هستند.
                </h1>

                <p class="pf-hero-description">
                    در Moradix، هر پروژه با شناخت نیازها، برنامه‌ریزی و
                    توجه به تجربه کاربر شکل می‌گیرد. اینجا می‌توانید
                    پروژه‌های در حال توسعه ما را بشناسید و با مسیر
                    شکل‌گیری آن‌ها آشنا شوید.
                </p>

                <div class="pf-hero-actions">
                    <a href="#pf-projects" class="pf-btn pf-btn-primary">
                        مشاهده پروژه‌ها
                        <span aria-hidden="true">←</span>
                    </a>

                    <a href="#pf-contact" class="pf-btn pf-btn-secondary">
                        درباره پروژه خودتان صحبت کنیم
                    </a>
                </div>

               
            </div>

            {{-- Decorative visual --}}
            <div class="pf-hero-visual" aria-hidden="true">
                <div class="pf-orbit pf-orbit-one"></div>
                <div class="pf-orbit pf-orbit-two"></div>

                <div class="pf-visual-window">
                    <div class="pf-window-top">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="pf-window-address">moradix.studio / projects</div>
                    </div>

                    <div class="pf-window-content">
                        <div class="pf-window-sidebar">
                            <div class="pf-sidebar-logo"></div>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>

                        <div class="pf-window-main">
                            <div class="pf-window-label">PROJECT OVERVIEW</div>
                            <div class="pf-window-title"></div>
                            <div class="pf-window-line"></div>

                            <div class="pf-window-cards">
                                <div class="pf-window-card pf-window-card-a">
                                    <span></span>
                                    <i></i>
                                </div>
                                <div class="pf-window-card pf-window-card-b">
                                    <span></span>
                                    <i></i>
                                </div>
                            </div>

                            <div class="pf-window-bottom">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pf-floating-tag pf-floating-tag-top">
                    <span class="pf-floating-icon">✦</span>
                    Thoughtful design
                </div>

                <div class="pf-floating-tag pf-floating-tag-bottom">
                    <span class="pf-live-dot"></span>
                    Currently in progress
                </div>
            </div>

        </div>
    </section>


    {{-- Projects --}}
    <section class="pf-projects" id="pf-projects">
        <div class="container pf-container">

            <div class="pf-section-heading">
                <div>
                    <h2>نمونه کار های Studio Moradix</h2>
                    
                </div>

                <div class="pf-project-count">
                    <strong>03</strong>
                    <span>پروژه </span>
                </div>
            </div>


            <div class="pf-project-grid">

                {{-- Project 01: Autokoodak --}}
                <article class="pf-project-card" data-reveal>
                    <div class="pf-project-preview pf-preview-auto">

                        <div class="pf-preview-topbar">
                            <span class="pf-preview-brand">
                                <span class="pf-brand-symbol">A</span>
                                autokoodak
                            </span>
                            <span class="pf-preview-menu">☰</span>
                        </div>

                        <div class="pf-auto-content">
                            <div class="pf-auto-copy">
                                <span class="pf-preview-overline">LITTLE DRIVERS</span>
                                <div class="pf-auto-title">
                                    دنیای کوچک<br>
                                    <strong>راننده‌های بزرگ</strong>
                                </div>
                                <div class="pf-auto-description">
                                    ماشین و موتور برقی کودک
                                </div>
                                <span class="pf-auto-button">مشاهده محصولات</span>
                            </div>

                            <div class="pf-auto-art" aria-hidden="true">
                                <div class="pf-auto-sun"></div>
                                <div class="pf-auto-cloud pf-auto-cloud-one"></div>
                                <div class="pf-auto-cloud pf-auto-cloud-two"></div>

                                <div class="pf-car">
                                    <div class="pf-car-window"></div>
                                    <div class="pf-car-wheel pf-car-wheel-one"></div>
                                    <div class="pf-car-wheel pf-car-wheel-two"></div>
                                    <div class="pf-car-light"></div>
                                </div>

                                <div class="pf-auto-ground"></div>
                            </div>
                        </div>

                        <span class="pf-preview-watermark">CONCEPT PREVIEW</span>
                    </div>

                    <div class="pf-project-body">
                        <div class="pf-project-meta">
                            <span class="pf-project-category">
                                فروشگاه اینترنتی
                            </span>
                            <span class="pf-status">
                                <span></span>
                                در حال توسعه
                            </span>
                        </div>

                        <h3>اتوکودک</h3>

                        <p class="pf-project-description">
                            طراحی فروشگاهی برای عرضه ماشین‌ها و موتورهای
                            شارژی کودک، با هدف ساده‌تر کردن انتخاب محصول
                            و ایجاد تجربه خریدی روشن و قابل اعتماد برای والدین.
                        </p>

                        <div class="pf-project-tags">
                            <span>تجربه خرید</span>
                            <span>طراحی واکنش‌گرا</span>
                            <span>معرفی محصول</span>
                        </div>

                        <div class="pf-project-footer">
                            <span class="pf-project-index">PROJECT 01</span>
                            <span class="pf-project-arrow" aria-hidden="true">↙</span>
                        </div>
                    </div>
                </article>


                {{-- Project 02: Behzadi Tools --}}
                <article class="pf-project-card" data-reveal>
                    <div class="pf-project-preview pf-preview-tools">

                        <div class="pf-tools-header">
                            <div class="pf-tools-brand">
                                <span class="pf-tools-logo">B</span>
                                <span>
                                    <strong>بهزادی</strong>
                                    <small>فروشگاه ابزار</small>
                                </span>
                            </div>

                            <div class="pf-tools-search">
                                جست‌وجوی ابزار...
                                <span>⌕</span>
                            </div>

                            <span class="pf-tools-menu">☰</span>
                        </div>

                        <div class="pf-tools-content">
                            <div class="pf-tools-copy">
                                <span class="pf-tools-kicker">TOOLS FOR EVERY JOB</span>
                                <h4>ابزار درست،<br>انتخاب مطمئن</h4>
                                <p>تجهیزات و ابزار مورد نیاز کار شما</p>
                                <span class="pf-tools-cta">بررسی محصولات</span>
                            </div>

                            <div class="pf-tools-art" aria-hidden="true">
                                <div class="pf-tool-shape pf-tool-drill">
                                    <div class="pf-drill-head"></div>
                                    <div class="pf-drill-body"></div>
                                    <div class="pf-drill-handle"></div>
                                    <div class="pf-drill-base"></div>
                                </div>

                                <div class="pf-tool-shape pf-tool-box">
                                    <div class="pf-box-handle"></div>
                                    <div class="pf-box-line"></div>
                                </div>

                                <div class="pf-tool-circle"></div>
                            </div>
                        </div>

                        <div class="pf-tools-bottom">
                            <span>کیفیت</span>
                            <span>تنوع محصول</span>
                            <span>انتخاب آسان</span>
                        </div>

                        <span class="pf-preview-watermark">CONCEPT PREVIEW</span>
                    </div>

                    <div class="pf-project-body">
                        <div class="pf-project-meta">
                            <span class="pf-project-category">
                                فروشگاه تخصصی
                            </span>
                            <span class="pf-status">
                                <span></span>
                                در حال توسعه
                            </span>
                        </div>

                        <h3>فروشگاه ابزار بهزادی</h3>

                        <p class="pf-project-description">
                            ایده یک فروشگاه تخصصی ابزار با دسته‌بندی
                            شفاف، دسترسی سریع به محصولات و ساختاری که
                            مقایسه و انتخاب ابزار مناسب را آسان‌تر کند.
                        </p>

                        <div class="pf-project-tags">
                            <span>دسته‌بندی محصول</span>
                            <span>جست‌وجو</span>
                            <span>فروش آنلاین</span>
                        </div>

                        <div class="pf-project-footer">
                            <span class="pf-project-index">PROJECT 02</span>
                            <span class="pf-project-arrow" aria-hidden="true">↙</span>
                        </div>
                    </div>
                </article>


                {{-- Project 03: Knauf / Drywall --}}
                <article class="pf-project-card" data-reveal>
                    <div class="pf-project-preview pf-preview-knauf">

                        <div class="pf-knauf-header">
                            <span class="pf-knauf-logo">K<span>.</span></span>
                            <span class="pf-knauf-nav">
                                خدمات
                                <i></i>
                                پروژه‌ها
                                <i></i>
                                تماس
                            </span>
                            <span class="pf-knauf-menu">☰</span>
                        </div>

                        <div class="pf-knauf-content">
                            <div class="pf-knauf-copy">
                                <span class="pf-knauf-kicker">SPACE, REDEFINED</span>
                                <h4>
                                    فضاهایی برای<br>
                                    <strong>زندگی بهتر</strong>
                                </h4>
                                <p>خدمات تخصصی کناف و دیوار خشک</p>
                                <span class="pf-knauf-cta">آشنایی با خدمات</span>
                            </div>

                            <div class="pf-knauf-art" aria-hidden="true">
                                <div class="pf-room-wall"></div>
                                <div class="pf-room-ceiling"></div>
                                <div class="pf-room-panel pf-room-panel-one"></div>
                                <div class="pf-room-panel pf-room-panel-two"></div>
                                <div class="pf-room-floor"></div>
                                <div class="pf-room-light"></div>
                                <div class="pf-room-decoration"></div>
                            </div>
                        </div>

                        <div class="pf-knauf-caption">
                            INTERIOR / DRYWALL CONCEPT
                        </div>

                        <span class="pf-preview-watermark">CONCEPT PREVIEW</span>
                    </div>

                    <div class="pf-project-body">
                        <div class="pf-project-meta">
                            <span class="pf-project-category">
                                وب‌سایت خدماتی
                            </span>
                            <span class="pf-status">
                                <span></span>
                                در حال توسعه
                            </span>
                        </div>

                        <h3>وب‌سایت خدمات کناف</h3>

                        <p class="pf-project-description">
                            طراحی وب‌سایتی برای معرفی خدمات کناف و دیوار خشک،
                            نمایش نمونه پروژه‌ها و کمک به مشتریان برای شناخت
                            خدمات و برقراری ارتباط با مجموعه.
                        </p>

                        <div class="pf-project-tags">
                            <span>معرفی خدمات</span>
                            <span>گالری پروژه‌ها</span>
                            <span>ارتباط با مشتری</span>
                        </div>

                        <div class="pf-project-footer">
                            <span class="pf-project-index">PROJECT 03</span>
                            <span class="pf-project-arrow" aria-hidden="true">↙</span>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>


    {{-- Process --}}
    <section class="pf-process">
        <div class="container pf-container">
            <div class="pf-process-heading">
                <h2>هر پروژه، یک مسیر مشخص دارد.</h2>
                <p>
                    طراحی خوب فقط ظاهر زیبا نیست؛ باید به نیاز کاربر پاسخ
                    دهد و مسیر رسیدن به هدف را ساده‌تر کند.
                </p>
            </div>

            <div class="pf-process-grid">
                <div class="pf-process-item" data-reveal>
                    <span class="pf-process-number">01</span>
                    <div class="pf-process-icon" aria-hidden="true">⌕</div>
                    <h3>شناخت نیاز</h3>
                    <p>
                        بررسی هدف کسب‌وکار، مخاطبان و نیازهای اصلی پروژه.
                    </p>
                </div>

                <div class="pf-process-item" data-reveal>
                    <span class="pf-process-number">02</span>
                    <div class="pf-process-icon" aria-hidden="true">◇</div>
                    <h3>طراحی تجربه</h3>
                    <p>
                        شکل دادن به ساختار صفحات، مسیرهای کاربر و ظاهر رابط.
                    </p>
                </div>

                <div class="pf-process-item" data-reveal>
                    <span class="pf-process-number">03</span>
                    <div class="pf-process-icon" aria-hidden="true">⌘</div>
                    <h3>پیاده‌سازی</h3>
                    <p>
                        تبدیل طرح به یک تجربه وب واکنش‌گرا و کاربردی.
                    </p>
                </div>

                <div class="pf-process-item" data-reveal>
                    <span class="pf-process-number">04</span>
                    <div class="pf-process-icon" aria-hidden="true">↗</div>
                    <h3>بررسی و انتشار</h3>
                    <p>
                        بررسی عملکرد، سازگاری صفحات و آماده‌سازی برای انتشار.
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{-- CTA --}}
    <section class="pf-cta" id="pf-contact">
        <div class="container pf-container">
            <div class="pf-cta-card">
                <div class="pf-cta-decoration pf-cta-decoration-one"></div>
                <div class="pf-cta-decoration pf-cta-decoration-two"></div>

                <div class="pf-cta-content">
                    <h2>
                        ایده شما می‌تواند<br>
                        <span>شروع پروژه بعدی باشد.</span>
                    </h2>
                    <p>
                        اگر برای کسب‌وکار خود به وب‌سایت یا فروشگاه اینترنتی
                        نیاز دارید، می‌توانیم درباره ایده و نیازهای شما صحبت کنیم.
                    </p>

                    <a href="{{ url('/contact') }}" class="pf-btn pf-btn-light">
                        شروع گفتگو
                        <span aria-hidden="true">←</span>
                    </a>
                </div>

                <div class="pf-cta-mark" aria-hidden="true">
                    <span>M</span>
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection

@push('scripts')
    <script src="{{ asset('site/js/portfolio/portfolio-index.js') }}" defer></script>
@endpush
