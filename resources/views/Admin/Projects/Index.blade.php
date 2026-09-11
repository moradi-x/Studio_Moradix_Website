@extends('admin.layouts.layout')

@section('content')

    <div class="p-6">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">

            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    پروژه‌ها
                </h1>
            </div>

            <a href="{{ route('admin.projects.create') }}"
                class="px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700">
                Create Project
            </a>

        </div>


        {{-- Success Message --}}
        @if (session('success'))
            <div class="mb-5 rounded-lg bg-green-100 border border-green-200 text-green-700 px-4 py-3">
                {{ session('success') }}
            </div>
        @endif


        {{-- Error Message --}}
        @if (session('error'))
            <div class="mb-5 rounded-lg bg-red-100 border border-red-200 text-red-700 px-4 py-3">
                {{ session('error') }}
            </div>
        @endif


        {{-- Projects Table --}}
        <div class="w-full">
            <div class="overflow-x-auto">

                <table class="w-full text-sm text-right">

                    <thead class="bg-gray-50 border-b border-gray-200">

                        <tr>

                            <th class="px-4 py-3 font-semibold text-gray-700">
                                #
                            </th>

                            <th class="px-4 py-3 font-semibold text-gray-700">
                                اسم پروژه
                            </th>

                            <th class="px-6 py-3 font-semibold text-gray-700 text-center translate-x-9">
                                تکنولوژی‌ها
                            </th>
                            <th class="px-6 py-3 font-semibold text-gray-700 text-center">
                                دسته‌بندی
                            </th>

                            <th class="px-4 py-3 font-semibold text-gray-700 ">
                                وضعیت
                            </th>

                            <th class="px-4 py-3 font-semibold text-gray-700 text-center">
                                عملیات
                            </th>

                        </tr>

                    </thead>


                    <tbody class="divide-y divide-gray-100">

                        @forelse($projects as $project)
                            <tr class="hover:bg-gray-50 transition">

                                {{-- ID --}}
                                <td class="px-4 py-4 text-gray-500">
                                    {{ $project->id }}
                                </td>


                                {{-- Project Name --}}
                                <td class="px-4 py-4 font-semibold text-gray-800">
                                    {{ $project->title }}
                                </td>


                                {{-- Technologies --}}
                                <td class="px-6 py-4 text-center align-middle">
                                    <div class="relative translate-x-9">

                                        @if ($project->technologies->count())
                                            <div class="flex flex-wrap justify-center items-center gap-2">

                                                @foreach ($project->technologies as $technology)
                                                    <span class="px-2 py-1 rounded-md bg-gray-100 text-gray-600 text-xs">
                                                        {{ $technology->name }}
                                                    </span>
                                                @endforeach

                                            </div>
                                        @else
                                            <span class="text-gray-400">
                                                —
                                            </span>
                                        @endif

                                    </div>
                                </td>
                                {{-- Category --}}
                                <td class="px-6 py-4 text-gray-700 text-center">
                                    @if ($project->category)
                                        {{ $project->category->name }}
                                    @else
                                        <span class="text-gray-400">—</span>
                                    @endif
                                </td>


                                {{-- Status --}}
                                <td class="px-8 py-4 ">

                                    @if ($project->status)
                                        <span class="text-green-600">
                                            فعال
                                        </span>
                                    @else
                                        <span class="text-red-600">
                                            غیرفعال
                                        </span>
                                    @endif

                                </td>


                                {{-- Actions --}}
                                <td class="px-4 py-4 text-center">

                                    <details class="group relative inline-block">

                                        <summary
                                            class="list-none cursor-pointer inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-gray-700 text-white text-xs font-medium hover:bg-gray-800 transition">
                                            عملیات

                                            <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>

                                        </summary>


                                        {{-- Operations Menu --}}
                                        <div
                                            class="absolute left-1/2 -translate-x-1/2 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-50 p-2 text-right">

                                            <a href="{{ route('admin.projects.edit', $project) }}"
                                                class="block w-full px-3 py-2 rounded-md text-sm text-blue-600 hover:bg-blue-50">
                                                ویرایش پروژه
                                            </a>


                                            <a href="{{ route('admin.projects.images.edit', $project) }}"
                                                class="block w-full px-3 py-2 rounded-md text-sm text-purple-600 hover:bg-purple-50">
                                                ویرایش تصاویر
                                            </a>


                                            <a href="{{ route('admin.projects.show', $project) }}"
                                                class="block w-full px-3 py-2 rounded-md text-sm text-gray-700 hover:bg-gray-100">
                                                نمایش
                                            </a>


                                            <div class="my-1 border-t border-gray-100"></div>


                                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                                onsubmit="return confirm('آیا مطمئنی می‌خواهی پروژه «{{ $project->title }}» و تمام تصاویر آن حذف شود؟')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"
                                                    class="block w-full text-right px-4 py-2 text-sm text-red-600 hover:bg-red-50">
                                                    حذف پروژه
                                                </button>
                                            </form>

                                        </div>

                                    </details>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="6" class="px-4 py-10 text-center text-gray-400">
                                    هنوز هیچ پروژه‌ای ثبت نشده است.
                                </td>

                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

            {{-- Pagination --}}
            @if ($projects->hasPages())
                <div class="px-4 py-4">
                    {{ $projects->links() }}
                </div>
            @endif

        </div>

    </div>

@endsection
