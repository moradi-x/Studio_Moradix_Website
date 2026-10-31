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
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
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

                    {{-- جایگزین mockup قدیمی داخل هیروی web-design.blade.php (فقط همان بخش تصویر، نه کل هیرو) --}}
                    <div class="wd-art" aria-hidden="true">
                        <span class="wd-glow"></span>

                        {{-- مرورگر: سایت از وایرفریم تا طراحی نهایی ساخته می‌شود --}}
                        <div class="wd-win">
                            <div class="wd-bar"><i></i><i></i><i></i><span dir="ltr">your-website.ir</span></div>

                            <div class="wd-screen" dir="rtl">
                                <span class="wd-grid"></span>

                                {{-- نوار بالا --}}
                                <div class="wd-blk" style="--k:0;--s:6;--t:6;--w:15;--h:6"><span
                                        class="wd-fill wd-f-bar is-dark"></span></div>
                                <div class="wd-blk" style="--k:1;--s:28;--t:7.5;--w:7;--h:3"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:2;--s:37;--t:7.5;--w:7;--h:3"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:3;--s:46;--t:7.5;--w:7;--h:3"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:4;--s:80;--t:5.5;--w:14;--h:7;--r:99px"><span
                                        class="wd-fill wd-f-pill is-teal"></span></div>

                                {{-- تیتر و متن --}}
                                <div class="wd-blk" style="--k:5;--s:6;--t:24;--w:50;--h:8"><span
                                        class="wd-fill wd-f-bar is-dark"></span></div>
                                <div class="wd-blk" style="--k:6;--s:6;--t:35;--w:34;--h:8"><span
                                        class="wd-fill wd-f-bar is-dark"></span></div>
                                <div class="wd-blk" style="--k:7;--s:6;--t:48;--w:46;--h:2.6;--r:4px"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>
                                <div class="wd-blk" style="--k:8;--s:6;--t:53;--w:38;--h:2.6;--r:4px"><span
                                        class="wd-fill wd-f-bar is-gray"></span></div>

                                {{-- دکمه‌ها --}}
                                <div class="wd-blk" style="--k:9;--s:6;--t:62;--w:16;--h:8;--r:99px"><span
                                        class="wd-fill wd-f-pill is-teal"></span></div>
                                <div class="wd-blk" style="--k:10;--s:24;--t:62;--w:16;--h:8;--r:99px"><span
                                        class="wd-fill wd-f-pill is-line"></span></div>

                                {{-- تصویر اصلی هیرو --}}
                                <div class="wd-blk" style="--k:11;--s:58;--t:20;--w:36;--h:46;--r:16px">
                                    <span class="wd-fill wd-f-img">
                                        <span class="wd-circle"></span>
                                        <span class="wd-chart"><i style="--h:42%"></i><i style="--h:68%"></i><i
                                                style="--h:54%"></i><i style="--h:86%"></i></span>
                                        <span class="wd-glass"><b></b><b class="s"></b></span>
                                    </span>
                                </div>

                                {{-- کارت‌ها --}}
                                <div class="wd-blk" style="--k:12;--s:6;--t:76;--w:27;--h:18;--r:12px"><span
                                        class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b class="s"></b></span>
                                </div>
                                <div class="wd-blk" style="--k:13;--s:36.5;--t:76;--w:27;--h:18;--r:12px"><span
                                        class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b class="s"></b></span>
                                </div>
                                <div class="wd-blk" style="--k:14;--s:67;--t:76;--w:27;--h:18;--r:12px"><span
                                        class="wd-fill wd-f-card"><i class="wd-ic"></i><b></b><b class="s"></b></span>
                                </div>

                                {{-- ابزار طراحی: کادر انتخاب و نشانگر --}}
                                <span class="wd-sel"></span>
                                <span class="wd-cursor"><svg viewBox="0 0 24 24">
                                        <path d="M5 3l14 7-6 2-2 6z" fill="#0A0A0A" stroke="#fff" stroke-width="1.6"
                                            stroke-linejoin="round" />
                                    </svg></span>
                            </div>
                        </div>

                        {{-- نسخه‌ی موبایل --}}
                        <div class="wd-phone">
                            <span class="wd-ph-notch"></span>
                            <span class="wd-ph-bar"></span>
                            <span class="wd-ph-l"></span><span class="wd-ph-l s"></span>
                            <span class="wd-ph-img"></span>
                            <span class="wd-ph-btn"></span>
                            <span class="wd-ph-card"></span>
                        </div>

                        {{-- پالت رنگ --}}
                        <div class="wd-pal">
                            <span class="sw sw-w"></span><span class="sw sw-k"></span><span class="sw sw-t"></span>
                            <b dir="ltr">Aa</b>
                        </div>

                        {{-- نتیجه --}}
                        <div class="wd-chip">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 4 4L19 6" />
                            </svg>
                            ریسپانسیو و آماده‌ی انتشار
                        </div>
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
                        <p>بازطراحی قالب، بهبود تجربه کاربری و رفع مشکلات فنی و سرعت سایت.</p>

                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="m8 8-4 4 4 4M16 8l4 4-4 4M14 4l-4 16" />
                        </svg>
                        <h3>سایت‌های اختصاصی</h3>
                        <p>بهبود ظاهر، ساختار فنی و توسعه امکانات موردنیاز سایت.</p>

                    </div>

                    <div class="sv-type-card">
                        <svg class="sv-type-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 3h2l2.2 11.2a2 2 0 0 0 2 1.6h8.9a2 2 0 0 0 2-1.6L22 7H6" />
                            <circle cx="10" cy="20" r="1" />
                            <circle cx="18" cy="20" r="1" />
                        </svg>
                        <h3>فروشگاه‌های اینترنتی</h3>
                        <p>بهینه‌سازی صفحات محصول، سبد خرید و فرایند ثبت سفارش.</p>

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
                        <p>ساده‌سازی محیط مدیریت و فرایندهای کاری برای استفاده راحت‌تر.</p>
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
                       <p>ظاهر، عملکرد و مشکلات سایت رو بررسی می‌کنیم.</p>

                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۲</div>
                        <h3>تعیین مسیر مناسب</h3>
                       <p>بهترین روش برای بازطراحی و ارتقای سایت رو مشخص می‌کنیم.</p>

                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۳</div>
                        <h3>طراحی و پیاده‌سازی</h3>
                        <p>تغییرات موردنیاز رو اجرا و بخش‌های لازم رو بازسازی می‌کنیم.</p>

                    </div>

                    <div class="sv-process-step">
                        <div class="sv-step-number">۴</div>
                        <h3>آزمایش و تحویل</h3>
                       <p>عملکرد سایت رو بررسی می‌کنیم و پس از رفع ایرادها تحویل می‌دیم.</p>
                    </div>

                </div>
                <p class="sv-process-cta">
                    هنوز نمی‌دونی کدوم خدمت برات مناسبه؟
                    <a href="{{ route('contact') }}">برای مشاوره رایگان با ما در ارتباط باش.</a>
                </p>
            </div>
        </section>

       {{-- Portfolio Section --}}
        @if (isset($relatedProjects) && $relatedProjects->isNotEmpty())
            <section class="pf-related-section" id="related-projects">
                <div class="container">

                    <div class="pf-related-heading">
                        <div>
                            <h2>پروژه‌های مرتبط</h2>
                            <p>
                                نمونه‌کارهای بیشتری را در همین زمینه بررسی کنید.
                            </p>
                        </div>

                        <a href="{{ route('portfolio') }}" class="pf-related-all">
                            مشاهده همه پروژه‌ها
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M19 12H5M11 18l-6-6 6-6" />
                            </svg>
                        </a>
                    </div>

                    <div class="pf-related-grid">
                        @foreach ($relatedProjects as $relatedProject)
                            <div class="pf-related-card">

                                <div class="pf-related-image">
                                    @if ($relatedProject->primary_image)
                                        <img src="{{ asset('uploads/projects/images/' . $relatedProject->primary_image) }}"
                                            alt="{{ $relatedProject->title }}" loading="lazy">
                                    @else
                                        <div class="pf-related-placeholder">
                                            <span>Moradix Studio</span>
                                        </div>
                                    @endif

                                    <span class="pf-related-arrow" aria-hidden="true">
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <path d="M7 17 17 7M7 7h10v10" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="pf-related-content">
                                    @if ($relatedProject->category)
                                        <span class="pf-related-category">
                                            {{ $relatedProject->category->name }}
                                        </span>
                                    @endif

                                    <h3>{{ $relatedProject->title }}</h3>

                                    @if ($relatedProject->short_description)
                                        <p>{{ $relatedProject->short_description }}</p>
                                    @endif
                                </div>

                                <a href="{{ route('portfolio.show', $relatedProject->slug) }}" class="pf-related-link">
                                    مشاهده جزئیات
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M19 12H5M11 18l-6-6 6-6" stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
        @endif



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


    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/services/service-page.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('site/js/services/service-page.js') }}" defer></script>
@endpush
