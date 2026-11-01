
@extends('admin.layouts.layout')

@section('title', 'نمایش پروژه')

@section('content')

    <div class="admin-project-show">

        {{-- Header --}}
        <div class="admin-project-show-header">

            <h1 class="admin-project-show-title">
                نمایش پروژه:
                {{ $project->title }}
            </h1>

            <a href="{{ route('admin.projects.index') }}"
               class="admin-project-show-back">
                برگشت
            </a>

        </div>

        {{-- Main Card --}}
        <div class="admin-project-show-card">

            {{-- Main Information --}}
            <section class="admin-project-show-section">

                <h2 class="admin-project-show-section-title">
                    اطلاعات پروژه
                </h2>

                <div class="admin-project-show-fields">

                    <div class="admin-project-show-field">
                        <label>نام پروژه</label>
                        <div>{{ $project->title }}</div>
                    </div>

                    <div class="admin-project-show-field">
                        <label>Slug</label>
                        <div dir="ltr">{{ $project->slug }}</div>
                    </div>

                    <div class="admin-project-show-field">
                        <label>دسته‌بندی</label>
                        <div>{{ $project->category?->name ?? '—' }}</div>
                    </div>

                </div>

                <div class="admin-project-show-fields admin-project-show-two-columns">

                    <div class="admin-project-show-field">
                        <label>توضیح کوتاه</label>
                        <div class="admin-project-show-description">
                            {{ $project->short_description }}
                        </div>
                    </div>

                    <div class="admin-project-show-field">
                        <label>توضیحات کامل</label>
                        <div class="admin-project-show-description">
                            {{ $project->description }}
                        </div>
                    </div>

                </div>

            </section>

            {{-- Project Links --}}
            <section class="admin-project-show-section">

                <h2 class="admin-project-show-section-title">
                    لینک‌های پروژه
                </h2>

                <div class="admin-project-show-fields admin-project-show-two-columns">

                    <div class="admin-project-show-field">
                        <label>لینک پروژه</label>

                        @if ($project->project_url)
                            <a href="{{ $project->project_url }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="admin-project-show-link"
                               dir="ltr">
                                {{ $project->project_url }}
                            </a>
                        @else
                            <div class="admin-project-show-empty">
                                ثبت نشده
                            </div>
                        @endif
                    </div>

                    <div class="admin-project-show-field">
                        <label>لینک GitHub</label>

                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="admin-project-show-link"
                               dir="ltr">
                                {{ $project->github_url }}
                            </a>
                        @else
                            <div class="admin-project-show-empty">
                                ثبت نشده
                            </div>
                        @endif
                    </div>

                </div>

            </section>

            {{-- Project Specifications --}}
            <section class="admin-project-show-section">

                <h2 class="admin-project-show-section-title">
                    مشخصات پروژه
                </h2>

                <div class="admin-project-show-specifications">

                    {{-- Features --}}
                    <div class="admin-project-show-specification">

                        <label>ویژگی‌های پروژه</label>

                        @if ($project->features->count())

                            <div class="admin-project-show-features">

                                @foreach ($project->features as $feature)

                                    <span class="admin-project-show-feature">
                                        <svg viewBox="0 0 24 24"
                                             fill="none"
                                             stroke="currentColor"
                                             stroke-width="2"
                                             stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path d="M5 13l4 4L19 7"/>
                                        </svg>

                                        {{ $feature->name }}
                                    </span>

                                @endforeach

                            </div>

                        @else

                            <div class="admin-project-show-empty">
                                ویژگی‌ای برای این پروژه ثبت نشده است.
                            </div>

                        @endif

                    </div>

                    {{-- Status --}}
                    <div class="admin-project-show-specification">

                        <label>وضعیت</label>

                        <div class="admin-project-show-status-box">

                            @if ($project->status)
                                <span class="admin-project-show-status-active">
                                    فعال
                                </span>
                            @else
                                <span class="admin-project-show-status-inactive">
                                    غیرفعال
                                </span>
                            @endif

                        </div>

                    </div>

                </div>

            </section>

        </div>

        {{-- Primary Image --}}
        <section class="admin-project-show-image-section">

            <h2 class="admin-project-show-section-title">
                تصویر اصلی پروژه
            </h2>

            <div class="admin-project-show-primary-image">

                @if ($project->primary_image)

                    <img
                        src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $project->primary_image) }}"
                        alt="{{ $project->title }}"
                    >

                @else

                    <div class="admin-project-show-image-empty">
                        تصویر اصلی وجود ندارد
                    </div>

                @endif

            </div>

        </section>

        {{-- Other Images --}}
        <section class="admin-project-show-image-section">

            <h2 class="admin-project-show-section-title">
                تصاویر دیگر پروژه
            </h2>

            @if ($project->images->count())

                <div class="admin-project-show-gallery">

                    @foreach ($project->images as $image)

                        <div class="admin-project-show-gallery-item">

                            <img
                                src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $image->image) }}"
                                alt="{{ $project->title }}"
                            >

                        </div>

                    @endforeach

                </div>

            @else

                <div class="admin-project-show-empty-gallery">
                    تصویر دیگری برای این پروژه ثبت نشده است.
                </div>

            @endif

        </section>

        {{-- Footer --}}
        <div class="admin-project-show-footer">

            <a href="{{ route('admin.projects.index') }}"
               class="admin-project-show-back">
                برگشت
            </a>

        </div>

    </div>

@endsection
