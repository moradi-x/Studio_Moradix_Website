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
    @endphp

    <main class="pd-page">

        {{-- Hero --}}
        @php
            $heroImage = $project->primary_image ? asset('uploads/projects/images/' . $project->primary_image) : null;
        @endphp

        <section class="ph-hero" aria-labelledby="ph-title">
            <div class="ph-container">

                <div class="ph-hero-grid">

                    {{-- Project Information --}}
                    <div class="ph-content">

                        <span class="ph-eyebrow">
                            <span class="ph-eyebrow-dot"></span>
                            نمونه‌کارهای Moradix Studio
                        </span>

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
                            <span class="pf-section-eyebrow">
                                قابلیت‌های اجراشده
                            </span>

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
        @php
            $galleryImages = collect();

            // Main image from projects table
            if (!empty($project->image)) {
                $galleryImages->push([
                    'path' => $project->image,
                    'alt' => $project->title . ' - تصویر اصلی پروژه',
                    'primary' => true,
                ]);
            }

            // Additional images from project_images table
            foreach ($project->images ?? [] as $image) {
                if (!empty($image->image)) {
                    $galleryImages->push([
                        'path' => $image->image,
                        'alt' => $image->alt_text ?? $project->title . ' - تصویر پروژه',
                        'primary' => false,
                    ]);
                }
            }
        @endphp

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
                            <button type="button" class="pf-gallery-item"
                                data-gallery-image="{{ \Illuminate\Support\Facades\Storage::url($image['path']) }}"
                                data-gallery-alt="{{ $image['alt'] }}"
                                aria-label="نمایش بزرگ‌تر تصویر {{ $index + 1 }}">

                                @php
                                    $uploadPath = trim(env('PROJECT_IMAGES_UPLOAD_PATH'), '/');

                                    $galleryImages = collect();

                                    if ($project->primary_image) {
                                        $galleryImages->push([
                                            'path' => asset($uploadPath . '/' . $project->primary_image),
                                            'alt' => $project->title . ' - تصویر اصلی',
                                        ]);
                                    }

                                    foreach ($project->images as $image) {
                                        if ($image->image) {
                                            $galleryImages->push([
                                                'path' => asset($uploadPath . '/' . $image->image),
                                                'alt' => $project->title . ' - تصویر پروژه',
                                            ]);
                                        }
                                    }
                                @endphp

                                @if ($galleryImages->isNotEmpty())
                                    <div class="pf-gallery-grid">
                                        @foreach ($galleryImages as $index => $image)
                                            <button type="button" class="pf-gallery-item"
                                                data-gallery-image="{{ $image['path'] }}"
                                                data-gallery-alt="{{ $image['alt'] }}"
                                                aria-label="نمایش تصویر {{ $index + 1 }}">
                                                <img src="{{ $image['path'] }}" alt="{{ $image['alt'] }}"
                                                    loading="lazy" decoding="async">
                                            </button>
                                        @endforeach
                                    </div>
                                @endif


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



    </main>
@endsection

@push('scripts')
    <script src="{{ asset('site/js/portfolio/portfolio-show.js') }}" defer></script>
@endpush
