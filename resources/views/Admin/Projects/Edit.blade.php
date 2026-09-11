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


                {{-- Featured --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        پروژه ویژه
                    </label>

                    <select name="featured"
                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-green-500 focus:ring-green-500">
                        <option value="1" {{ old('featured', $project->featured) == 1 ? 'selected' : '' }}>
                            بله
                        </option>

                        <option value="0" {{ old('featured', $project->featured) == 0 ? 'selected' : '' }}>
                            خیر
                        </option>
                    </select>

                    @error('featured')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>


                {{-- Technologies --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        تکنولوژی‌ها
                    </label>

                    @php
                        $selectedTechnologies = old('technologies', $project->technologies->pluck('id')->toArray());
                    @endphp

                    <div class="relative" id="technologyDropdown">

                        {{-- Selected Box --}}
                        <button type="button" onclick="toggleTechnologyDropdown()"
                            class="w-full min-h-[50px] rounded-lg border border-gray-300 bg-white px-4 py-3 flex items-center justify-between gap-3 text-right hover:border-green-500 focus:outline-none focus:border-green-500 transition">

                            <div id="selectedTechnologies" class="flex flex-wrap items-center gap-2 flex-1">
                                @if (count($selectedTechnologies))

                                    @foreach ($technologies as $technology)
                                        @if (in_array($technology->id, $selectedTechnologies))
                                            <span data-selected-label="{{ $technology->id }}"
                                                class="px-2 py-1 rounded-md bg-green-100 text-green-700 text-xs">
                                                {{ $technology->name }}
                                            </span>
                                        @endif
                                    @endforeach
                                @else
                                    <span class="text-gray-400 text-sm">
                                        انتخاب تکنولوژی‌ها
                                    </span>

                                @endif
                            </div>

                            <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>

                        </button>


                        {{-- Dropdown --}}
                        <div id="technologyOptions"
                            class="hidden absolute top-full right-0 left-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg z-50 p-2">

                            <div class="max-h-56 overflow-y-auto">

                                @foreach ($technologies as $technology)
                                    <label
                                        class="flex items-center justify-between gap-3 px-3 py-2.5 rounded-md cursor-pointer hover:bg-green-50 transition">

                                        <span class="text-sm text-gray-700">
                                            {{ $technology->name }}
                                        </span>

                                        <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                                            {{ in_array($technology->id, $selectedTechnologies) ? 'checked' : '' }}
                                            onchange="updateSelectedTechnologies()"
                                            class="technology-checkbox w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">

                                    </label>
                                @endforeach

                            </div>

                        </div>

                    </div>

                    @error('technologies')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror

                    @error('technologies.*')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
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


    <script>
    function toggleTechnologyDropdown() {
        const dropdown = document.getElementById('technologyOptions');

        dropdown.classList.toggle('hidden');
    }


    function updateSelectedTechnologies() {

        const container = document.getElementById('selectedTechnologies');

        const checkboxes = document.querySelectorAll(
            '.technology-checkbox:checked'
        );

        container.innerHTML = '';

        if (checkboxes.length === 0) {

            container.innerHTML = `
                <span class="text-gray-400 text-sm">
                    انتخاب تکنولوژی‌ها
                </span>
            `;

            return;
        }


        checkboxes.forEach(function (checkbox) {

            const label = checkbox
                .closest('label')
                .querySelector('span')
                .textContent
                .trim();

            const badge = document.createElement('span');

            badge.className =
                'px-2 py-1 rounded-md bg-green-100 text-green-700 text-xs';

            badge.textContent = label;

            container.appendChild(badge);
        });
    }


    // بستن لیست وقتی بیرون از باکس کلیک شود
    document.addEventListener('click', function (event) {

        const dropdown = document.getElementById('technologyDropdown');

        if (!dropdown.contains(event.target)) {

            document
                .getElementById('technologyOptions')
                .classList.add('hidden');

        }
    });
</script>

@endsection
