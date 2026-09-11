@extends('admin.layouts.layout')
@section('content')
    @include('admin.sections.errors')


    <div class="w-full min-h-screen p-6">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">

            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    افزودن پروژه
                </h1>

                <p class="text-sm text-gray-500 mt-1">
                    اطلاعات پروژه جدید را وارد کنید
                </p>
            </div>

            <a href="{{ route('admin.projects.index') }}"
                class="px-4 py-2 rounded-lg bg-gray-500 text-white text-sm hover:bg-gray-600">
                بازگشت
            </a>

        </div>


        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4">

                <h3 class="font-semibold text-red-700 mb-2">
                    لطفاً خطاهای زیر را برطرف کنید:
                </h3>

                <ul class="list-disc list-inside text-sm text-red-600 space-y-1">

                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach

                </ul>

            </div>
        @endif


        {{-- Session Error --}}
        @if (session('error'))
            <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4 text-red-700">
                {{ session('error') }}
            </div>
        @endif


        {{-- Form --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">

                @csrf


                {{-- Basic Information --}}
                <div class="mb-8">

                    <h2 class="text-lg font-semibold text-gray-800 mb-5">
                        اطلاعات پروژه
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


                        {{-- Title --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                نام پروژه
                            </label>

                            <input type="text" name="title" value="{{ old('title') }}" placeholder="نام پروژه"
                                class="w-full rounded-lg border
                            {{ $errors->has('title') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">

                            @error('title')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Slug --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Slug
                            </label>

                            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="project-slug"
                                class="w-full rounded-lg border
                            {{ $errors->has('slug') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">

                            @error('slug')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Category --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                دسته‌بندی
                            </label>

                            <select name="category_id"
                                class="w-full rounded-lg border
                            {{ $errors->has('category_id') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">

                                <option value="">
                                    انتخاب دسته‌بندی
                                </option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>

                            @error('category_id')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                            

                        </div>


                        {{-- Short Description --}}
                        <div class="md:col-span-3">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                توضیح کوتاه
                            </label>

                            <textarea name="short_description" rows="3" placeholder="توضیح کوتاهی درباره پروژه..."
                                class="w-full rounded-lg border
                            {{ $errors->has('short_description') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">{{ old('short_description') }}</textarea>

                            @error('short_description')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Description --}}
                        <div class="md:col-span-3">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                توضیحات کامل
                            </label>

                            <textarea name="description" rows="6" placeholder="توضیحات کامل پروژه..."
                                class="w-full rounded-lg border
                            {{ $errors->has('description') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">{{ old('description') }}</textarea>

                            @error('description')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>

                </div>


                {{-- Technologies --}}
                <div class="mb-8">

                    <h2 class="text-lg font-semibold text-gray-800 mb-5">
                        تکنولوژی‌ها
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                        <div class="md:col-span-3">

                            <label class="block text-sm font-medium text-gray-700 mb-3">
                                انتخاب تکنولوژی‌ها
                            </label>

                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">

                                @foreach ($technologies as $technology)
                                    <label
                                        class="flex items-center gap-3 p-3 rounded-lg border border-gray-200 hover:bg-gray-50 cursor-pointer">

                                        <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                                            @checked(in_array($technology->id, old('technologies', [])))
                                            class="rounded border-gray-300 text-green-600 focus:ring-green-500">

                                        <span class="text-sm text-gray-700">
                                            {{ $technology->name }}
                                        </span>

                                    </label>
                                @endforeach

                            </div>

                            @error('technologies')
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                            @error('technologies.*')
                                <p class="text-red-500 text-sm mt-2">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>

                </div>


                {{-- Images --}}
                <div class="mb-8">

                    <h2 class="text-lg font-semibold text-gray-800 mb-5">
                        تصاویر پروژه
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


                        {{-- Primary Image --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                تصویر اصلی
                            </label>

                            <input type="file" name="primary_image" accept="image/jpeg,image/png,image/webp"
                                class="w-full rounded-lg border
                            {{ $errors->has('primary_image') ? 'border-red-500' : 'border-gray-300' }}
                            bg-white p-2 text-sm">

                            <p class="text-xs text-gray-400 mt-2">
                                تصویر اصلی پروژه
                            </p>

                            @error('primary_image')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Other Images --}}
                        <div class="md:col-span-2">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                تصاویر پروژه
                            </label>

                            <input type="file" name="images[]" multiple accept="image/jpeg,image/png,image/webp"
                                class="w-full rounded-lg border
                            {{ $errors->has('images') ? 'border-red-500' : 'border-gray-300' }}
                            bg-white p-2 text-sm">

                            <p class="text-xs text-gray-400 mt-2">
                                امکان انتخاب چند تصویر وجود دارد.
                            </p>

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

                </div>


                {{-- Links --}}
                <div class="mb-8">

                    <h2 class="text-lg font-semibold text-gray-800 mb-5">
                        لینک‌ها
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


                        {{-- Project URL --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                لینک پروژه
                            </label>

                            <input type="url" name="project_url" value="{{ old('project_url') }}"
                                placeholder="https://example.com"
                                class="w-full rounded-lg border
                            {{ $errors->has('project_url') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">

                            @error('project_url')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- GitHub --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                لینک GitHub
                            </label>

                            <input type="url" name="github_url" value="{{ old('github_url') }}"
                                placeholder="https://github.com/..."
                                class="w-full rounded-lg border
                            {{ $errors->has('github_url') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">

                            @error('github_url')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Status --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                وضعیت
                            </label>

                            <select name="status"
                                class="w-full rounded-lg border
                            {{ $errors->has('status') ? 'border-red-500' : 'border-gray-300' }}
                            focus:border-green-500 focus:ring-green-500">

                                <option value="1" @selected(old('status', 1) == 1)>
                                    فعال
                                </option>

                                <option value="0" @selected(old('status') === '0')>
                                    غیرفعال
                                </option>

                            </select>

                            @error('status')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>

                </div>


                {{-- Featured --}}
                <div class="mb-8">

                    <label class="inline-flex items-center gap-3 cursor-pointer">

                        <input type="checkbox" name="featured" value="1" @checked(old('featured'))
                            class="rounded border-gray-300 text-green-600 focus:ring-green-500">

                        <span class="text-sm font-medium text-gray-700">
                            پروژه ویژه
                        </span>

                    </label>

                    @error('featured')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                </div>


                {{-- Buttons --}}
                <div class="flex items-center justify-end gap-3 pt-5 border-t border-gray-200">

                    <a href="{{ route('admin.projects.index') }}"
                        class="px-5 py-2.5 rounded-lg bg-gray-100 text-gray-700 text-sm hover:bg-gray-200">
                        انصراف
                    </a>

                    <button type="submit"
                        class="px-5 py-2.5 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700">
                        ثبت پروژه
                    </button>

                </div>

            </form>

        </div>

    </div>

@endsection
