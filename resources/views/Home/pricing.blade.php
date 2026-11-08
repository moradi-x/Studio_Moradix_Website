@extends('Home.Layouts.layout')

@php
    $routePrefix = app()->getLocale() === 'en' ? 'en.' : '';
@endphp

@section('title', __('site.pricing_plans') . ' | Moradix Studio')


@section('description', __('site.pricing_plans'))

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/Home/pricing.css') }}">
@endpush

@section('content')
    <div class="pr-page">

        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="{{ __('site.pricing_plans') }}">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route($routePrefix . 'home') }}">
                            {{ __('site.home') }}
                        </a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        {{ __('site.pricing_plans') }}
                    </li>
                </ol>
            </div>
        </nav>


        {{-- Hero Section --}}

        <section class="ph" aria-labelledby="ph-title">
            <div class="container ph-inner">

                <div class="ph-text">

                    <h1 id="ph-title">
                        <span class="ph-title-line">
                            {{ __('site.pricing_hero_title_before') }}<mark
                                class="ph-mark">{{ __('site.pricing_hero_title_highlight') }}</mark>{{ __('site.pricing_hero_title_after') }}
                        </span>
                        <span class="ph-title-line">
                            {{ __('site.pricing_hero_title_line_2') }}
                        </span>
                    </h1>

                    <p class="ph-lead">
                        {{ __('site.pricing_hero_description') }}
                    </p>

                    <div class="ph-actions">
                        <a href="#plans" class="ph-btn ph-btn--primary">
                            {{ __('site.pricing_hero_button') }}
                        </a>

                        <a href="{{ route($routePrefix . 'contact') }}" class="ph-btn ph-btn--ghost">
                            {{ __('site.pricing_hero_contact') }}
                        </a>
                    </div>



                    <ul class="ph-points">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            {{ __('site.pricing_point_1') }}
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            {{ __('site.pricing_point_2') }}
                        </li>
                        <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="m5 12 4 4L19 6" />
                            </svg>{{ __('site.pricing_point_3') }}</li>
                    </ul>


                </div>

                {{-- تصویر مینیمال: دو کارت پلن (تزئینی) --}}
                <div class="ph-art" aria-hidden="true">
                    <span class="ph-orb"></span>

                    <div class="ph-card ph-card--a">
                        <span class="ph-name">پایه</span>
                        <div class="ph-rows">
                            <div class="ph-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="ph-tick" d="m5 12 4 4L19 6" />
                                </svg><b style="--w:78%"></b></div>
                            <div class="ph-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="ph-tick" d="m5 12 4 4L19 6" />
                                </svg><b style="--w:58%"></b></div>
                            <div class="ph-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="ph-tick" d="m5 12 4 4L19 6" />
                                </svg><b style="--w:68%"></b></div>
                        </div>
                    </div>

                    <div class="ph-card ph-card--b">
                        <span class="ph-badge">پیشنهاد ما</span>
                        <span class="ph-name">حرفه‌ای</span>
                        <div class="ph-rows">
                            <div class="ph-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="ph-tick" d="m5 12 4 4L19 6" />
                                </svg><b style="--w:82%"></b></div>
                            <div class="ph-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="ph-tick" d="m5 12 4 4L19 6" />
                                </svg><b style="--w:64%"></b></div>
                            <div class="ph-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="ph-tick" d="m5 12 4 4L19 6" />
                                </svg><b style="--w:74%"></b></div>
                            <div class="ph-row"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <path class="ph-tick" d="m5 12 4 4L19 6" />
                                </svg><b style="--w:52%"></b></div>
                        </div>
                        <span class="ph-bar"></span>
                    </div>
                </div>

            </div>
        </section>



        {{-- Plans Grid --}}
        <section class="pr-plans-section">
            <div class="container">

                {{-- Website Plans --}}
                <div class="pr-section-heading" id="plans">
                    <h2>{{ __('site.pricing_section_title') }}</h2>
                </div>

                <div class="pr-panel" id="panel-shop">
                    <div class="pr-plans-grid">
                        {{-- DYNAMIC: plans از جدول plans --}}

                        {{-- Plan 1: پایه --}}
                        <article class="pr-plan-card pr-callout-right pr-website-basic">
                            <div class="pr-plan-header">
                                <h3 class="pr-plan-name">{{ __('site.pricing_basic') }}</h3>

                            </div>

                            <div class="pr-plan-price">
                                {{-- PRICE: قیمت  طراحی سایت پایه --}}
                                <span class="pr-price-label">{{ __('site.pricing_from') }}</span> <span
                                    class="pr-price-amount">{{ $plans->get('website')?->basic_price_formatted ?? '۰' }}
                                </span>
                                <span class="pr-price-currency">{{ __('site.pricing_currency') }}</span>
                            </div>


                            <div class="pr-plan-meta">
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{-- TIME: زمان اجرا --}}
                                    <span>{{ __('site.pricing_website_basic_duration') }}</span>
                                </div>
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>{{ __('site.pricing_website_basic_support') }}</span>
                                </div>
                            </div>

                            <div class="pr-plan-features">
                                <h4 class="pr-features-title">{{ __('site.pricing_features') }}</h4>
                                <ul class="pr-features-list">
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_basic_feature_1') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_basic_feature_2') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_basic_feature_3') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_basic_feature_4') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_basic_feature_5') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_basic_feature_6') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_basic_feature_7') }}</span>
                                    </li>
                                </ul>


                                {{-- Suitable For --}}

                            </div>

                            <a href="{{ route('contact') }}" class="pr-plan-btn">
                                {{ __('site.pricing_start_plan') }} </a>
                            <a href="{{ route('contact') }}" class="pr-plan-consult">
                                {{ __('site.pricing_unsure_consult') }} </a>
                            <div class="pr-plan-callouts" aria-label="{{ __('site.pricing_aria_website_basic') }}">
                                <span class="pr-callout">{{ __('site.pricing_website_basic_callout_1') }}</span>
                                <span class="pr-callout">{{ __('site.pricing_website_basic_callout_2') }}</span>
                                <span class="pr-callout">{{ __('site.pricing_website_basic_callout_3') }}</span>
                            </div>
                        </article>

                        {{-- Plan 2: حرفه‌ای (Featured) --}}
                        <article class="pr-plan-card pr-plan-featured pr-callout-left">
                            <span class="pr-featured-badge">پیشنهاد ما</span>
                            <div class="pr-plan-header">
                                <h3 class="pr-plan-name">{{ __('site.pricing_professional') }}</h3>

                            </div>

                            <div class="pr-plan-price">
                                {{-- PRICE: قیمت  طراحی سایت حرفه‌ای --}}
                                <span class="pr-price-label">{{ __('site.pricing_from') }}</span> <span
                                    class="pr-price-amount">{{ $plans->get('website')?->professional_price_formatted ?? '۰' }}


                                </span>
                                <span class="pr-price-currency">{{ __('site.pricing_currency') }}</span>
                            </div>


                            <div class="pr-plan-meta">
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{-- TIME: زمان اجرا --}}
                                    <span>{{ __('site.pricing_website_pro_duration') }}</span>
                                </div>
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>{{ __('site.pricing_website_pro_support') }}</span>
                                </div>
                            </div>

                            <div class="pr-plan-features">
                                <h4 class="pr-features-title">{{ __('site.pricing_features') }}</h4>
                                <ul class="pr-features-list pr-collapsible">
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_pro_feature_1') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_pro_feature_2') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_pro_feature_3') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_pro_feature_4') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_pro_feature_5') }}</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>{{ __('site.pricing_website_pro_feature_6') }}</span>
                                    </li>
                                </ul>

                                {{-- Suitable For --}}
                            </div>
                            <a href="{{ route('contact') }}" class="pr-plan-btn pr-plan-btn-primary">
                                شروع این پلن
                            </a>
                            <a href="{{ route('contact') }}" class="pr-plan-consult">
                                {{ __('site.pricing_unsure_consult') }} </a>
                            <div class="pr-plan-callouts" aria-label="{{ __('site.pricing_aria_website_pro') }}">
                                <span class="pr-callout">{{ __('site.pricing_website_pro_callout_1') }}</span>
                                <span class="pr-callout">{{ __('site.pricing_website_pro_callout_2') }}</span>
                                <span class="pr-callout">{{ __('site.pricing_website_pro_callout_3') }}</span>
                            </div>
                        </article>
                    </div>
                </div>

                {{-- Shop Plans --}}
                <div class="pr-section-heading">
                    <h2>پلن‌های طراحی سایت فروشگاهی</h2>
                </div>
                {{-- <div class="pr-panel pr-panel-hidden" role="tabpanel" id="panel-shop" aria-labelledby="tab-shop" hidden> --}}
                <div class="pr-panel" id="panel-shop">
                    <div class="pr-plans-grid">
                        {{-- Shop Plan 1: پایه --}}
                        <article class="pr-plan-card pr-callout-right">
                            <div class="pr-plan-header">
                                <h3 class="pr-plan-name">{{ __('site.pricing_basic') }}</h3>
                            </div>

                            <div class="pr-plan-price">
                                {{-- PRICE: قیمت پایه فروشگاهی --}}
                                <span class="pr-price-label">{{ __('site.pricing_from') }}</span> <span
                                    class="pr-price-amount">{{ $plans->get('ecommerce')?->basic_price_formatted ?? '۰' }}


                                </span>
                                <span class="pr-price-currency">{{ __('site.pricing_currency') }}</span>
                            </div>


                            <div class="pr-plan-meta">
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{-- TIME: زمان اجرا --}}
                                    <span>۴ تا ۶ هفته</span>
                                </div>
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>۱ ماه پشتیبانی فنی رایگان</span>
                                </div>
                            </div>

                            <div class="pr-plan-features">
                                <h4 class="pr-features-title">{{ __('site.pricing_features') }}</h4>
                                <ul class="pr-features-list pr-collapsible">
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>
                                            فروشگاه اختصاصی با کدنویسی


                                        </span>
                                    </li>

                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>صفحات فروشگاه، دسته‌بندی و محصول</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>سبد خرید و تسویه</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>اتصال به یک درگاه پرداخت و روش‌های ارسال</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>پنل مدیریت محصول، سفارش و موجودی، همراه آموزش</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>ریسپانسیو کامل</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>ساختار آماده‌ی سئو</span>
                                    </li>
                                </ul>



                                {{-- Suitable For --}}


                            </div>

                            <a href="{{ route('contact') }}" class="pr-plan-btn">
                                شروع این پلن
                            </a>
                            <a href="{{ route('contact') }}" class="pr-plan-consult">
                                مطمئن نیستی؟ مشاوره‌ی رایگان
                            </a>
                            <div class="pr-plan-callouts" aria-label="کاربردهای فروشگاهی پایه">
                                <span class="pr-callout">فروشگاه کوچک</span>
                                <span class="pr-callout">فروش محصولات محدود</span>
                                <span class="pr-callout">فروشگاه تخصصی ساده</span>
                            </div>
                        </article>

                        {{-- Shop Plan 2: حرفه‌ای (Featured) --}}
                        <article class="pr-plan-card pr-plan-featured pr-callout-left">
                            <span class="pr-featured-badge">پیشنهاد ما</span>
                            <div class="pr-plan-header">
                                <h3 class="pr-plan-name">{{ __('site.pricing_professional') }}</h3>
                            </div>

                            <div class="pr-plan-price">
                                {{-- PRICE: قیمت  فروشگاه حرفه‌ای --}}
                                <span class="pr-price-label">{{ __('site.pricing_from') }}</span> <span
                                    class="pr-price-amount">
                                    {{ $plans->get('ecommerce')?->professional_price_formatted ?? '۰' }}
                                </span>
                                <span class="pr-price-currency">{{ __('site.pricing_currency') }}</span>
                            </div>


                            <div class="pr-plan-meta">
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    {{-- TIME: زمان اجرا --}}
                                    <span>۶ تا ۸ هفته</span>
                                </div>
                                <div class="pr-meta-item">
                                    <svg class="pr-meta-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                    <span>۲ ماه پشتیبانی فنی رایگان</span>
                                </div>
                            </div>

                            <div class="pr-plan-features">
                                <h4 class="pr-features-title">{{ __('site.pricing_features') }}</h4>
                                <ul class="pr-features-list pr-collapsible">
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>طراحی اختصاصی فروشگاه و صفحه‌ی محصول</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>فیلتر و جستجوی پیشرفته‌ی محصولات</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>ویژگی و تنوع محصول (رنگ، سایز و...)</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>اتصال اسنپ‌پی (در صورت تأیید پذیرندگی)</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>پیامک سفارش</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>کمپین تخفیف و کدهای تخفیف پیشرفته</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>سئوی دسته‌بندی‌ها و صفحات محصول</span>
                                    </li>
                                    <li>
                                        <svg class="pr-check-icon" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span>بهینه‌سازی سرعت</span>
                                    </li>
                                </ul>

                                {{-- Suitable For --}}

                            </div>

                            <a href="{{ route('contact') }}" class="pr-plan-btn pr-plan-btn-primary">
                                شروع این پلن
                            </a>
                            <a href="{{ route('contact') }}" class="pr-plan-consult">
                                مطمئن نیستی؟ مشاوره‌ی رایگان
                            </a>
                            <div class="pr-plan-callouts" aria-label="کاربردهای فروشگاهی حرفه‌ای">
                                <span class="pr-callout">فروشگاه در حال رشد</span>
                                <span class="pr-callout">تنوع و فیلتر محصولات</span>
                                <span class="pr-callout">تخفیف و پیامک سفارش</span>
                            </div>
                        </article>
                    </div>
                </div>
        </section>



        {{-- Custom Services --}}
        <section class="pr-custom-card">
            <div class="pr-custom-heading">
                <h3 class="pr-custom-title">خدمات اختصاصی</h3>
                <p class="pr-custom-subtitle">
                    راهکارهایی متناسب با نیاز و اهداف کسب‌وکار شما
                </p>
            </div>

            <div class="pr-custom-grid">

                {{-- SEO --}}
                <article class="pr-custom-item">
                    <div class="pr-custom-icon-wrap">
                        <svg class="pr-custom-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <circle cx="11" cy="11" r="7" stroke-width="1.8" />
                            <path d="m16 16 4 4M8 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.8" />
                        </svg>
                    </div>

                    <h4 class="pr-custom-item-title">سئو و بهینه‌سازی</h4>
                    <p class="pr-custom-item-text">
                        بهبود عملکرد و ساختار سایت برای رشد بهتر
                    </p>

                    <ul class="pr-custom-features">
                        <li>بهینه‌سازی سرعت سایت</li>
                        <li>بررسی سئوی فنی</li>
                        <li>بهبود ساختار صفحات</li>
                    </ul>

                    <div class="pr-custom-price">
                        <span class="pr-custom-price-label">هزینه اجرا</span>
                        <strong>پس از بررسی پروژه</strong>
                    </div>
                </article>

                {{-- Redesign and Upgrade --}}
                <article class="pr-custom-item">
                    <div class="pr-custom-icon-wrap">
                        <svg class="pr-custom-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path d="M12 20h9M16.5 3.5a2.12 2.12 0 0 1 3 3L8 18l-4 1 1-4Z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                    </div>

                    <h4 class="pr-custom-item-title">بازطراحی و ارتقای سایت</h4>
                    <p class="pr-custom-item-text">
                        به‌روزرسانی سایت متناسب با نیازهای جدید
                    </p>

                    <ul class="pr-custom-features">
                        <li>بهبود ظاهر سایت</li>
                        <li>بهبود تجربه کاربری</li>
                        <li>مهاجرت به کدنویسی </li>
                    </ul>

                    <div class="pr-custom-price">
                        <span class="pr-custom-price-label">هزینه اجرا</span>
                        <strong>پس از بررسی پروژه</strong>
                    </div>
                </article>

                {{-- Custom Systems --}}
                <article class="pr-custom-item">
                    <div class="pr-custom-icon-wrap">
                        <svg class="pr-custom-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <rect x="4" y="4" width="16" height="16" rx="3" stroke-width="1.8" />
                            <rect x="9" y="9" width="6" height="6" rx="1" stroke-width="1.8" />
                            <path d="M9 1v3m6-3v3M9 20v3m6-3v3M1 9h3m-3 6h3m16-6h3m-3 6h3" stroke-linecap="round"
                                stroke-width="1.8" />
                        </svg>
                    </div>

                    <h4 class="pr-custom-item-title">سیستم‌های اختصاصی</h4>
                    <p class="pr-custom-item-text">
                        توسعه امکانات ویژه برای کسب‌وکار شما
                    </p>

                    <ul class="pr-custom-features">
                        <li>طراحی سیستم رزرو</li>
                        <li>پنل مدیریت مشتریان</li>
                        <li>پیاده‌سازی فرایندهای اختصاصی</li>
                    </ul>

                    <div class="pr-custom-price">
                        <span class="pr-custom-price-label">هزینه اجرا</span>
                        <strong>پس از بررسی پروژه</strong>
                    </div>
                </article>

            </div>

            <div class="pr-custom-footer">
                <p class="pr-custom-note">
                    ابتدا نیاز پروژه بررسی می‌شود؛ سپس هزینه و محدوده اجرا مشخص خواهد شد.
                </p>

                <a href="{{ route('contact') }}" class="pr-custom-btn">
                    درخواست مشاوره رایگان
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true">
                        <path d="m15 18-6-6 6-6" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </section>
    </div>
    </section>

    {{-- Price Factors --}}
    <section class="pr-factors">
        <div class="container">
            <h2>قیمت به چی بستگی داره؟</h2>

            <div class="pr-factors-grid">
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h3>تعداد صفحات و محصولات</h3>
                </div>

                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    <h3>قابلیت‌های اختصاصی</h3>
                </div>

                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                    </svg>
                    <h3> طراحی اختصاصی و پیچیدگی رابط کاربری</h3>
                </div>

                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3>اتصال به سرویس‌های بیرونی<br>(درگاه، پیامک)</h3>
                </div>
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                    </svg>
                    <h3>چندزبانه بودن</h3>
                </div>
                <div class="pr-factor-card">
                    <svg class="pr-factor-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    <h3>تولید یا آماده‌سازی محتوا</h3>
                </div>
            </div>
        </div>
    </section>

    {{-- Included vs Separate --}}
    <section class="pr-included">
        <div class="container">
            <div class="pr-included-grid">
                <div class="pr-included-card pr-included-yes">
                    <h3>در همه‌ی پلن‌ها</h3>
                    <ul>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>قرارداد شفاف</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>زمان‌بندی مشخص از ابتدا</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>کد تمیز</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>آموزش کار با پنل</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>پشتیبانی فنی رایگان بعد از تحویل</span>
                        </li>
                    </ul>
                </div>

                <div class="pr-included-card pr-included-no">
                    <h3>جدا حساب می‌شه</h3>
                    <ul>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                            <span>دامنه و هاست</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                            <span>تولید متن و عکاسی</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                            <span>اعتبار پیامک</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                            <span>کارمزد درگاه پرداخت</span>
                        </li>
                        <li>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                            <span>افزودن محتوا و تغییرات بعد از تحویل</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="pr-faq">
        <div class="container">
            <h2>سوالات متداول</h2>
            <div class="pr-faq-list">
                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>قیمت نهایی چطور مشخص می‌شه؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>بعد از مشاوره‌ی رایگان و شنیدن نیازت، محدوده‌ی کار رو دقیق مشخص می‌کنیم (چند صفحه، چه
                                قابلیت‌هایی، چه اتصالاتی). بعد قیمت رو می‌گیم و توی قرارداد می‌نویسیم. این قیمت شفافه و
                                هیچ هزینه‌ی پنهانی نداره.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>دامنه و هاست شامل پلن هست؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>نه، دامنه و هاست جداست و خودت باید تهیه کنی. ولی ما راهنماییت می‌کنیم که کدوم سرویس مناسب
                                کسب‌وکارته، و نصب و راه‌اندازی رو روی هاست انجام می‌دیم.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>بعد از تحویل می‌تونم تغییر بخوام؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>تغییرات جزئی و رفع باگ در دوره‌ی پشتیبانی فنی رایگان شامل می‌شه. ولی افزودن قابلیت جدید،
                                تغییر ظاهر یا محتوا، یا توسعه‌های بعدی، جدا قیمت‌گذاری می‌شن و پروژه‌ی جداگانه‌ای محسوب
                                می‌شن.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>فرق پشتیبانی فنی و نگهداری چیه؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            <p>پشتیبانی فنی رایگان فقط رفع باگ‌های پروژه‌ی خودمونه. نگهداری یعنی بکاپ، بروزرسانی امنیتی،
                                افزودن محتوا و تغییرات مداوم، که پولی و بر اساس بسته‌ی ماهانه یا سالانه‌ست.</p>
                        </div>
                    </div>
                </div>

                <div class="pr-faq-item">
                    <button class="pr-faq-question" aria-expanded="false">
                        <span>نحوه‌ی پرداخت چطوره؟</span>
                        <svg class="pr-faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="pr-faq-answer">
                        <div class="pr-faq-answer-content">
                            {{-- TODO: نحوه‌ی پرداخت رو خودم تعیین می‌کنم --}}
                            <p>نحوه‌ی پرداخت بر اساس توافق و قرارداد مشخص می‌شه. معمولاً یک بخش در ابتدا و بقیه در مراحل
                                مشخص یا پایان پروژه. جزئیات رو بعد از مشاوره‌ی اولیه باهات در میون می‌ذاریم.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/Home/pricing.js') }}" defer></script>
@endpush
