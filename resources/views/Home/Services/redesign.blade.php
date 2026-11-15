@extends('Home.Layouts.layout')

@section('title', __('site.redesign_page_title'))

@section('description', __('site.redesign_page_description'))

@section('content')
    <div class="sv-page">

        {{-- Breadcrumb --}}
        <nav class="sv-breadcrumb" aria-label="{{ __('site.redesign_breadcrumb_label') }}">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ app()->getLocale() === 'en' ? route('en.home') : route('home') }}">
                            {{ __('site.redesign_breadcrumb_home') }}
                        </a>
                    </li>
                    <li class="sv-breadcrumb-item">
                        <a href="{{ app()->getLocale() === 'en' ? route('en.services') : route('services') }}">
                            {{ __('site.redesign_breadcrumb_services') }}
                        </a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        {{ __('site.redesign_breadcrumb_current') }}
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
                            {{ __('site.redesign_hero_title') }}
                        </h1>

                        <p class="sv-hero-subtitle">
                            {{ __('site.redesign_hero_subtitle') }}
                        </p>

                        <p class="sv-hero-desc">
                            {{ __('site.redesign_hero_description') }}
                        </p>

                        <div class="sv-hero-buttons">
                            <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}"
                                class="btn btn-primary">
                                {{ __('site.redesign_hero_consultation') }}
                            </a>

                            <a href="{{ app()->getLocale() === 'en' ? route('en.pricing') : route('pricing') }}"
                                class="btn btn-outline">
                                {{ __('site.redesign_hero_pricing') }}
                            </a>
                        </div>
                    </div>

                    {{-- Hero Illustration --}}
                    <div class="wd-art" aria-hidden="true">
                        <span class="wd-glow"></span>

                        <div class="wd-win">
                            <div class="wd-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">your-website.ir</span>
                            </div>

                            <div class="wd-screen" dir="rtl">
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
                                    <span class="wd-fill wd-f-card">
                                        <i class="wd-ic"></i><b></b><b class="s"></b>
                                    </span>
                                </div>
                                <div class="wd-blk" style="--k:13;--s:36.5;--t:76;--w:27;--h:18;--r:12px">
                                    <span class="wd-fill wd-f-card">
                                        <i class="wd-ic"></i><b></b><b class="s"></b>
                                    </span>
                                </div>
                                <div class="wd-blk" style="--k:14;--s:67;--t:76;--w:27;--h:18;--r:12px">
                                    <span class="wd-fill wd-f-card">
                                        <i class="wd-ic"></i><b></b><b class="s"></b>
                                    </span>
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
                            {{ __('site.redesign_hero_result') }}
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Types Section --}}
        <section class="sv-section sv-types">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.redesign_types_title') }}
                </h2>

                <div class="sv-types-grid">

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="3" width="18" height="18" rx="3" />
                            <path d="M3 9h18M9 21V9" />
                            <circle cx="6" cy="6" r=".5" fill="currentColor" />
                        </svg>
                        <h3>{{ __('site.redesign_type_1_title') }}</h3>
                        <p>{{ __('site.redesign_type_1_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m8 8-4 4 4 4M16 8l4 4-4 4M14 4l-4 16" />
                        </svg>
                        <h3>{{ __('site.redesign_type_2_title') }}</h3>
                        <p>{{ __('site.redesign_type_2_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 2-1.6L22 7H6" />
                            <circle cx="10" cy="20" r="1" />
                            <circle cx="18" cy="20" r="1" />
                        </svg>
                        <h3>{{ __('site.redesign_type_3_title') }}</h3>
                        <p>{{ __('site.redesign_type_3_description') }}</p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="16" rx="2" />
                            <path d="M3 9h18M8 4v5" />
                            <circle cx="6" cy="6.5" r=".5" fill="currentColor" />
                            <path d="m11 14 2 2 4-4" />
                        </svg>
                        <h3>{{ __('site.redesign_type_4_title') }}</h3>
                        <p>{{ __('site.redesign_type_4_description') }}</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Deliverables Section --}}
        <section class="sv-section sv-deliverables">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.redesign_deliverables_title') }}
                </h2>

                <div class="sv-deliverables-grid">

                    <div class="sv-deliverable-card">
                        <h3>{{ __('site.redesign_deliverable_1_title') }}</h3>
                        <p>{{ __('site.redesign_deliverable_1_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>{{ __('site.redesign_deliverable_2_title') }}</h3>
                        <p>{{ __('site.redesign_deliverable_2_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>{{ __('site.redesign_deliverable_3_title') }}</h3>
                        <p>{{ __('site.redesign_deliverable_3_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>{{ __('site.redesign_deliverable_4_title') }}</h3>
                        <p>{{ __('site.redesign_deliverable_4_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>{{ __('site.redesign_deliverable_5_title') }}</h3>
                        <p>{{ __('site.redesign_deliverable_5_description') }}</p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>{{ __('site.redesign_deliverable_6_title') }}</h3>
                        <p>{{ __('site.redesign_deliverable_6_description') }}</p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Process Section --}}
        <section class="sv-section sv-process" id="sv-process">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.redesign_process_title') }}
                </h2>

                <div class="sv-process-steps">

                    <div class="sv-process-step">
                        <div class="sv-step-number">1</div>
                        <h3>{{ __('site.redesign_process_1_title') }}</h3>
                        <p>{{ __('site.redesign_process_1_description') }}</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">2</div>
                        <h3>{{ __('site.redesign_process_2_title') }}</h3>
                        <p>{{ __('site.redesign_process_2_description') }}</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">3</div>
                        <h3>{{ __('site.redesign_process_3_title') }}</h3>
                        <p>{{ __('site.redesign_process_3_description') }}</p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">4</div>
                        <h3>{{ __('site.redesign_process_4_title') }}</h3>
                        <p>{{ __('site.redesign_process_4_description') }}</p>
                    </div>

                </div>

                <p class="sv-process-cta">
                    {{ __('site.redesign_process_cta_question') }}
                    <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}">
                        {{ __('site.redesign_process_cta_link') }}
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
                            <h2>{{ __('site.redesign_related_projects_title') }}</h2>
                            <p>{{ __('site.redesign_related_projects_description') }}</p>
                        </div>

                        <a href="{{ app()->getLocale() === 'en' ? route('en.portfolio') : route('portfolio') }}"
                            class="pf-related-all">
                            {{ __('site.redesign_related_projects_all') }}
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

                                    @if (app()->getLocale() === 'en'
                                            ? ($relatedProject->short_description_en ?:
                                            $relatedProject->short_description)
                                            : $relatedProject->short_description)
                                        <p>
                                            {{ app()->getLocale() === 'en'
                                                ? ($relatedProject->short_description_en ?:
                                                    $relatedProject->short_description)
                                                : $relatedProject->short_description }}
                                        </p>
                                    @endif
                                </div>

                                <a href="{{ route(
                                    app()->getLocale() === 'en' ? 'en.portfolio.show' : 'portfolio.show',
                                    app()->getLocale() === 'en' ? ($relatedProject->slug_en ?: $relatedProject->slug) : $relatedProject->slug,
                                ) }}"
                                    class="pf-related-link">
                                    {{ __('site.redesign_related_projects_details') }}
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

        {{-- Related Services Section --}}
        <section class="sv-section sv-related">
            <div class="container">

                <h2 class="sv-section-title">
                    {{ __('site.redesign_related_services_title') }}
                </h2>

                <div class="sv-related-grid">

                    <a href="{{ app()->getLocale() === 'en' ? route('en.services.web-design') : route('services.web-design') }}"
                        class="sv-related-card">

                        <svg class="sv-related-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="13" rx="2"></rect>
                            <path d="M8 21h8"></path>
                            <path d="M12 17v4"></path>
                            <path d="m8 10 2.5 2.5L16 7"></path>
                        </svg>

                        <h3>{{ __('site.redesign_related_service_1_title') }}</h3>

                        <p>{{ __('site.redesign_related_service_1_description') }}</p>
                    </a>

                    <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}"
                        class="sv-related-card">

                        <svg class="sv-related-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M12 3a9 9 0 1 0 9 9"></path>
                            <path d="M12 7v5l3 2"></path>
                            <path d="M16 3h5v5"></path>
                            <path d="m21 3-6 6"></path>
                        </svg>

                        <h3>{{ __('site.redesign_related_service_2_title') }}</h3>

                        <p>{{ __('site.redesign_related_service_2_description') }}</p>
                    </a>

                </div>
            </div>
        </section>

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/Home/services/service-page.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('site/js/Home/services/service-page.js') }}" defer></script>
@endpush
