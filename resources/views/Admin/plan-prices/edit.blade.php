
@extends('admin.layouts.layout')

@section('title', 'ویرایش قیمت پلن')

@section('content')

    <div class="admin-plan-edit">

        @include('admin.sections.errors')

        <div class="admin-plan-edit-header">
            <h1 class="admin-plan-edit-title">ویرایش قیمت‌ها</h1>

            <p class="admin-plan-edit-description">
                {{ $planPrice->service_type === 'website' ? 'طراحی وب‌سایت' : 'طراحی وب‌سایت فروشگاهی' }}
            </p>
        </div>

        <form
            action="{{ route('admin.plan-prices.update', $planPrice) }}"
            method="POST"
            class="admin-plan-edit-form"
        >
            @csrf
            @method('PUT')

            <div class="admin-plan-edit-grid">

                {{-- Basic Price --}}
                <div class="admin-plan-edit-field">
                    <label for="basic_price">
                        قیمت پلن پایه‌ای (تومان)
                    </label>

                    <input
                        type="text"
                        id="basic_price"
                        name="basic_price"
                        min="0"
                        step="1"
                        required
                        value="{{ old('basic_price', $planPrice->basic_price_persian) }}"
                    >

                    @error('basic_price')
                        <p class="admin-plan-edit-error">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Professional Price --}}
                <div class="admin-plan-edit-field">
                    <label for="professional_price">
                        قیمت پلن حرفه‌ای (تومان)
                    </label>

                    <input
                        type="text"
                        id="professional_price"
                        name="professional_price"
                        min="0"
                        step="1"
                        required
                        value="{{ old('professional_price', $planPrice->professional_price_persian) }}"
                    >

                    @error('professional_price')
                        <p class="admin-plan-edit-error">{{ $message }}</p>
                    @enderror
                </div>

            </div>

            <div class="admin-plan-edit-actions">

                <button type="submit" class="admin-plan-edit-save">
                    ذخیره قیمت‌ها
                </button>

                <a
                    href="{{ route('admin.plan-prices.index') }}"
                    class="admin-plan-edit-back"
                >
                    برگشت
                </a>

            </div>

        </form>

    </div>

@endsection
