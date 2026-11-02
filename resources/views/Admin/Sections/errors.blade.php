
@if ($errors->any())
    <div
        id="validation-errors"
        role="alert"
        aria-live="polite"
        class="mb-6 overflow-hidden rounded-xl border border-red-200 bg-red-50 shadow-sm"
    >
        <div class="flex items-start gap-3 p-4">

            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-red-100 text-red-600">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9v4m0 4h.01M10.3 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.7 3.86a2 2 0 0 0-3.4 0Z" />
                </svg>
            </div>

            <div class="min-w-0 flex-1">
                <h3 class="mb-2 text-sm font-bold text-red-800">
                    لطفاً خطاهای زیر را بررسی کنید
                </h3>

                <ul class="space-y-2">
                    @foreach ($errors->all() as $error)
                        <li class="flex items-start gap-2 text-sm leading-6 text-red-700">
                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-red-500"></span>
                            <span>{{ $error }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <button
                type="button"
                onclick="document.getElementById('validation-errors').remove()"
                aria-label="بستن پیام خطا"
                class="shrink-0 rounded-lg p-1.5 text-red-500 transition hover:bg-red-100 hover:text-red-700"
            >
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m18 6-12 12M6 6l12 12" />
                </svg>
            </button>

        </div>
    </div>
@endif
