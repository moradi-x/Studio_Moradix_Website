
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#10111b">
    <title>ورود به مدیریت | Moradix Studio</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap');

        :root {
            --bg: #10111b;
            --card: #191b29;
            --primary: #8b5cf6;
            --primary-light: #a78bfa;
            --text: #f8fafc;
            --muted: #9296aa;
            --border: rgba(255,255,255,.09);
            --danger: #fb7185;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background:
                radial-gradient(circle at 15% 20%, rgba(139,92,246,.15), transparent 35%),
                radial-gradient(circle at 85% 80%, rgba(59,130,246,.12), transparent 35%),
                var(--bg);
            color: var(--text);
            font-family: 'Vazirmatn', sans-serif;
        }

        .login-wrapper {
            width: 100%;
            max-width: 440px;
            animation: appear .7s ease both;
        }

        @keyframes appear {
            from { opacity: 0; transform: translateY(25px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .brand {
            text-align: center;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 66px;
            height: 66px;
            margin: 0 auto 16px;
            display: grid;
            place-items: center;
            border-radius: 20px;
            background: linear-gradient(135deg, #8b5cf6, #5b21b6);
            box-shadow: 0 10px 35px rgba(139,92,246,.3);
            font-size: 29px;
            font-weight: 800;
        }

        .brand h1 {
            font-size: 25px;
            font-weight: 800;
            letter-spacing: -.5px;
        }

        .brand p {
            margin-top: 7px;
            color: var(--muted);
            font-size: 13px;
        }

        .login-card {
            padding: 34px;
            background: rgba(25,27,41,.94);
            border: 1px solid var(--border);
            border-radius: 24px;
            box-shadow: 0 25px 80px rgba(0,0,0,.35);
            backdrop-filter: blur(20px);
        }

        .card-heading {
            margin-bottom: 27px;
        }

        .card-heading h2 {
            font-size: 20px;
            font-weight: 700;
        }

        .card-heading p {
            margin-top: 7px;
            color: var(--muted);
            font-size: 13px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 9px;
            font-size: 13px;
            font-weight: 600;
        }

        .input-box {
            position: relative;
        }

        .input-box input {
            width: 100%;
            height: 54px;
            padding: 0 16px;
            background: #11131f;
            border: 1px solid var(--border);
            border-radius: 12px;
            outline: none;
            color: var(--text);
            font-family: inherit;
            font-size: 14px;
            transition: .25s;
        }

        .input-box input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(139,92,246,.12);
        }

        .input-box input::placeholder {
            color: #656a80;
        }

        .password-input {
            padding-left: 55px !important;
        }

        .toggle-password {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            color: var(--muted);
            cursor: pointer;
            padding: 8px;
            font-family: inherit;
            font-size: 12px;
        }

        .toggle-password:hover {
            color: white;
        }

        .error {
            margin-top: 8px;
            color: var(--danger);
            font-size: 12px;
        }

        .alert {
            padding: 12px 14px;
            margin-bottom: 20px;
            border-radius: 10px;
            background: rgba(251,113,133,.09);
            border: 1px solid rgba(251,113,133,.2);
            color: var(--danger);
            font-size: 12px;
        }

        .login-button {
            width: 100%;
            height: 54px;
            margin-top: 7px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #8b5cf6, #6d28d9);
            color: white;
            font-family: inherit;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: .25s;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(139,92,246,.25);
        }

        .login-button:disabled {
            opacity: .7;
            cursor: wait;
            transform: none;
        }

        .footer {
            text-align: center;
            margin-top: 25px;
            color: var(--muted);
            font-size: 11px;
        }

        @media (max-width: 480px) {
            body { padding: 16px; }
            .login-card { padding: 25px 20px; }
            .brand h1 { font-size: 22px; }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="brand">
        <div class="brand-icon">M</div>
        <h1>Moradix Studio</h1>
        <p>سیستم مدیریت و کنترل وب‌سایت</p>
    </div>

    <div class="login-card">

        <div class="card-heading">
            <h2>خوش آمدید 👋</h2>
            <p>برای ورود به پنل مدیریت، اطلاعات خود را وارد کنید.</p>
        </div>

        @if ($errors->any())
            <div class="alert">
                اطلاعات ورود صحیح نیست. لطفاً دوباره بررسی کنید.
            </div>
        @endif

        <form id="loginForm" method="POST"
              action="{{ route('admin.login.store') }}">
            @csrf

            <div class="form-group">
                <label for="name">نام کاربری</label>
                <div class="input-box">
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="نام کاربری خود را وارد کنید"
                        autocomplete="username"
                        required
                        autofocus
                    >
                </div>

                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">رمز عبور</label>
                <div class="input-box">
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="password-input"
                        placeholder="رمز عبور خود را وارد کنید"
                        autocomplete="current-password"
                        required
                    >

                    <button
                        type="button"
                        class="toggle-password"
                        id="togglePassword"
                        aria-label="نمایش رمز عبور"
                    >
                        نمایش
                    </button>
                </div>

                @error('password')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="login-button" id="loginButton">
                ورود به پنل مدیریت
            </button>
        </form>

    </div>

    <div class="footer">
        © {{ date('Y') }} Moradix Studio — تمامی حقوق محفوظ است.
    </div>

</div>

<script>
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const loginForm = document.getElementById('loginForm');
    const loginButton = document.getElementById('loginButton');

    togglePassword.addEventListener('click', function () {
        const isHidden = passwordInput.type === 'password';

        passwordInput.type = isHidden ? 'text' : 'password';
        this.textContent = isHidden ? 'مخفی' : 'نمایش';
        this.setAttribute(
            'aria-label',
            isHidden ? 'مخفی کردن رمز عبور' : 'نمایش رمز عبور'
        );
    });

    loginForm.addEventListener('submit', function () {
        loginButton.disabled = true;
        loginButton.textContent = 'در حال بررسی اطلاعات...';
    });
</script>

</body>
</html>
