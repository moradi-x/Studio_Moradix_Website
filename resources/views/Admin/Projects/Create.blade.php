@extends('admin.layouts.layout')

@section('title', 'افزودن پروژه')

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/js/tom-select.complete.min.js"></script>
    <script src="{{ asset('site/js/Admin/projects.js') }}" defer></script>
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



        {{-- Form --}}
        <div class="admin-project-create-card">

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data"
                autocomplete="off">
                @csrf

                {{-- Basic Information --}}
                <section class="admin-project-create-section">

                    <h2 class="admin-project-create-section-title">
                        اطلاعات پروژه
                    </h2>

                    <div class="admin-project-create-fields">

                        <div class="admin-project-create-field">
                            <label for="project-title">نام پروژه</label>
                            <input type="text" id="project-title" name="title" value="{{ old('title') }}"
                                placeholder="نام پروژه">
                            @error('title')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-create-field">
                            <label for="project-slug">اسلاگ</label>
                            <input type="text" id="project-slug" name="slug" value="{{ old('slug') }}"
                                placeholder="project-slug" dir="ltr">
                            @error('slug')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-create-field">
                            <label for="category_id">دسته‌بندی</label>
                            <select name="category_id" id="category_id">
                                <option value="">انتخاب دسته‌بندی</option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('category_id')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-create-field admin-project-create-full">
                            <label for="short-description">توضیح کوتاه</label>
                            <textarea id="short-description" name="short_description" rows="3" placeholder="توضیح کوتاهی درباره پروژه...">{{ old('short_description') }}</textarea>
                            @error('short_description')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="admin-project-create-field admin-project-create-full">
                            <label for="project-description">توضیحات کامل</label>
                            <textarea id="project-description" name="description" rows="5" placeholder="توضیحات کامل پروژه...">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </section>

                {{-- English Project Information --}}
                <section class="admin-project-create-section admin-project-create-english-section">

                    <div class="admin-project-create-section-heading">
                        <h2 class="admin-project-create-section-title">
                            اطلاعات انگلیسی پروژه
                        </h2>

                        <p>
                            اطلاعات انگلیسی پروژه را برای نمایش در نسخه انگلیسی سایت وارد کنید.
                        </p>
                    </div>

                    <div class="admin-project-create-fields">

                        {{-- English Title --}}
                        <div class="admin-project-create-field">
                            <label for="project-title-en">
                                نام انگلیسی پروژه
                            </label>

                            <input type="text" id="project-title-en" name="title_en" value="{{ old('title_en') }}"
                                placeholder="E-commerce Website" dir="ltr">

                            @error('title_en')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- English Short Description --}}
                        <div class="admin-project-create-field admin-project-create-full">
                            <label for="short-description-en">
                                توضیح کوتاه انگلیسی
                            </label>

                            <textarea id="short-description-en" name="short_description_en" rows="3"
                                placeholder="A modern and professional e-commerce website." dir="ltr">{{ old('short_description_en') }}</textarea>

                            @error('short_description_en')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- English Description --}}
                        <div class="admin-project-create-field admin-project-create-full">
                            <label for="project-description-en">
                                توضیحات کامل انگلیسی
                            </label>

                            <textarea id="project-description-en" name="description_en" rows="5"
                                placeholder="Describe the project in English..." dir="ltr">{{ old('description_en') }}</textarea>

                            @error('description_en')
                                <p class="admin-project-create-field-error">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>

                </section>

                {{-- Project Features --}}
                @php
                    $oldFeatureIds = old('feature_ids', []);
                    $selectedFeatureIds = is_array($oldFeatureIds) ? array_map('intval', $oldFeatureIds) : [];
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

                                    <select id="features-category-{{ $featureCategory->id }}" name="feature_ids[]"
                                        class="feature-multiselect" multiple placeholder="جست‌وجو و انتخاب ویژگی...">
                                        @foreach ($featureCategory->features as $feature)
                                            <option value="{{ $feature->id }}" @selected(in_array($feature->id, $selectedFeatureIds, true))>
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

                                <input type="file" id="primary-image" name="primary_image"
                                    accept="image/jpeg,image/png,image/webp">
                            </label>
                            @error('primary_image')
                                <p class="admin-project-create-field-error">
                                    {{ $message }}
                                </p>
                            @enderror
                            <p class="admin-project-create-file-name" id="primary-image-name">
                                هنوز تصویری انتخاب نشده است.
                            </p>
                        </div>

                        {{-- Gallery Images --}}
                        <div class="admin-project-create-image-card admin-project-create-gallery-card">
                            <h3>گالری تصاویر</h3>

                            <label class="admin-project-create-upload admin-project-create-upload-gallery">
                                <span class="admin-project-create-upload-icon">＋</span>
                                <span>انتخاب تصاویر گالری</span>
                                <small>امکان انتخاب چند تصویر وجود دارد</small>

                                <input type="file" id="gallery-images" name="images[]" multiple
                                    accept="image/jpeg,image/png,image/webp">
                            </label>
                            @error('images')
                                <p class="admin-project-create-field-error">
                                    {{ $message }}
                                </p>
                            @enderror

                            @foreach ($errors->get('images.*') as $messages)
                                @foreach ($messages as $message)
                                    <p class="admin-project-create-field-error">
                                        {{ $message }}
                                    </p>
                                @endforeach
                            @endforeach
                            <div class="admin-project-create-file-name" id="gallery-images-names">
                                هنوز تصویری انتخاب نشده است.
                            </div>
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
                            <input type="url" id="project-url" name="project_url" value="{{ old('project_url') }}"
                                placeholder="https://example.com" dir="ltr">
                        </div>

                        <div class="admin-project-create-field">
                            <label for="github-url">لینک GitHub</label>
                            <input type="url" id="github-url" name="github_url" value="{{ old('github_url') }}"
                                placeholder="https://github.com/..." dir="ltr">
                        </div>

                        <div class="admin-project-create-field">
                            <label for="status">وضعیت پروژه</label>
                            <select name="status" id="status">
                                <option value="0" {{ old('status', '0') == '0' ? 'selected' : '' }}>
                                    در حال توسعه
                                </option>

                                <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>
                                    تکمیل شده
                                </option>
                            </select>
                        </div>

                    </div>
                </section>

                {{-- Buttons --}}
                <div class="admin-project-create-actions">

                    <a href="{{ route('admin.projects.index') }}" class="admin-project-create-cancel">
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
