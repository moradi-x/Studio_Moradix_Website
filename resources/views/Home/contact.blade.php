{{-- resources/views/Home/contact.blade.php --}}

@extends('Home.Layouts.layout')

@section('title', 'تماس با ما | Moradix Studio')

@section('description',
    'با Moradix Studio در تماس باشید. مشاوره‌ی رایگان، ثبت درخواست پروژه و پاسخ به سوالات شما. تلفن،
    تلگرام، اینستاگرام، لینکدین و ایمیل.')

    @push('styles')
        <link rel="stylesheet" href="{{ asset('site/css/contact.css') }}">
    @endpush

@section('content')
    <div class="ct-page">

        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        تماس با ما
                    </li>
                </ol>
            </div>
        </nav>
        {{-- Main Section: Form + Contact Info --}}
        <section class="ct-main">
            <div class="container">
                <div class="ct-main-grid">
                    {{-- Form Column --}}
                    <div class="ct-form-card" id="contact-form-section">
                        <h2 class="ct-form-title">فرم تماس</h2>
                        <p class="ct-form-subtitle">فرم رو پر کن تا در اسرع وقت باهات تماس بگیریم</p>

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
                            <span>پیام شما با موفقیت ارسال شد. به‌زودی با شما تماس می‌گیریم.</span>
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
                                    <input type="radio" id="request-consultation" name="request_type" value="consultation"
                                        class="ct-pill-input"
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
                                    value="{{ old('name') }}" required aria-required="true" placeholder="مثال: علی احمدی">


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

                                    <option value="not-sure" {{ old('project_type') === 'not-sure' ? 'selected' : '' }}>
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

                                    <option value="seo-speed" {{ old('project_type') === 'seo-speed' ? 'selected' : '' }}>
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

                    {{-- Contact Info Column --}}

                    {{-- Contact Info Column --}}
                    <div class="ct-info-column">

                        {{-- Phone --}}
                        <div class="ct-info-card">
                            <div class="ct-info-icon-wrapper">
                                <svg class="ct-info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">تلفن تماس</p>
                                <p class="ct-info-value" id="phone-value">
                                    <a href="tel:{{ $settings['phone'] ?? '' }}">
                                        {{ $settings['phone'] ?? '' }}
                                    </a>
                                </p>
                            </div>

                            <button class="ct-copy-btn" data-copy="{{ $settings['phone'] ?? '' }}"
                                aria-label="کپی شماره تلفن">
                                کپی
                            </button>
                        </div>

                        {{-- Telegram --}}
                        <div class="ct-info-card">
                            <div class="ct-info-icon-wrapper">
                                <svg class="ct-info-icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69a.2.2 0 00-.05-.18c-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.63-.2-1.12-.31-1.08-.66.02-.18.27-.36.74-.55 2.92-1.27 4.86-2.11 5.83-2.51 2.78-1.16 3.35-1.36 3.73-1.36.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">تلگرام</p>
                                <p class="ct-info-value">
                                    <a href="https://t.me/{{ ltrim($settings['telegram'] ?? '', '@') }}" target="_blank"
                                        rel="noopener noreferrer">
                                        {{ $settings['telegram'] ?? '' }}
                                    </a>
                                </p>
                            </div>
                        </div>

                        {{-- Instagram --}}
                        <div class="ct-info-card">
                            <div class="ct-info-icon-wrapper">
                                <svg class="ct-info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"
                                        stroke-width="2" />
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="2" />
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"
                                        stroke-linecap="round" stroke-width="2" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">اینستاگرام</p>
                                <p class="ct-info-value">
                                    <a href="https://instagram.com/{{ ltrim($settings['instagram'] ?? '', '@') }}"
                                        target="_blank" rel="noopener noreferrer">
                                        {{ $settings['instagram'] ?? '' }}
                                    </a>
                                </p>
                            </div>
                        </div>

                        {{-- LinkedIn --}}
                        <div class="ct-info-card">
                            <div class="ct-info-icon-wrapper">
                                <svg class="ct-info-icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">لینکدین</p>
                                <p class="ct-info-value">
                                    <a href="https://{{ ltrim($settings['linkedin'] ?? '', '/') }}" target="_blank"
                                        rel="noopener noreferrer">
                                        {{ $settings['linkedin'] ?? '' }}
                                    </a>
                                </p>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="ct-info-card">
                            <div class="ct-info-icon-wrapper">
                                <svg class="ct-info-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">ایمیل</p>
                                <p class="ct-info-value" id="email-value">
                                    <a href="mailto:{{ $settings['email'] ?? '' }}">
                                        {{ $settings['email'] ?? '' }}
                                    </a>
                                </p>
                            </div>

                            <button class="ct-copy-btn" data-copy="{{ $settings['email'] ?? '' }}"
                                aria-label="کپی ایمیل">
                                کپی
                            </button>
                        </div>

                        {{-- Bale --}}
                        <div class="ct-info-card">
                            <div class="ct-info-icon-wrapper">
                                <svg class="ct-info-icon" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10" />
                                    <path fill="white" d="M8 8h8v2H8zm0 3h8v2H8zm0 3h5v2H8z" />
                                </svg>
                            </div>

                            <div class="ct-info-content">
                                <p class="ct-info-label">بله</p>
                                <p class="ct-info-value">
                                    <a href="https://ble.ir/{{ ltrim($settings['bale'] ?? '', '@') }}" target="_blank"
                                        rel="noopener noreferrer">
                                        {{ $settings['bale'] ?? '' }}
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>

        </section>

        {{-- Reassurance Bar --}}
        <section class="ct-reassurance">
            <div class="container">
                <div class="ct-reassurance-grid">
                    <div class="ct-reassurance-item">
                        <svg class="ct-reassurance-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="ct-reassurance-text">مشاوره‌ی اولیه رایگانه</p>
                    </div>

                    <div class="ct-reassurance-item">
                        <svg class="ct-reassurance-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <p class="ct-reassurance-text"> هزینه قبل از شروع شفاف مشخص می‌شه
                        </p>
                    </div>

                    <div class="ct-reassurance-item">
                        <svg class="ct-reassurance-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <p class="ct-reassurance-text">
                            بررسی دقیق نیازهای پروژه
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section class="ct-final-cta">
            <div class="container">
                <p>
                    دوست داری اول خدمات رو ببینی؟
                    <a href="{{ route('services') }}">صفحه‌ی خدمات رو نگاه کن</a>
                </p>
            </div>
        </section>
    </div>

    @if ($errors->any())
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

@push('scripts')
    <script src="{{ asset('site/js/contact.js') }}" defer></script>
@endpush
