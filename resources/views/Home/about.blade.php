@extends('Home.Layouts.layout')

@section('title', 'درباره ما | Moradix Studio')

@push('styles')
    <link rel="stylesheet" href="{{ asset('site/css/about.css') }}">
@endpush

@section('content')
    <main class="about-page" dir="rtl">

        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        درباره ما
                    </li>
                </ol>
            </div>
        </nav>

        {{-- 1. Brand Hero --}}
        <section class="about-hero">
            <div class="about-container about-hero-grid">

                <div class="about-hero-content">

                    <h1>
                        ایده‌های خوب،
                        <span class="about-gradient">با مهندسی درست</span>
                        به واقعیت می‌رسند.
                    </h1>

                    <p class="about-hero-description">
                        ما در Studio Moradix به ساخت تجربه‌های دیجیتال فکر می‌کنیم؛
                        راهکارهایی سنجیده، خوش‌ساخت و متناسب با نیاز واقعی
                        هر کسب‌وکار.
                    </p>

                    <div class="about-hero-actions">
                        <a href="{{ route('contact') }}" class="about-btn about-btn-primary">
                            درباره‌ی همکاری صحبت کنیم
                            <svg viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 12H5m0 0 6 6m-6-6 6-6" />
                            </svg>
                        </a>

                        <a href="#about-story" class="about-text-link">
                            با فلسفه‌ی ما آشنا شوید
                        </a>
                    </div>


                </div>


                {{-- جایگزین کل <div class="about-hero-visual about-visual-pro"> قبلی. تزئینی است: aria-hidden --}}
                <div class="abx" aria-hidden="true">
                    <div class="abx-grid"></div>
                    <div class="abx-glow"></div>

                    {{-- ویرایشگر کد (چپ‌چین، چون کد LTR است) --}}
                    <div class="abx-editor">
                        <div class="abx-bar"><i></i><i></i><i></i><span>Studio.php</span></div>
                        <div class="abx-code" dir="ltr">
                            <div class="abx-row"><span class="abx-line" style="--n:22;--d:.30s"><span class="c">// from
                                        idea to launch</span></span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:12;--d:.76s"><span
                                        class="k">class</span> <span class="t">Studio</span></span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:1;--d:1.04s">{</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:37;--d:1.12s"> <span
                                        class="k">public function</span> <span class="f">build</span>(<span
                                        class="t">Idea</span> <span class="v">$idea</span>)</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:5;--d:1.85s"> {</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:20;--d:2.00s"> <span
                                        class="k">return</span> <span class="v">$idea</span></span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:22;--d:2.42s"> -&gt;<span
                                        class="f">design</span>()</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:23;--d:2.88s"> -&gt;<span
                                        class="f">develop</span>()</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:24;--d:3.35s"> -&gt;<span
                                        class="f">deliver</span>();</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:5;--d:3.84s"> }</span></div>
                            <div class="abx-row"><span class="abx-line" style="--n:1;--d:3.99s">}</span><i
                                    class="abx-cursor"></i></div>
                        </div>
                    </div>

                    {{-- پیش‌نمایش سایت: بعد از تایپ کد ظاهر می‌شود --}}
                    <div class="abx-preview abx-reveal" style="--rd:4.1s">
                        <div class="abx-pbar"><i></i><i></i><i></i><span dir="ltr">moradix.studio</span></div>
                        <div class="abx-pbody">
                            <div class="abx-pnav"><b dir="ltr">Moradix<em>.</em></b><u></u><u></u><u></u></div>
                            <div class="abx-phero">
                                <span class="abx-pkick"></span>
                                <span class="abx-pl w1"></span>
                                <span class="abx-pl w2"></span>
                                <span class="abx-pbtn"></span>
                            </div>
                            <div class="abx-pcards"><i></i><i></i><i></i></div>
                        </div>
                    </div>

                    {{-- نسخه‌ی موبایل --}}
                    <div class="abx-phone abx-reveal" style="--rd:4.4s">
                        <span class="abx-ph-notch"></span>
                        <span class="abx-pl w1"></span>
                        <span class="abx-pl w2"></span>
                        <span class="abx-pbtn"></span>
                        <div class="abx-pcards"><i></i><i></i></div>
                    </div>

                    {{-- ترمینال --}}
                    <div class="abx-term abx-reveal" style="--rd:4.7s" dir="ltr">
                        <p><span class="g">$</span> php artisan serve</p>
                        <p class="ok">✓ Server running on http://127.0.0.1:8000</p>
                    </div>

                    {{-- کارت‌های شناور --}}
                    <div class="abx-chip abx-chip-a abx-reveal" style="--rd:4.9s">
                        <span class="abx-chk"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m5 12 4 4L19 6" />
                            </svg></span>
                        <span><strong>ساخت اصولی</strong><small>از فکر تا محصول</small></span>
                    </div>
                    <div class="abx-chip abx-chip-b abx-reveal" style="--rd:5.1s">
                        <span class="abx-chk abx-code-ic" dir="ltr">&lt;/&gt;</span>
                        <span><strong>جزئیات مهم‌اند</strong><small dir="ltr">DESIGN &amp; DEVELOPMENT</small></span>
                    </div>
                </div>


            </div>
        </section>


        {{-- 2. Brand Story --}}
        <section class="about-section about-story" id="about-story">
            <div class="about-container about-story-grid">

                <div class="about-section-heading">
                    <h2>
                        ما به چیزی بیشتر از
                        <span class="about-gradient">ساختن یک وب‌سایت</span>
                        فکر می‌کنیم.
                    </h2>
                </div>

                <div class="about-story-content">
                    <p class="about-story-intro">
                        در Studio Moradix، فناوری زمانی ارزشمند است
                        که مسئله‌ای واقعی را حل کند.
                    </p>

                    <p>
                        هر پروژه برای ما ترکیبی از طراحی سنجیده،
                        مهندسی دقیق و شناخت نیازهای کسب‌وکار است.
                        هدفمان ساخت محصولاتی کاربردی، قابل اتکا
                        و آماده‌ی توسعه است.
                    </p>

                    <p>
                        کیفیت، ارتباط شفاف و مسئولیت‌پذیری،
                        پایه‌ی همکاری ما با هر مشتری است.
                    </p>

                    <div class="about-quote">
                        <span class="about-quote-mark">“</span>
                        <p>
                            فناوری خوب فقط کار نمی‌کند؛
                            باید دلیل خوبی برای ساخته‌شدن داشته باشد.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        {{-- Why Moradix --}}
        <section class="about-why" id="about-why" aria-labelledby="about-why-title">
            <div class="about-why__container">

                <div class="about-why__heading" data-why-reveal>


                    <h2 id="about-why-title">
                        چرا <span>Studio Moradix</span> ؟
                    </h2>

                    <p>
                        ما به ساختن راهکارهایی فکر می‌کنیم که فقط زیبا به نظر نرسند؛
                        بلکه دقیق، کاربردی و متناسب با اهداف واقعی هر کسب‌وکار باشند.
                    </p>
                </div>

                <div class="about-why__grid">

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">1</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 3L14.8 9.2L21 12L14.8 14.8L12 21L9.2 14.8L3 12L9.2 9.2L12 3Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <h3>نگاه دقیق به جزئیات</h3>

                        <p>
                            از ساختار و تجربه کاربری تا کوچک‌ترین جزئیات بصری؛
                            هر تصمیم باید دلیل و هدف مشخصی داشته باشد.
                        </p>
                    </article>

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">2</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M8 8L4 12L8 16M16 8L20 12L16 16M14 5L10 19" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <h3>مهندسی اصولی</h3>

                        <p>
                            راهکارهای دیجیتال باید علاوه بر ظاهر حرفه‌ای،
                            ساختاری منظم، قابل نگهداری و متناسب با نیاز پروژه داشته باشند.
                        </p>
                    </article>

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">3</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M12 3L19 6V11C19 15.4 16.1 19.2 12 21C7.9 19.2 5 15.4 5 11V6L12 3Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                                <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>

                        <h3>تعهد به کیفیت</h3>

                        <p>
                            کیفیت فقط در زمان تحویل معنا ندارد؛
                            توجه به جزئیات و مسئولیت‌پذیری باید در تمام مسیر حفظ شود.
                        </p>
                    </article>

                    <article class="about-why__card" data-why-reveal>
                        <span class="about-why__number">4</span>

                        <div class="about-why__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 5H20V16H13L8 20V16H4V5Z" stroke="currentColor" stroke-width="1.5"
                                    stroke-linejoin="round" />
                                <path d="M8 9H16M8 12H13" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" />
                            </svg>
                        </div>

                        <h3>ارتباط شفاف</h3>

                        <p>
                            درک درست نیازها، گفت‌وگوی روشن و مشخص بودن انتظارات،
                            پایه تصمیم‌گیری بهتر و همکاری حرفه‌ای است.
                        </p>
                    </article>

                </div>

                <div class="about-why__footer" data-why-reveal>
                    <span class="about-why__footer-line"></span>
                    <p>
                        Moradix Studio
                        <span>—</span>
                        طراحی با فکر، توسعه با دقت
                    </p>
                    <span class="about-why__footer-line"></span>
                </div>

            </div>
        </section>

        {{-- 4. Our Team --}}
        <section class="about-section about-team">
            <div class="about-container">

                <div class="about-team-header">
                    <div class="about-section-heading">

                        <h2>یک استودیو، با یک نگاه مشترک.</h2>

                        <p>
                            Studio Moradix بر پایه‌ی کیفیت، یادگیری و مسئولیت‌پذیری
                            شکل می‌گیرد؛ با فضایی برای رشد و همراهی متخصصان
                            هم‌فکر.
                        </p>
                    </div>

                    <span class="about-team-label">
                        <span></span>
                        مدیریت استودیو
                    </span>
                </div>


                <div class="about-team-grid">

                    <article class="about-person-card">
                        <div class="about-person-image-wrap">

                            <img src="{{ asset('site/images/profile.jpg') }}" alt="محمد مرادی، مدیر Studio Moradix Studio"
                                class="about-person-image" loading="lazy">

                            <span class="about-person-index">M / 01</span>
                        </div>

                        <div class="about-person-info">
                            <div>
                                <h3> مهندس محمد مرادی</h3>
                                <p>بنیان‌گذار و مدیر استودیو</p>
                            </div>

                            <span class="about-person-arrow" aria-hidden="true">
                                <svg viewBox="0 0 24 24">
                                    <path d="M7 17 17 7M7 7h10v10" />
                                </svg>
                            </span>
                        </div>
                    </article>


                    <div class="about-team-note">
                        <span class="about-team-plus">+</span>


                        <h3>این تازه شروع ماست.</h3>

                        <p>
                            Studio Moradix برای رشد ساخته می‌شود. با گسترش استودیو،
                            متخصصانی که به این نگاه و استانداردها باور دارند،
                            به جمع ما اضافه خواهند شد.
                        </p>

                        <span class="about-team-note-footer">
                            یک مسیر مشترک، کیفیتی ماندگار.
                        </span>
                    </div>

                </div>
            </div>
        </section>


        {{-- 6. Call To Action --}}
        <section class="about-cta">
            <div class="about-container">

                <div class="about-cta-panel">


                    <h2>
                        برای ایده‌ی بعدی‌ات،
                        <span class="about-gradient">از یک گفت‌وگو شروع کنیم.</span>
                    </h2>

                    <p>
                        درباره‌ی هدفی که در ذهن داری صحبت کنیم و ببینیم
                        چطور می‌توانیم آن را به یک راهکار دیجیتال تبدیل کنیم.
                    </p>

                    <a href="{{ route('contact') }}" class="about-btn about-btn-light">
                        شروع گفت‌وگو

                        <svg viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M19 12H5m0 0 6 6m-6-6 6-6" />
                        </svg>
                    </a>

                    <span class="about-cta-decoration" aria-hidden="true">M.</span>
                </div>

            </div>
        </section>

    </main>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/about.js') }}" defer></script>
@endpush
