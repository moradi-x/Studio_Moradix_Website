@extends('admin.layouts.layout')

@section('title', 'ویرایش قیمت پلن')

@section('content')

    @include('admin.sections.errors')

    <div class="mb-6">
        <h1 class="text-lg font-bold text-gray-800">
            ویرایش قیمت‌ها
        </h1>

        <p class="text-sm text-gray-500 mt-1">
            {{ $planPrice->service_type === 'website'
                ? 'طراحی وب‌سایت'
                : 'طراحی وب‌سایت فروشگاهی' }}
        </p>
    </div>

    <form action="{{ route('admin.plan-prices.update', $planPrice) }}"
          method="POST"
          class="bg-white p-6 rounded-xl shadow-sm border max-w-2xl">

        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            {{-- Basic Price --}}
            <div>
                <label for="basic_price"
                       class="block mb-2 text-sm font-medium text-gray-700">
                    قیمت پلن پایه‌ای (تومان)
                </label>

                <input
                    type="number"
                    id="basic_price"
                    name="basic_price"
                    min="0"
                    step="1"
                    required
                    value="{{ old('basic_price', $planPrice->basic_price) }}"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                >

                @error('basic_price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Professional Price --}}
            <div>
                <label for="professional_price"
                       class="block mb-2 text-sm font-medium text-gray-700">
                    قیمت پلن حرفه‌ای (تومان)
                </label>

                <input
                    type="number"
                    id="professional_price"
                    name="professional_price"
                    min="0"
                    step="1"
                    required
                    value="{{ old('professional_price', $planPrice->professional_price) }}"
                    class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
                >

                @error('professional_price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

        </div>

        <div class="flex items-center gap-3 mt-6">

            <button type="submit"
                    class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
                ذخیره قیمت‌ها
            </button>

            <a href="{{ route('admin.plan-prices.index') }}"
               class="px-6 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300 transition">
                برگشت
            </a>

        </div>

    </form>

@endsection
