{{-- resources/views/Home/services.blade.php --}}

@extends('Home.Layouts.layout')

@section('title', 'خدمات | Moradix Studio')

@section('description',
    'خدمات توسعه وب Moradix Studio: طراحی وب‌سایت، فروشگاه اینترنتی، ارتقای سایت وردپرسی، بازطراحی
    UI/UX، سئو و بهینه‌سازی، و سیستم‌های اختصاصی با Laravel')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('site/css/Home/services/services-index.css') }}">
    @endpush

@section('content')

    {{-- Breadcrumb --}}
    <nav class="sv-breadcrumb" aria-label="{{ __('site.services_page_breadcrumb_aria') }}">
        <div class="container">
            <ol class="sv-breadcrumb-list">
                <li class="sv-breadcrumb-item">
                    <a href="{{ route('home') }} ">{{ __('site.services_page_home') }}</a>
                </li>

                <li class="sv-breadcrumb-item" aria-current="page">
                    {{ __('site.services_page_breadcrumb_current') }}
                </li>
            </ol>
        </div>
    </nav>

    {{-- Services Index Hero --}}
    <section class="si-hero" aria-labelledby="si-hero-title">
        <div class="container">

            <div class="si-hero-inner">

                {{-- Hero Content --}}
                <div class="si-hero-content">
                    <h1 class="si-hero-title" id="si-hero-title">
                        {{ __('site.services_page_hero_title_before') }}
                        <span>{{ __('site.services_page_hero_title_highlight') }}</span>
                    </h1>

                    <p class="si-hero-description">
                        {{ __('site.services_page_hero_description') }}
                    </p>

                    <div class="si-hero-actions">
                        <a href="#services" class="btn btn-primary">
                            {{ __('site.services_page_hero_view_services') }}
                            <svg class="si-hero-button-arrow" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M19 12H5" />
                                <path d="m12 19-7-7 7-7" />
                            </svg>
                        </a>

                        <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}"
                            class="btn btn-outline"> {{ __('site.services_page_hero_consultation') }}
                        </a>
                    </div>



                </div>

                {{-- Hero Visual --}}
                <div class="si-hero-visual" aria-hidden="true">

                    <div class="si-hero-glow"></div>

                    <div class="si-hero-orbit si-hero-orbit-one"></div>
                    <div class="si-hero-orbit si-hero-orbit-two"></div>

                    <div class="si-hero-panel">

                        <div class="si-hero-panel-header">
                            <span class="si-hero-panel-label">
                                STUDIO MORADIX
                            </span>

                        </div>

                        <div class="si-hero-panel-heading">
                            <span>{{ __('site.services_page_panel_heading') }}</span> <span
                                class="si-hero-panel-line"></span>
                        </div>

                        <div class="si-hero-service-list">

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="16" rx="2" />
                                        <path d="M3 9h18M8 4v5" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    {{ __('site.services_page_service_web_design') }}
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 2-1.6L22 7H6" />
                                        <circle cx="10" cy="20" r="1" />
                                        <circle cx="18" cy="20" r="1" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    {{ __('site.services_page_service_ecommerce') }}
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="10.5" cy="10.5" r="6.5" />
                                        <path d="m16 16 5 5M8 11l2 2 3-4" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    {{ __('site.services_page_service_seo') }}
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M4 7h16M7 4v16M4 17h16" />
                                        <path d="m14 10 3 3-3 3" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    {{ __('site.services_page_service_redesign') }}
                                </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                            <div class="si-hero-service">
                                <span class="si-hero-service-icon">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="4" y="4" width="6" height="6" rx="1" />
                                        <rect x="14" y="4" width="6" height="6" rx="1" />
                                        <rect x="4" y="14" width="6" height="6" rx="1" />
                                        <rect x="14" y="14" width="6" height="6" rx="1" />
                                    </svg>
                                </span>

                                <span class="si-hero-service-name">
                                    {{ __('site.services_page_service_custom_systems') }} </span>

                                <span class="si-hero-service-arrow">↗</span>
                            </div>

                        </div>

                        <div class="si-hero-panel-footer">
                            <span class="si-hero-footer-mark"></span>
                            <span>{{ __('site.services_page_panel_footer') }}</span>
                        </div>

                    </div>

                    <div class="si-hero-floating si-hero-floating-top">
                        <span class="si-hero-floating-icon">✳</span>
                        <span>{{ __('site.services_page_floating_targeted_design') }}</span>
                    </div>

                    <div class="si-hero-floating si-hero-floating-bottom">
                        <span class="si-hero-floating-check">✓</span>
                        <span>{{ __('site.services_page_floating_business_fit') }}</span>
                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- Services Process --}}
    <section class="si-process" id="services-process">
        <div class="container">

            <div class="si-process-heading">
                <span class="si-process-eyebrow">
                    {{ __('site.services_page_process_eyebrow') }}
                </span>

                <h2 class="si-process-title">
                    {{ __('site.services_page_process_title') }}
                </h2>

                <p class="si-process-description">
                    {{ __('site.services_page_process_description') }}
                </p>
            </div>

            <div class="si-process-grid">

                {{-- Step 01 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="7" />
                                <path d="m16 16 4 4" />
                                <path d="M8.5 11h5M11 8.5v5" />
                            </svg>
                        </span>
                        <span class="si-process-number">1</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step1_title') }}</h3>
                    <p>{{ __('site.services_page_process_step1_description') }}</p>
                </div>

                {{-- Step 02 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7Z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                        </span>
                        <span class="si-process-number">2</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step2_title') }}</h3>
                    <p>{{ __('site.services_page_process_step2_description') }}</p>
                </div>

                {{-- Step 03 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="m8 10 3 3-3 3M13 16h4" />
                            </svg>
                        </span>
                        <span class="si-process-number">3</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step3_title') }}</h3>
                    <p>{{ __('site.services_page_process_step3_description') }}</p>
                </div>

                {{-- Step 04 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                        </span>
                        <span class="si-process-number">4</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step4_title') }}</h3>
                    <p>{{ __('site.services_page_process_step4_description') }}</p>
                </div>

            </div>
        </div>
    </section>


    {{-- Services Process --}}
    <section class="si-process" id="services-process">
        <div class="container">

            <div class="si-process-heading">
                <span class="si-process-eyebrow">
                    {{ __('site.services_page_process_eyebrow') }}
                </span>

                <h2 class="si-process-title">
                    {{ __('site.services_page_process_title') }}
                </h2>

                <p class="si-process-description">
                    {{ __('site.services_page_process_description') }}
                </p>
            </div>

            <div class="si-process-grid">

                {{-- Step 01 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="7" />
                                <path d="m16 16 4 4" />
                                <path d="M8.5 11h5M11 8.5v5" />
                            </svg>
                        </span>
                        <span class="si-process-number">1</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step1_title') }}</h3>
                    <p>{{ __('site.services_page_process_step1_description') }}</p>
                </div>

                {{-- Step 02 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7Z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg>
                        </span>
                        <span class="si-process-number">2</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step2_title') }}</h3>
                    <p>{{ __('site.services_page_process_step2_description') }}</p>
                </div>

                {{-- Step 03 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="m8 10 3 3-3 3M13 16h4" />
                            </svg>
                        </span>
                        <span class="si-process-number">3</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step3_title') }}</h3>
                    <p>{{ __('site.services_page_process_step3_description') }}</p>
                </div>

                {{-- Step 04 --}}
                <div class="si-process-card">
                    <div class="si-process-card-top">
                        <span class="si-process-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                        </span>
                        <span class="si-process-number">4</span>
                    </div>

                    <h3>{{ __('site.services_page_process_step4_title') }}</h3>
                    <p>{{ __('site.services_page_process_step4_description') }}</p>
                </div>

            </div>
        </div>
    </section>


    {{-- FAQ Section --}}
    <section class="pr-faq si-faq" id="faq">
        <div class="container">

            <h2>{{ __('site.services_page_faq_title') }}</h2>

            <div class="pr-faq-list si-faq-list">

                {{-- سؤال اول --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>{{ __('site.services_page_faq_q1') }}</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>{{ __('site.services_page_faq_a1') }}</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال دوم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>{{ __('site.services_page_faq_q2') }}</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>{{ __('site.services_page_faq_a2') }}</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال سوم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>{{ __('site.services_page_faq_q3') }}</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>{{ __('site.services_page_faq_a3') }}</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال چهارم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>{{ __('site.services_page_faq_q4') }}</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>{{ __('site.services_page_faq_a4') }}</p>
                        </div>
                    </div>
                </div>

                {{-- سؤال پنجم --}}
                <div class="pr-faq-item si-faq-item">
                    <button class="pr-faq-question si-faq-question" type="button" aria-expanded="false">
                        <span>{{ __('site.services_page_faq_q5') }}</span>
                        <svg class="pr-faq-icon si-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer si-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>{{ __('site.services_page_faq_a5') }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


   {{-- Final CTA Section --}}
<section class="si-cta" id="contact">
    <div class="container">

        <div class="si-cta-card">

            {{-- Decorative Elements --}}
            <span class="si-cta-orb si-cta-orb-one" aria-hidden="true"></span>
            <span class="si-cta-orb si-cta-orb-two" aria-hidden="true"></span>

            <div class="si-cta-content">

                <span class="si-cta-eyebrow">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-2-5.8L4 11l6-2.2L12 3Z"
                            stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                        <path d="m19 14 1.1 2.9L23 18l-2.9 1.1L19 22l-1.1-2.9L15 18l2.9-1.1L19 14Z"
                            stroke="currentColor" stroke-width="1.4" stroke-linejoin="round" />
                    </svg>

                    {{ __('site.services_page_cta_eyebrow') }}
                </span>

                <h2 class="si-cta-title">
                    {{ __('site.services_page_cta_title_before') }}
                    <span>{{ __('site.services_page_cta_title_highlight') }}</span>
                </h2>

                <p class="si-cta-description">
                    {{ __('site.services_page_cta_description') }}
                </p>

                <div class="si-cta-actions">
                    <a href="{{ app()->getLocale() === 'en' ? route('en.contact') : route('contact') }}"
                        class="si-cta-primary">
                        {{ __('site.services_page_cta_primary') }}

                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="{{ app()->getLocale() === 'en' ? route('en.services') : route('services') }}"
                        class="si-cta-secondary">
                        {{ __('site.services_page_cta_secondary') }}
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('site/js/Home/services/services-index.js') }}" defer></script>
@endpush
