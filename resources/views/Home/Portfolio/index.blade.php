@extends('Home.Layouts.layout')

@section('title', 'نمونه‌کارها و پروژه‌های در حال توسعه | Moradix Studio')

@section('description',
    'مروری بر پروژه‌های منتخب و پروژه‌های در حال توسعه Moradix Studio در زمینه طراحی وب‌سایت،
    فروشگاه اینترنتی و راهکارهای دیجیتال.')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('site/css/portfolio/portfolio-index.css') }}">
    @endpush


@section('content')

    <main class="pf-page" dir="rtl">

        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        نمونه کارها
                    </li>
                </ol>
            </div>
        </nav>


        {{-- Hero --}}
        <section class="pf-hero">
            <div class="container pf-container">

                <div class="pf-hero-content">

                    <h1>
                        ایده‌هایی که
                        <span class="pf-gradient-text">در مسیر ساخت</span>
                        هستند.
                    </h1>

                    <p class="pf-hero-description">
                        در Moradix، هر پروژه با شناخت نیازها، برنامه‌ریزی و
                        توجه به تجربه کاربر شکل می‌گیرد. اینجا می‌توانید
                        پروژه‌های در حال توسعه ما را بشناسید و با مسیر
                        شکل‌گیری آن‌ها آشنا شوید.
                    </p>

                    <div class="pf-hero-actions">
                        <a href="#pf-projects" class="pf-btn pf-btn-primary">
                            مشاهده پروژه‌ها
                            <span aria-hidden="true">←</span>
                        </a>

                        <a href="#pf-contact" class="pf-btn pf-btn-secondary">
                            درباره پروژه خودتان صحبت کنیم
                        </a>
                    </div>


                </div>

                {{-- Decorative visual --}}
                <div class="pf-hero-visual" aria-hidden="true">
                    <div class="pf-orbit pf-orbit-one"></div>
                    <div class="pf-orbit pf-orbit-two"></div>

                    <div class="pf-visual-window">
                        <div class="pf-window-top">
                            <span></span>
                            <span></span>
                            <span></span>
                            <div class="pf-window-address">moradix.studio / projects</div>
                        </div>

                        <div class="pf-window-content">
                            <div class="pf-window-sidebar">
                                <div class="pf-sidebar-logo"></div>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>

                            <div class="pf-window-main">
                                <div class="pf-window-label">PROJECT OVERVIEW</div>
                                <div class="pf-window-title"></div>
                                <div class="pf-window-line"></div>

                                <div class="pf-window-cards">
                                    <div class="pf-window-card pf-window-card-a">
                                        <span></span>
                                        <i></i>
                                    </div>
                                    <div class="pf-window-card pf-window-card-b">
                                        <span></span>
                                        <i></i>
                                    </div>
                                </div>

                                <div class="pf-window-bottom">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pf-floating-tag pf-floating-tag-top">
                        <span class="pf-floating-icon">✦</span>
                        Thoughtful design
                    </div>

                    <div class="pf-floating-tag pf-floating-tag-bottom">
                        <span class="pf-live-dot"></span>
                        Currently in progress
                    </div>
                </div>

            </div>
        </section>



        {{-- Projects --}}
        <section class="pf-section" id="pf-projects">
            <div class="container pf-container ">

                <div class="pf-section-heading">
                    <div>
                        <span class="pf-eyebrow">نمونه‌کارهای Studio Moradix</span>
                        <h2 class="pf-section-title">
                            پروژه‌هایی که ساخته‌ایم
                        </h2>
                    </div>

                    <div class="pf-project-count">
                        <strong>{{ sprintf('%02d', $projects->count()) }}</strong>
                        <span>پروژه</span>
                    </div>
                </div>

                <div class="pf-project-grid">

                    @forelse($projects as $project)
                        <article class="pf-project-card">
                            <div class="pf-project-preview  pf-preview-auto">

                                @if ($project->primary_image)
                                    <img src="{{ asset(
                                        trim(env('PROJECT_IMAGES_UPLOAD_PATH', 'uploads/projects/images'), '/') . '/' . $project->primary_image,
                                    ) }}"
                                        alt="{{ $project->title }}" loading="lazy">
                                @else
                                    <div class="pf-project-placeholder">
                                        <span>{{ $project->title }}</span>
                                    </div>
                                @endif

                            </div>

                            <div class="pf-project-body">

                                <div class="pf-project-meta">
                                    <span class="pf-project-category">
                                        {{ $project->category?->name ?? 'پروژه' }}
                                    </span>

                                    <span class="pf-status {{ $project->status ? 'is-completed' : 'is-development' }}">
                                        {{ $project->status ? 'تکمیل شده' : 'در حال توسعه' }}
                                    </span>
                                </div>

                                <h3 class="pf-project-title">
                                    {{ $project->title }}
                                </h3>

                                <p class="pf-project-description">
                                    {{ $project->short_description }}
                                </p>


                                @if ($project->features->isNotEmpty())
                                    <div class="pf-project-tags">
                                        @foreach ($project->features->take(4) as $feature)
                                            <span>{{ $feature->name }}</span>
                                        @endforeach
                                    </div>
                                @endif


                                @if ($project->project_url)
                                    <a href="{{ route('portfolio.show', $project->slug) }}" class="pf-project-link" target="_blank"
                                        rel="noopener noreferrer">
                                        مشاهده جزئیات پروژه
                                    </a>

                                @endif

                            </div>

                        </article>
                    @empty
                        <div class="pf-project-empty">
                            <p>در حال آماده‌سازی نمونه‌کارهای ما هستیم.</p>
                        </div>
                    @endforelse

                </div>

            </div>
        </section>



        {{-- Process --}}
        <section class="pf-process">
            <div class="container pf-container">
                <div class="pf-process-heading">
                    <h2>هر پروژه، یک مسیر مشخص دارد.</h2>
                    <p>
                        طراحی خوب فقط ظاهر زیبا نیست؛ باید به نیاز کاربر پاسخ
                        دهد و مسیر رسیدن به هدف را ساده‌تر کند.
                    </p>
                </div>

                <div class="pf-process-grid">
                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">01</span>
                        <div class="pf-process-icon" aria-hidden="true">⌕</div>
                        <h3>شناخت نیاز</h3>
                        <p>
                            بررسی هدف کسب‌وکار، مخاطبان و نیازهای اصلی پروژه.
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">02</span>
                        <div class="pf-process-icon" aria-hidden="true">◇</div>
                        <h3>طراحی تجربه</h3>
                        <p>
                            شکل دادن به ساختار صفحات، مسیرهای کاربر و ظاهر رابط.
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">03</span>
                        <div class="pf-process-icon" aria-hidden="true">⌘</div>
                        <h3>پیاده‌سازی</h3>
                        <p>
                            تبدیل طرح به یک تجربه وب واکنش‌گرا و کاربردی.
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">04</span>
                        <div class="pf-process-icon" aria-hidden="true">↗</div>
                        <h3>بررسی و انتشار</h3>
                        <p>
                            بررسی عملکرد، سازگاری صفحات و آماده‌سازی برای انتشار.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        {{-- CTA --}}
        <section class="pf-cta" id="pf-contact">
            <div class="container pf-container">
                <div class="pf-cta-card">
                    <div class="pf-cta-decoration pf-cta-decoration-one"></div>
                    <div class="pf-cta-decoration pf-cta-decoration-two"></div>

                    <div class="pf-cta-content">
                        <h2>
                            ایده شما می‌تواند<br>
                            <span>شروع پروژه بعدی باشد.</span>
                        </h2>
                        <p>
                            اگر برای کسب‌وکار خود به وب‌سایت یا فروشگاه اینترنتی
                            نیاز دارید، می‌توانیم درباره ایده و نیازهای شما صحبت کنیم.
                        </p>

                        <a href="{{ url('/contact') }}" class="pf-btn pf-btn-light">
                            شروع گفتگو
                            <span aria-hidden="true">←</span>
                        </a>
                    </div>

                    <div class="pf-cta-mark" aria-hidden="true">
                        <span>M</span>
                        <i></i>
                        <i></i>
                        <i></i>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection

@push('scripts')
    <script src="{{ asset('site/js/portfolio/portfolio-index.js') }}" defer></script>
@endpush
