@extends('Home.Layouts.layout')

@section('content')
    <!-- ==================== Hero Section ==================== -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>وب‌سایت تخصصی برای کسب‌وکار شما، بدون پیچیدگی</h1>
                    <p>با Laravel و کدنویسی اختصاصی، فروشگاه اینترنتی و سایت شرکتی حرفه‌ای بسازید. سریع، امن، و درست از همان
                        ابتدا بهینه برای سئو.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('contact') }}" class="btn btn-primary">ثبت درخواست پروژه</a>
                        <a href="{{ route('portfolio') }}" class="btn btn-outline">مشاهده نمونه‌کارها</a>
                    </div>
                </div>

                <div class="hero-visual" aria-hidden="true">
                    <div class="hero-visual-content">
                        <div class="hero-visual-bar"></div>
                        <div class="hero-visual-bar"></div>
                        <div class="hero-visual-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- ==================== Studio Capabilities ==================== --}}

    <section class="studio-capabilities">

        {{-- Services heading --}}
        <div class="studio-marquee-heading studio-services-heading">


            <h2 class="studio-marquee-title">
                توانمندی‌ها
            </h2>


        </div>


        {{-- Inline SVG icons for service items --}}
        <svg class="sm-icon-defs" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <symbol id="sm-code" viewBox="0 0 24 24">
                <path d="m8 8-4 4 4 4M16 8l4 4-4 4M14 4l-4 16" />
            </symbol>
            <symbol id="sm-layout" viewBox="0 0 24 24">
                <rect x="3" y="4" width="18" height="16" rx="2" />
                <path d="M3 9h18M9 9v11" />
            </symbol>
            <symbol id="sm-server" viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="8" rx="2" />
                <rect x="3" y="13" width="18" height="8" rx="2" />
                <path d="M7 7h.01M7 17h.01M11 7h6M11 17h6" />
            </symbol>
            <symbol id="sm-search" viewBox="0 0 24 24">
                <circle cx="10.5" cy="10.5" r="6.5" />
                <path d="m16 16 4 4M8 10h5M10.5 7.5v5" />
            </symbol>
            <symbol id="sm-gauge" viewBox="0 0 24 24">
                <path d="M4 19a9 9 0 1 1 16 0M12 13l4-5M7 19h10" />
                <circle cx="12" cy="13" r="1" />
            </symbol>
            <symbol id="sm-panel" viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="18" rx="3" />
                <path d="M9 3v18M9 8h12M13 13h4M13 17h4" />
            </symbol>
            <symbol id="sm-device" viewBox="0 0 24 24">
                <rect x="6" y="2" width="12" height="20" rx="2" />
                <path d="M10 18h4M2 6v12M22 6v12" />
            </symbol>
            <symbol id="sm-database" viewBox="0 0 24 24">
                <ellipse cx="12" cy="5" rx="8" ry="3" />
                <path d="M4 5v14c0 1.7 3.6 3 8 3s8-1.3 8-3V5M4 12c0 1.7 3.6 3 8 3s8-1.3 8-3" />
            </symbol>
            <symbol id="sm-shield" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-11V5l-8-3-8 3v6c0 7 8 11 8 11Z" />
                <path d="m9 12 2 2 4-4" />
            </symbol>
            <symbol id="sm-layers" viewBox="0 0 24 24">
                <path d="m12 3 9 5-9 5-9-5 9-5ZM3 12l9 5 9-5M3 16l9 5 9-5" />
            </symbol>
            <symbol id="sm-refresh" viewBox="0 0 24 24">
                <path d="M20 7v5h-5M4 17v-5h5" />
                <path d="M5.5 9a7 7 0 0 1 11.6-2L20 12M4 12l2.9 5a7 7 0 0 0 11.6-2" />
            </symbol>
            <symbol id="sm-puzzle" viewBox="0 0 24 24">
                <path d="M9 3h3a2 2 0 1 1 4 0h3v6a2 2 0 1 1 0 4v8h-6a2 2 0 1 0-4 0H3v-6a2 2 0 1 0 0-4V5h6a2 2 0 1 1 0-2Z" />
            </symbol>
            <symbol id="sm-cart" viewBox="0 0 24 24">
                <path d="M3 3h2l2.5 12h11L21 7H6" />
                <circle cx="10" cy="20" r="1" />
                <circle cx="18" cy="20" r="1" />
            </symbol>
            <symbol id="sm-git" viewBox="0 0 24 24">
                <circle cx="6" cy="6" r="2" />
                <circle cx="18" cy="6" r="2" />
                <circle cx="12" cy="18" r="2" />
                <path d="M8 6h8M12 16V9" />
            </symbol>
            <symbol id="sm-image" viewBox="0 0 24 24">
                <rect x="3" y="3" width="18" height="18" rx="2" />
                <circle cx="8.5" cy="8.5" r="1.5" />
                <path d="m21 15-5-5L5 21" />
            </symbol>
            <symbol id="sm-support" viewBox="0 0 24 24">
                <path d="M4 13v-2a8 8 0 0 1 16 0v2" />
                <path d="M4 13H3v4h4v-4H4ZM20 13h1v4h-4v-4h3ZM17 20h-5" />
            </symbol>
            <symbol id="sm-target" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="9" />
                <circle cx="12" cy="12" r="5" />
                <circle cx="12" cy="12" r="1" />
            </symbol>
            <symbol id="sm-blocks" viewBox="0 0 24 24">
                <rect x="3" y="3" width="8" height="8" rx="1" />
                <rect x="13" y="3" width="8" height="8" rx="1" />
                <rect x="3" y="13" width="8" height="8" rx="1" />
                <rect x="13" y="13" width="8" height="8" rx="1" />
            </symbol>
            <symbol id="sm-rocket" viewBox="0 0 24 24">
                <path d="M12 15 9 12a14 14 0 0 1 10-9c0 5-3 9-7 12Z" />
                <path d="m9 12-4 1-2 5 5-2M12 15l-1 4-5 2 2-5M14 7h.01" />
            </symbol>
            <symbol id="sm-wrench" viewBox="0 0 24 24">
                <path d="M14 6a5 5 0 0 0-6 6L3 17l4 4 5-5a5 5 0 0 0 6-6l-3 3-4-4 3-3Z" />
            </symbol>
        </svg>

        {{-- First marquee: services --}}
        <section class="studio-marquee studio-marquee-services" aria-label="خدمات و توانمندی‌های استودیو">
            <div class="studio-marquee-track studio-marquee-track-left">

                @for ($copy = 0; $copy < 4; $copy++)
                    <div class="studio-marquee-group" @if ($copy > 0) aria-hidden="true" @endif>
                        @foreach ($studioServices as $service)
                            <div class="studio-marquee-item">

                                <span class="studio-marquee-icon">
                                    <svg class="studio-service-icon" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                                        stroke-linejoin="round" aria-hidden="true">
                                        <use href="#sm-{{ $service->icon }}"></use>
                                    </svg>
                                </span>

                                <span class="studio-marquee-label">
                                    {{ $service->title }}
                                </span>

                            </div>
                        @endforeach
                    </div>
                @endfor

            </div>
        </section>


        {{-- Technologies heading --}}
        <div class="studio-marquee-heading studio-tech-heading">


            <h2 class="studio-marquee-title">
                ابزارها و تکنولوژی‌ ها
            </h2>
        </div>

        {{-- Second marquee: technology logos --}}
        <section class="studio-marquee studio-marquee-tech" aria-label="تکنولوژی‌های مورد استفاده">
            <div class="studio-marquee-track studio-marquee-track-right">

                @for ($copy = 0; $copy < 4; $copy++)
                    <div class="studio-marquee-group studio-tech-group" dir="ltr"
                        @if ($copy > 0) aria-hidden="true" @endif>
                        @foreach ($techStack as $tech)
                            <div class="studio-tech-item">
                                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/{{ $tech->logo }}"
                                    alt="{{ $tech->name }}" title="{{ $tech->name }}" width="36" height="36"
                                    loading="lazy" decoding="async">
                            </div>
                        @endforeach
                    </div>
                @endfor

            </div>
        </section>

    </section>


    {{-- Services Section --}}
    <section class="section services" id="services">
        <div class="container">

            <div class="services-grid">

                {{-- Shared Background for All Services --}}
                <div class="services-featured">

                    {{-- Popular Services Header --}}
                    <div class="services-featured-header">


                        <h2>خدمات پرفروش</h2>

                        <p>
                            دو راهکار محبوب برای شروع حرفه‌ای
                            کسب‌وکار شما در فضای وب
                        </p>
                    </div>

                    {{-- Primary Services --}}
                    <div class="services-row services-row-primary">

                        {{-- Website Design --}}
                        <article class="service-card service-card-primary">

                            <div class="service-card-top">
                                <span class="service-number">1</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="4" width="18" height="16" rx="2" />
                                        <path d="M3 9h18" />
                                        <path d="M7 6.5h.01" />
                                        <path d="M10 6.5h.01" />
                                        <path d="m9 14 2 2 4-4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>طراحی وب‌سایت</h3>

                                <p>
                                    طراحی وب‌سایتی حرفه‌ای، مدرن و متناسب با هویت برند
                                    و نیاز واقعی کسب‌وکار شما؛ با تمرکز بر تجربه کاربری،
                                    ظاهر جذاب و عملکرد مناسب در تمام دستگاه‌ها.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.web-design') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- Ecommerce Design --}}
                        <article class="service-card service-card-primary">

                            <div class="service-card-top">
                                <span class="service-number">2</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M3 3h2l2.4 11.4a2 2 0 0 0 2 1.6h7.8a2 2 0 0 0 2-1.6L21 7H6" />
                                        <circle cx="10" cy="20" r="1" />
                                        <circle cx="18" cy="20" r="1" />
                                        <path d="M12 10h4" />
                                        <path d="M14 8v4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>طراحی فروشگاه اینترنتی</h3>

                                <p>
                                    ساخت فروشگاهی آنلاین با تجربه خرید ساده،
                                    دسته‌بندی منظم محصولات، مدیریت آسان سفارش‌ها
                                    و مسیری شفاف برای تبدیل بازدیدکننده به مشتری.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.ecommerce') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                    </div>

                    {{-- Specialized Services Header --}}
                    <div class="services-specialized-header">


                        <h2>خدمات تخصصی ما </h2>

                        <p>
                            از ارتقای سایت فعلی تا توسعه سیستم‌های اختصاصی
                            و افزایش دیده‌شدن کسب‌وکار شما در گوگل
                        </p>
                    </div>

                    {{-- Secondary Services --}}
                    <div class="services-row services-row-secondary">

                        {{-- Redesign Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">3</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M12 20h9" />
                                        <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z" />
                                        <path d="m15 5 4 4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>بازطراحی و ارتقای سایت</h3>

                                <p>
                                    بهبود ظاهر، تجربه کاربری، سرعت و مدیریت سایت فعلی شما؛
                                    با هدف رفع مشکلات موجود و ارتقای کیفیت سایت،
                                    بدون شروع غیرضروری از صفر.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.redesign') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- Custom Systems Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">4</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                        <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                        <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                        <path d="M10 6.5h4" />
                                        <path d="M17.5 10v4" />
                                        <path d="M10 17.5h4" />
                                        <path d="M6.5 10v4" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>سیستم‌های اختصاصی</h3>

                                <p>
                                    توسعه سامانه‌ها، پنل‌های مدیریتی و ابزارهای اختصاصی
                                    متناسب با فرایندهای کسب‌وکار شما برای مدیریت بهتر
                                    و ساده‌تر کارها.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.custom-systems') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                        {{-- SEO Service --}}
                        <article class="service-card">

                            <div class="service-card-top">
                                <span class="service-number">5</span>

                                <div class="service-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <circle cx="11" cy="11" r="7" />
                                        <path d="m20 20-4-4" />
                                        <path d="M8 13V9" />
                                        <path d="M11 13V7" />
                                        <path d="M14 13v-2" />
                                    </svg>
                                </div>
                            </div>

                            <div class="service-card-content">
                                <h3>سئو سایت</h3>

                                <p>
                                    بهینه‌سازی ساختار و محتوای سایت برای دیده‌شدن بهتر
                                    در جست‌وجوی گوگل و جذب مخاطبانی که به خدمات
                                    و محصولات شما نیاز دارند.
                                </p>
                            </div>

                            <div class="service-footer">


                                <a href="{{ route('services.seo') }}" class="service-link">
                                    مشاهده جزئیات
                                    <span aria-hidden="true">←</span>
                                </a>
                            </div>

                        </article>

                    </div>

                </div>
                {{-- End Shared Background --}}

            </div>
        </div>
    </section>



    {{-- Portfolio Section --}}
    <section class="section portfolio" id="portfolio">
        <div class="container">

            <div class="section-header">
                <h2>نمونه‌کارهای ما</h2>
                <p>
                    بخشی از پروژه‌هایی که برای رشد و توسعه کسب‌وکارها
                    طراحی و پیاده‌سازی کرده‌ایم
                </p>
            </div>

            <div class="portfolio-grid">

                @forelse ($featuredProjects as $project)
                    <article class="portfolio-card">

                        {{-- Project Image --}}
                        <div class="portfolio-image" aria-label="تصویر پروژه">

                            @if ($project->primary_image)
                                <img src="{{ asset(
                                    trim(env('PROJECT_IMAGES_UPLOAD_PATH', 'uploads/projects/images'), '/') . '/' . $project->primary_image,
                                ) }}"
                                    alt="{{ $project->title }}" loading="lazy">
                            @else
                                <div class="portfolio-placeholder">
                                    <span>
                                        {{ mb_substr($project->title, 0, 1) }}
                                    </span>
                                </div>
                            @endif

                        </div>

                        {{-- Project Content --}}
                        <div class="portfolio-content">

                            <p class="portfolio-type">
                                {{ $project->category?->name ?? 'پروژه اختصاصی' }}
                            </p>

                            <h3>{{ $project->title }}</h3>

                            @if ($project->features->isNotEmpty())
                                <div class="portfolio-tags">
                                    @foreach ($project->features->take(3) as $feature)
                                        <span class="tag">
                                            {{ $feature->name }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif

                            @if ($project->short_description)
                                <p class="portfolio-description">
                                    {{ $project->short_description }}
                                </p>
                            @endif

                            <a href="{{ route('portfolio.show', $project->slug) }}" class="portfolio-link">
                                مشاهده جزئیات پروژه
                                <span aria-hidden="true">←</span>
                            </a>

                        </div>

                    </article>

                @empty

                    <div class="portfolio-empty">
                        <p>در حال آماده‌سازی نمونه‌کارهای ما هستیم.</p>
                    </div>
                @endforelse

            </div>

            {{-- View All Projects --}}
            <div class="portfolio-more">
                <a href="{{ url('/portfolio') }}" class="portfolio-more-link">
                    مشاهده همه نمونه‌کارها
                    <span aria-hidden="true">←</span>
                </a>
            </div>

        </div>
    </section>

    <!-- ==================== Why Us Section ==================== -->
    <section class="section why-us" id="why-us">
        <div class="container">
            <div class="section-header">
                <h2>چرا Moradix Studio؟</h2>
                <p>مزیت‌های واقعی همکاری با ما</p>
            </div>

            <div class="why-grid">
                <!-- Why Item 1 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <div class="why-content">
                        <h3>کد تمیز و مستندات کامل</h3>
                        <p>تحویل پروژه با کدنویسی استاندارد، کامنت‌گذاری و مستندات فنی برای توسعه‌های آینده</p>
                    </div>
                </div>

                <!-- Why Item 2 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <div class="why-content">
                        <h3>یک نفر مسئول پروژه‌ی شما</h3>
                        <p>از مشاوره تا تحویل و پشتیبانی، همیشه با یک نفر در ارتباط هستید، بدون سردرگمی</p>
                    </div>
                </div>

                <!-- Why Item 3 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <div class="why-content">
                        <h3>سئو و سرعت از ابتدا</h3>
                        <p>بهینه‌سازی برای موتورهای جستجو و سرعت بالا بخشی از کدنویسی اولیه است، نه کار اضافی بعدی</p>
                    </div>
                </div>

                <!-- Why Item 4 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <div class="why-content">
                        <h3>پشتیبانی پس از تحویل</h3>
                        <p>۳ ماه پشتیبانی رایگان برای رفع باگ و راهنمایی استفاده از پنل مدیریت</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Process Section ==================== -->
    <section class="section process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>فرآیند کار</h2>
                <p>از ایده تا تحویل، گام‌به‌گام با شما هستیم</p>
            </div>

            <div class="process-timeline">
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۱">۱</div>
                    <h3>مشاوره رایگان</h3>
                    <p>بررسی نیاز شما، پیشنهاد راه‌کار مناسب و برآورد زمان و هزینه</p>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۲">۲</div>
                    <h3>تحلیل و قرارداد</h3>
                    <p>مشخص کردن دقیق ویژگی‌ها، امضای قرارداد و دریافت پیش‌پرداخت</p>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۳">۳</div>
                    <h3>طراحی و توسعه</h3>
                    <p>کدنویسی با Laravel، گزارش پیشرفت منظم و دریافت بازخورد شما</p>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۴">۴</div>
                    <h3>تست و تحویل</h3>
                    <p>تست کامل عملکرد، رفع نواقص، تحویل نهایی و آموزش کار با پنل</p>
                </div>

                <!-- Step 5 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۵">۵</div>
                    <h3>پشتیبانی</h3>
                    <p>۳ ماه پشتیبانی رایگان، رفع باگ و پاسخ‌گویی به سوالات شما</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== FAQ Section ==================== -->
    <section class="section faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>سوالات متداول</h2>
                <p>پاسخ سوالاتی که احتمالاً برای شما پیش آمده</p>
            </div>

            <div class="faq-list">
                <!-- FAQ 1 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>هزینه‌ی ساخت یک وب‌سایت چقدر است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>هزینه بستگی به نوع پروژه و امکانات مورد نیاز دارد. یک سایت شرکتی ساده از ۸ میلیون تومان،
                                فروشگاه اینترنتی از ۱۵ میلیون تومان و سیستم‌های سفارشی بر اساس تحلیل نیاز قیمت‌گذاری
                                می‌شوند. بعد از مشاوره رایگان، برآورد دقیق به شما ارائه می‌دهیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>مدت زمان تحویل پروژه چقدر است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>زمان تحویل بسته به حجم کار متفاوت است. یک سایت شرکتی معمولاً ۲ تا ۳ هفته، فروشگاه اینترنتی ۴
                                تا ۶ هفته و سیستم‌های بزرگ‌تر ممکن است ۲ تا ۳ ماه زمان ببرند. در قرارداد، زمان‌بندی دقیق
                                مشخص می‌شود و گزارش پیشرفت منظم دریافت می‌کنید.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا دامنه و هاست را هم شما تهیه می‌کنید؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>خرید دامنه و هاست به عهده‌ی خود شماست، اما ما در انتخاب مناسب‌ترین سرویس راهنمایی‌تان
                                می‌کنیم. همچنین نصب و راه‌اندازی سایت روی هاست را انجام می‌دهیم و تنظیمات لازم برای امنیت و
                                سرعت را اعمال می‌کنیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>پشتیبانی بعد از تحویل چگونه است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>۳ ماه پشتیبانی رایگان شامل رفع باگ‌های احتمالی، راهنمایی استفاده از پنل مدیریت و پاسخ به
                                سوالات فنی است. بعد از این مدت، امکان قرارداد پشتیبانی ماهانه یا انجام تغییرات و توسعه‌های
                                جدید به‌صورت پروژه‌ای وجود دارد.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا سایت من برای سئو بهینه خواهد بود؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>بله، تمام سایت‌هایی که می‌سازیم از نظر سئوی فنی بهینه‌اند. این شامل ساختار URL صحیح،
                                متاتگ‌ها، سرعت بارگذاری، ریسپانسیو بودن و استاندارد بودن کد HTML است. البته سئوی محتوایی
                                (نوشتن متن بهینه و بک‌لینک‌سازی) بخش جداگانه‌ای است که می‌توانیم در آن هم راهنمایی کنیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا بعد از تحویل می‌توانم تغییرات بدهم؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>بله، تغییرات جزئی در دوره‌ی پشتیبانی رایگان انجام می‌شود. تغییرات بزرگ‌تر مثل اضافه کردن بخش
                                جدید یا ویژگی‌های پیچیده، به‌صورت پروژه‌ی جداگانه برآورد و اجرا می‌شوند. چون کد تمیز و مستند
                                تحویل می‌دهیم، توسعه‌های آینده بسیار راحت‌تر خواهد بود.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== CTA & Form Section ==================== -->

    <section class="section cta-section" id="contact">
        <div class="container">
            <div class="cta-content">

                <div class="cta-header">
                    <h2>آماده‌ی شروع پروژه‌تان هستید؟</h2>
                    <p>
                        فرم زیر را پر کنید تا در اسرع وقت با شما تماس بگیریم
                        و مشاوره رایگان ارائه دهیم.
                    </p>
                </div>

                <div class="ct-form-card" id="contact-form-section">

                    <h2 class="ct-form-title">فرم درخواست مشاوره</h2>
                    <p class="ct-form-subtitle">
                        اطلاعاتت رو وارد کن تا برای هماهنگی باهات تماس بگیریم.
                    </p>

                    {{-- Success Message --}}
                    @if (session('contact_success'))
                        <div class="ct-form-success show" id="ct-success-message" role="alert" aria-live="polite">
                            <span>
                                پیام شما با موفقیت ارسال شد.
                                به‌زودی با شما تماس می‌گیریم.
                            </span>
                        </div>
                    @endif

                    <form id="ct-contact-form" action="{{ route('contact-us.form') }}#contact-form-section"
                        method="POST" novalidate>
                        @csrf

                        @error('contact_limit')
                            <div class="ct-form-error">{{ $message }}</div>
                        @enderror

                        {{-- Request Type --}}
                        <div class="ct-request-type">
                            <label class="ct-request-type-label">
                                نوع درخواست:
                            </label>

                            <div class="ct-pills">
                                <input type="radio" id="home-request-consultation" name="request_type"
                                    value="consultation" class="ct-pill-input"
                                    {{ old('request_type', 'consultation') === 'consultation' ? 'checked' : '' }}>
                                <label for="home-request-consultation" class="ct-pill-label">
                                    مشاوره رایگان
                                </label>

                                <input type="radio" id="home-request-project" name="request_type" value="project"
                                    class="ct-pill-input" {{ old('request_type') === 'project' ? 'checked' : '' }}>
                                <label for="home-request-project" class="ct-pill-label">
                                    ثبت درخواست پروژه
                                </label>
                            </div>

                            @error('request_type')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Name --}}
                        <div class="ct-form-group">
                            <label for="home-ct-name" class="ct-form-label">
                                نام و نام خانوادگی
                                <span class="required">*</span>
                            </label>

                            <input type="text" id="home-ct-name" name="name" class="ct-form-input"
                                value="{{ old('name') }}" placeholder="مثال: علی احمدی" autocomplete="name" required>

                            @error('name')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Phone --}}
                        <div class="ct-form-group">
                            <label for="home-ct-phone" class="ct-form-label">
                                شماره موبایل
                                <span class="required">*</span>
                            </label>

                            <input type="tel" id="home-ct-phone" name="phone" class="ct-form-input"
                                value="{{ old('phone') }}" placeholder="۰۹۱۲۳۴۵۶۷۸۹" inputmode="tel"
                                autocomplete="tel" required>

                            @error('phone')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Project Type --}}
                        <div class="ct-form-group">
                            <label for="home-ct-project-type" class="ct-form-label">
                                نوع پروژه
                                <span class="required">*</span>
                            </label>

                            <select id="home-ct-project-type" name="project_type" class="ct-form-select" required>
                                <option value="">انتخاب کنید</option>

                                <option value="not-sure" {{ old('project_type') === 'not-sure' ? 'selected' : '' }}>
                                    هنوز مطمئن نیستم
                                </option>

                                <option value="website-design"
                                    {{ old('project_type') === 'website-design' ? 'selected' : '' }}>
                                    طراحی وب‌سایت
                                </option>

                                <option value="online-shop" {{ old('project_type') === 'online-shop' ? 'selected' : '' }}>
                                    طراحی فروشگاه اینترنتی
                                </option>

                                <option value="wordpress-upgrade"
                                    {{ old('project_type') === 'wordpress-upgrade' ? 'selected' : '' }}>
                                    بازطراحی و ارتقای سایت
                                </option>

                                <option value="custom-system"
                                    {{ old('project_type') === 'custom-system' ? 'selected' : '' }}>
                                    سیستم‌های اختصاصی
                                </option>

                                <option value="seo-speed" {{ old('project_type') === 'seo-speed' ? 'selected' : '' }}>
                                    سئو و بهینه‌سازی
                                </option>
                            </select>

                            @error('project_type')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Message --}}
                        <div class="ct-form-group">
                            <label for="home-ct-message" class="ct-form-label">
                                توضیحات پروژه (اختیاری)
                            </label>

                            <textarea id="home-ct-message" name="message" class="ct-form-textarea"
                                placeholder="در چند خط توضیح بده چه پروژه‌ای مدنظرت هست...">{{ old('message') }}</textarea>

                            @error('message')
                                <div class="ct-form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Honeypot --}}
                        <div class="ct-honeypot" aria-hidden="true">
                            <label for="home-ct-website">وب‌سایت</label>
                            <input type="text" id="home-ct-website" name="website" value="" tabindex="-1"
                                autocomplete="off">
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="ct-form-submit">
                            ارسال درخواست
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </section>

    @if ($errors->any() || session('contact_success') || session('contact_limit'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const formSection = document.getElementById('contact-form-section');

                if (formSection) {
                    setTimeout(function() {
                        formSection.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 100);
                }
            });
        </script>
    @endif

@endsection
