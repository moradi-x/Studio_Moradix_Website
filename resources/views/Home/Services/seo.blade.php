@extends('Home.Layouts.layout')

@section('title', __('site.seo_page_title'))

@section('description', __('site.seo_page_description'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/Home/services/service-page.css') }}">
@endpush

@section('content')
    <div class="sv-page">

        {{-- Breadcrumb --}}
        <nav class="sv-breadcrumb" aria-label="{{ __('site.seo_breadcrumb_label') }}">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ app()->getLocale() === 'en' ? route('en.home') : route('home') }}">
                            {{ __('site.seo_breadcrumb_home') }}
                        </a>
                    </li>
                    <li class="sv-breadcrumb-item">
                        <a href="{{ app()->getLocale() === 'en' ? route('en.services') : route('services') }}">
                            {{ __('site.seo_breadcrumb_services') }}
                        </a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        {{ __('site.seo_breadcrumb_current') }}
                    </li>
                </ol>
            </div>
        </nav>

        {{-- Hero Section --}}
        <section class="sv-hero">
            <div class="container">
                <div class="sv-hero-content">
                    <div class="sv-hero-text">
                        <h1 class="sv-hero-title">{{ __('site.seo_hero_title') }}</h1>

                        <p class="sv-hero-subtitle">
                            {{ __('site.seo_hero_subtitle') }}
                        </p>

                        <p class="sv-hero-desc">
                            {{ __('site.seo_hero_description') }}
                        </p>

                        <div class="sv-hero-buttons">
                            <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}"
                                class="btn btn-primary">
                                {{ __('site.seo_hero_consultation') }}
                            </a>

                            <a href="{{ app()->getLocale() === 'en' ? route('en.pricing') : route('pricing') }}"
                                class="btn btn-outline">
                                {{ __('site.seo_hero_pricing') }}
                            </a>
                        </div>
                    </div>

                    {{-- Hero Art --}}
                    <div class="wd-art" aria-hidden="true">
                        <span class="wd-glow"></span>

                        <div class="wd-win">
                            <div class="wd-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">your-website.ir</span>
                            </div>

                            <div class="wd-screen" dir="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}">
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
                                        <span class="wd-chart">
                                            <i style="--h:42%"></i><i style="--h:68%"></i>
                                            <i style="--h:54%"></i><i style="--h:86%"></i>
                                        </span>
                                        <span class="wd-glass"><b></b><b class="s"></b></span>
                                    </span>
                                </div>

                                {{-- کارت‌ها --}}
                                <div class="wd-blk" style="--k:12;--s:6;--t:76;--w:27;--h:18;--r:12px">
                                    <span class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b
                                            class="s"></b></span>
                                </div>
                                <div class="wd-blk" style="--k:13;--s:36.5;--t:76;--w:27;--h:18;--r:12px">
                                    <span class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b
                                            class="s"></b></span>
                                </div>
                                <div class="wd-blk" style="--k:14;--s:67;--t:76;--w:27;--h:18;--r:12px">
                                    <span class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b
                                            class="s"></b></span>
                                </div>

                                {{-- ابزار طراحی --}}
                                <span class="wd-sel"></span>
                                <span class="wd-cursor">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M5 3l14 7-6 2-2 6z" fill="#0A0A0A" stroke="#fff" stroke-width="1.6"
                                            stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        {{-- نسخه موبایل --}}
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
                            {{ __('site.seo_hero_result') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- What SEO Improves --}}
        <section class="sv-section sv-changes">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.seo_changes_title') }}
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
                        <p>{{ __('site.seo_change_1') }}</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path d="M4 19V5M4 19h16" stroke-width="1.8" stroke-linecap="round" />
                            <path d="m7 15 4-4 3 2 5-7" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M15.5 6H19v3.5" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>{{ __('site.seo_change_2') }}</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path d="M4 5.5h16v13H4z" stroke-width="1.8" stroke-linejoin="round" />
                            <path d="M8 9h8M8 12h5" stroke-width="1.8" stroke-linecap="round" />
                            <path d="m14 16 2 2 4-4" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>{{ __('site.seo_change_3') }}</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke-width="1.8" />
                            <path d="M12 7v5l3.5 2" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7 3.8 5.5 5.3M17 3.8l1.5 1.5" stroke-width="1.8" stroke-linecap="round" />
                        </svg>
                        <p>{{ __('site.seo_change_4') }}</p>
                    </div>

                </div>

                <p class="sv-changes-note">
                    {{ __('site.seo_changes_note') }}
                </p>

            </div>
        </section>

        {{-- Is This For You Section --}}
        <section class="sv-section sv-fit">
            <div class="container">
                <h2 class="sv-section-title">{{ __('site.seo_fit_title') }}</h2>

                <div class="sv-fit-grid">

                    {{-- Good Fit --}}
                    <div class="sv-fit-card sv-fit-yes">
                        <h3 class="sv-fit-title">{{ __('site.seo_fit_yes_title') }}</h3>

                        <ul class="sv-fit-list">
                            @foreach (range(1, 4) as $i)
                                <li>
                                    <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __("site.seo_fit_yes_{$i}") }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Not a Fit --}}
                    <div class="sv-fit-card sv-fit-no">
                        <h3 class="sv-fit-title">{{ __('site.seo_fit_no_title') }}</h3>

                        <ul class="sv-fit-list">
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 6l12 12M18 6L6 18" />
                                </svg>
                                <span>
                                    {{ __('site.seo_fit_no_1_before') }}
                                    <a href="{{ app()->getLocale() === 'en' ? route('en.services.web-design') : route('services.web-design') }}"
                                        class="sv-alt-link">{{ app()->getLocale() === 'en' ? 'Website Design →' : 'طراحی وب‌سایت ←' }}</a>
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 6l12 12M18 6L6 18" />
                                </svg>
                                <span>{{ __('site.seo_fit_no_2') }}</span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 6l12 12M18 6L6 18" />
                                </svg>
                                <span>{{ __('site.seo_fit_no_3') }}</span>
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
                    {{ __('site.seo_types_title') }}
                </h2>

                <div class="sv-types-grid">

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3 4 7v5c0 5 3.4 8 8 9 4.6-1 8-4 8-9V7l-8-4z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12 2 2 4-4" />
                        </svg>
                        <h3>{{ __('site.seo_type_1_title') }}</h3>
                        <p>{{ __('site.seo_type_1_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5h16v14H4zM8 9h8M8 13h6M8 16h4" />
                        </svg>
                        <h3>{{ __('site.seo_type_2_title') }}</h3>
                        <p>{{ __('site.seo_type_2_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="10.5" cy="10.5" r="6.5" stroke-width="2" />
                            <path d="m15.5 15.5 5 5" stroke-width="2" stroke-linecap="round" />
                            <path d="M8 10.5h5M10.5 8v5" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <h3>{{ __('site.seo_type_3_title') }}</h3>
                        <p>{{ __('site.seo_type_3_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 19V5M4 19h16M7 15l4-4 3 2 5-7" />
                        </svg>
                        <h3>{{ __('site.seo_type_4_title') }}</h3>
                        <p>{{ __('site.seo_type_4_description') }}</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Deliverables --}}
        <section class="sv-section sv-deliverables">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.seo_deliverables_title') }}
                </h2>

                <div class="sv-deliverables-grid">

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="10.5" cy="10.5" r="6.5" stroke-width="2" />
                            <path d="m15.5 15.5 5 5" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <h3>{{ __('site.seo_deliverable_1_title') }}</h3>
                        <p>{{ __('site.seo_deliverable_1_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 4h14v16H5zM8 8h8M8 12h8M8 16h5" />
                        </svg>
                        <h3>{{ __('site.seo_deliverable_2_title') }}</h3>
                        <p>{{ __('site.seo_deliverable_2_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 5h16v14H4zM8 9h8M8 12h6M8 15h4" />
                        </svg>
                        <h3>{{ __('site.seo_deliverable_3_title') }}</h3>
                        <p>{{ __('site.seo_deliverable_3_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3 20 7.5v9L12 21l-8-4.5v-9L12 3zM4.5 7.8l7.5 4.4 7.5-4.4M12 12.2V20" />
                        </svg>
                        <h3>{{ __('site.seo_deliverable_4_title') }}</h3>
                        <p>{{ __('site.seo_deliverable_4_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 19V5M4 19h16m-13-4 4-4 3 2 5-7" />
                        </svg>
                        <h3>{{ __('site.seo_deliverable_5_title') }}</h3>
                        <p>{{ __('site.seo_deliverable_5_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="12" cy="12" r="9" stroke-width="2" />
                            <path d="M12 7v5l3 2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <h3>{{ __('site.seo_deliverable_6_title') }}</h3>
                        <p>{{ __('site.seo_deliverable_6_description') }}</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- SEO Process --}}
        <section class="sv-section sv-process" id="seo-process">
            <div class="container">

                <h2 class="sv-section-title">{{ __('site.seo_process_title') }}</h2>

                <div class="sv-process-steps">

                    @foreach (range(1, 4) as $i)
                        <div class="sv-process-step">
                            <div class="sv-step-number">
                                {{ app()->getLocale() === 'en' ? $i : ['۱', '۲', '۳', '۴'][$i - 1] }}</div>
                            <h3>{{ __("site.seo_process_{$i}_title") }}</h3>
                            <p>{{ __("site.seo_process_{$i}_description") }}</p>
                        </div>
                    @endforeach

                </div>

                <p class="sv-process-cta">
                    {{ __('site.seo_process_cta_question') }}
                    <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}">
                        {{ __('site.seo_process_cta_link') }}
                    </a>
                </p>
            </div>
        </section>

        {{-- Portfolio Section --}}
        @if (isset($relatedProjects) && $relatedProjects->isNotEmpty())
            <section class="pf-related-section" id="related-projects">
                <div class="container">

                    <div class="pf-related-heading {{ app()->getLocale() === 'en' ? 'is-en' : 'is-fa' }}">
                        <div>
                            <h2>{{ __('site.seo_related_projects_title') }}</h2>
                            <p>{{ __('site.seo_related_projects_description') }}</p>
                        </div>

                        <a href="{{ app()->getLocale() === 'en' ? route('en.portfolio') : route('portfolio') }}"
                            class="pf-related-all">
                            {{ __('site.seo_related_projects_all') }}
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
                                            alt="{{ app()->getLocale() === 'en' ? ($relatedProject->title_en ?: $relatedProject->title) : $relatedProject->title }}"
                                            loading="lazy">
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

                                <div class="pf-related-content {{ app()->getLocale() === 'en' ? 'is-en' : 'is-fa' }}">
                                    @if ($relatedProject->category)
                                        <span class="pf-related-category">
                                            {{ app()->getLocale() === 'en' ? $relatedProject->category->slug : $relatedProject->category->name }}
                                        </span>
                                    @endif

                                    <h3>
                                        {{ app()->getLocale() === 'en' ? ($relatedProject->title_en ?: $relatedProject->title) : $relatedProject->title }}
                                    </h3>

                                    @if ($relatedProject->short_description || $relatedProject->short_description_en)
                                        <p>
                                            {{ app()->getLocale() === 'en' ? ($relatedProject->short_description_en ?: $relatedProject->short_description) : $relatedProject->short_description }}
                                        </p>
                                    @endif
                                </div>

                                <a href="{{ route(
                                    app()->getLocale() === 'en' ? 'en.portfolio.show' : 'portfolio.show',
                                    app()->getLocale() === 'en' ? ($relatedProject->slug_en ?: $relatedProject->slug) : $relatedProject->slug,
                                ) }}"
                                    class="pf-related-link">
                                    {{ __('site.seo_related_projects_details') }}
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
    <script src="{{ asset('site/js/Home/services/service-page.js') }}" defer></script>
@endpush
