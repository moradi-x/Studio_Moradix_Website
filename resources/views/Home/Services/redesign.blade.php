@extends('Home.Layouts.layout')

@section('title', 'بازطراحی و ارتقای سایت | استودیو مورادیکس')

@section('description',
    'بازطراحی سایت و بهبود رابط کاربری، تجربه کاربری، سرعت و پنل مدیریت سایت فعلی شما. قبل از ساخت
    مجدد، بهترین مسیر برای ارتقای سایتتان را بررسی می‌کنیم.')

@section('content')
    <div class="sv-page">

        {{-- Breadcrumb --}}
        <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('services') }}">خدمات</a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        بازطراحی و ارتقای سایت
                    </li>
                </ol>
            </div>
        </nav>

        {{-- Hero Section --}}
        <section class="sv-hero">
            <div class="container">
                <div class="sv-hero-content">

                    <div class="sv-hero-text">
                        <h1 class="sv-hero-title">
                            بازطراحی و ارتقای سایت
                        </h1>

                        <p class="sv-hero-subtitle">
                            یک قدم جلوتر از سایت فعلی‌ات
                        </p>

                        <p class="sv-hero-desc">
                            اگر از ظاهر سایتت راضی نیستی، تجربه کاربری خوبی نداره،
                            سرعتش پایینه یا مدیریت محتوای اون برات سخت شده،
                            می‌تونیم سایت فعلی‌ات رو بررسی کنیم و متناسب با نیازت
                            بازطراحی یا بهینه‌سازی کنیم؛ بدون تغییرات غیرضروری.
                        </p>

                        <div class="sv-hero-buttons">
                            <a href="{{ route('contact') }}" class="btn btn-primary">مشاوره‌ی رایگان</a>
                            {{-- بعداً: {{ route('pricing') }}?tab=website برای باز شدن تب طراحی سایت --}}
                            <a href="{{ route('pricing') }}" class="btn btn-outline">مقایسه‌ی پلن‌ها و تعرفه‌ها</a>
                        </div>
                    </div>

                    <div class="sv-hero-visual">
                        <div class="sv-mockup-wrapper">

                            <div class="sv-mockup-desktop">
                                <div class="sv-mockup-browser-bar">
                                    <span class="sv-browser-dot sv-dot-red"></span>
                                    <span class="sv-browser-dot sv-dot-yellow"></span>
                                    <span class="sv-browser-dot sv-dot-green"></span>
                                </div>

                                <div class="sv-mockup-screen">
                                    <div class="sv-mockup-content">
                                        <div class="sv-content-line sv-line-header"></div>
                                        <div class="sv-content-line sv-line-medium"></div>
                                        <div class="sv-content-line sv-line-short"></div>
                                        <div class="sv-content-button"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="sv-mockup-mobile">
                                <div class="sv-mobile-notch"></div>
                                <div class="sv-mobile-screen">
                                    <div class="sv-content-line sv-line-header"></div>
                                    <div class="sv-content-line sv-line-medium"></div>
                                    <div class="sv-content-line sv-line-short"></div>
                                    <div class="sv-content-button"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Changes Section --}}
        <section class="sv-section sv-changes">
            <div class="container">

                <h2 class="sv-section-title">
                    چه چیزی در سایتت می‌تونه بهتر بشه؟
                </h2>

                <div class="sv-changes-grid">

                    <div class="sv-change-card">
                        <div class="sv-change-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" />
                                <path d="M3 9h18M9 21V9" />
                            </svg>
                        </div>
                        <h3>ظاهر قدیمی و نامناسب</h3>
                        <p>
                            طراحی سایتت با هویت برندت هماهنگ نیست یا ظاهرش
                            اعتماد کافی برای مخاطب ایجاد نمی‌کنه.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <div class="sv-change-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 19V5M4 19h17" />
                                <path d="m7 15 4-4 3 2 6-7" />
                            </svg>
                        </div>
                        <h3>تجربه کاربری ضعیف</h3>
                        <p>
                            کاربر برای پیدا کردن اطلاعات یا انجام یک کار ساده
                            باید مسیر پیچیده‌ای رو طی کنه.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <div class="sv-change-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2 4 14h7l-1 8 10-13h-7l1-7Z" />
                            </svg>
                        </div>
                        <h3>سرعت و عملکرد نامناسب</h3>
                        <p>
                            سایت دیر بارگذاری می‌شه یا بعضی بخش‌ها هنگام استفاده
                            عملکرد روان و قابل‌اعتمادی ندارن.
                        </p>
                    </div>

                    <div class="sv-change-card">
                        <div class="sv-change-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="M7 8h4M7 12h10M7 16h7" />
                            </svg>
                        </div>
                        <h3>پنل مدیریت نامرتب</h3>
                        <p>
                            ویرایش محتوا، مدیریت سفارش‌ها یا انجام کارهای روزمره
                            در پنل مدیریت سخت و زمان‌بر شده.
                        </p>
                    </div>
                </div>
                <p class="sv-changes-note">لازم نیست از فنی چیزی بدونی. از ایده تا تحویل، همه‌ی بخش فنی با ماست.</p>
            </div>
        </section>

        {{-- Fit Section --}}
        <section class="sv-section sv-fit">
            <div class="container">

                <h2 class="sv-section-title">
                    آیا بازطراحی سایت برای تو مناسبه؟
                </h2>
                <div class="sv-fit-grid">
                    <div class="sv-fit-card sv-fit-yes">
                        <h3 class="sv-fit-title">بازطراحی سایت فعلی</h3>
                        <ul class="sv-fit-list">
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> حفظ بخش‌های سالم و کاربردی سایت
                                </span>
                            </li>
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> بهبود رابط کاربری و تجربه کاربری
                                </span>
                            </li>
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> اصلاح نمایش در موبایل و تبلت
                                </span>
                            </li>
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> کاهش هزینه تغییرات غیرضروری
                                </span>
                            </li>
                        </ul>
                    </div>

                    <div class="sv-fit-card  sv-fit-yes ">
                        <h3 class="sv-fit-title">ارتقای فنی سایت</h3>


                        <ul class="sv-fit-list">
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> بررسی مشکلات فنی و گلوگاه‌های سرعت
                                </span>
                            </li>
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> بهبود ساختار و کیفیت کدها
                                </span>
                            </li>
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> توسعه امکانات موردنیاز کسب‌وکار
                                </span>
                            </li>
                            <li><svg class="sv-fit-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span> بهبود امنیت و قابلیت نگهداری در صورت نیاز
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>

        {{-- Types Section --}}
        <section class="sv-section sv-types">
            <div class="container">

                <h2 class="sv-section-title">
                    چه نوع سایت‌هایی رو می‌تونیم ارتقا بدیم؟
                </h2>

                <div class="sv-types-grid">

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="3" width="18" height="18" rx="3" />
                            <path d="M3 9h18M9 21V9" />
                            <circle cx="6" cy="6" r=".5" fill="currentColor" />
                        </svg>
                        <h3>سایت‌های وردپرسی</h3>
                        <p>
                            بازطراحی قالب، بهبود تجربه کاربری، اصلاح مشکلات
                            افزونه‌ها و بهینه‌سازی عملکرد؛ تا جایی که ساختار
                            فعلی وردپرس پاسخ‌گو باشه.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m8 8-4 4 4 4M16 8l4 4-4 4M14 4l-4 16" />
                        </svg>
                        <h3>سایت‌های اختصاصی</h3>
                        <p>
                            بهبود رابط کاربری، بازبینی ساختار فنی، اصلاح
                            بخش‌های قدیمی و توسعه قابلیت‌های موردنیاز
                            در پروژه‌های کدنویسی‌شده.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 2-1.6L22 7H6" />
                            <circle cx="10" cy="20" r="1" />
                            <circle cx="18" cy="20" r="1" />
                        </svg>
                        <h3>فروشگاه‌های اینترنتی</h3>
                        <p>
                            ساده‌تر کردن مسیر خرید، بهبود صفحات محصول،
                            سبد خرید و فرایند ثبت سفارش و مدیریت فروشگاه.
                        </p>
                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <rect x="3" y="4" width="18" height="16" rx="2" />
                            <path d="M3 9h18M8 4v5" />
                            <circle cx="6" cy="6.5" r=".5" fill="currentColor" />
                            <path d="m11 14 2 2 4-4" />
                        </svg>
                        <h3>پنل‌های مدیریت و سامانه‌ها</h3>
                        <p>
                            مرتب‌سازی محیط مدیریت، ساده‌سازی فرایندهای کاری
                            و طراحی رابطی که استفاده روزمره از سامانه
                            رو راحت‌تر کنه.
                        </p>
                    </div>

                </div>
            </div>
        </section>
        {{-- Deliverables Section --}}
        <section class="sv-section sv-deliverables">
            <div class="container">

                <h2 class="sv-section-title">
                    در پایان پروژه چه چیزهایی تحویل می‌گیری؟
                </h2>

                <div class="sv-deliverables-grid">

                    <div class="sv-deliverable-card">
                        <h3>رابط کاربری بهبودیافته</h3>
                        <p>
                            صفحات بازطراحی‌شده متناسب با نیاز کاربران
                            و هویت برند.
                        </p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>تجربه کاربری بهتر</h3>
                        <p>
                            مسیرهای روشن‌تر برای دسترسی به اطلاعات
                            و انجام کارهای مهم.
                        </p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>نمایش واکنش‌گرا</h3>
                        <p>
                            چیدمان سازگار با موبایل، تبلت و نمایشگرهای
                            بزرگ‌تر، متناسب با محدوده پروژه.
                        </p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>مدیریت ساده‌تر</h3>
                        <p>
                            در صورت نیاز، بهبود پنل مدیریت و فرایندهای
                            روزمره برای استفاده راحت‌تر.
                        </p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>بهبودهای فنی هدفمند</h3>
                        <p>
                            اصلاح مشکلات اولویت‌دار فنی و عملکردی
                            بر اساس نتیجه بررسی سایت.
                        </p>
                    </div>

                    <div class="sv-deliverable-card">
                        <h3>برنامه تغییرات مشخص</h3>
                        <p>
                            تعیین محدوده کار، اولویت‌ها و ملاحظات
                            مهم پیش از شروع اجرا.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Process Section --}}
        <section class="sv-section sv-process" id="sv-process">
            <div class="container">

                <h2 class="sv-section-title">
                    مراحل بازطراحی و ارتقای سایت
                </h2>

                <div class="sv-process-steps">

                    <div class="sv-process-step">
                        <div class="sv-step-number">۱</div>
                        <h3>بررسی سایت فعلی</h3>
                        <p>
                            ساختار، ظاهر، تجربه کاربری، عملکرد و محدودیت‌های
                            فعلی سایت رو بررسی می‌کنیم.
                        </p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۲</div>
                        <h3>تعیین مسیر مناسب</h3>
                        <p>
                            مشخص می‌کنیم که بازطراحی ظاهری، بهینه‌سازی،
                            توسعه فنی یا مهاجرت انتخاب بهتریه.
                        </p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۳</div>
                        <h3>طراحی و پیاده‌سازی</h3>
                        <p>
                            تغییرات تأییدشده رو مطابق محدوده پروژه
                            اجرا و بخش‌های موردنیاز رو بازسازی می‌کنیم.
                        </p>
                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۴</div>
                        <h3>آزمایش و تحویل</h3>
                        <p>
                            بخش‌های تغییرکرده رو بررسی می‌کنیم و پس از
                            رفع ایرادهای شناسایی‌شده، پروژه رو تحویل می‌دیم.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        {{-- Portfolio Section --}}
        <section class="sv-section sv-portfolio">
            <div class="container">

                <h2 class="sv-section-title">
                    نمونه‌هایی از زمینه‌های بازطراحی
                </h2>
                <div class="sv-portfolio-grid">

                    <div class="sv-portfolio-card">
                        <div class="sv-portfolio-image">
                            <div class="sv-portfolio-placeholder">
                                <span>UI / UX</span>
                            </div>
                        </div>

                        <div class="sv-portfolio-content">
                            <span class="sv-portfolio-type">
                                رابط کاربری
                            </span>

                            <h3 class="sv-portfolio-title">
                                بازطراحی ظاهر سایت
                            </h3>

                            <div class="sv-portfolio-tags">
                                <span class="sv-tag">طراحی رابط کاربری</span>
                                <span class="sv-tag">واکنش‌گرایی</span>
                            </div>
                        </div>
                    </div>

                    <div class="sv-portfolio-card">
                        <div class="sv-portfolio-image">
                            <div class="sv-portfolio-placeholder">
                                <span>Admin UI</span>
                            </div>
                        </div>

                        <div class="sv-portfolio-content">
                            <span class="sv-portfolio-type">
                                پنل مدیریت
                            </span>

                            <h3 class="sv-portfolio-title">
                                ساده‌سازی مدیریت سایت
                            </h3>

                            <div class="sv-portfolio-tags">
                                <span class="sv-tag">داشبورد</span>
                                <span class="sv-tag">تجربه کاربری</span>
                            </div>
                        </div>
                    </div>

                    

                </div>

            </div>
        </section>

        {{-- FAQ Section --}}
        <section class="sv-section sv-faq">
            <div class="container">

                <h2 class="sv-section-title">
                    سؤالات متداول درباره بازطراحی سایت
                </h2>

                <div class="sv-faq-list">

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" type="button" aria-expanded="false">
                            <span>آیا برای بازطراحی باید سایت رو از صفر بسازم؟</span>

                            <svg class="sv-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    نه لزوماً. ابتدا سایت فعلی بررسی می‌شه و اگر
                                    ساختار اون قابل‌استفاده باشه، می‌تونیم ظاهر،
                                    تجربه کاربری یا بخش‌های فنی رو بهبود بدیم.
                                    بازسازی کامل زمانی پیشنهاد می‌شه که از نظر
                                    فنی و اقتصادی منطقی باشه.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" type="button" aria-expanded="false">
                            <span>آیا می‌تونم سایت وردپرسی‌ام رو بازطراحی کنم؟</span>

                            <svg class="sv-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    بله. بسته به وضعیت سایت می‌شه قالب رو اصلاح
                                    یا بازطراحی کرد، تجربه کاربری رو بهبود داد
                                    و مشکلات فنی رو بررسی کرد. مهاجرت از وردپرس
                                    فقط زمانی مطرح می‌شه که نیازهای پروژه با
                                    ساختار فعلی به‌خوبی قابل‌پوشش نباشن.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" type="button" aria-expanded="false">
                            <span>آیا بازطراحی باعث بهتر شدن سرعت سایت می‌شه؟</span>

                            <svg class="sv-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    اگر کندی سایت ناشی از مشکلاتی باشه که در
                                    محدوده پروژه قابل‌رفع هستن، می‌شه با بررسی
                                    کدها، تصاویر، منابع و تنظیمات به بهبود سرعت
                                    کمک کرد. میزان بهبود به علت اصلی کندی بستگی داره.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" type="button" aria-expanded="false">
                            <span>آیا اطلاعات و محتوای فعلی سایت حفظ می‌شن؟</span>

                            <svg class="sv-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    در صورت امکان، محتوا و اطلاعات موجود حفظ
                                    می‌شن. پیش از شروع تغییرات، وضعیت داده‌ها
                                    و روش پشتیبان‌گیری بررسی می‌شه تا ریسک
                                    از دست رفتن اطلاعات کاهش پیدا کنه.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" type="button" aria-expanded="false">
                            <span>وضعیت سئوی سایت بعد از بازطراحی چی می‌شه؟</span>

                            <svg class="sv-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    ساختار آدرس‌ها، صفحات مهم، متادیتا و
                                    ریدایرکت‌های موردنیاز باید پیش از انتشار
                                    بررسی بشن. رعایت این موارد به کاهش ریسک
                                    افت سئو کمک می‌کنه، اما تضمین رتبه مشخص
                                    در نتایج جست‌وجو امکان‌پذیر نیست.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" type="button" aria-expanded="false">
                            <span>هزینه بازطراحی سایت چطور مشخص می‌شه؟</span>

                            <svg class="sv-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    هزینه به وضعیت سایت فعلی، تعداد صفحات،
                                    میزان تغییرات طراحی، نیازهای فنی و امکانات
                                    موردنیاز بستگی داره. بعد از بررسی اولیه،
                                    محدوده کار و برآورد هزینه مشخص می‌شه.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="sv-faq-item">
                        <button class="sv-faq-question" type="button" aria-expanded="false">
                            <span>آیا هنگام بازطراحی سایت از دسترس خارج می‌شه؟</span>

                            <svg class="sv-faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" aria-hidden="true">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>

                        <div class="sv-faq-answer">
                            <div class="sv-faq-answer-content">
                                <p>
                                    در بسیاری از پروژه‌ها می‌شه تغییرات رو در
                                    محیط جداگانه اجرا و آزمایش کرد و پس از
                                    تأیید، منتشر کرد. روش اجرا به زیرساخت سایت
                                    و نوع تغییرات بستگی داره.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- Related Services Section --}}
        <section class="sv-section sv-related">
            <div class="container">

                <h2 class="sv-section-title">
                    شاید این خدمات هم به کارت بیان
                </h2>

                <div class="sv-related-grid">

                    <a href="{{ route('services') }}" class="sv-related-card">
                        <h3>طراحی وب‌سایت</h3>
                        <p>
                            اگر به‌جای ارتقای سایت فعلی، به یک وب‌سایت جدید
                            نیاز داری، مسیر طراحی سایت رو بررسی کن.
                        </p>
                        <span class="sv-portfolio-link">
                            مشاهده خدمات
                        </span>
                    </a>

                    <a href="{{ route('contact') }}" class="sv-related-card">
                        <h3>مشاوره فنی سایت</h3>
                        <p>
                            اگر مطمئن نیستی سایت فعلیت به بازطراحی،
                            بهینه‌سازی یا بازسازی نیاز داره، ابتدا مشورت کن.
                        </p>
                        <span class="sv-portfolio-link">
                            دریافت مشاوره
                        </span>
                    </a>


                </div>
            </div>
        </section>

        {{-- Final CTA --}}
        <section class="sv-final-cta">
            <div class="container">
                <div class="sv-final-content">

                    <h2>
                        وقتشه سایت فعلیت رو بهتر کنیم؟
                    </h2>

                    <p>مشاوره‌ی اولیه رایگانه</p>

                   <a href="{{ route('contact') }}" class="btn btn-primary">مشاوره‌ی رایگان</a>

                </div>
            </div>
        </section>


        {{-- Mobile Sticky CTA --}}
       <div class="sv-mobile-sticky" id="mobileStickyBar" hidden>
            <div class="sv-mobile-sticky-content">
                <a href="{{ route('contact') }}" class="sv-mobile-sticky-btn">مشاوره‌ی رایگان</a>
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/services/service-page.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
@endpush
