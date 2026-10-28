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


        {{-- Portfolio Hero — place after $projects is prepared --}}


        @php
            $pfhBuilt = isset($projects)
                ? $projects->filter(fn($p) => in_array(data_get($p, 'status'), ['personal', 'technical']))->count()
                : null;

            $pfhLive = isset($projects)
                ? $projects->filter(fn($p) => in_array(data_get($p, 'status'), ['development', 'soon']))->count()
                : null;

            $pfhFa = fn($n) => strtr((string) $n, [
                '0' => '۰',
                '1' => '۱',
                '2' => '۲',
                '3' => '۳',
                '4' => '۴',
                '5' => '۵',
                '6' => '۶',
                '7' => '۷',
                '8' => '۸',
                '9' => '۹',
            ]);
        @endphp

        {{--  hero --}}
        <section class="pfh" aria-labelledby="pfh-title">
            <div class="container pfh-inner">

                {{-- Text content --}}
                <div class="pfh-text">


                    <h1 id="pfh-title">
                        از ایده تا اجرا؛
                        <span class="pfh-grad">مسیر خلق پروژه‌های ما</span>
                    </h1>

                    <p class="pfh-lead">
                        ما تازه مسیر را شروع کرده‌ایم، برای همین هر پروژه را با وضعیت واقعی‌اش نشان می‌دهیم:
                        پروژه‌های ساخته‌شده، و کارهایی که الان برای کارفرما در حال توسعه‌اند.
                    </p>

                    <div class="pfh-actions">
                        <a href="#pf-projects" class="pfh-btn pfh-btn--primary">
                            مشاهده‌ی پروژه‌ها
                            <span aria-hidden="true">←</span>
                        </a>

                        <a href="{{ route('contact') }}" class="pfh-btn pfh-btn--ghost">
                            درباره‌ی پروژه‌ی تو صحبت کنیم
                        </a>
                    </div>

                    @if ($pfhBuilt !== null)
                        <dl class="pfh-stats">
                            <div>
                                <dt>پروژه‌ی ساخته‌شده</dt>
                                <dd>{{ $completedProjects }}</dd>
                            </div>

                            <div>
                                <dt>در حال توسعه برای کارفرما</dt>
                                <dd>{{ $developmentProjects }}</dd>
                            </div>
                        </dl>
                    @endif
                </div>

                {{-- Animated project cards --}}
                <div class="pfh-art" aria-label="پیش‌نمایش پروژه‌ها">
                    <span class="pfh-glow" aria-hidden="true"></span>
                    <span class="pfh-ring" aria-hidden="true"></span>

                    <div class="pfh-stack">

                        {{-- Card 1: Online store --}}
                        <figure class="pfh-card" data-pos="0">
                            <div class="pfh-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">store / products</span>
                            </div>

                            <div class="pfh-screen">
                                <div class="pfh-nav">
                                    <b></b><u></u><u></u><u></u><em></em>
                                </div>

                                <div class="pfh-banner"></div>

                                <div class="pfh-tiles">
                                    <div><i></i><b></b><s></s></div>
                                    <div><i></i><b></b><s></s></div>
                                    <div><i></i><b></b><s></s></div>
                                </div>
                            </div>

                            <figcaption class="pfh-meta">
                                <b>فروشگاه اینترنتی</b>
                                <span class="pfh-st pfh-st--dev">
                                    <i></i>
                                    در حال توسعه
                                </span>
                            </figcaption>
                        </figure>

                        {{-- Card 2: Website --}}
                        <figure class="pfh-card" data-pos="1">
                            <div class="pfh-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">moradix.studio</span>
                            </div>

                            <div class="pfh-screen">
                                <div class="pfh-nav">
                                    <b></b><u></u><u></u><u></u><em></em>
                                </div>

                                <div class="pfh-hero2">
                                    <div>
                                        <b></b>
                                        <b class="w"></b>
                                        <u></u>
                                    </div>
                                    <span></span>
                                </div>

                                <div class="pfh-tiles pfh-tiles--row">
                                    <div><b></b><s></s></div>
                                    <div><b></b><s></s></div>
                                    <div><b></b><s></s></div>
                                </div>
                            </div>

                            <figcaption class="pfh-meta">
                                <b>طراحی وب‌سایت</b>
                                <span class="pfh-st pfh-st--own">
                                    <i></i>
                                    پروژه‌ی شخصی
                                </span>
                            </figcaption>
                        </figure>

                        {{-- Card 3: Technical project --}}
                        <figure class="pfh-card pfh-card--dark" data-pos="2">
                            <div class="pfh-bar">
                                <i></i><i></i><i></i>
                                <span dir="ltr">Router.php</span>
                            </div>

                            <div class="pfh-screen pfh-code" dir="ltr">
                                <p><i class="k"></i><i class="v"></i><i class="s"></i></p>
                                <p><i class="s"></i><i class="f"></i></p>
                                <p class="in"><i class="k"></i><i class="v"></i></p>
                                <p class="in"><i class="f"></i><i class="s"></i><i class="v"></i></p>
                                <p><i class="s"></i></p>
                            </div>

                            <figcaption class="pfh-meta">
                                <b>پروژه‌ی فنی</b>
                                <span class="pfh-st pfh-st--tech">
                                    <i></i>
                                    معماری MVC
                                </span>
                            </figcaption>
                        </figure>

                    </div>

                    <span class="pfh-count" dir="ltr" aria-live="off">
                        <b data-cur>01</b> / {{ sprintf('%02d', 3) }}
                    </span>
                </div>

            </div>
        </section>


        {{-- Projects --}}
        <section class="pf-section" id="pf-projects">
            <div class="container pf-container ">

                <div class="pf-section-heading">
                    <div>
                        
                        <h2 class="pf-section-title">
                            پروژه‌هایی که ساخته‌ایم
                        </h2>
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


                                    <a href="{{ route('portfolio.show', $project->slug) }}" class="pf-project-link"
                                        target="_blank" rel="noopener noreferrer">
                                        مشاهده جزئیات پروژه
                                    </a>

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
                        <span class="pf-process-number">1</span>
                        <div class="pf-process-icon" aria-hidden="true">⌕</div>
                        <h3>شناخت نیاز</h3>
                        <p>
                            بررسی هدف کسب‌وکار، مخاطبان و نیازهای اصلی پروژه.
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">2</span>
                        <div class="pf-process-icon" aria-hidden="true">◇</div>
                        <h3>طراحی تجربه</h3>
                        <p>
                            شکل دادن به ساختار صفحات، مسیرهای کاربر و ظاهر رابط.
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">3</span>
                        <div class="pf-process-icon" aria-hidden="true">⌘</div>
                        <h3>پیاده‌سازی</h3>
                        <p>
                            تبدیل طرح به یک تجربه وب واکنش‌گرا و کاربردی.
                        </p>
                    </div>

                    <div class="pf-process-item" data-reveal>
                        <span class="pf-process-number">4</span>
                        <div class="pf-process-icon" aria-hidden="true">↗</div>
                        <h3>بررسی و انتشار</h3>
                        <p>
                            بررسی عملکرد، سازگاری صفحات و آماده‌سازی برای انتشار.
                        </p>
                    </div>
                </div>
            </div>
        </section>


     {{-- Final CTA Section --}}
    <section class="si-cta" id="contact">
        <div class="container">

            <div class="si-cta-card">

                {{-- Decorative Elements --}}
                <span class="si-cta-orb si-cta-orb-one" aria-hidden="true"></span>

                <span class="si-cta-orb si-cta-orb-two" aria-hidden="true"></span>

                <div class="si-cta-content">

                    <span class="si-cta-eyebrow">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="m12 3 1.9 5.8L20 11l-6.1 2.2L12 19l-2-5.8L4 11l6-2.2L12 3Z" stroke="currentColor"
                                stroke-width="1.6" stroke-linejoin="round" />
                            <path d="m19 14 1.1 2.9L23 18l-2.9 1.1L19 22l-1.1-2.9L15 18l2.9-1.1L19 14Z"
                                stroke="currentColor" stroke-width="1.4" stroke-linejoin="round" />
                        </svg>

                        آماده شروع هستیم
                    </span>

                    <h2 class="si-cta-title">
                        برای قدم بعدی
                        <span>کسب‌وکارت آماده‌ای؟</span>
                    </h2>

                    <p class="si-cta-description">
                        از طراحی یک وب‌سایت جدید تا بهبود و توسعه سایت فعلی؛
                        بیایید درباره نیازهای کسب‌وکارت صحبت کنیم و
                        راهکار مناسب پروژه‌ات رو پیدا کنیم.
                    </p>

                    <div class="si-cta-actions">
                        <a href="/contact" class="si-cta-primary">
                            شروع گفتگو درباره پروژه

                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>

                        <a href="#services" class="si-cta-secondary">
                            مشاهده خدمات
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </section>

    </main>

@endsection

@push('scripts')
    <script src="{{ asset('site/js/portfolio/portfolio-index.js') }}" defer></script>
@endpush
