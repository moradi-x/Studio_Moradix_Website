@extends('admin.layouts.layout')

@section('title', 'Edit Setting')

@section('content')

    <div class="admin-setting-edit">

        {{-- @include('admin.sections.errors') --}}

        <div class="admin-setting-edit-header">
            <h1 class="admin-setting-edit-title">
                ویرایش تنظیمات
            </h1>
        </div>

        <form action="{{ route('admin.settings.update', $setting) }}" method="POST" class="admin-setting-edit-form">

            @csrf
            <input type="hidden" name="page" value="{{ request('page', 1) }}">
            @method('PUT')

            <div class="admin-setting-edit-field">

                <label for="setting-key">نام</label>

                <input type="text" id="setting-key" name="key" value="{{ old('key', $setting->key) }}">

                @error('key')
                    <p class="admin-setting-edit-error">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="admin-setting-edit-field">

                <label for="setting-value">مقدار</label>

                <textarea id="setting-value" name="value" rows="5">{{ old('value', $setting->value) }}</textarea>

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

                <a href="{{ route('admin.settings.index', ['page' => request('page', 1)]) }}"
                    class="admin-setting-edit-back">
                    بازگشت
                </a>

            </div>

        </form>

    </div>

@endsection
