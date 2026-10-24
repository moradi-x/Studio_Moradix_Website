@extends('admin.layouts.layout')

@section('title', 'پیام‌های سایت')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-lg font-bold text-gray-800">
        پیام‌های سایت
    </h1>
</div>

@if(session('success'))
    <div class="mb-5 bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-5 bg-red-100 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
        {{ session('error') }}
    </div>
@endif

<div class="bg-white rounded-lg shadow overflow-x-auto">

    <table class="w-full text-sm text-left">

        <thead class="bg-gray-50 border-b">
            <tr>
                <th class="px-5 py-3">#</th>
                <th class="px-5 py-3">نام</th>
                <th class="px-5 py-3">شماره تماس</th>
                <th class="px-5 py-3">نوع درخواست</th>
                <th class="px-5 py-3">نوع پروژه</th>
                <th class="px-5 py-3">تاریخ ثبت</th>
                <th class="px-5 py-3 text-center">عملیات</th>
            </tr>
        </thead>

        <tbody>
            @forelse($contactMessages as $contactMessage)

                <tr class="border-b last:border-0">

                    <td class="px-5 py-4">
                        {{ $contactMessages->firstItem() + $loop->index }}
                    </td>

                    <td class="px-5 py-4 font-medium text-gray-800">
                        {{ $contactMessage->name }}
                    </td>

                    <td class="px-5 py-4" dir="ltr">
                        {{ $contactMessage->phone }}
                    </td>

                    <td class="px-5 py-4">
                        {{ $contactMessage->request_type }}
                    </td>

                    <td class="px-5 py-4">
                        {{ $contactMessage->project_type }}
                    </td>

                    <td class="px-5 py-4">
                        {{ $contactMessage->created_at?->format('Y/m/d H:i') ?? '-' }}
                    </td>

                    <td class="px-5 py-4">
                        <div class="flex justify-center gap-2">

                            <a
                                href="{{ route('admin.contact-messages.show', $contactMessage->id) }}"
                                class="px-3 py-1.5 rounded-md bg-gray-500 text-white text-xs hover:bg-gray-600"
                            >
                                مشاهده
                            </a>

                            <form
                                action="{{ route('admin.contact-messages.destroy', $contactMessage->id) }}"
                                method="POST"
                                onsubmit="return confirm('از حذف این پیام مطمئن هستید؟')"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="px-3 py-1.5 rounded-md bg-red-500 text-white text-xs hover:bg-red-600"
                                >
                                    حذف
                                </button>
                            </form>

                        </div>
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="7" class="px-5 py-8 text-center text-gray-500">
                        هنوز پیامی ثبت نشده است.
                    </td>
                </tr>

            @endforelse
        </tbody>

    </table>

</div>

<div class="mt-5">
    {{ $contactMessages->links() }}
</div>

@endsection