
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>دسترسی غیرمجاز | Moradix Studio</title>
    <meta name="robots" content="noindex, nofollow">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-primary: #0F766E;
            --color-primary-hover: #115E59;
            --color-primary-soft: #F0FDFA;
            --color-bg: #FAFAF9;
            --color-surface: #FFFFFF;
            --color-text: #1C1917;
            --color-text-muted: #57534E;
            --color-border: #E7E5E4;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: var(--color-bg);
            color: var(--color-text);
            font-family: 'Vazirmatn', sans-serif;
        }

        .error-page {
            width: 100%;
            max-width: 680px;
            text-align: center;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 48px;
            color: var(--color-text);
            text-decoration: none;
            font-size: 20px;
            font-weight: 800;
        }

        .brand-mark {
            width: 34px;
            height: 34px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: var(--color-primary);
            color: white;
            font-size: 18px;
        }

        .illustration {
            position: relative;
            width: 190px;
            height: 190px;
            margin: 0 auto 30px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--color-primary-soft);
        }

        .illustration::before,
        .illustration::after {
            content: "";
            position: absolute;
            border: 1px solid rgba(15, 118, 110, 0.15);
            border-radius: 50%;
        }

        .illustration::before {
            inset: -14px;
        }

        .illustration::after {
            inset: -28px;
            border-style: dashed;
        }

        .lock-icon {
            width: 76px;
            height: 76px;
            color: var(--color-primary);
        }

        .error-code {
            margin-top: 20px;
            color: var(--color-primary);
            font-size: 30px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        h1 {
            margin: 0 0 14px;
            font-size: clamp(22px, 5vw, 30px);
            font-weight: 700;
        }

        .description {
            max-width: 440px;
            margin: 0 auto;
            color: var(--color-text-muted);
            font-size: 15px;
            line-height: 2;
        }

        .actions {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 32px;
        }

        .button {
            min-height: 48px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0 24px;
            border: 1px solid var(--color-border);
            border-radius: 12px;
            color: var(--color-text);
            background: var(--color-surface);
            text-decoration: none;
            font: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .button-primary {
            border-color: var(--color-primary);
            background: var(--color-primary);
            color: white;
        }

        .button-primary:hover {
            background: var(--color-primary-hover);
        }

        .button-secondary:hover {
            border-color: var(--color-primary);
            color: var(--color-primary);
        }

        .footer {
            margin-top: 64px;
            color: #A8A29E;
            font-size: 12px;
        }

        @media (max-width: 480px) {
            .brand {
                margin-bottom: 40px;
            }

            .illustration {
                width: 150px;
                height: 150px;
            }

            .lock-icon {
                width: 62px;
                height: 62px;
            }

            .actions {
                flex-direction: column;
            }

            .button {
                width: 100%;
            }

            .footer {
                margin-top: 48px;
            }
        }
    </style>
</head>

<body>
    <main class="error-page">
        <a href="{{ url('/') }}" class="brand" aria-label="Moradix Studio - صفحه اصلی">
            <span class="brand-mark">M</span>
            <span>Moradix Studio</span>
        </a>

        <div class="illustration" aria-hidden="true">
            <svg class="lock-icon" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="1.5"
                 stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="10" width="18" height="12" rx="2"/>
                <path d="M7 10V7a5 5 0 0 1 10 0v3"/>
                <path d="M12 15v2"/>
            </svg>
        </div>

        <div class="error-code">ERROR 403</div>

        <h1>اجازه دسترسی به این صفحه را ندارید!</h1>

        <p class="description">
            متأسفانه شما مجوز مشاهده این بخش را ندارید.
            اگر فکر می‌کنید این محدودیت اشتباهی رخ داده،
            لطفاً با مدیر سایت تماس بگیرید.
        </p>

        <div class="actions">
            <a href="{{ url('/') }}" class="button button-primary">
                بازگشت به صفحه اصلی
            </a>

            <button type="button" class="button button-secondary" onclick="history.back()">
                بازگشت به صفحه قبل
            </button>
        </div>

        <footer class="footer">
            © {{ date('Y') }} Moradix Studio — تمام حقوق محفوظ است.
        </footer>
    </main>
</body>
</html>
