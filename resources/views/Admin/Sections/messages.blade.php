{{-- Success Message --}}
@if (session('success'))
    <div class="admin-alert admin-alert-success" role="alert">
        <div class="admin-alert-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l4 4L19 6" />
            </svg>
        </div>

        <div class="admin-alert-content">
            <p class="admin-alert-title">عملیات موفق</p>
            <p class="admin-alert-message">{{ session('success') }}</p>
        </div>

        <button type="button" class="admin-alert-close" onclick="this.closest('[role=alert]').remove()"
            aria-label="بستن پیام">
            &times;
        </button>
    </div>
@endif


{{-- Deleted Message --}}
@if (session('deleted'))
    <div class="admin-alert admin-alert-danger" role="alert">
        <div class="admin-alert-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l4 4L19 6" />
            </svg>
        </div>

        <div class="admin-alert-content">
            <p class="admin-alert-title">حذف با موفقیت انجام شد</p>
            <p class="admin-alert-message">{{ session('deleted') }}</p>
        </div>

        <button type="button" class="admin-alert-close" onclick="this.closest('[role=alert]').remove()"
            aria-label="بستن پیام">
            &times;
        </button>
    </div>
@endif


{{-- Error Message --}}
@if (session('error'))
    <div class="admin-alert admin-alert-danger" role="alert">
        <div class="admin-alert-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v4m0 4h.01M10.3 3.86 1.82 18a2 2 0 0 1 1.71 3h16.94a2 2 0 0 1 1.71-3L13.7 3.86a2 2 0 0 0-3.4 0Z" />
            </svg>
        </div>

        <div class="admin-alert-content">
            <p class="admin-alert-title">خطا در انجام عملیات</p>
            <p class="admin-alert-message">{{ session('error') }}</p>
        </div>

        <button type="button" class="admin-alert-close" onclick="this.closest('[role=alert]').remove()"
            aria-label="بستن پیام">
            &times;
        </button>
    </div>
@endif



{{-- Validation Errors --}}
@php
    $generalErrors = [];

    foreach ($errors->messages() as $field => $messages) {
        if ($field !== 'slug') {
            $generalErrors = array_merge($generalErrors, $messages);
        }
    }
@endphp

@if (count($generalErrors))
    <div class="admin-alert admin-alert-danger admin-alert-validation" role="alert">

        <div class="admin-alert-heading">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 9v4m0 4h.01M10.3 3.86 1.82 18a2 2 0 0 1 1.71-3L13.7 3.86a2 2 0 0 0-3.4 0Z" />
            </svg>

            <p class="admin-alert-title">لطفاً خطاهای زیر را بررسی کنید</p>
        </div>

        <ul>
            @foreach ($generalErrors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        <button type="button" class="admin-alert-close" onclick="this.closest('[role=alert]').remove()">
            بستن پیام‌ها
        </button>
    </div>
@endif
