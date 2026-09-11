@extends('admin.layouts.layout')

@section('title', 'نمایش پروژه')

@section('content')

    <div class="w-full min-h-screen p-6">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">

            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    نمایش پروژه :
                                        {{ $project->title }}

                </h1>
            </div>

            <div class="flex items-center gap-2">

                

                <a href="{{ route('admin.projects.index') }}"
                    class="px-4 py-2 rounded-lg bg-gray-500 text-white text-sm hover:bg-gray-600">
                    بازگشت
                </a>

            </div>
        </div>


        {{-- Main Card --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">


            {{-- ========================================= --}}
            {{-- اطلاعات اصلی --}}
            {{-- ========================================= --}}

            <div class="mb-8">

                <h2 class="text-lg font-semibold text-gray-800 mb-5">
                    اطلاعات پروژه
                </h2>

                {{-- Row 1: Title / Slug / Category --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    {{-- Title --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            نام پروژه
                        </label>

                        <div class="w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-800">
                            {{ $project->title }}
                        </div>

                    </div>


                    {{-- Slug --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            Slug
                        </label>

                        <div class="w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-800">
                            {{ $project->slug }}
                        </div>

                    </div>


                    {{-- Category --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            دسته‌بندی
                        </label>

                        <div class="w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-800">
                            {{ $project->category?->name ?? '—' }}
                        </div>

                    </div>

                </div>


                {{-- Row 2: Short Description / Description --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

    {{-- Short Description --}}
    <div>

        <label class="block text-sm font-medium text-gray-500 mb-2">
            توضیح کوتاه
        </label>

        <div class="w-full min-h-[100px] rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 leading-6 whitespace-pre-line">
            {{ $project->short_description }}
        </div>

    </div>


    {{-- Description --}}
    <div>

        <label class="block text-sm font-medium text-gray-500 mb-2">
            توضیحات کامل
        </label>

        <div class="w-full min-h-[100px] rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-700 leading-6 whitespace-pre-line">
            {{ $project->description }}
        </div>

    </div>

</div>

            </div>



            {{-- ========================================= --}}
            {{-- لینک ها --}}
            {{-- ========================================= --}}

            <div class="mb-8">

                <h2 class="text-lg font-semibold text-gray-800 mb-5">
                    لینک‌های پروژه
                </h2>

                {{-- Row 3: Project URL / Github --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    {{-- Project URL --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            لینک پروژه
                        </label>

                        @if ($project->project_url)
                            <a href="{{ $project->project_url }}" target="_blank"
                                class="block w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-green-600 hover:text-green-700 hover:bg-green-50 truncate">
                                {{ $project->project_url }}
                            </a>
                        @else
                            <div
                                class="w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-400">
                                ثبت نشده
                            </div>
                        @endif

                    </div>


                    {{-- Github --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            لینک GitHub
                        </label>

                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank"
                                class="block w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-green-600 hover:text-green-700 hover:bg-green-50 truncate">
                                {{ $project->github_url }}
                            </a>
                        @else
                            <div
                                class="w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm text-gray-400">
                                ثبت نشده
                            </div>
                        @endif

                    </div>

                </div>

            </div>



            {{-- ========================================= --}}
            {{-- تکنولوژی / وضعیت / ویژه --}}
            {{-- ========================================= --}}

            <div class="mb-8">

                <h2 class="text-lg font-semibold text-gray-800 mb-5">
                    مشخصات پروژه
                </h2>

                {{-- Row 4: Technologies / Status / Featured --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    {{-- Technologies --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            تکنولوژی‌ها
                        </label>

                        <div class="w-full min-h-[48px] rounded-lg border border-gray-200 bg-gray-50 px-4 py-3">

                            @if ($project->technologies->count())

                                <div class="flex flex-wrap gap-2">

                                    @foreach ($project->technologies as $technology)
                                        <span
                                            class="px-3 py-1.5 rounded-lg bg-white border border-gray-200 text-sm text-gray-700">
                                            {{ $technology->name }}
                                        </span>
                                    @endforeach

                                </div>
                            @else
                                <span class="text-sm text-gray-400">
                                    تکنولوژی‌ای ثبت نشده است.
                                </span>

                            @endif

                        </div>

                    </div>


                    {{-- Status --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            وضعیت
                        </label>

                        <div class="w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm">

                            @if ($project->status)
                                <span class="text-green-600 font-medium">
                                    فعال
                                </span>
                            @else
                                <span class="text-red-500 font-medium">
                                    غیرفعال
                                </span>
                            @endif

                        </div>

                    </div>


                    {{-- Featured --}}
                    <div>

                        <label class="block text-sm font-medium text-gray-500 mb-2">
                            وضعیت ویژه
                        </label>

                        <div class="w-full rounded-lg border border-gray-200 bg-gray-50 px-4 py-3 text-sm">

                            @if ($project->featured)
                                <span class="text-green-600 font-medium">
                                    ★ پروژه ویژه است
                                </span>
                            @else
                                <span class="text-gray-500">
                                    پروژه معمولی است
                                </span>
                            @endif

                        </div>

                    </div>

                </div>

            </div>



            {{-- ========================================= --}}
            {{-- تصویر اصلی --}}
            {{-- ========================================= --}}

            <div class="mb-8">

                <h2 class="text-lg font-semibold text-gray-800 mb-5">
                    تصویر اصلی پروژه
                </h2>

                <div class="w-full rounded-xl border border-gray-200 overflow-hidden bg-gray-50">

                    @if ($project->primary_image)
                        <img src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $project->primary_image) }}"
                            alt="{{ $project->title }}" class="w-full h-64 object-contain">
                    @else
                        <div class="h-64 flex items-center justify-center text-gray-400 text-sm">
                            تصویر اصلی وجود ندارد
                        </div>
                    @endif

                </div>

            </div>



            {{-- ========================================= --}}
            {{-- تصاویر دیگر --}}
            {{-- ========================================= --}}

            <div class="mb-8">

                <div class="flex items-center justify-between mb-5">

                    <h2 class="text-lg font-semibold text-gray-800">
                        تصاویر دیگر پروژه
                    </h2>

                    

                </div>


                @if ($project->images->count())

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">

                        @foreach ($project->images as $image)
                            <div class="rounded-xl border border-gray-200 overflow-hidden bg-gray-50">

                                <img src="{{ asset(env('PROJECT_IMAGES_UPLOAD_PATH') . '/' . $image->image) }}"
                                    alt="{{ $project->title }}" class="w-full h-32 object-cover">

                            </div>
                        @endforeach

                    </div>
                @else
                    <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center text-sm text-gray-400">
                        تصویر دیگری برای این پروژه ثبت نشده است.
                    </div>

                @endif

            </div>



            {{-- ========================================= --}}
            {{-- Footer --}}
            {{-- ========================================= --}}

            <div class="flex items-center justify-end gap-3 pt-5 border-t border-gray-200">

                <a href="{{ route('admin.projects.index') }}"
                    class="px-5 py-2.5 rounded-lg bg-gray-100 text-gray-700 text-sm hover:bg-gray-200">
                    بازگشت
                </a>

            </div>

        </div>

    </div>

@endsection
