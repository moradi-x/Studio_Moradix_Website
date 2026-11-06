{{-- resources/views/Home/contact.blade.php --}}

@extends('Home.Layouts.layout')

@php
    $routePrefix = app()->getLocale() === 'en' ? 'en.' : '';
@endphp

@section('title', __('site.contact_page_title') . ' | Moradix Studio')

@section('description', __('site.contact_page_description'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/Home/contact.css') }}">
@endpush

@section('content')
    <div class="ct-page">

        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="{{ __('site.contact_breadcrumb') }}">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route($routePrefix . 'home') }}">{{ __('site.home') }}</a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        {{ __('site.contact_page_title') }}
                    </li>
                </ol>
            </div>
        </nav>

        {{-- Mobile Only Contact Hero --}}
        <section class="ct-mobile-hero">
            <div class="ct-mobile-hero-content">
                <h1>
                    {{ __('site.contact_hero_title') }}
                </h1>

                <p>
                    {{ __('site.contact_hero_description') }}
                </p>

                <div class="ct-mobile-hero-actions">
                    @if (app()->getLocale() === 'fa')
                        <a href="#contact-form" class="ct-mobile-btn ct-mobile-btn-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m22 2-7 20-4-9-9-4Z" />
                                <path d="M22 2 11 13" />
                            </svg>
                            {{ __('site.send_message') }}
                        </a>
                    @endif

                    <a href="#contact-methods" class="ct-mobile-btn ct-mobile-btn-secondary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2
                                                19.79 19.79 0 0 1-8.63-3.07
                                                19.5 19.5 0 0 1-6-6
                                                A19.79 19.79 0 0 1 2.12 4.18
                                                2 2 0 0 1 4.11 2h3
                                                a2 2 0 0 1 2 1.72
                                                c.12.96.36 1.9.7 2.8
                                                a2 2 0 0 1-.45 2.11L8.09 9.91
                                                a16 16 0 0 0 6 6l1.27-1.27
                                                a2 2 0 0 1 2.11-.45
                                                c.9.34 1.84.58 2.8.7
                                                a2 2 0 0 1 1.73 2.03Z" />
                        </svg>
                        {{ __('site.contact_methods') }}
                    </a>
                </div>
            </div>
        </section>

        {{-- Main Section: Form + Contact Info --}}
        <section class="ct-main">
            <div class="container">
                <div class="ct-main-grid">
                    {{-- Form Column --}}
                    @if (app()->getLocale() === 'fa')
                        <div class="ct-form-card" id="contact-form">
                            <h2 class="ct-form-title">{{ __('site.contact_form_title') }}</h2>
                            <p class="ct-form-subtitle">{{ __('site.contact_form_subtitle') }}</p>

                            {{-- Success Message --}}

                            @if (session('contact_success'))
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const successMessage = document.getElementById('ct-success-message');

                                        if (successMessage) {
                                            successMessage.classList.add('show');
                                            successMessage.scrollIntoView({
                                                behavior: 'smooth',
                                                block: 'center'
                                            });
                                        }
                                    });
                                </script>
                            @endif

                            <div class="ct-form-success" id="ct-success-message" role="alert" aria-live="polite">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ session('contact_success', __('site.contact_success')) }}</span>
                            </div>


                            <form id="ct-contact-form" action="{{ route('contact-us.form') }}" method="POST" novalidate>
                                @csrf
                                @error('contact_limit')
                                    <div class="ct-form-error">{{ $message }}</div>
                                @enderror

                                {{-- Request Type --}}
                                <div class="ct-request-type">
                                    <label class="ct-request-type-label">نوع درخواست:</label>

                                    <div class="ct-pills">
                                        <input type="radio" id="request-consultation" name="request_type"
                                            value="consultation" class="ct-pill-input"
                                            {{ old('request_type', 'consultation') === 'consultation' ? 'checked' : '' }}>
                                        <label for="request-consultation" class="ct-pill-label">
                                            مشاوره‌ی رایگان
                                        </label>

                                        <input type="radio" id="request-project" name="request_type" value="project"
                                            class="ct-pill-input" {{ old('request_type') === 'project' ? 'checked' : '' }}>
                                        <label for="request-project" class="ct-pill-label">
                                            ثبت درخواست پروژه
                                        </label>
                                    </div>



                                    @error('request_type')
                                        <div class="ct-form-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Name --}}
                                <div class="ct-form-group">
                                    <label for="ct-name" class="ct-form-label">
                                        نام و نام خانوادگی <span class="required">*</span>
                                    </label>

                                    <input type="text" id="ct-name" name="name" class="ct-form-input"
                                        value="{{ old('name') }}" required aria-required="true"
                                        placeholder="مثال: علی احمدی">


                                    @error('name')
                                        <div class="ct-form-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="ct-form-group">
                                    <label for="ct-phone" class="ct-form-label">
                                        شماره موبایل <span class="required">*</span>
                                    </label>

                                    <input type="tel" id="ct-phone" name="phone" class="ct-form-input"
                                        value="{{ old('phone') }}" required aria-required="true" placeholder="۰۹۱۲۳۴۵۶۷۸۹"
                                        inputmode="numeric">

                                    @error('phone')
                                        <div class="ct-form-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Project Type --}}
                                <div class="ct-form-group">
                                    <label for="ct-project-type" class="ct-form-label">
                                        نوع پروژه <span class="required">*</span>
                                    </label>

                                    <select id="ct-project-type" name="project_type" class="ct-form-select" required
                                        aria-required="true">
                                        <option value="">انتخاب کنید</option>

                                        <option value="not-sure"
                                            {{ old('project_type') === 'not-sure' ? 'selected' : '' }}>
                                            نمی‌دونم
                                        </option>

                                        <option value="website-design"
                                            {{ old('project_type') === 'website-design' ? 'selected' : '' }}>
                                            طراحی وب‌سایت
                                        </option>

                                        <option value="online-shop"
                                            {{ old('project_type') === 'online-shop' ? 'selected' : '' }}>
                                            طراحی فروشگاه اینترنتی
                                        </option>

                                        <option value="wordpress-upgrade"
                                            {{ old('project_type') === 'wordpress-upgrade' ? 'selected' : '' }}>
                                            باز طراحی و ارتقای سایت
                                        </option>



                                        <option value="custom-system"
                                            {{ old('project_type') === 'custom-system' ? 'selected' : '' }}>
                                            سیستم های اختصاصی
                                        </option>

                                        <option value="seo-speed"
                                            {{ old('project_type') === 'seo-speed' ? 'selected' : '' }}>
                                            سئو
                                        </option>


                                    </select>


                                    @error('project_type')
                                        <div class="ct-form-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Message --}}
                                <div class="ct-form-group">
                                    <label for="ct-message" class="ct-form-label">
                                        پیام (اختیاری)
                                    </label>

                                    <textarea id="ct-message" name="message" class="ct-form-textarea"
                                        placeholder="هر چیزی که می‌خوای بگی... مثلاً درباره‌ی پروژه، سوال، یا نگرانی‌ات">{{ old('message') }}</textarea>

                                    @error('message')
                                        <div class="ct-form-error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                {{-- Honeypot --}}
                                <div class="ct-honeypot" aria-hidden="true">
                                    <label for="ct-website">وب‌سایت</label>
                                    <input type="text" id="ct-website" name="website" value="" tabindex="-1"
                                        autocomplete="off">
                                </div>

                                {{-- Submit --}}
                                <button type="submit" class="ct-form-submit">
                                    ارسال پیام
                                </button>
                            </form>

                        </div>
                    @endif




                    {{-- Contact Info Column --}}
                    <div class="ct-info-column" id="contact-methods">

                        {{-- Phone --}}
                        <div class="ct-info-card">
                            <div class="ct-info-icon-wrapper ct-info-icon-phone"> <svg class="ct-info-icon"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M21 16.5v3a1.5 1.5 0 0 1-1.65 1.5
                                        18.5 18.5 0 0 1-8.1-2.88
                                        18.2 18.2 0 0 1-5.65-5.65
                                        18.5 18.5 0 0 1-2.88-8.12
                                        A1.5 1.5 0 0 1 4.22 2.7h3
                                        a1.5 1.5 0 0 1 1.5 1.3
                                        c.1.8.42 3.5.95 5.1
                                        a1.5 1.5 0 0 1-.34 1.58l-1.27 1.27
                                        a14.5 14.5 0 0 0 5.65 5.65l1.27-1.27
                                        a1.5 1.5 0 0 1 1.58-.34
                                        c1.6.53 3.3.85 5.1.95" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">{{ __('site.phone') }}</p>
                                <p class="ct-info-value">
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $settings['phone'] ?? '') }}">
                                        {{ $settings['phone'] ?? __('site.phone_not_set') }}
                                    </a>
                                </p>
                            </div>
                        </div>

                        {{-- Telegram --}}
                        <a href="https://t.me/{{ ltrim($settings['telegram'] ?? '', '@') }}" class="ct-info-card"
                            target="_blank" rel="noopener noreferrer">

                            <div class="ct-info-icon-wrapper ct-info-icon-telegram">
                                <svg class="ct-info-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M21.7 3.2 18.6 20c-.2 1.2-.9 1.5-1.8.9l-5-3.7-2.4 2.3c-.3.3-.5.5-1 .5l.4-5.1 9.3-8.4c.4-.4-.1-.6-.6-.2L6 13.5 1.1 12c-1.1-.3-1.1-1 .2-1.5L20 3.2c.9-.3 1.5-.3 1.7 0Z" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">{{ __('site.telegram') }}</p>
                                <p class="ct-info-value">
                                    {{ $settings['telegram'] ?? '' }}
                                </p>
                            </div>
                        </a>


                        {{-- Instagram --}}
                        <a href="https://instagram.com/{{ ltrim($settings['instagram'] ?? '', '@') }}"
                            class="ct-info-card" target="_blank" rel="noopener noreferrer">

                            <div class="ct-info-icon-wrapper ct-info-icon-instagram">
                                <svg class="ct-info-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor"
                                        stroke-width="1.8" />
                                    <circle cx="12" cy="12" r="4" stroke="currentColor"
                                        stroke-width="1.8" />
                                    <circle cx="17.5" cy="6.8" r="1.1" fill="currentColor" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">{{ __('site.instagram') }}</p>
                                <p class="ct-info-value">
                                    {{ $settings['instagram'] ?? '' }}
                                </p>
                            </div>
                        </a>


                        {{-- Bale --}}
                        <a href="https://ble.ir/{{ ltrim($settings['bale'] ?? '', '@') }}" class="ct-info-card"
                            target="_blank" rel="noopener noreferrer">

                            <div class="ct-info-icon-wrapper ct-info-icon-bale">
                                <img class="ct-info-app-icon"
                                    src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Bale_logo.png"
                                    alt="لوگوی اپلیکیشن بله" width="40" height="40" loading="lazy">
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">{{ __('site.bale') }}</p>
                                <p class="ct-info-value">
                                    {{ $settings['bale'] ?? '' }}
                                </p>
                            </div>
                        </a>


                        {{-- Rubika --}}
                        <a href="https://rubika.ir/{{ ltrim($settings['rubika'] ?? '', '@') }}" class="ct-info-card"
                            target="_blank" rel="noopener noreferrer">

                            <div class="ct-info-icon-wrapper ct-info-icon-rubika">
                                <img class="ct-info-app-icon"
                                    src="https://upload.wikimedia.org/wikipedia/commons/f/fc/Rubika_Icon.png"
                                    alt="لوگوی اپلیکیشن روبیکا" width="40" height="40" loading="lazy">
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">{{ __('site.rubika') }}</p>
                                <p class="ct-info-value">
                                    {{ $settings['rubika'] ?? '' }}
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
        </section>


        {{-- Final CTA --}}
        <section class="ct-final-cta">
            <div class="container">
                <p>
                    {{ __('site.contact_services_prompt') }}
                    <a href="{{ route($routePrefix . 'services') }}">
                        {{ __('site.view_services') }}
                    </a>
                </p>
            </div>
        </section>
    </div>


@endsection

@push('scripts')
    <script src="{{ asset('site/js/Home/contact.js') }}" defer></script>
@endpush
