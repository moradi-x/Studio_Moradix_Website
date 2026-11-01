
@extends('admin.layouts.layout')

@section('title', 'قیمت پلن‌ها')

@section('content')

    <div class="admin-plan-index">

        @include('admin.sections.messages')

        <div class="admin-plan-index-header">
            <h1 class="admin-plan-index-title">قیمت پلن‌ها</h1>
            <p class="admin-plan-index-description">
                مدیریت قیمت پلن‌های طراحی وب‌سایت
            </p>
        </div>

        <div class="admin-plan-index-grid">

            {{-- Website Design --}}
            @php
                $website = $plans->get('website');
            @endphp

            <div class="admin-plan-index-card">

                <div class="admin-plan-index-card-header">
                    <h2>طراحی وب‌سایت</h2>
                </div>

                @if ($website)

                    <div class="admin-plan-index-prices">

                        <div class="admin-plan-index-price-box">
                            <p class="admin-plan-index-price-label">پلن پایه‌ای</p>
                            <p class="admin-plan-index-price">
                                {{ $website->basic_price_formatted ?? '۰' }}
                            </p>
                            <span class="admin-plan-index-currency">تومان</span>
                        </div>

                        <div class="admin-plan-index-price-box">
                            <p class="admin-plan-index-price-label">پلن حرفه‌ای</p>
                            <p class="admin-plan-index-price">
                                {{ $website->professional_price_formatted ?? '۰' }}
                            </p>
                            <span class="admin-plan-index-currency">تومان</span>
                        </div>

                    </div>

                    <div class="admin-plan-index-actions">
                        <a
                            href="{{ route('admin.plan-prices.edit', $website) }}"
                            class="admin-plan-index-edit"
                        >
                            ویرایش قیمت‌ها
                        </a>
                    </div>

                @else

                    <p class="admin-plan-index-empty">
                        اطلاعات این پلن ثبت نشده است.
                    </p>

                @endif

            </div>

            {{-- Ecommerce Design --}}
            @php
                $ecommerce = $plans->get('ecommerce');
            @endphp

            <div class="admin-plan-index-card">

                <div class="admin-plan-index-card-header">
                    <h2>طراحی وب‌سایت فروشگاهی</h2>
                </div>

                @if ($ecommerce)

                    <div class="admin-plan-index-prices">

                        <div class="admin-plan-index-price-box">
                            <p class="admin-plan-index-price-label">پلن پایه‌ای</p>
                            <p class="admin-plan-index-price">
                                {{ $ecommerce->basic_price_formatted ?? '۰' }}
                            </p>
                            <span class="admin-plan-index-currency">تومان</span>
                        </div>

                        <div class="admin-plan-index-price-box">
                            <p class="admin-plan-index-price-label">پلن حرفه‌ای</p>
                            <p class="admin-plan-index-price">
                                {{ $ecommerce->professional_price_formatted ?? '۰' }}
                            </p>
                            <span class="admin-plan-index-currency">تومان</span>
                        </div>

                    </div>

                    <div class="admin-plan-index-actions">
                        <a
                            href="{{ route('admin.plan-prices.edit', $ecommerce) }}"
                            class="admin-plan-index-edit"
                        >
                            ویرایش قیمت‌ها
                        </a>
                    </div>

                @else

                    <p class="admin-plan-index-empty">
                        اطلاعات این پلن ثبت نشده است.
                    </p>

                @endif

            </div>

        </div>

    </div>

@endsection
