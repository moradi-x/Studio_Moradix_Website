@extends('Home.Layouts.layout')

@section('title', $project->title . ' | نمونه‌کارهای Moradix Studio')

@section('description', $project->short_description ?: \Illuminate\Support\Str::limit(strip_tags($project->description
    ?? ''), 155))

    @push('styles')
        <link rel="stylesheet" href="{{ asset('site/css/portfolio/portfolio-show.css') }}">
    @endpush

@section('content')
    @php
        $statusLabel = $project->status == 1 ? 'تکمیل شده' : 'در حال توسعه';

        $primaryImage = $project->primary_image ? asset('uploads/projects/images/' . $project->primary_image) : null;

        $galleryImages = $project->images ?? collect();

        $description = $project->description ?? '';

        $heroImage = $project->primary_image ? asset('uploads/projects/images/' . $project->primary_image) : null;

        $uploadPath = trim(env('PROJECT_IMAGES_UPLOAD_PATH'), '/');

        $galleryImages = collect();

        // تصویر اصلی پروژه
        if ($project->primary_image) {
            $galleryImages->push([
                'path' => asset($uploadPath . '/' . $project->primary_image),
                'alt' => $project->title . ' - تصویر اصلی پروژه',
            ]);
        }

        // تصاویر اضافه پروژه
        foreach ($project->images as $image) {
            if ($image->image) {
                $galleryImages->push([
                    'path' => asset($uploadPath . '/' . $image->image),
                    'alt' => $project->title . ' - تصویر پروژه',
                ]);
            }
        }

        // جلوگیری از نمایش دوباره یک فایل
        $galleryImages = $galleryImages->unique('path')->values();

        $projectCategory = $project->category;
        $projectFeatures = $project->features ?? collect();

        $categoryName = $projectCategory->name ?? ($projectCategory->title ?? null);

        $metadataItems = [
            [
                'label' => 'دسته‌بندی پروژه',
                'value' => $categoryName,
                'icon' => 'grid',
            ],
            [
                'label' => 'وضعیت پروژه',
                'value' => $project->status == 1 ? 'تکمیل شده' : 'در حال توسعه',
                'icon' => 'check-circle',
            ],
            [
                'label' => 'تعداد ویژگی‌ها',
                'value' => $projectFeatures->count() ? $projectFeatures->count() . ' ویژگی ثبت‌شده' : null,
                'icon' => 'layers',
            ],
            [
                'label' => 'وب‌سایت پروژه',
                'value' => $project->project_url ? 'مشاهده وب‌سایت' : null,
                'icon' => 'external-link',
            ],
        ];

        $metadataItems = collect($metadataItems)->filter(fn($item) => filled($item['value']))->values();
    @endphp

    <main class="pd-page">

        {{-- Breadcrumb --}}

        <nav class="sv-breadcrumb" aria-label="مسیر صفحه">
            <div class="container">
                <ol class="sv-breadcrumb-list">
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('home') }}">صفحه اصلی</a>
                    </li>
                    <li class="sv-breadcrumb-item">
                        <a href="{{ route('portfolio') }}"> نمونه کار ها </a>
                    </li>
                    <li class="sv-breadcrumb-item" aria-current="page">
                        پروژه {{ $project->title }}
                    </li>
                </ol>
            </div>
        </nav>

        {{-- Hero --}}


        <section class="ph-hero" aria-labelledby="ph-title">
            <div class="ph-container">

                <div class="ph-hero-grid">

                    {{-- Project Information --}}
                    <div class="ph-content">



                        <h1 class="ph-title" id="ph-title">
                            {{ $project->title }}
                        </h1>

                        @if ($project->short_description)
                            <p class="ph-description">
                                {{ $project->short_description }}
                            </p>
                        @else
                            <p class="ph-description">
                                نگاهی به جزئیات این پروژه و راهکارهای اجراشده در آن داشته باشید.
                            </p>
                        @endif

                        <div class="ph-actions">

                            @if ($project->project_url)
                                <a href="{{ $project->project_url }}" class="ph-button ph-button-primary" target="_blank"
                                    rel="noopener noreferrer">
                                    <span>دیدن وب‌سایت پروژه</span>

                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M14 4h6v6m0-6-9 9" stroke="currentColor" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18 13v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5"
                                            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                                    </svg>
                                </a>
                            @endif

                            <a href="#project-details" class="ph-button ph-button-secondary" data-ph-scroll>
                                <span>جزئیات و ویژگی‌های پروژه</span>

                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M12 5v14m0 0 6-6m-6 6-6-6" stroke="currentColor" stroke-width="1.8"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                        </div>

                    </div>

                    {{-- Project Preview --}}
                    <div class="ph-visual">

                        <div class="ph-image-frame">

                            <div class="ph-image-topbar" aria-hidden="true">
                                <span></span>
                                <span></span>
                                <span></span>
                                <div class="ph-image-address"></div>
                            </div>

                            <div class="ph-image-content">
                                @if ($heroImage)
                                    <img src="{{ $heroImage }}" alt="پیش‌نمایش پروژه {{ $project->title }}"
                                        class="ph-project-image" fetchpriority="high">
                                @else
                                    <div class="ph-image-placeholder">
                                        <svg viewBox="0 0 48 48" fill="none" aria-hidden="true">
                                            <rect x="5" y="7" width="38" height="34" rx="5"
                                                stroke="currentColor" stroke-width="1.6" />
                                            <circle cx="17" cy="18" r="3" stroke="currentColor"
                                                stroke-width="1.6" />
                                            <path d="m7 35 12-11 8 7 6-6 8 8" stroke="currentColor" stroke-width="1.6"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>

                                        <span>تصویر پروژه هنوز ثبت نشده است</span>
                                    </div>
                                @endif
                            </div>

                        </div>

                        <div class="ph-visual-decoration ph-decoration-one"></div>
                        <div class="ph-visual-decoration ph-decoration-two"></div>

                    </div>

                </div>
            </div>
        </section>



        {{-- Project Overview --}}
        <section class="pf-overview-section" id="project-details">

            {{-- Short Project Introduction --}}

            <div class="container">
                <div class="pf-overview-content">

                    <span class="pf-section-eyebrow">
                        معرفی پروژه
                    </span>

                    <h2 class="pf-overview-title">
                        {{ $project->title }}
                    </h2>

                    <p class="pf-overview-description">
                        {{ $project->description ?: strip_tags($project->description ?? '') }}
                    </p>

                </div>
            </div>

            {{-- Full Width Features Ticker --}}
            @if ($project->features && $project->features->count())

                <div class="pf-features-section">

                    <div class="container">
                        <div class="pf-features-heading">


                            <h3 class="pf-features-title">
                                ویژگی‌ها و امکانات پروژه
                            </h3>
                        </div>
                    </div>

                    <div class="pf-features-marquee" data-pf-marquee aria-label="ویژگی‌ها و امکانات پروژه">

                        <div class="pf-marquee-track">

                            {{-- Original feature items --}}
                            <div class="pf-marquee-group">

                                @foreach ($project->features as $feature)
                                    <div class="pf-marquee-item">

                                        <span class="pf-marquee-icon" aria-hidden="true">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="m12 3 2.7 5.5 6.1.9-4.4 4.3 1 6.1-5.4-2.9-5.4 2.9 1-6.1-4.4-4.3 6.1-.9L12 3Z" />
                                            </svg>
                                        </span>

                                        <span class="pf-marquee-label">
                                            {{ $feature->title ?? ($feature->name ?? 'ویژگی پروژه') }}
                                        </span>

                                    </div>
                                @endforeach

                            </div>

                            {{-- Duplicate group for seamless loop --}}
                            <div class="pf-marquee-group" aria-hidden="true">

                                @foreach ($project->features as $feature)
                                    <div class="pf-marquee-item">

                                        <span class="pf-marquee-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="m12 3 2.7 5.5 6.1.9-4.4 4.3 1 6.1-5.4-2.9-5.4 2.9 1-6.1-4.4-4.3 6.1-.9L12 3Z" />
                                            </svg>
                                        </span>

                                        <span class="pf-marquee-label">
                                            {{ $feature->title ?? ($feature->name ?? 'ویژگی پروژه') }}
                                        </span>

                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>

            @endif

        </section>


        {{-- Project Gallery --}}


        @if ($galleryImages->isNotEmpty())
            <section class="pf-gallery-section" id="project-gallery">
                <div class="container">

                    <div class="pf-gallery-header">
                        <div>
                            <span class="pf-section-eyebrow">
                                گالری پروژه
                            </span>

                            <h2 class="pf-gallery-title">
                                تصاویر و جزئیات اجرا
                            </h2>
                        </div>

                        <span class="pf-gallery-count">
                            {{ $galleryImages->count() }} تصویر
                        </span>
                    </div>

                    <div class="pf-gallery-grid">
                        @foreach ($galleryImages as $index => $image)
                            <button type="button" class="pf-gallery-item" data-gallery-image="{{ $image['path'] }}"
                                data-gallery-alt="{{ $image['alt'] }}"
                                aria-label="نمایش بزرگ‌تر تصویر {{ $index + 1 }}">
                                <img src="{{ $image['path'] }}" alt="{{ $image['alt'] }}" loading="lazy"
                                    decoding="async">

                                <span class="pf-gallery-zoom" aria-hidden="true">
                                    <svg viewBox="0 0 24 24" fill="none">
                                        <circle cx="10.8" cy="10.8" r="6.8" stroke="currentColor"
                                            stroke-width="1.7" />
                                        <path d="m16 16 4.2 4.2M10.8 7.5v6.6M7.5 10.8h6.6" stroke="currentColor"
                                            stroke-width="1.7" stroke-linecap="round" />
                                    </svg>
                                </span>
                            </button>
                        @endforeach
                    </div>

                </div>
            </section>

            {{-- Image lightbox --}}
            <div class="pf-gallery-lightbox" data-gallery-lightbox aria-hidden="true" role="dialog" aria-modal="true"
                aria-label="نمایش تصویر پروژه">
                <button type="button" class="pf-lightbox-close" data-gallery-close aria-label="بستن تصویر">
                    &times;
                </button>

                <button type="button" class="pf-lightbox-backdrop" data-gallery-close
                    aria-label="بستن نمایش تصویر"></button>

                <figure class="pf-lightbox-figure">
                    <img data-gallery-preview src="" alt="">
                    <figcaption data-gallery-caption></figcaption>
                </figure>
            </div>
        @endif


        {{-- Project Metadata --}}


        @if ($metadataItems->isNotEmpty())
            <section class="pf-metadata-section" aria-label="مشخصات پروژه">
                <div class="container">

                    <div class="pf-metadata-heading">
                        <h2>مشخصات پروژه</h2>
                        <p>
                            نگاهی کوتاه به اطلاعات و جزئیات این پروژه داشته باشید.
                        </p>
                    </div>

                    <div class="pf-metadata-grid">
                        @foreach ($metadataItems->take(3) as $item)
                            <div class="pf-metadata-card">

                                <span class="pf-metadata-icon" aria-hidden="true">
                                    @if ($item['icon'] === 'grid')
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <rect x="3" y="3" width="7" height="7" rx="1.5" />
                                            <rect x="14" y="3" width="7" height="7" rx="1.5" />
                                            <rect x="3" y="14" width="7" height="7" rx="1.5" />
                                            <rect x="14" y="14" width="7" height="7" rx="1.5" />
                                        </svg>
                                    @elseif ($item['icon'] === 'check-circle')
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m8 12 2.5 2.5L16 9" />
                                        </svg>
                                    @elseif ($item['icon'] === 'layers')
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <path d="m12 3 9 5-9 5-9-5 9-5Z" />
                                            <path d="m3 12 9 5 9-5M3 16l9 5 9-5" />
                                        </svg>
                                    @else
                                        <svg viewBox="0 0 24 24" fill="none">
                                            <path d="M14 3h7v7M21 3l-10 10" />
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                        </svg>
                                    @endif
                                </span>

                                <div class="pf-metadata-text">
                                    <span class="pf-metadata-label">
                                        {{ $item['label'] }}
                                    </span>

                                    @if ($item['icon'] === 'external-link' && $project->project_url)
                                        <a href="{{ $project->project_url }}" target="_blank" rel="noopener noreferrer"
                                            class="pf-metadata-value pf-metadata-link">
                                            {{ $item['value'] }}
                                        </a>
                                    @else
                                        <span class="pf-metadata-value">
                                            {{ $item['value'] }}
                                        </span>
                                    @endif

                                </div>

                            </div>
                        @endforeach

                        <div class="pf-metadata-card">
                            <span class="pf-metadata-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none">
                                    <rect x="2.5" y="3.5" width="19" height="13" rx="2" />
                                    <path d="M8 20.5h8M12 16.5v4" />
                                    <rect x="5.5" y="6.5" width="13" height="7" rx="1" />
                                </svg>
                            </span>

                            <div class="pf-metadata-text">
                                <span class="pf-metadata-label">
                                    طراحی واکنش‌گرا
                                </span>

                                <span class="pf-metadata-value">
                                    موبایل، تبلت و لپ‌تاپ
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        @endif


        {{-- Related Projects --}}
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
    <script src="{{ asset('site/js/portfolio/portfolio-show.js') }}" defer></script>
@endpush
