@extends('admin.layouts.layout')

@section('title', 'قیمت پلن‌ها')

@section('content')

    @include('admin.sections.messages')

    <div class="mb-6">
        <h1 class="text-lg font-bold text-gray-800">
            قیمت پلن‌ها
        </h1>
        <p class="text-sm text-gray-500 mt-1">
            مدیریت قیمت پلن‌های طراحی وب‌سایت
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        {{-- Website Design --}}
        @php
            $website = $plans->get('website');
        @endphp

        <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
            <div class="p-5 border-b bg-gray-50">
                <h2 class="font-bold text-gray-800">
                    طراحی وب‌سایت
                </h2>
            </div>

            @if($website)
                <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500 mb-2">پلن پایه‌ای</p>
                        <p class="text-lg font-bold text-gray-800">
                            {{ $plans->get('website')?->basic_price_formatted ?? '۰' }}
                        </p>
                        <span class="text-xs text-gray-500">تومان</span>
                    </div>

                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500 mb-2">پلن حرفه‌ای</p>
                        <p class="text-lg font-bold text-gray-800">
                            {{ $plans->get('website')?->professional_price_formatted ?? '۰' }}
                        </p>
                        <span class="text-xs text-gray-500">تومان</span>
                    </div>

                </div>

                <div class="px-5 pb-5 mb-4 ">
                    <a href="{{ route('admin.plan-prices.edit', $website) }}"
                       class="inline-flex justify-center px-4 py-2  rounded-lg bg-blue-500 text-white text-sm hover:bg-blue-600 transition">
                        ویرایش قیمت‌ها
                    </a>
                </div>
            @else
                <p class="p-5 text-sm text-red-500">
                    اطلاعات این پلن ثبت نشده است.
                </p>
            @endif
        </div>

        {{-- Ecommerce Design --}}
        @php
            $ecommerce = $plans->get('ecommerce');
        @endphp

        <div class="bg-white rounded-xl shadow-sm border overflow-hidden">
            <div class="p-5 border-b bg-gray-50">
                <h2 class="font-bold text-gray-800">
                    طراحی وب‌سایت فروشگاهی
                </h2>
               
            </div>

            @if($ecommerce)
                <div class="p-5 grid grid-cols-1 sm:grid-cols-2 gap-4">

                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500 mb-2">پلن پایه‌ای</p>
                        <p class="text-lg font-bold text-gray-800">
                           {{ $ecommerce?->basic_price_formatted ?? '۰' }}

                        </p>
                        <span class="text-xs text-gray-500">تومان</span>
                    </div>

                    <div class="border rounded-lg p-4">
                        <p class="text-sm text-gray-500 mb-2">پلن حرفه‌ای</p>
                        <p class="text-lg font-bold text-gray-800">
                           {{ $ecommerce?->professional_price_formatted ?? '۰' }}
                        </p>
                        <span class="text-xs text-gray-500">تومان</span>
                    </div>

                </div>

                <div class="px-5 pb-5">
                    <a href="{{ route('admin.plan-prices.edit', $ecommerce) }}"
                       class="inline-flex justify-center px-4 py-2 rounded-lg bg-blue-500 text-white text-sm hover:bg-blue-600 transition">
                        ویرایش قیمت‌ها
                    </a>
                </div>
            @else
                <p class="p-5 text-sm text-red-500">
                    اطلاعات این پلن ثبت نشده است.
                </p>
            @endif
        </div>

    </div>

@endsection