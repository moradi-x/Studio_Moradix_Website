
@extends('admin.layouts.layout')

@section('title', 'Create Setting')

@section('content')

    <div class="admin-setting-create">


        <div class="admin-setting-create-header">
            <h1 class="admin-setting-create-title">
                 تنظیمات جدید
            </h1>
        </div>

        <form action="{{ route('admin.settings.store') }}"
              method="POST"
              class="admin-setting-create-form">

            @csrf

            <div class="admin-setting-create-field">

                <label for="setting-key">نام</label>

                <input
                    type="text"
                    id="setting-key"
                    name="key"
                    value="{{ old('key') }}"
                    placeholder="site_name"
                >

                @error('key')
                    <p class="admin-setting-create-error">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="admin-setting-create-field">

                <label for="setting-value">مقدار</label>

                <textarea
                    id="setting-value"
                    name="value"
                    rows="5"
                    placeholder="Enter setting value..."
                >{{ old('value') }}</textarea>

                @error('value')
                    <p class="admin-setting-create-error">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="admin-setting-create-actions">

                <button type="submit" class="admin-setting-create-save">
                    ایجاد
                </button>

                <a href="{{ route('admin.settings.index') }}"
                   class="admin-setting-create-back">
                    بازگشت
                </a>

            </div>

        </form>

    </div>

@endsection
