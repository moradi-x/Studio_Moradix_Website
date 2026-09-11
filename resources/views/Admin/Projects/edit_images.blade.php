@extends('admin.layouts.layout')

@section('title', 'ویرایش تصاویر پروژه')

@section('content')

    <div class="w-full p-6">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-8">

            <div>
                <h2 class="text-2xl font-bold text-gray-800">
                    : ویرایش تصاویر پروژه
                    {{ $project->title }}
                </h2>
            </div>

            <a href="{{ route('admin.projects.index') }}"
                class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                بازگشت
            </a>

        </div>


        @include('admin.sections.errors')


        {{-- Success --}}
        @if (session('success'))
            <div class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-green-700">
                {{ session('success') }}
            </div>
        @endif


        {{-- Error --}}
        @if (session('error'))
            <div class="mb-6 rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-red-700">
                {{ session('error') }}
            </div>
        @endif


        {{-- ========================================================= --}}
        {{-- عکس اصلی --}}
        {{-- ========================================================= --}}

        <div class="mb-8">

            <h2 class="text-lg font-semibold text-gray-800 mb-4">
                عکس اصلی
            </h2>

            <div class="relative w-64">

                <div
                    class="w-64 h-48 bg-gray-100 rounded-lg overflow-hidden border border-gray-200 flex items-center justify-center">

                    @if ($project->primary_image)
                        <img src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $project->primary_image) }}"
                            alt="{{ $project->title }}" class="max-w-full max-h-full object-contain">
                    @else
                        <span class="text-sm text-gray-400">
                            عکس اصلی وجود ندارد
                        </span>
                    @endif

                </div>


                {{-- حذف عکس اصلی --}}

                @if ($project->primary_image)
                    <form action="{{ route('admin.projects.images.destroy', $project) }}" method="POST"
                        onsubmit="return confirm('آیا از حذف عکس اصلی مطمئن هستید؟')" class="absolute bottom-2 left-2">

                        @csrf
                        @method('DELETE')

                        <input type="hidden" name="delete_primary" value="1">

                        <button type="submit"
                            class="px-3 py-1.5 rounded-md bg-red-600/90 text-white text-xs hover:bg-red-700 transition">
                            حذف
                        </button>

                    </form>
                @endif

            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- عکس های فرعی --}}
        {{-- ========================================================= --}}

        <div class="mb-8">

            <h2 class="text-lg font-semibold text-gray-800 mb-4">
                عکس‌های فرعی
            </h2>

            @if ($project->images->count())

                <div class="flex gap-4 overflow-x-auto pb-3">

                    @foreach ($project->images as $image)
                        <div class="relative flex-shrink-0 w-48">

                            <div
                                class="w-48 h-36 bg-gray-100 rounded-lg overflow-hidden border border-gray-200 flex items-center justify-center">

                                <img src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $image->image) }}"
                                    alt="{{ $project->title }}" class="max-w-full max-h-full object-contain">

                            </div>


                            {{-- حذف عکس فرعی --}}

                            <form action="{{ route('admin.projects.images.destroy', $project) }}" method="POST"
                                onsubmit="return confirm('آیا از حذف این تصویر مطمئن هستید؟')"
                                class="absolute bottom-2 left-2">

                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="image_id" value="{{ $image->id }}">

                                <button type="submit"
                                    class="px-3 py-1.5 rounded-md bg-red-600/90 text-white text-xs hover:bg-red-700 transition">
                                    حذف
                                </button>

                            </form>

                        </div>
                    @endforeach

                </div>
            @else
                <p class="text-sm text-gray-400">
                    هنوز عکس فرعی برای این پروژه ثبت نشده است.
                </p>

            @endif

        </div>


        {{-- ========================================================= --}}
        {{-- آپلود / آپدیت تصاویر --}}
        {{-- ========================================================= --}}

        <div class="border-t border-gray-200 pt-6">

            <form action="{{ route('admin.projects.images.add', $project) }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    {{-- عکس اصلی --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            عکس اصلی جدید
                        </label>

                        <input type="file" name="primary_image" accept="image/jpeg,image/png,image/webp"
                            class="w-60 rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm">

                        @error('primary_image')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    {{-- عکس های فرعی --}}
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            عکس‌های فرعی جدید
                        </label>

                        <input type="file" name="images[]" multiple accept="image/jpeg,image/png,image/webp"
                            class="w-60 rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm">

                        @error('images')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                        @error('images.*')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                </div>

                {{-- دکمه آپدیت زیر دو input و سمت راست --}}
                <div class="flex justify-start mt-6">
                    <button type="submit"
                        class="px-8 py-3 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                        آپدیت تصاویر
                    </button>
                </div>


            </form>

        </div>

    </div>

@endsection
