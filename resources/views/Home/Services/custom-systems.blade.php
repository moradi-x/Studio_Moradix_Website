@extends('Home.Layouts.layout')

@section('title', __('site.custom_systems_page_title'))

@section('description', __('site.custom_systems_page_description'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/Home/services/service-page.css') }}">
@endpush

@section('content')
    <div class="sv-page">

        {{-- Breadcrumb --}}
        <nav class="sv-breadcrumb" aria-label="{{ __('site.custom_systems_breadcrumb_label') }}">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ app()->getLocale() === 'en' ? route('en.home') : route('home') }}">
                            {{ __('site.custom_systems_breadcrumb_home') }}
                        </a>
                    </li>
                    <li class="sv-breadcrumb-item">
                        <a href="{{ app()->getLocale() === 'en' ? route('en.services') : route('services') }}">
                            {{ __('site.custom_systems_breadcrumb_services') }}
                        </a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        {{ __('site.custom_systems_breadcrumb_current') }}
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
                            {{ __('site.custom_systems_hero_title') }}
                        </h1>

                        <p class="sv-hero-subtitle">
                            {{ __('site.custom_systems_hero_subtitle') }}
                        </p>

                        <p class="sv-hero-desc">
                            {{ __('site.custom_systems_hero_description') }}
                        </p>

                        <div class="sv-hero-buttons">
                            <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}"
                                class="btn btn-primary">
                                {{ __('site.custom_systems_hero_consultation') }}
                            </a>

                            <a href="{{ app()->getLocale() === 'en' ? route('en.pricing') : route('pricing') }}"
                                class="btn btn-outline">
                                {{ __('site.custom_systems_hero_pricing') }}
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
                                <div class="wd-blk" style="--k:0;--s:6;--t:6;--w:15;--h:6">
                                    <span class="wd-fill wd-f-bar is-dark"></span>
                                </div>
                                <div class="wd-blk" style="--k:1;--s:28;--t:7.5;--w:7;--h:3">
                                    <span class="wd-fill wd-f-bar is-gray"></span>
                                </div>
                                <div class="wd-blk" style="--k:2;--s:37;--t:7.5;--w:7;--h:3">
                                    <span class="wd-fill wd-f-bar is-gray"></span>
                                </div>
                                <div class="wd-blk" style="--k:3;--s:46;--t:7.5;--w:7;--h:3">
                                    <span class="wd-fill wd-f-bar is-gray"></span>
                                </div>
                                <div class="wd-blk" style="--k:4;--s:80;--t:5.5;--w:14;--h:7;--r:99px">
                                    <span class="wd-fill wd-f-pill is-teal"></span>
                                </div>

                                {{-- تیتر و متن --}}
                                <div class="wd-blk" style="--k:5;--s:6;--t:24;--w:50;--h:8">
                                    <span class="wd-fill wd-f-bar is-dark"></span>
                                </div>
                                <div class="wd-blk" style="--k:6;--s:6;--t:35;--w:34;--h:8">
                                    <span class="wd-fill wd-f-bar is-dark"></span>
                                </div>
                                <div class="wd-blk" style="--k:7;--s:6;--t:48;--w:46;--h:2.6;--r:4px">
                                    <span class="wd-fill wd-f-bar is-gray"></span>
                                </div>
                                <div class="wd-blk" style="--k:8;--s:6;--t:53;--w:38;--h:2.6;--r:4px">
                                    <span class="wd-fill wd-f-bar is-gray"></span>
                                </div>

                                {{-- دکمه‌ها --}}
                                <div class="wd-blk" style="--k:9;--s:6;--t:62;--w:16;--h:8;--r:99px">
                                    <span class="wd-fill wd-f-pill is-teal"></span>
                                </div>
                                <div class="wd-blk" style="--k:10;--s:24;--t:62;--w:16;--h:8;--r:99px">
                                    <span class="wd-fill wd-f-pill is-line"></span>
                                </div>

                                {{-- تصویر اصلی هیرو --}}
                                <div class="wd-blk" style="--k:11;--s:58;--t:20;--w:36;--h:46;--r:16px">
                                    <span class="wd-fill wd-f-img">
                                        <span class="wd-circle"></span>
                                        <span class="wd-chart">
                                            <i style="--h:42%"></i>
                                            <i style="--h:68%"></i>
                                            <i style="--h:54%"></i>
                                            <i style="--h:86%"></i>
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
                            <span class="wd-ph-l"></span>
                            <span class="wd-ph-l s"></span>
                            <span class="wd-ph-img"></span>
                            <span class="wd-ph-btn"></span>
                            <span class="wd-ph-card"></span>
                        </div>

                        {{-- پالت رنگ --}}
                        <div class="wd-pal">
                            <span class="sw sw-w"></span>
                            <span class="sw sw-k"></span>
                            <span class="sw sw-t"></span>
                            <b dir="ltr">Aa</b>
                        </div>

                        {{-- نتیجه --}}
                        <div class="wd-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            {{ __('site.custom_systems_hero_result') }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- What Changes Section --}}
        <section class="sv-section sv-changes">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.custom_systems_changes_title') }}
                </h2>

                <div class="sv-changes-grid">

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <p>{{ __('site.custom_systems_change_1') }}</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <p>{{ __('site.custom_systems_change_2') }}</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <p>{{ __('site.custom_systems_change_3') }}</p>
                    </div>

                    <div class="sv-change-card">
                        <svg class="sv-change-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-3a2 2 0 00-2-2H6a2 2 0 00-2 2v3a2 2 0 002 2zm10-9V7a4 4 0 00-8 0v3h8z" />
                        </svg>
                        <p>{{ __('site.custom_systems_change_4') }}</p>
                    </div>

                </div>

                <p class="sv-changes-note">
                    {{ __('site.custom_systems_changes_note') }}
                </p>

            </div>
        </section>

        {{-- Is This For You Section --}}
        <section class="sv-section sv-fit">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.custom_systems_fit_title') }}
                </h2>

                <div class="sv-fit-grid">

                    {{-- Good Fit --}}
                    <div class="sv-fit-card sv-fit-yes">
                        <h3 class="sv-fit-title">{{ __('site.custom_systems_fit_yes_title') }}</h3>

                        <ul class="sv-fit-list">
                            @foreach (range(1, 4) as $i)
                                <li>
                                    <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>{{ __("site.custom_systems_fit_yes_{$i}") }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Not a Fit --}}
                    <div class="sv-fit-card sv-fit-no">
                        <h3 class="sv-fit-title">{{ __('site.custom_systems_fit_no_title') }}</h3>

                        <ul class="sv-fit-list">
                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>
                                    {{ __('site.custom_systems_fit_no_1_before') }}
                                    <a href="{{ app()->getLocale() === 'en' ? route('en.services.web-design') : route('services.web-design') }}"
                                        class="sv-alt-link">{{ __('site.custom_systems_fit_no_1_link') }}</a>
                                    {{ __('site.custom_systems_fit_no_1_after') }}
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>
                                    {{ __('site.custom_systems_fit_no_2_before') }}
                                    <a href="{{ app()->getLocale() === 'en' ? route('en.services.redesign') : route('services.redesign') }}"
                                        class="sv-alt-link">{{ __('site.custom_systems_fit_no_2_link') }}</a>
                                    {{ __('site.custom_systems_fit_no_2_after') }}
                                </span>
                            </li>

                            <li>
                                <svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ __('site.custom_systems_fit_no_3') }}</span>
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
                    {{ __('site.custom_systems_types_title') }}
                </h2>

                <div class="sv-types-grid">

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <h3>{{ __('site.custom_systems_type_1_title') }}</h3>
                        <p>{{ __('site.custom_systems_type_1_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3>{{ __('site.custom_systems_type_2_title') }}</h3>
                        <p>{{ __('site.custom_systems_type_2_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3v18h18M18 17V9m-5 8V5m-5 12v-4" />
                        </svg>
                        <h3>{{ __('site.custom_systems_type_3_title') }}</h3>
                        <p>{{ __('site.custom_systems_type_3_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5V4H2v16h5m5-16v16m-5-8h5m-5 4h5" />
                        </svg>
                        <h3>{{ __('site.custom_systems_type_4_title') }}</h3>
                        <p>{{ __('site.custom_systems_type_4_description') }}</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Deliverables Section --}}
        <section class="sv-section sv-deliverables">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.custom_systems_deliverables_title') }}
                </h2>

                <div class="sv-deliverables-grid">

                    @php
                        $deliverableIcons = [
                            'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                            'M16 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2m16 0v-2a4 4 0 00-3-3.87M12 7a4 4 0 11-8 0 4 4 0 018 0zm8 4a4 4 0 100-8',
                            'M3 3v18h18M18 17V9m-5 8V5m-5 12v-4',
                            'M8 7V3m8 4V3M4 11h16M5 5h14a1 1 0 011 1v13a1 1 0 01-1 1H5a1 1 0 01-1-1V6a1 1 0 011-1z',
                            'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
                            'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                        ];
                    @endphp

                    @foreach (range(1, 6) as $i)
                        <div class="sv-deliverable-card">
                            <svg class="sv-deliverable-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="{{ $deliverableIcons[$i - 1] }}" />
                            </svg>
                            <h3>{{ __("site.custom_systems_deliverable_{$i}_title") }}</h3>
                            <p>{{ __("site.custom_systems_deliverable_{$i}_description") }}</p>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        {{-- Process Section --}}
        <section class="sv-section sv-process">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.custom_systems_process_title') }}
                </h2>

                <div class="sv-process-steps">

                    @foreach (range(1, 4) as $i)
                        <div class="sv-process-step">
                            <div class="sv-step-number">
                                {{ app()->getLocale() === 'en' ? $i : ['۱', '۲', '۳', '۴'][$i - 1] }}</div>
                            <h3>{{ __("site.custom_systems_process_{$i}_title") }}</h3>
                            <p>{{ __("site.custom_systems_process_{$i}_description") }}</p>
                        </div>
                    @endforeach

                </div>

                <p class="sv-process-cta">
                    {{ __('site.custom_systems_process_cta_question') }}
                    <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}">
                        {{ __('site.custom_systems_process_cta_link') }}
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
                            <h2>{{ __('site.custom_systems_related_projects_title') }}</h2>
                            <p>{{ __('site.custom_systems_related_projects_description') }}</p>
                        </div>

                        <a href="{{ app()->getLocale() === 'en' ? route('en.portfolio') : route('portfolio') }}"
                            class="pf-related-all">
                            {{ __('site.custom_systems_related_projects_all') }}
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
                                    {{ __('site.custom_systems_related_projects_details') }}
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
                    {{ __('site.custom_systems_related_services_title') }}
                </h2>

                <div class="sv-related-grid">

                    <a href="{{ app()->getLocale() === 'en' ? route('en.services.web-design') : route('services.web-design') }}"
                        class="sv-related-card">
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>

                        <h3>{{ __('site.custom_systems_related_service_1_title') }}</h3>
                        <p>{{ __('site.custom_systems_related_service_1_description') }}</p>
                    </a>

                    <a href="{{ app()->getLocale() === 'en' ? route('en.services.redesign') : route('services.redesign') }}"
                        class="sv-related-card">
                        <svg class="sv-related-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h5M20 20v-5h-5M5.64 18.36A9 9 0 0018.36 5.64M18.36 18.36A9 9 0 015.64 5.64" />
                        </svg>

                        <h3>{{ __('site.custom_systems_related_service_2_title') }}</h3>
                        <p>{{ __('site.custom_systems_related_service_2_description') }}</p>
                    </a>

                </div>
            </div>
        </section>

    </div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/Home/services/service-page.js') }}" defer></script>
@endpush
