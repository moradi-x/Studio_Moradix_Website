<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'پنل مدیریت')</title>
    <link rel="stylesheet" href="{{ asset('site/css/Admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/Admin/categories.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/Admin/settings.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/Admin/contact-messages.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/Admin/plan-prices.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/Admin/projects.css') }}">
    <script src="{{ asset('site/js/Admin/admin.js') }}" defer></script>

</head>

<body class="admin-body">

    <div class="admin-layout">

        {{-- Sidebar --}}
        @include('admin.sections.sidebar')

        <div class="admin-main">

            {{-- Header --}}
            @include('admin.sections.topbar')

            {{-- Content --}}
            <main class="admin-content">
                @yield('content')
            </main>

            {{-- Footer --}}
            @include('admin.sections.footer')

        </div>

    </div>

    @yield('script')

</body>

</html>
