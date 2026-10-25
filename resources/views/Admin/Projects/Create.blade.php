@extends('admin.layouts.layout')


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

    <div class="w-full min-h-screen p-6">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">

            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    افزودن پروژه
                </h1>


            </div>

            <a href="{{ route('admin.projects.index') }}"
                class="px-4 py-2 rounded-lg bg-gray-500 text-white text-sm hover:bg-gray-600">
                بازگشت
            </a>

        </div>


        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg bg-red-50 border border-red-200 p-4">

                <ul class="list-disc list-inside text-sm text-red-600 space-y-1">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
        @endif


        {{-- Form --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data"
                autocomplete="off">

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
                                class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500">

                        </div>


                        {{-- Slug --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Slug
                            </label>

                            <input type="text" name="slug" value="{{ old('slug') }}" placeholder="project-slug"
                                class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500">

                        </div>


                        {{-- Category --}}

                        {{-- Category --}}
                        <div class="w-full">

                            <label for="category_id" class="mb-2 block text-sm font-semibold text-gray-700">
                                دسته‌بندی
                            </label>

                            <div class="relative">

                                <select name="category_id" id="category_id"
                                    class="w-full appearance-none rounded-xl border border-gray-200 bg-white px-4 py-3 pl-10 text-sm font-medium text-gray-700 shadow-sm outline-none transition duration-200 hover:border-teal-500 focus:border-teal-600 focus:ring-4 focus:ring-teal-600/10">
                                    <option value="">
                                        انتخاب دسته‌بندی
                                    </option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach

                                </select>

                                

                            </div>


                        </div>



                        {{-- Short Description --}}
                        <div class="md:col-span-3">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                توضیح کوتاه
                            </label>

                            <textarea name="short_description" rows="3" placeholder="توضیح کوتاهی درباره پروژه..."
                                class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500">{{ old('short_description') }}</textarea>

                        </div>


                        {{-- Description --}}
                        <div class="md:col-span-3">

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                توضیحات کامل
                            </label>

                            <textarea name="description" rows="6" placeholder="توضیحات کامل پروژه..."
                                class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500">{{ old('description') }}</textarea>

                        </div>

                    </div>

                </div>




                {{-- Project Features --}}
                @php
                    $oldFeatureIds = old('feature_ids', []);

                    $selectedFeatureIds = is_array($oldFeatureIds) ? array_map('intval', $oldFeatureIds) : [];
                @endphp

                <link href="https://cdn.jsdelivr.net/npm/tom-select@2.4.3/dist/css/tom-select.css" rel="stylesheet">

                <div class="col-span-1 md:col-span-2 mt-6">
                    <div class="mb-5">
                        <h3 class="text-lg font-bold text-gray-800">
                            امکانات و ویژگی‌های پروژه
                        </h3>

                        <p class="mt-1 text-sm text-gray-500">
                            برای هر دسته، یک یا چند ویژگی مرتبط با پروژه را انتخاب کنید.
                        </p>
                    </div>

                    @error('feature_ids')
                        <p class="mb-4 text-sm text-red-600">{{ $message }}</p>
                    @enderror

                    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        @forelse ($featureCategories as $featureCategory)
                            @if ($featureCategory->features->isNotEmpty())
                                <div class="rounded-xl border border-gray-200 bg-white p-4">
                                    <label for="features-category-{{ $featureCategory->id }}"
                                        class="mb-2 block font-semibold text-gray-800">
                                        {{ $featureCategory->name }}
                                    </label>

                                    @if ($featureCategory->description)
                                        <p class="mb-3 text-sm text-gray-500">
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
                                </div>
                            @endif
                        @empty
                            <p class="text-sm text-gray-500">
                                هنوز دسته‌بندی فعالی برای ویژگی‌ها وجود ندارد.
                            </p>
                        @endforelse
                    </div>
                </div>




                {{-- Images --}}
                <div class="mb-8">

                    <div class="mb-5  mt-5">
                        <h2 class="text-lg font-bold text-gray-800">
                            تصاویر پروژه
                        </h2>


                    </div>

                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">

                        {{-- Primary Image --}}
                        <div class="rounded-2xl border border-gray-200 bg-white p-5 transition hover:border-indigo-200">

                            <div class="mb-5 flex items-center gap-3">


                                <div>
                                    <h3 class="font-semibold text-gray-800">
                                        تصویر اصلی
                                    </h3>

                                </div>
                            </div>

                            <label
                                class="flex min-h-40 cursor-pointer flex-col items-center justify-center rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 px-4 py-6 text-center transition hover:border-indigo-400 hover:bg-indigo-50/50">







                                <input type="file" name="primary_image" accept="image/jpeg,image/png,image/webp"
                                    class="sr-only">
                            </label>


                        </div>

                        {{-- Other Images --}}
                        <div
                            class="rounded-2xl border border-gray-200 bg-white p-5 transition hover:border-indigo-200 lg:col-span-2">

                            <div class="mb-5 flex items-center gap-3">


                                <div>
                                    <h3 class="font-semibold text-gray-800">
                                        گالری تصاویر
                                    </h3>

                                </div>
                            </div>

                            <label
                                class="flex min-h-40 cursor-pointer flex-col items-center justify-center rounded-xl border-2 border-dashed border-gray-300 bg-gray-50 px-4 py-6 text-center transition hover:border-purple-400 hover:bg-purple-50/40">





                                <input type="file" name="images[]" multiple accept="image/jpeg,image/png,image/webp"
                                    class="sr-only">
                            </label>


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
                                class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500">

                        </div>


                        {{-- GitHub --}}
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                لینک GitHub
                            </label>

                            <input type="url" name="github_url" value="{{ old('github_url') }}"
                                placeholder="https://github.com/..."
                                class="w-full rounded-lg border-gray-300 focus:border-green-500 focus:ring-green-500">

                        </div>


                        {{-- Status --}}

                        <div class="w-full">
                            <label for="status" class="mb-2 block text-sm font-semibold text-gray-700">
                                وضعیت پروژه
                            </label>

                            <div class="relative">
                                <select name="status" id="status"
                                    class="w-full appearance-none rounded-xl border border-gray-200 bg-white px-4 py-3 pl-10 text-sm font-medium text-gray-700 shadow-sm outline-none transition duration-200 hover:border-teal-500 focus:border-teal-600 focus:ring-4 focus:ring-teal-600/10">
                                    <option value="0" {{ old('status', '0') == '0' ? 'selected' : '' }}>
                                        در حال توسعه
                                    </option>

                                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>
                                        تکمیل شده
                                    </option>
                                </select>

                               
                            </div>

                           
                        </div>


                    </div>

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
