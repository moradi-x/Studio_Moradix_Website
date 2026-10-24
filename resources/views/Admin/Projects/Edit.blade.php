@extends('admin.layouts.layout')

@section('title', 'ویرایش پروژه')

@section('content')

    <div class="w-full min-h-screen p-6">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">

            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    ویرایش پروژه :
                    {{ $project->title }}

                </h1>
            </div>

            <a href="{{ route('admin.projects.index') }}"
                class="px-4 py-2 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                بازگشت
            </a>

        </div>


        {{-- Errors --}}
        @include('admin.sections.errors')


        {{-- Form --}}
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">

            @csrf
            @method('PUT')


            {{-- Row 1 --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                {{-- Category --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        دسته‌بندی
                    </label>

                    <select name="category_id"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500">
                        <option value="">
                            انتخاب دسته‌بندی
                        </option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id', $project->category_id) == $category->id ? 'selected' : '' }}>
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


                {{-- Title --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        نام پروژه
                    </label>

                    <input type="text" name="title" value="{{ old('title', $project->title) }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500"
                        placeholder="نام پروژه">

                    @error('title')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Slug --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        اسلاگ
                    </label>

                    <input type="text" name="slug" value="{{ old('slug', $project->slug) }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500"
                        placeholder="project-slug">

                    @error('slug')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>


            {{-- Row 2 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                {{-- Short Description --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        توضیح کوتاه
                    </label>

                    <textarea name="short_description" rows="5"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500"
                        placeholder="توضیح کوتاه پروژه">{{ old('short_description', $project->short_description) }}</textarea>

                    @error('short_description')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Description --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        توضیحات کامل
                    </label>

                    <textarea name="description" rows="5"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500"
                        placeholder="توضیحات کامل پروژه">{{ old('description', $project->description) }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>


            {{-- Row 3 --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">

                {{-- Project URL --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        لینک پروژه
                    </label>

                    <input type="url" name="project_url" value="{{ old('project_url', $project->project_url) }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500"
                        placeholder="https://example.com">

                    @error('project_url')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Github URL --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        لینک گیت‌هاب
                    </label>

                    <input type="url" name="github_url" value="{{ old('github_url', $project->github_url) }}"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500"
                        placeholder="https://github.com/...">

                    @error('github_url')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

            </div>


            {{-- Row 4 --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">

                {{-- Status --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        وضعیت
                    </label>

                    <select name="status"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500">
                        <option value="1" {{ old('status', $project->status) == 1 ? 'selected' : '' }}>
                            فعال
                        </option>

                        <option value="0" {{ old('status', $project->status) == 0 ? 'selected' : '' }}>
                            غیرفعال
                        </option>
                    </select>

                    @error('status')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Buttons --}}
                <div class="flex items-center gap-3 mt-8">

                    <button type="submit"
                        class="px-6 py-3 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
                        ذخیره تغییرات
                    </button>

                    <a href="{{ route('admin.projects.index') }}"
                        class="px-6 py-3 rounded-lg border border-gray-300 text-gray-600 hover:bg-gray-100 transition">
                        انصراف
                    </a>

                </div>

        </form>

    </div>


    <script></script>

@endsection
