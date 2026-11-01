
@extends('admin.layouts.layout')

@section('title', 'ویرایش پروژه')

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

    <div class="admin-project-edit">

        {{-- Header --}}
        <div class="admin-project-edit-header">
            <h1 class="admin-project-edit-title">
                ویرایش پروژه:
                {{ $project->title }}
            </h1>

            <a href="{{ route('admin.projects.index') }}"
               class="admin-project-edit-back-top">
                بازگشت
            </a>
        </div>

        {{-- Errors --}}
        @include('admin.sections.errors')

        {{-- Form --}}
        <div class="admin-project-edit-card">

            <form
                action="{{ route('admin.projects.update', $project) }}"
                method="POST"
                autocomplete="off"
            >
                @csrf
                @method('PUT')

                {{-- Basic Information --}}
                <section class="admin-project-edit-section">

                    <h2 class="admin-project-edit-section-title">
                        اطلاعات پروژه
                    </h2>

                    <div class="admin-project-edit-fields">

                        <div class="admin-project-edit-field">
                            <label for="category_id">دسته‌بندی</label>

                            <select name="category_id" id="category_id">
                                <option value="">انتخاب دسته‌بندی</option>

                                @foreach ($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        @selected(old('category_id', $project->category_id) == $category->id)
                                    >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <p class="admin-project-edit-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-edit-field">
                            <label for="project-title">نام پروژه</label>

                            <input
                                type="text"
                                id="project-title"
                                name="title"
                                value="{{ old('title', $project->title) }}"
                                placeholder="نام پروژه"
                            >

                            @error('title')
                                <p class="admin-project-edit-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-edit-field">
                            <label for="project-slug">اسلاگ</label>

                            <input
                                type="text"
                                id="project-slug"
                                name="slug"
                                value="{{ old('slug', $project->slug) }}"
                                placeholder="project-slug"
                                dir="ltr"
                            >

                            @error('slug')
                                <p class="admin-project-edit-error">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </section>

                {{-- Descriptions --}}
                <section class="admin-project-edit-section">

                    <h2 class="admin-project-edit-section-title">
                        توضیحات پروژه
                    </h2>

                    <div class="admin-project-edit-fields admin-project-edit-two-columns">

                        <div class="admin-project-edit-field">
                            <label for="short-description">توضیح کوتاه</label>

                            <textarea
                                id="short-description"
                                name="short_description"
                                rows="4"
                                placeholder="توضیح کوتاه پروژه..."
                            >{{ old('short_description', $project->short_description) }}</textarea>

                            @error('short_description')
                                <p class="admin-project-edit-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-edit-field">
                            <label for="project-description">توضیحات کامل</label>

                            <textarea
                                id="project-description"
                                name="description"
                                rows="4"
                                placeholder="توضیحات کامل پروژه..."
                            >{{ old('description', $project->description) }}</textarea>

                            @error('description')
                                <p class="admin-project-edit-error">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </section>

                {{-- Project Features --}}
                @php
                    $oldFeatureIds = old(
                        'feature_ids',
                        $project->features->pluck('id')->toArray()
                    );

                    $selectedFeatureIds = is_array($oldFeatureIds)
                        ? array_map('intval', $oldFeatureIds)
                        : [];
                @endphp

                <section class="admin-project-edit-section">

                    <div class="admin-project-edit-section-heading">
                        <h2 class="admin-project-edit-section-title">
                            امکانات و ویژگی‌های پروژه
                        </h2>

                        <p>
                            ویژگی‌های مرتبط با این پروژه را انتخاب یا ویرایش کنید.
                        </p>
                    </div>

                    @error('feature_ids')
                        <p class="admin-project-edit-error">{{ $message }}</p>
                    @enderror

                    <div class="admin-project-edit-features">

                        @forelse ($featureCategories as $featureCategory)

                            @if ($featureCategory->features->isNotEmpty())

                                <div class="admin-project-edit-feature-card">

                                    <label for="features-category-{{ $featureCategory->id }}">
                                        {{ $featureCategory->name }}
                                    </label>

                                    @if ($featureCategory->description)
                                        <p class="admin-project-edit-feature-description">
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

                                    <p class="admin-project-edit-feature-hint">
                                        امکان انتخاب چند ویژگی وجود دارد.
                                    </p>

                                </div>

                            @endif

                        @empty

                            <p class="admin-project-edit-empty">
                                دسته‌بندی فعالی برای ویژگی‌ها وجود ندارد.
                            </p>

                        @endforelse

                    </div>
                </section>

                {{-- Links --}}
                <section class="admin-project-edit-section">

                    <h2 class="admin-project-edit-section-title">
                        لینک‌های پروژه
                    </h2>

                    <div class="admin-project-edit-fields admin-project-edit-two-columns">

                        <div class="admin-project-edit-field">
                            <label for="project-url">لینک پروژه</label>

                            <input
                                type="url"
                                id="project-url"
                                name="project_url"
                                value="{{ old('project_url', $project->project_url) }}"
                                placeholder="https://example.com"
                                dir="ltr"
                            >

                            @error('project_url')
                                <p class="admin-project-edit-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-edit-field">
                            <label for="github-url">لینک گیت‌هاب</label>

                            <input
                                type="url"
                                id="github-url"
                                name="github_url"
                                value="{{ old('github_url', $project->github_url) }}"
                                placeholder="https://github.com/..."
                                dir="ltr"
                            >

                            @error('github_url')
                                <p class="admin-project-edit-error">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </section>

                {{-- Status --}}
                <section class="admin-project-edit-section">

                    <h2 class="admin-project-edit-section-title">
                        وضعیت پروژه
                    </h2>

                    <div class="admin-project-edit-field admin-project-edit-status-field">

                        <label for="status">وضعیت</label>

                        <select name="status" id="status">
                            <option
                                value="0"
                                @selected(old('status', $project->status) == '0')
                            >
                                در حال توسعه
                            </option>

                            <option
                                value="1"
                                @selected(old('status', $project->status) == '1')
                            >
                                تکمیل شده
                            </option>
                        </select>

                        @error('status')
                            <p class="admin-project-edit-error">{{ $message }}</p>
                        @enderror

                    </div>
                </section>

                {{-- Actions --}}
                <div class="admin-project-edit-actions">

                    <a
                        href="{{ route('admin.projects.index') }}"
                        class="admin-project-edit-cancel"
                    >
                        انصراف
                    </a>

                    <button type="submit" class="admin-project-edit-save">
                        ذخیره تغییرات
                    </button>

                </div>

            </form>
        </div>
    </div>

@endsection
