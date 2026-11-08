@extends('Home.Layouts.layout')

@php
    $routePrefix = app()->getLocale() === 'en' ? 'en.' : '';
@endphp

@section('title', __('site.about_page_title') . ' | Moradix Studio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/Home/about.css') }}">
@endpush

@section('content')
    <main class="about-page" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">
        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="{{ __('site.about_breadcrumb') }}">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route($routePrefix . 'home') }}">{{ __('site.home') }}</a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        {{ __('site.about_page_title') }}
                    </li>
                </ol>
            </div>
        </nav>

        {{-- 1. Brand Hero --}}
        <section class="about-hero">
            <div class="about-container about-hero-grid">

                <div class="about-hero-content">

                    <h1>
                        @if (app()->getLocale() === 'en')
                            Great ideas become
                            <span class="about-gradient">reality through thoughtful engineering.</span>
                        @else
                            ایده‌های خوب،
                            <span class="about-gradient">با مهندسی درست</span>
                            به واقعیت می‌رسند.
                        @endif
                    </h1>

                    <p class="about-hero-description">
                        {{ __('site.about_hero_description') }}
                    </p>

                    <div class="about-hero-actions">
                        <a href="{{ route($routePrefix . 'contact') }}" class="about-btn about-btn-primary">
                            {{ __('site.about_collaboration') }}
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 12H5m0 0 6 6m-6-6 6-6" />
                            </svg>
                        </a>

                        <a href="#about-story" class="about-text-link">
                            {{ __('site.about_philosophy') }}
                        </a>
                    </div>


                </div>


                {{-- جایگزین کل <div class="about-hero-visual about-visual-pro"> قبلی. تزئینی است: aria-hidden --}}
                <div class="abx" aria-hidden="true">
                    <div class="abx-grid"></div>
                    <div class="abx-glow"></div>

                    {{-- ویرایشگر کد (چپ‌چین، چون کد LTR است) --}}
                    <div class="abx-editor">
                        <div class="abx-bar"><i></i><i></i><i></i><span>Studio_Moradix.php</span></div>
                        <div class="abx-code" dir="ltr">
                            <div class="abx-row"><span class="abx-line" style="--n:22;--d:.30s"><span class="c">// from
                                        idea to launch</span></span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:12;--d:.76s"><span
                                        class="k">class</span> <span class="t">Moradix</span></span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:1;--d:1.04s">{</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:37;--d:1.12s"> <span
                                        class="k">public function</span> <span class="f">build</span>(<span
                                        class="t">Idea</span> <span class="v">$idea</span>)</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:5;--d:1.85s"> {</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:20;--d:2.00s"> <span
                                        class="k">return</span> <span class="v">$idea</span></span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:22;--d:2.42s"> -&gt;<span
                                        class="f">design</span>()</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:23;--d:2.88s"> -&gt;<span
                                        class="f">develop</span>()</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:24;--d:3.35s"> -&gt;<span
                                        class="f">deliver</span>();</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:5;--d:3.84s"> }</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:1;--d:3.99s">}</span><i
                                    class="abx-cursor"></i></div>
                        </div>
                    </div>

                    {{-- پیش‌نمایش سایت: بعد از تایپ کد ظاهر می‌شود --}}
                    <div class="abx-preview abx-reveal" style="--rd:4.1s">
                        <div class="abx-pbar"><i></i><i></i><i></i><span dir="ltr">studio_moradix</span></div>
                        <div class="abx-pbody">
                            <div class="abx-pnav"><b dir="ltr">Moradix<em>.</em></b><u></u><u></u><u></u></div>
                            <div class="abx-phero">
                                <span class="abx-pkick"></span>
                                <span class="abx-pl w1"></span>
                                <span class="abx-pl w2"></span>
                                <span class="abx-pbtn"></span>
                            </div>
                            <div class="abx-pcards"><i></i><i></i><i></i></div>
                        </div>
                    </div>

                    {{-- نسخه‌ی موبایل --}}
                    <div class="abx-phone abx-reveal" style="--rd:4.4s">
                        <span class="abx-ph-notch"></span>
                        <span class="abx-pl w1"></span>
                        <span class="abx-pl w2"></span>
                        <span class="abx-pbtn"></span>
                        <div class="abx-pcards"><i></i><i></i></div>
                    </div>

                    {{-- ترمینال --}}
                    <div class="abx-term abx-reveal" style="--rd:4.7s" dir="ltr">
                        <p><span class="g">$</span> php artisan serve</p>
                        <p class="ok">✓ Server running on http://127.0.0.1:8000</p>
                    </div>

                    {{-- کارت‌های شناور --}}
                    <div class="abx-chip abx-chip-a abx-reveal" style="--rd:4.9s">
                        <span class="abx-chk"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 4 4L19 6" />
                            </svg></span>
                        <span><strong>ساخت اصولی</strong><small>از فکر تا محصول</small></span>
                    </div>
                    <div class="abx-chip abx-chip-b abx-reveal" style="--rd:5.1s">
                        <span class="abx-chk abx-code-ic" dir="ltr">&lt;/&gt;</span>
                        <span><strong>جزئیات مهم‌اند</strong><small dir="ltr">DESIGN &amp; DEVELOPMENT</small></span>
                    </div>
                </div>


            </div>
        </section>


        {{-- 2. Brand Story --}}
        <section class="about-section about-story" id="about-story">
            <div class="about-container about-story-grid">

                <div class="about-section-heading">
                    <h2>
                        {{ __('site.about_story_title') }}
                    </h2>
                </div>

                <div class="about-story-content">
                    <p class="about-story-intro">
                        {{ __('site.about_story_intro') }}
                    </p>

                    <p>
                        {{ __('site.about_story_text') }}
                    </p>

                    <p>
                        {{ __('site.about_story_quality') }}
                    </p>

                    <div class="about-quote">
                        <span class="about-quote-mark">“</span>
                        <p>
                            {{ __('site.about_quote') }}
                        </p>
                    </div>
                </div>

            </div>
        </section>

        {{-- Why Moradix --}}
        <section class="about-why" id="about-why" aria-labelledby="about-why-title">
            <div class="about-why__container">

                <div class="about-why__heading" data-why-reveal>


                    <h2 id="about-why-title">
                        @if (app()->getLocale() === 'en')
                            Why <span>Studio Moradix</span> ?
                        @else
                            چرا <span>Studio Moradix </span>؟
                        @endif
                    </h2>

                    <p>
                        {{ __('site.about_why_description') }}
                    </p>
                </div>

                <div class="about-why__grid">

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">1</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 3L14.8 9.2L21 12L14.8 14.8L12 21L9.2 14.8L3 12L9.2 9.2L12 3Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <h3>{{ __('site.about_reason_1_title') }}</h3>
                        <p>{{ __('site.about_reason_1_text') }}</p>
                    </article>

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">2</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M8 8L4 12L8 16M16 8L20 12L16 16M14 5L10 19" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <h3>{{ __('site.about_reason_2_title') }}</h3>
                        <p>{{ __('site.about_reason_2_text') }}</p>
                    </article>

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">3</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 3L19 6V11C19 15.4 16.1 19.2 12 21C7.9 19.2 5 15.4 5 11V6L12 3Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <h3>{{ __('site.about_reason_3_title') }}</h3>
                        <p>{{ __('site.about_reason_3_text') }}</p>
                    </article>

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">4</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 5H20V16H13L8 20V16H4V5Z" stroke="currentColor" stroke-width="1.5"
                                    stroke-linejoin="round" />
                                <path d="M8 9H16M8 12H13" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </div>

                        <h3>{{ __('site.about_reason_4_title') }}</h3>
                        <p>{{ __('site.about_reason_4_text') }}</p>
                    </article>

                </div>

                <div class="about-why__footer" data-why-reveal>
                    <span class="about-why__footer-line"></span>
                    <p>
                        Moradix Studio
                        <span>—</span>
                        {{ __('site.about_tagline') }}
                    </p>
                    <span class="about-why__footer-line"></span>
                </div>

            </div>
        </section>

        {{-- 4. Our Team --}}
        <section class="about-section about-team">
            <div class="about-container">

                <div class="about-team-header">
                    <div class="about-section-heading">

                        <h2>{{ __('site.about_team_title') }}</h2>
                        <p>
                            {{ __('site.about_team_description') }}
                        </p>
                    </div>

                    <span class="about-team-label">
                        <span></span>
                        {{ __('site.about_team_label') }} </span>
                </div>


                <div class="about-team-grid">

                    <article class="about-person-card">
                        <div class="about-person-image-wrap">

                            <img src="{{ asset('site/images/profile.jpg') }}"
                                alt="محمد مرادی، مدیر Studio Moradix Studio" class="about-person-image" loading="lazy">

                            <span class="about-person-index">M / 01</span>
                        </div>

                        <div class="about-person-info">
                            <div>
                                <h3> {{ __('site.about_founder_name') }} </h3>
                                <p> {{ __('site.about_founder_role') }} </p>
                            </div>

                            <span class="about-person-arrow" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 17 17 7M7 7h10v10" />
                                </svg>
                            </span>
                        </div>
                    </article>


                    <div class="about-team-note">
                        <span class="about-team-plus">+</span>


                        <h3> {{ __('site.about_team_note_title') }}</h3>

                        <p>
                            {{ __('site.about_team_note_text') }}
                        </p>

                        <span class="about-team-note-footer">
                            {{ __('site.about_team_note_footer') }} </span>
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
                        <h2 class="si-cta-title">
                            {{ __('site.about_cta_title_first') }}
                            <span>{{ __('site.about_cta_title_highlight') }}</span>
                        </h2>

                        <p class="si-cta-description">
                            {{ __('site.about_cta_description') }}
                        </p>

                        <div class="si-cta-actions">
                            <a href="{{ route(app()->getLocale() === 'en' ? 'en.contact' : 'contact') }}"
                                class="si-cta-primary"> {{ __('site.about_cta_button') }}
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                          <a href="{{ route(app()->getLocale() === 'en' ? 'en.services' : 'services') }}" class="si-cta-secondary">
                                {{ __('site.about_cta_services') }} </a>
                        </div>


                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/Home/about.js') }}" defer></script>
@endpush
