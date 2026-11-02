
@extends('admin.layouts.layout')

@section('title', 'افزودن پروژه')

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/js/tom-select.complete.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.feature-multiselect').forEach(function (element) {
                if (element.tomselect) return;

                new TomSelect(element, {
                    plugins: ['remove_button'],
                    create: false,
                    persist: false,
                    closeAfterSelect: false,
                    hideSelected: true,
                    maxOptions: 200,
                    placeholder: 'جست‌وجو و انتخاب ویژگی...',
                    render: {
                        no_results: function () {
                            return '<div class="no-results">موردی پیدا نشد</div>';
                        }
                    }
                });
            });
        });
    </script>
@endsection

@section('content')

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.css" rel="stylesheet">

    <div class="admin-project-create">

        {{-- Header --}}
        <div class="admin-project-create-header">
            <div>
                <h1 class="admin-project-create-title">افزودن پروژه</h1>
            </div>

            <a href="{{ route('admin.projects.index') }}" class="admin-project-create-back-top">
                بازگشت
            </a>
        </div>

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="admin-project-create-errors">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Form --}}
        <div class="admin-project-create-card">

            <form
                action="{{ route('admin.projects.store') }}"
                method="POST"
                enctype="multipart/form-data"
                autocomplete="off"
            >
                @csrf

                {{-- Basic Information --}}
                <section class="admin-project-create-section">

                    <h2 class="admin-project-create-section-title">
                        اطلاعات پروژه
                    </h2>

                    <div class="admin-project-create-fields">

                        <div class="admin-project-create-field">
                            <label for="project-title">نام پروژه</label>
                            <input
                                type="text"
                                id="project-title"
                                name="title"
                                value="{{ old('title') }}"
                                placeholder="نام پروژه"
                            >
                        </div>

                        <div class="admin-project-create-field">
                            <label for="project-slug">اسلاگ</label>
                            <input
                                type="text"
                                id="project-slug"
                                name="slug"
                                value="{{ old('slug') }}"
                                placeholder="project-slug"
                                dir="ltr"
                            >
                        </div>

                        <div class="admin-project-create-field">
                            <label for="category_id">دسته‌بندی</label>
                            <select name="category_id" id="category_id">
                                <option value="">انتخاب دسته‌بندی</option>

                                @foreach ($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        @selected(old('category_id') == $category->id)
                                    >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="admin-project-create-field admin-project-create-full">
                            <label for="short-description">توضیح کوتاه</label>
                            <textarea
                                id="short-description"
                                name="short_description"
                                rows="3"
                                placeholder="توضیح کوتاهی درباره پروژه..."
                            >{{ old('short_description') }}</textarea>
                        </div>

                        <div class="admin-project-create-field admin-project-create-full">
                            <label for="project-description">توضیحات کامل</label>
                            <textarea
                                id="project-description"
                                name="description"
                                rows="5"
                                placeholder="توضیحات کامل پروژه..."
                            >{{ old('description') }}</textarea>
                        </div>

                    </div>
                </section>

                {{-- Project Features --}}
                @php
                    $oldFeatureIds = old('feature_ids', []);
                    $selectedFeatureIds = is_array($oldFeatureIds)
                        ? array_map('intval', $oldFeatureIds)
                        : [];
                @endphp

                <section class="admin-project-create-section">

                    <div class="admin-project-create-section-heading">
                        <h2 class="admin-project-create-section-title">
                            امکانات و ویژگی‌های پروژه
                        </h2>

                        <p>
                            برای هر دسته، یک یا چند ویژگی مرتبط با پروژه را انتخاب کنید.
                        </p>
                    </div>

                    @error('feature_ids')
                        <p class="admin-project-create-field-error">{{ $message }}</p>
                    @enderror

                    <div class="admin-project-create-features">

                        @forelse ($featureCategories as $featureCategory)

                            @if ($featureCategory->features->isNotEmpty())

                                <div class="admin-project-create-feature-card">

                                    <label for="features-category-{{ $featureCategory->id }}">
                                        {{ $featureCategory->name }}
                                    </label>

                                    @if ($featureCategory->description)
                                        <p class="admin-project-create-feature-description">
                                            {{ $featureCategory->description }}
                                        </p>
                                    @endif

                                    <select
                                        id="features-category-{{ $featureCategory->id }}"
                                        name="feature_ids[]"
                                        class="feature-multiselect"
                                        multiple
                                        placeholder="جست‌وجو و انتخاب ویژگی..."
                                    >
                                        @foreach ($featureCategory->features as $feature)
                                            <option
                                                value="{{ $feature->id }}"
                                                @selected(in_array($feature->id, $selectedFeatureIds, true))
                                            >
                                                {{ $feature->name }}
                                            </option>
                                        @endforeach
                                    </select>

                                </div>

                            @endif

                        @empty
                            <p class="admin-project-create-no-features">
                                هنوز دسته‌بندی فعالی برای ویژگی‌ها وجود ندارد.
                            </p>
                        @endforelse

                    </div>
                </section>

                {{-- Images --}}
                <section class="admin-project-create-section">

                    <h2 class="admin-project-create-section-title">
                        تصاویر پروژه
                    </h2>

                    <div class="admin-project-create-images">

                        {{-- Primary Image --}}
                        <div class="admin-project-create-image-card">
                            <h3>تصویر اصلی</h3>

                            <label class="admin-project-create-upload">
                                <span class="admin-project-create-upload-icon">＋</span>
                                <span>انتخاب تصویر اصلی</span>
                                <small>فرمت‌های JPG، PNG و WEBP</small>

                                <input
                                    type="file"
                                    name="primary_image"
                                    accept="image/jpeg,image/png,image/webp"
                                >
                            </label>
                        </div>

                        {{-- Gallery Images --}}
                        <div class="admin-project-create-image-card admin-project-create-gallery-card">
                            <h3>گالری تصاویر</h3>

                            <label class="admin-project-create-upload admin-project-create-upload-gallery">
                                <span class="admin-project-create-upload-icon">＋</span>
                                <span>انتخاب تصاویر گالری</span>
                                <small>امکان انتخاب چند تصویر وجود دارد</small>

                                <input
                                    type="file"
                                    name="images[]"
                                    multiple
                                    accept="image/jpeg,image/png,image/webp"
                                >
                            </label>
                        </div>

                    </div>
                </section>

                {{-- Links and Status --}}
                <section class="admin-project-create-section">

                    <h2 class="admin-project-create-section-title">
                        لینک‌ها و وضعیت پروژه
                    </h2>

                    <div class="admin-project-create-fields">

                        <div class="admin-project-create-field">
                            <label for="project-url">لینک پروژه</label>
                            <input
                                type="url"
                                id="project-url"
                                name="project_url"
                                value="{{ old('project_url') }}"
                                placeholder="https://example.com"
                                dir="ltr"
                            >
                        </div>

                        <div class="admin-project-create-field">
                            <label for="github-url">لینک GitHub</label>
                            <input
                                type="url"
                                id="github-url"
                                name="github_url"
                                value="{{ old('github_url') }}"
                                placeholder="https://github.com/..."
                                dir="ltr"
                            >
                        </div>

                        <div class="admin-project-create-field">
                            <label for="status">وضعیت پروژه</label>
                            <select name="status" id="status">
                                <option
                                    value="0"
                                    {{ old('status', '0') == '0' ? 'selected' : '' }}
                                >
                                    در حال توسعه
                                </option>

                                <option
                                    value="1"
                                    {{ old('status') == '1' ? 'selected' : '' }}
                                >
                                    تکمیل شده
                                </option>
                            </select>
                        </div>

                    </div>
                </section>

                {{-- Buttons --}}
                <div class="admin-project-create-actions">

                    <a
                        href="{{ route('admin.projects.index') }}"
                        class="admin-project-create-cancel"
                    >
                        انصراف
                    </a>

                    <button type="submit" class="admin-project-create-submit">
                        ثبت پروژه
                    </button>

                </div>

            </form>
        </div>
    </div>

@endsection
