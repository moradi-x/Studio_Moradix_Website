<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'fa' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Moradix Studio | مرادیکس استودیو')</title>
    <meta name="description" content="@yield('description', 'استودیوی توسعه وب با Laravel: طراحی فروشگاه اینترنتی، سایت شرکتی و پنل مدیریت اختصاصی')">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ $seoUrls['canonical'] }}">

    {{-- Hreflang URLs --}}
    @if (!empty($seoUrls['alternates']))
        @foreach ($seoUrls['alternates'] as $locale => $url)
            <link rel="alternate" hreflang="{{ $locale }}" href="{{ $url }}">
        @endforeach
    @endif

    {{-- فونت Vazirmatn --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('site/images/favicon.png') }}">


    {{-- استایل اصلی سایت --}}
    <link rel="preload" as="image" href="{{ asset('site/images/logo.webp') }}">

    <link rel="stylesheet" href="{{ asset('site/css/Home/site.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/Home/loader.css') }}">

    @stack('styles')
</head>

<body>


    <div id="moradix-loader">

        <div class="sk-header">
            <div class="sk-item sk-logo"></div>

            <div class="sk-nav">
                <div class="sk-item sk-nav-item"></div>
                <div class="sk-item sk-nav-item"></div>
                <div class="sk-item sk-nav-item"></div>
                <div class="sk-item sk-nav-item"></div>
            </div>

            <div class="sk-item sk-action"></div>
        </div>

        <div class="sk-content">

            <div class="sk-item sk-title"></div>
            <div class="sk-item sk-text"></div>
            <div class="sk-item sk-text sk-text-small"></div>
            <div class="sk-item sk-button"></div>

            <div class="sk-item sk-section-title"></div>

            <div class="sk-cards">
                <div class="sk-item sk-card"></div>
                <div class="sk-item sk-card"></div>
                <div class="sk-item sk-card"></div>
            </div>

        </div>

    </div>




    {{-- لینک پرش به محتوا (دسترس‌پذیری) --}}
    <a href="#main-content" class="skip-link"></a>
    @include('Home.Sections.header')

    @include('Home.Sections.messages')
    @include('Home.Sections.errors')

    <main id="main-content">
        @yield('content')
    </main>

    @include('Home.Sections.footer')

    {{-- دکمه شناور تماس (واتساپ/تلگرام) --}}
    @include('Home.Sections.floating-contact')

    @include('Home.Sections.scroll-top')

    <script src="{{ asset('site/js/Home/site.js') }}" defer></script>
    <script src="{{ asset('site/js/Home/loader.js') }}" defer></script>

    @stack('scripts')
    {{-- @sweetAlert --}}
</body>

</html>
