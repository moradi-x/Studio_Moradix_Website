
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <title>@yield('code') | Moradix Studio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('site/css/Home/site.css') }}">
</head>
<body class="error-page">

    <main class="error-container">

        <a href="{{ url('/') }}" class="error-brand">
            <span class="error-brand-icon">M</span>
            <span>Moradix Studio</span>
        </a>

        <div class="error-icon">
            @yield('icon')
        </div>

        <div class="error-code">@yield('code')</div>

        <h1 class="error-title">@yield('title')</h1>

        <p class="error-description">
            @yield('message')
        </p>

        <div class="error-actions">
            <a href="{{ url('/') }}" class="error-btn error-btn-primary">
                بازگشت به صفحه اصلی
            </a>

            <button type="button"
                    class="error-btn error-btn-secondary"
                    onclick="history.back()">
                بازگشت به صفحه قبل
            </button>
        </div>

        <footer class="error-footer">
            © {{ date('Y') }} Moradix Studio — تمامی حقوق محفوظ است.
        </footer>

    </main>

</body>
</html>
