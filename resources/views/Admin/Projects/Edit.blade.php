@extends('admin.layouts.layout')

@section('title', 'ویرایش پروژه')




@section('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/js/tom-select.complete.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.feature-multiselect').forEach(function(element) {
                // جلوگیری از مقداردهی چندباره
                if (element.tomselect) {
                    return;
                }

                new TomSelect(element, {
                    plugins: ['remove_button'],
                    create: false,
                    persist: false,
                    closeAfterSelect: false,
                    hideSelected: true,
                    maxOptions: 200,
                    placeholder: 'جست‌وجو و انتخاب ویژگی...',

                    render: {
                        no_results: function() {
                            return '<div class="no-results p-2">موردی پیدا نشد</div>';
                        }
                    }
                });
            });
        });
    </script>
@endsection


@section('content')

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.css" rel="stylesheet">


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
        <form action="{{ route('admin.projects.update', $project) }}" method="POST" autocomplete="off">

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



            {{-- Project Features --}}
            @php
                $oldFeatureIds = old('feature_ids', $project->features->pluck('id')->toArray());

                $selectedFeatureIds = is_array($oldFeatureIds) ? array_map('intval', $oldFeatureIds) : [];
            @endphp

            <div class="mt-8 rounded-2xl border border-gray-200 bg-white p-5 md:p-6">

                <div class="mb-6">
                    <h2 class="text-lg font-bold text-gray-800">
                        امکانات و ویژگی‌های پروژه
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        ویژگی‌های مرتبط با این پروژه را انتخاب یا ویرایش کنید.
                    </p>
                </div>

                @error('feature_ids')
                    <p class="mb-4 text-sm text-red-600">{{ $message }}</p>
                @enderror

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">

                    @forelse ($featureCategories as $featureCategory)

                        @if ($featureCategory->features->isNotEmpty())
                            <div class="rounded-xl border border-gray-200 bg-gray-50/70 p-4">

                                <label for="features-category-{{ $featureCategory->id }}"
                                    class="mb-3 block font-semibold text-gray-800">
                                    {{ $featureCategory->name }}
                                </label>

                                @if ($featureCategory->description)
                                    <p class="mb-3 text-xs leading-5 text-gray-500">
                                        {{ $featureCategory->description }}
                                    </p>
                                @endif

                                <select id="features-category-{{ $featureCategory->id }}" name="feature_ids[]"
                                    class="feature-multiselect w-full" multiple placeholder="جست‌وجو و انتخاب ویژگی...">
                                    @foreach ($featureCategory->features as $feature)
                                        <option value="{{ $feature->id }}" @selected(in_array($feature->id, $selectedFeatureIds, true))>
                                            {{ $feature->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <p class="mt-2 text-xs text-gray-400">
                                    امکان انتخاب چند ویژگی وجود دارد.
                                </p>

                            </div>
                        @endif

                    @empty
                        <p class="text-sm text-gray-500">
                            دسته‌بندی فعالی برای ویژگی‌ها وجود ندارد.
                        </p>
                    @endforelse

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


                {{-- Project Status --}}
                <div class="w-full">

                    <label for="status" class="mb-2 block text-sm font-semibold text-gray-700">
                        وضعیت پروژه
                    </label>

                    <div class="relative">

                        <select name="status" id="status"
                            class="w-full appearance-none rounded-xl border border-gray-200 bg-white px-4 py-3 pl-10 text-sm font-medium text-gray-700 shadow-sm outline-none transition duration-200 hover:border-teal-500 focus:border-teal-600 focus:ring-4 focus:ring-teal-600/10">
                            <option value="0" @selected(old('status', $project->status) == '0')>
                                در حال توسعه
                            </option>

                            <option value="1" @selected(old('status', $project->status) == '1')>
                                تکمیل شده
                            </option>
                        </select>

                      

                    

                </div>


                @error('status')
                    <p class="text-red-500 text-sm mt-1">
                        {{ $message }}
                    </p>
                @enderror
            </div>


            {{-- Buttons --}}
            <div class="flex items-center gap-3 mt-8">

                <button type="submit" class="px-6 py-3 rounded-lg bg-green-600 text-white hover:bg-green-700 transition">
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
