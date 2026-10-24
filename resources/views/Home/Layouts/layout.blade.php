<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Moradix Studio | مرادیکس استودیو')</title>
    <meta name="description" content="@yield('description', 'استودیوی توسعه وب با Laravel: طراحی فروشگاه اینترنتی، سایت شرکتی و پنل مدیریت اختصاصی')">

    {{-- فونت Vazirmatn --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('site/images/favicon.png') }}">


    {{-- استایل اصلی سایت --}}
    <link rel="stylesheet" href="{{ asset('site/css/site.css') }}">
    @stack('styles')
</head>

<body>

    {{-- لینک پرش به محتوا (دسترس‌پذیری) --}}
    <a href="#main-content" class="skip-link"</a>

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

        <script src="{{ asset('site/js/site.js') }}" defer></script>
        @stack('scripts')
        {{-- @sweetAlert --}}
</body>

</html>
