@extends('Home.Layouts.layout')

@section('title', 'درباره ما - Moradix Studio')


@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/about.css') }}">
@endpush


@section('content')
    {{-- Intro Section --}}

    <section class="section about-intro">
        <div class="container">
            <div class="section-header">
                <h1>پشت Moradix یه آدم واقعی نشسته 👋</h1>
                <p>نه یه تیم بزرگ، نه یه شرکت. فقط من، محمد مرادی، برنامه‌نویس و کسی که عاشق ساختن چیزهای خوبه.</p>
            </div>
        </div>
    </section>

    {{-- About Me Section --}}

    <section class="section about-story">
        <div class="container">
            <div class="about-story-content">
                {{-- Profile Image --}}
                <div class="about-profile">
                    {{-- PLACEHOLDER: جایگزین با عکس واقعی محمد مرادی --}}
                    <img src="{{ asset('site/images/profile.jpg') }}" alt="محمد مرادی" class="about-profile-image">
                    {{-- <div class="about-profile-placeholder">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div> --}}
                </div>

                {{-- Story Text --}}
                <div class="about-story-text">
                    <h2>درباره من</h2>
                    <p>سلام، من محمد مرادی‌ام. مهندس کامپیوتر و برنامه‌نویس. از ۴ سال پیش آموزش و ساخت پروژه رو شروع کردم،
                        چون عاشق کد زدن و حل مسئله‌ام. هیچ‌چیز برام شیرین‌تر از این نیست که یه مشکل پیچیده رو تیکه‌تیکه کنم
                        تا بشه یه چیز ساده و کاربردی.</p>
                    <p>یه جایی حس کردم دلم می‌خواد برای خودم کار کنم و مستقیم با آدم‌هایی که سایت می‌خوان حرف بزنم، نه از
                        پشت یه شرکت و چندتا واسطه. Moradix از همین حس شروع شد.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- About Brand Section --}}

    <section class="section about-brand">
        <div class="container">
            <div class="about-brand-content">
                <h2>درباره Moradix</h2>
                <p>Moradix یه استودیوی کوچیکه، ولی با نگاه جدی. فروشگاه اینترنتی، سایت شرکتی یا سیستم اختصاصی؛ هر پروژه‌ای
                    که باشه، اول به حرف‌های تو گوش می‌دم و بعد پیشنهاد می‌دم، چون هر کسب‌وکار نیاز خودش رو داره. بدون
                    اصطلاحات پیچیده و بدون سردرگمی، قدم‌به‌قدم کنارتم تا سایتت بالا بیاد.</p>
            </div>
        </div>
    </section>

    {{-- Commitments Section --}}

    <section class="section about-commitments">
        <div class="container">
            <div class="section-header">
                <h2>تعهدات من</h2>
                <p>سه چیزی که همیشه بهشون پایبندم</p>
            </div>

            <div class="about-commitments-grid">
                {{-- Commitment 1: تحویل به‌موقع --}}
                <article class="commitment-card">
                    <div class="commitment-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3>تحویل به‌موقع</h3>
                    <p>زمان رو از اول مشخص می‌کنیم و بهش پایبندم.</p>
                </article>

                {{-- Commitment 2: شفافیت --}}
                <article class="commitment-card">
                    <div class="commitment-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3>شفافیت</h3>
                    <p>می‌دونی چی ساخته می‌شه، چقدر طول می‌کشه و چرا.</p>
                </article>

                {{-- Commitment 3: تعهد --}}
                <article class="commitment-card">
                    <div class="commitment-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3>تعهد</h3>
                    <p>بعد از تحویل هم رهات نمی‌کنم.</p>
                </article>
            </div>
        </div>
    </section>

    {{-- Numbers Section --}}

    <section class="section about-numbers">
        <div class="container">
            <div class="about-numbers-grid">
                {{-- Number 1 --}}
                <div class="about-number-item">
                    <h3>۴ سال</h3>
                    <p>تجربه‌ی برنامه‌نویسی</p>
                </div>

                {{-- Number 2 --}}
                <div class="about-number-item">
                    <h3>۴ پروژه</h3>
                    <p>تجاری تحویل‌شده</p>
                </div>

                {{-- Number 3 --}}
                <div class="about-number-item">
                    <h3>Laravel</h3>
                    <p>تخصص اصلی</p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}

    <section class="section about-cta">
        <div class="container">
            <div class="about-cta-content">
                <h2>پروژه‌ت توی ذهنته؟ بیا یه گپ بزنیم.</h2>
                <p>از مشاوره رایگان شروع می‌کنیم، می‌بینیم چی‌کار می‌تونیم واست انجام بدیم.</p>
                <a href="{{ route('home') }}#contact" class="btn btn-primary">ثبت درخواست پروژه</a>
            </div>
        </div>
    </section>
@endsection
