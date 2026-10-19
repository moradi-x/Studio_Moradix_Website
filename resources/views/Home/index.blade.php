@extends('Home.Layouts.layout')

@section('content')
    <!-- ==================== Hero Section ==================== -->
    <section class="hero" id="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>وب‌سایت تخصصی برای کسب‌وکار شما، بدون پیچیدگی</h1>
                    <p>با Laravel و کدنویسی اختصاصی، فروشگاه اینترنتی و سایت شرکتی حرفه‌ای بسازید. سریع، امن، و درست از همان
                        ابتدا بهینه برای سئو.</p>
                    <div class="hero-buttons">
                        <a href="#contact" class="btn btn-primary">ثبت درخواست پروژه</a>
                        <a href="#portfolio" class="btn btn-outline">مشاهده نمونه‌کارها</a>
                    </div>
                </div>

                <div class="hero-visual" aria-hidden="true">
                    <div class="hero-visual-content">
                        <div class="hero-visual-bar"></div>
                        <div class="hero-visual-bar"></div>
                        <div class="hero-visual-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Trust Bar ==================== -->
    <section class="trust-bar">
        <div class="container">
            <div class="trust-items">
                <div class="trust-item">
                    <h3>۴ پروژه</h3>
                    <p>تجاری تحویل‌شده</p>
                </div>
                <div class="trust-item">
                    <h3>Laravel</h3>
                    <p>تخصص اصلی</p>
                </div>
                <div class="trust-item">
                    <h3>سئو و سرعت</h3>
                    <p>از روز اول</p>
                </div>
                <div class="trust-item">
                    <h3>پشتیبانی</h3>
                    <p>بعد از تحویل</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Services Section ==================== -->
    <section class="section services" id="services">
        <div class="container">
            <div class="section-header">
                <h2>خدمات ما</h2>
                <p>راه‌کارهای تخصصی وب برای هر نیاز کسب‌وکار شما</p>
            </div>

            <div class="services-grid">
                <!-- DYNAMIC: services از جدول services -->

                <!-- Service 1: فروشگاه اینترنتی -->
                <article class="service-card">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h3>طراحی فروشگاه اینترنتی</h3>
                    <p>فروشگاه آنلاین اختصاصی با پنل مدیریت قدرتمند، درگاه پرداخت و امکانات کامل فروش</p>
                    <div class="service-footer">
                        <span class="service-price">شروع قیمت از ۱۵,۰۰۰,۰۰۰ تومان</span>
                        <a href="#" class="service-link">
                            بیشتر بدانید
                            <span aria-hidden="true">←</span>
                        </a>
                    </div>
                </article>

                <!-- Service 2: سایت شرکتی -->
                <article class="service-card">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <h3>طراحی سایت شرکتی</h3>
                    <p>وب‌سایت معرفی کسب‌وکار با طراحی مدرن، سیستم مدیریت محتوا و فرم‌های تماس</p>
                    <div class="service-footer">
                        <span class="service-price">شروع قیمت از ۸,۰۰۰,۰۰۰ تومان</span>
                        <a href="#" class="service-link">
                            بیشتر بدانید
                            <span aria-hidden="true">←</span>
                        </a>
                    </div>
                </article>

                <!-- Service 3: پنل مدیریت -->
                <article class="service-card">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                    </svg>
                    <h3>پنل مدیریت و سیستم‌های سفارشی</h3>
                    <p>سیستم‌های وب اختصاصی برای مدیریت داده، گزارش‌گیری و اتوماسیون فرآیندها</p>
                    <div class="service-footer">
                        <span class="service-price">قیمت‌گذاری بر اساس پروژه</span>
                        <a href="#" class="service-link">
                            بیشتر بدانید
                            <span aria-hidden="true">←</span>
                        </a>
                    </div>
                </article>

                <!-- Service 4: سئو فنی -->
                <article class="service-card">
                    <svg class="service-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    <h3>سئوی فنی و بهینه‌سازی سرعت</h3>
                    <p>بهینه‌سازی سایت موجود برای موتورهای جستجو، افزایش سرعت و بهبود عملکرد</p>
                    <div class="service-footer">
                        <span class="service-price">شروع قیمت از ۵,۰۰۰,۰۰۰ تومان</span>
                        <a href="#" class="service-link">
                            بیشتر بدانید
                            <span aria-hidden="true">←</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- ==================== Portfolio Section ==================== -->
    <section class="section portfolio" id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2>نمونه‌کارهای منتخب</h2>
                <p>پروژه‌های تجاری که با موفقیت تحویل داده‌ایم</p>
            </div>

            <div class="portfolio-grid">
                <!-- DYNAMIC: portfolio items از جدول projects -->

                <!-- Portfolio 1 -->
                <article class="portfolio-card">
                    <div class="portfolio-image" aria-label="تصویر پروژه">
                        <!-- PLACEHOLDER: عکس واقعی پروژه -->
                        M
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-type">فروشگاه اینترنتی</p>
                        <h3>فروشگاه پوشاک</h3>
                        <div class="portfolio-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">درگاه پرداخت</span>
                            <span class="tag">پنل مدیریت</span>
                        </div>
                    </div>
                </article>

                <!-- Portfolio 2 -->
                <article class="portfolio-card">
                    <div class="portfolio-image" aria-label="تصویر پروژه">
                        <!-- PLACEHOLDER: عکس واقعی پروژه -->
                        M
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-type">فروشگاه اینترنتی</p>
                        <h3>فروشگاه ابزار</h3>
                        <div class="portfolio-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">جستجوی پیشرفته</span>
                            <span class="tag">فیلتر محصولات</span>
                        </div>
                    </div>
                </article>

                <!-- Portfolio 3 -->
                <article class="portfolio-card">
                    <div class="portfolio-image" aria-label="تصویر پروژه">
                        <!-- PLACEHOLDER: عکس واقعی پروژه -->
                        M
                    </div>
                    <div class="portfolio-content">
                        <p class="portfolio-type">فروشگاه اینترنتی</p>
                        <h3>فروشگاه ماشین و موتور شارژی</h3>
                        <div class="portfolio-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">گالری تصاویر</span>
                            <span class="tag">مدیریت موجودی</span>
                        </div>
                    </div>
                </article>
            </div>

            <div class="portfolio-view-all">
                <a href="#" class="btn btn-outline">مشاهده‌ی همه‌ی نمونه‌کارها</a>
            </div>
        </div>
    </section>
    <!-- ==================== Why Us Section ==================== -->
    <section class="section why-us" id="why-us">
        <div class="container">
            <div class="section-header">
                <h2>چرا Moradix Studio؟</h2>
                <p>مزیت‌های واقعی همکاری با ما</p>
            </div>

            <div class="why-grid">
                <!-- Why Item 1 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <div class="why-content">
                        <h3>کد تمیز و مستندات کامل</h3>
                        <p>تحویل پروژه با کدنویسی استاندارد، کامنت‌گذاری و مستندات فنی برای توسعه‌های آینده</p>
                    </div>
                </div>

                <!-- Why Item 2 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <div class="why-content">
                        <h3>یک نفر مسئول پروژه‌ی شما</h3>
                        <p>از مشاوره تا تحویل و پشتیبانی، همیشه با یک نفر در ارتباط هستید، بدون سردرگمی</p>
                    </div>
                </div>

                <!-- Why Item 3 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <div class="why-content">
                        <h3>سئو و سرعت از ابتدا</h3>
                        <p>بهینه‌سازی برای موتورهای جستجو و سرعت بالا بخشی از کدنویسی اولیه است، نه کار اضافی بعدی</p>
                    </div>
                </div>

                <!-- Why Item 4 -->
                <div class="why-item">
                    <svg class="why-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <div class="why-content">
                        <h3>پشتیبانی پس از تحویل</h3>
                        <p>۳ ماه پشتیبانی رایگان برای رفع باگ و راهنمایی استفاده از پنل مدیریت</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== Process Section ==================== -->
    <section class="section process" id="process">
        <div class="container">
            <div class="section-header">
                <h2>فرآیند کار</h2>
                <p>از ایده تا تحویل، گام‌به‌گام با شما هستیم</p>
            </div>

            <div class="process-timeline">
                <!-- Step 1 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۱">۱</div>
                    <h3>مشاوره رایگان</h3>
                    <p>بررسی نیاز شما، پیشنهاد راه‌کار مناسب و برآورد زمان و هزینه</p>
                </div>

                <!-- Step 2 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۲">۲</div>
                    <h3>تحلیل و قرارداد</h3>
                    <p>مشخص کردن دقیق ویژگی‌ها، امضای قرارداد و دریافت پیش‌پرداخت</p>
                </div>

                <!-- Step 3 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۳">۳</div>
                    <h3>طراحی و توسعه</h3>
                    <p>کدنویسی با Laravel، گزارش پیشرفت منظم و دریافت بازخورد شما</p>
                </div>

                <!-- Step 4 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۴">۴</div>
                    <h3>تست و تحویل</h3>
                    <p>تست کامل عملکرد، رفع نواقص، تحویل نهایی و آموزش کار با پنل</p>
                </div>

                <!-- Step 5 -->
                <div class="process-step">
                    <div class="process-number" aria-label="مرحله ۵">۵</div>
                    <h3>پشتیبانی</h3>
                    <p>۳ ماه پشتیبانی رایگان، رفع باگ و پاسخ‌گویی به سوالات شما</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== FAQ Section ==================== -->
    <section class="section faq" id="faq">
        <div class="container">
            <div class="section-header">
                <h2>سوالات متداول</h2>
                <p>پاسخ سوالاتی که احتمالاً برای شما پیش آمده</p>
            </div>

            <div class="faq-list">
                <!-- FAQ 1 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>هزینه‌ی ساخت یک وب‌سایت چقدر است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>هزینه بستگی به نوع پروژه و امکانات مورد نیاز دارد. یک سایت شرکتی ساده از ۸ میلیون تومان،
                                فروشگاه اینترنتی از ۱۵ میلیون تومان و سیستم‌های سفارشی بر اساس تحلیل نیاز قیمت‌گذاری
                                می‌شوند. بعد از مشاوره رایگان، برآورد دقیق به شما ارائه می‌دهیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>مدت زمان تحویل پروژه چقدر است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>زمان تحویل بسته به حجم کار متفاوت است. یک سایت شرکتی معمولاً ۲ تا ۳ هفته، فروشگاه اینترنتی ۴
                                تا ۶ هفته و سیستم‌های بزرگ‌تر ممکن است ۲ تا ۳ ماه زمان ببرند. در قرارداد، زمان‌بندی دقیق
                                مشخص می‌شود و گزارش پیشرفت منظم دریافت می‌کنید.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا دامنه و هاست را هم شما تهیه می‌کنید؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>خرید دامنه و هاست به عهده‌ی خود شماست، اما ما در انتخاب مناسب‌ترین سرویس راهنمایی‌تان
                                می‌کنیم. همچنین نصب و راه‌اندازی سایت روی هاست را انجام می‌دهیم و تنظیمات لازم برای امنیت و
                                سرعت را اعمال می‌کنیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>پشتیبانی بعد از تحویل چگونه است؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>۳ ماه پشتیبانی رایگان شامل رفع باگ‌های احتمالی، راهنمایی استفاده از پنل مدیریت و پاسخ به
                                سوالات فنی است. بعد از این مدت، امکان قرارداد پشتیبانی ماهانه یا انجام تغییرات و توسعه‌های
                                جدید به‌صورت پروژه‌ای وجود دارد.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا سایت من برای سئو بهینه خواهد بود؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>بله، تمام سایت‌هایی که می‌سازیم از نظر سئوی فنی بهینه‌اند. این شامل ساختار URL صحیح،
                                متاتگ‌ها، سرعت بارگذاری، ریسپانسیو بودن و استاندارد بودن کد HTML است. البته سئوی محتوایی
                                (نوشتن متن بهینه و بک‌لینک‌سازی) بخش جداگانه‌ای است که می‌توانیم در آن هم راهنمایی کنیم.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>آیا بعد از تحویل می‌توانم تغییرات بدهم؟</span>
                        <svg class="faq-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>بله، تغییرات جزئی در دوره‌ی پشتیبانی رایگان انجام می‌شود. تغییرات بزرگ‌تر مثل اضافه کردن بخش
                                جدید یا ویژگی‌های پیچیده، به‌صورت پروژه‌ی جداگانه برآورد و اجرا می‌شوند. چون کد تمیز و مستند
                                تحویل می‌دهیم، توسعه‌های آینده بسیار راحت‌تر خواهد بود.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== CTA & Form Section ==================== -->
    <section class="section cta-section" id="contact">
        <div class="container">
            <div class="cta-content">
                <div class="cta-header">
                    <h2>آماده‌ی شروع پروژه‌تان هستید؟</h2>
                    <p>فرم زیر را پر کنید تا در اسرع وقت با شما تماس بگیریم و مشاوره رایگان ارائه دهیم</p>
                </div>

                <div class="form-card">
                    <div class="form-success" id="form-success">
                        ✓ درخواست شما با موفقیت ثبت شد. به‌زودی با شما تماس می‌گیریم.
                    </div>

                    <form id="contact-form" novalidate>
                        <!-- DYNAMIC: فرم به بک‌اند Laravel متصل می‌شود -->

                        <!-- Name -->
                        <div class="form-group">
                            <label for="name" class="form-label">
                                نام و نام خانوادگی <span class="required">*</span>
                            </label>
                            <input type="text" id="name" name="name" class="form-input" required
                                aria-required="true" placeholder="مثال: علی محمدی">
                            <span class="form-error">لطفاً نام خود را وارد کنید</span>
                        </div>

                        <!-- Phone -->
                        <div class="form-group">
                            <label for="phone" class="form-label">
                                شماره تماس <span class="required">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone" class="form-input" required
                                aria-required="true" placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                            <span class="form-error">لطفاً شماره تماس معتبر وارد کنید</span>
                        </div>

                        <!-- Project Type -->
                        <div class="form-group">
                            <label for="project-type" class="form-label">
                                نوع پروژه <span class="required">*</span>
                            </label>
                            <select id="project-type" name="project_type" class="form-select" required
                                aria-required="true">
                                <option value="">انتخاب کنید</option>
                                <option value="shop">فروشگاه اینترنتی</option>
                                <option value="corporate">سایت شرکتی</option>
                                <option value="admin">پنل مدیریت / سیستم سفارشی</option>
                                <option value="seo">سئو و بهینه‌سازی</option>
                                <option value="other">سایر</option>
                            </select>
                            <span class="form-error">لطفاً نوع پروژه را انتخاب کنید</span>
                        </div>

                        <!-- Description -->
                        <div class="form-group">
                            <label for="description" class="form-label">
                                توضیح کوتاه (اختیاری)
                            </label>
                            <textarea id="description" name="description" class="form-textarea"
                                placeholder="در چند خط بگویید چه پروژه‌ای مدنظرتان است..."></textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary form-submit">
                            ارسال درخواست
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
     
@endsection
