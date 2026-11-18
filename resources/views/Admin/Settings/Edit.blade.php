
@extends('admin.layouts.layout')

@section('title', 'Edit Setting')

@section('content')

<div class="admin-setting-edit">

    <div class="admin-setting-edit-header">
        <h1 class="admin-setting-edit-title">
            ویرایش تنظیمات
        </h1>
    </div>

    <form
        action="{{ route('admin.settings.update', $setting) }}"
        method="POST"
        enctype="multipart/form-data"
        class="admin-setting-edit-form"
    >
        @csrf
        @method('PUT')

        <input type="hidden" name="page" value="{{ request('page', 1) }}">

        <div class="admin-setting-edit-field">

            <label for="setting-key">نام</label>

            <input
                type="text"
                id="setting-key"
                name="key"
                value="{{ old('key', $setting->key) }}"
                required
            >

            @error('key')
                <p class="admin-setting-edit-error">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="admin-setting-edit-field">

            @if($setting->key === 'profile_image')

                <label for="setting-value">عکس پروفایل</label>

                @if($setting->value)
                    <div class="profile-image-preview">
                        <img
                            src="{{ asset('storage/' . $setting->value) }}"
                            alt="عکس پروفایل فعلی"
                            id="current-profile-image"
                        >
                    </div>
                @endif

                <input
                    type="file"
                    id="setting-value"
                    name="value"
                    accept="image/jpeg,image/png,image/webp"
                >

                <small class="admin-setting-edit-help">
                    فرمت مجاز: JPG، PNG و WEBP | حداکثر حجم: ۵ مگابایت
                </small>

                <div class="profile-image-preview" id="new-image-preview" hidden>
                    <img
                        src=""
                        alt="پیش‌نمایش عکس جدید"
                        id="new-profile-image"
                    >
                </div>

            @else

                <label for="setting-value">مقدار</label>

                <textarea
                    id="setting-value"
                    name="value"
                    rows="5"
                >{{ old('value', $setting->value) }}</textarea>

            @endif

            @error('value')
                <p class="admin-setting-edit-error">
                    {{ $message }}
                </p>
            @enderror

        </div>

        <div class="admin-setting-edit-actions">

            <button type="submit" class="admin-setting-edit-save">
                ویرایش
            </button>

            <a
                href="{{ route('admin.settings.index', ['page' => request('page', 1)]) }}"
                class="admin-setting-edit-back"
            >
                بازگشت
            </a>

        </div>

    </form>

</div>

@endsection
