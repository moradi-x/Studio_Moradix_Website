
@extends('admin.layouts.layout')

@section('title', 'ویرایش تصاویر پروژه')

@section('content')

    <div class="admin-project-images">

        {{-- Header --}}
        <div class="admin-project-images-header">
            <h1 class="admin-project-images-title">
                ویرایش تصاویر پروژه:
                {{ $project->title }}
            </h1>

            <a href="{{ route('admin.projects.index') }}"
               class="admin-project-images-back">
                بازگشت
            </a>
        </div>

        @include('admin.sections.errors')

        {{-- Success --}}
        @if (session('success'))
            <div class="admin-project-images-alert admin-project-images-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error --}}
        @if (session('error'))
            <div class="admin-project-images-alert admin-project-images-error">
                {{ session('error') }}
            </div>
        @endif

        {{-- Primary Image --}}
        <section class="admin-project-images-section">

            <h2 class="admin-project-images-section-title">
                عکس اصلی
            </h2>

            <div class="admin-project-images-primary">

                <div class="admin-project-images-primary-preview">
                    @if ($project->primary_image)
                        <img
                            src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $project->primary_image) }}"
                            alt="{{ $project->title }}"
                        >
                    @else
                        <span>عکس اصلی وجود ندارد</span>
                    @endif
                </div>

                {{-- Delete Primary Image --}}
                @if ($project->primary_image)
                    <form
                        action="{{ route('admin.projects.images.destroy', $project) }}"
                        method="POST"
                        onsubmit="return confirm('آیا از حذف عکس اصلی مطمئن هستید؟')"
                        class="admin-project-images-delete-form"
                    >
                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="delete_primary" value="1">

                        <button type="submit" class="admin-project-images-delete">
                            حذف عکس اصلی
                        </button>
                    </form>
                @endif

            </div>
        </section>

        {{-- Secondary Images --}}
        <section class="admin-project-images-section">

            <h2 class="admin-project-images-section-title">
                عکس‌های فرعی
            </h2>

            @if ($project->images->count())

                <div class="admin-project-images-gallery">

                    @foreach ($project->images as $image)

                        <div class="admin-project-images-item">

                            <div class="admin-project-images-item-preview">
                                <img
                                    src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $image->image) }}"
                                    alt="{{ $project->title }}"
                                >
                            </div>

                            {{-- Delete Secondary Image --}}
                            <form
                                action="{{ route('admin.projects.images.destroy', $project) }}"
                                method="POST"
                                onsubmit="return confirm('آیا از حذف این تصویر مطمئن هستید؟')"
                                class="admin-project-images-delete-form"
                            >
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="image_id" value="{{ $image->id }}">

                                <button type="submit" class="admin-project-images-delete">
                                    حذف تصویر
                                </button>
                            </form>

                        </div>

                    @endforeach

                </div>

            @else

                <p class="admin-project-images-empty">
                    هنوز عکس فرعی برای این پروژه ثبت نشده است.
                </p>

            @endif

        </section>

        {{-- Upload / Update Images --}}
        <section class="admin-project-images-upload-section">

            <h2 class="admin-project-images-section-title">
                آپلود و به‌روزرسانی تصاویر
            </h2>

            <form
                action="{{ route('admin.projects.images.add', $project) }}"
                method="POST"
                enctype="multipart/form-data"
            >
                @csrf

                <div class="admin-project-images-upload-grid">

                    {{-- Primary Image Upload --}}
                    <div class="admin-project-images-upload-field">

                        <label for="primary-image">
                            عکس اصلی جدید
                        </label>

                        <input
                            type="file"
                            id="primary-image"
                            name="primary_image"
                            accept="image/jpeg,image/png,image/webp"
                        >

                        @error('primary_image')
                            <p class="admin-project-images-field-error">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                    {{-- Secondary Images Upload --}}
                    <div class="admin-project-images-upload-field">

                        <label for="secondary-images">
                            عکس‌های فرعی جدید
                        </label>

                        <input
                            type="file"
                            id="secondary-images"
                            name="images[]"
                            multiple
                            accept="image/jpeg,image/png,image/webp"
                        >

                        @error('images')
                            <p class="admin-project-images-field-error">
                                {{ $message }}
                            </p>
                        @enderror

                        @error('images.*')
                            <p class="admin-project-images-field-error">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>

                </div>

                <div class="admin-project-images-actions">

                    <a
                        href="{{ route('admin.projects.index') }}"
                        class="admin-project-images-cancel"
                    >
                        برگشت
                    </a>

                    <button type="submit" class="admin-project-images-submit">
                        آپدیت تصاویر
                    </button>

                </div>

            </form>

        </section>

    </div>

@endsection
