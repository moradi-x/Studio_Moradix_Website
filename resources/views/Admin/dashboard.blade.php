@extends('admin.layouts.layout')

@section('title', 'داشبورد')

@section('content')

    <div class="w-full p-6 space-y-6">

        {{-- ========================================================= --}}
        {{-- Header --}}
        {{-- ========================================================= --}}

        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4">

            <div>

                <h1 class="text-2xl font-bold text-gray-800">
                    داشبورد
                </h1>
            </div>

            <div class="flex items-center gap-3">

                <a href="{{ url('/') }}" target="_blank"
                    class="px-4 py-2.5 rounded-lg border border-gray-200 bg-white text-sm text-gray-700 hover:bg-gray-50 transition">
                    مشاهده سایت
                </a>

                <a href="{{ route('admin.projects.create') }}"
                    class="px-4 py-2.5 rounded-lg bg-green-600 text-white text-sm hover:bg-green-700 transition">
                    + پروژه جدید
                </a>

            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- KPI Cards --}}
        {{-- ========================================================= --}}

        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-5">

            {{-- Projects --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            کل پروژه‌ها
                        </p>

                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ number_format($projectsCount) }}
                        </p>
                    </div>

                    <div class="w-11 h-11 rounded-xl bg-green-50 text-green-600 flex items-center justify-center">
                        <span>◈</span>
                    </div>

                </div>

                <a href="{{ route('admin.projects.index') }}"
                    class="inline-block mt-4 text-xs text-green-600 hover:text-green-700">
                    مشاهده پروژه‌ها →
                </a>

            </div>


            {{-- Featured --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            پروژه‌های ویژه
                        </p>

                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ number_format($featuredProjectsCount) }}
                        </p>
                    </div>

                    <div class="w-11 h-11 rounded-xl bg-yellow-50 text-yellow-600 flex items-center justify-center">
                        ★
                    </div>

                </div>

            </div>


            {{-- Requests --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            درخواست‌های جدید
                        </p>

                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ number_format($newRequestsCount) }}
                        </p>
                    </div>

                    <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                        !
                    </div>

                </div>

                <a href="{{ route('admin.project-requests.index') }}"
                    class="inline-block mt-4 text-xs text-blue-600 hover:text-blue-700">
                    مشاهده درخواست‌ها →
                </a>

            </div>


            {{-- Visits --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            بازدید امروز
                        </p>

                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ number_format($todayVisits) }}
                        </p>
                    </div>

                    <div class="w-11 h-11 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                        ◉
                    </div>

                </div>

            </div>


            {{-- Unique Visitors --}}
            <div class="bg-white border border-gray-100 rounded-2xl p-5 shadow-sm">

                <div class="flex items-center justify-between">

                    <div>
                        <p class="text-sm text-gray-500">
                            بازدیدکننده یکتا
                        </p>

                        <p class="text-3xl font-bold text-gray-800 mt-2">
                            {{ number_format($uniqueVisitors) }}
                        </p>

                        <p class="text-xs text-gray-400 mt-2">
                            ۳۰ روز اخیر
                        </p>
                    </div>

                    <div class="w-11 h-11 rounded-xl bg-orange-50 text-orange-600 flex items-center justify-center">
                        ◌
                    </div>

                </div>

            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- Visit Chart --}}
        {{-- ========================================================= --}}

        <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-6">

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">

                <div>
                    <h2 class="text-lg font-bold text-gray-800">
                        آمار بازدید سایت
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        روند بازدید ۳۰ روز اخیر
                    </p>
                </div>

                <div class="text-sm text-gray-500">
                    امروز:
                    <span class="font-bold text-gray-800">
                        {{ number_format($todayVisits) }}
                    </span>
                </div>

            </div>

            <div class="h-80">
                <canvas id="visitsChart" data-visits='@json($visitsChart)'></canvas>
            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- Requests + Categories --}}
        {{-- ========================================================= --}}

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

            {{-- Requests --}}
            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-6">

                <div class="mb-6">
                    <h2 class="text-lg font-bold text-gray-800">
                        وضعیت درخواست‌ها
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        وضعیت فعلی درخواست‌های پروژه
                    </p>
                </div>

                <div class="space-y-4">

                    @php
                        $requestStatuses = [
                            'new' => ['label' => 'جدید', 'color' => 'blue'],
                            'contacted' => ['label' => 'در حال پیگیری', 'color' => 'yellow'],
                            'completed' => ['label' => 'تکمیل شده', 'color' => 'green'],
                            'rejected' => ['label' => 'رد شده', 'color' => 'red'],
                        ];
                    @endphp

                    @foreach ($requestStatuses as $status => $item)
                        <div class="flex items-center justify-between">

                            <div class="flex items-center gap-3">

                                <span class="w-2.5 h-2.5 rounded-full bg-{{ $item['color'] }}-500"></span>

                                <span class="text-sm text-gray-600">
                                    {{ $item['label'] }}
                                </span>

                            </div>

                            <span class="font-bold text-gray-800">
                                {{ number_format($requestsByStatus[$status]) }}
                            </span>

                        </div>
                    @endforeach

                </div>

            </div>


            {{-- Categories --}}
            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-6">

                <div class="mb-6">
                    <h2 class="text-lg font-bold text-gray-800">
                        پروژه‌ها بر اساس دسته‌بندی
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        پراکندگی پروژه‌های ثبت‌شده
                    </p>
                </div>

                <div class="space-y-4">

                    @foreach ($projectsByCategory as $category)
                        @php
                            $percentage =
                                $projectsCount > 0 ? round(($category->projects_count / $projectsCount) * 100) : 0;
                        @endphp

                        <div>

                            <div class="flex items-center justify-between mb-2">

                                <span class="text-sm text-gray-600">
                                    {{ $category->name }}
                                </span>

                                <span class="text-sm font-semibold text-gray-800">
                                    {{ $category->projects_count }}
                                </span>

                            </div>

                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">

                                <div class="h-full bg-green-500 rounded-full" style="width: {{ $percentage }}%"></div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- Latest Requests --}}
        {{-- ========================================================= --}}

        <div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden">

            <div class="p-6 flex items-center justify-between">

                <div>
                    <h2 class="text-lg font-bold text-gray-800">
                        آخرین درخواست‌ها
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        جدیدترین درخواست‌های ثبت‌شده
                    </p>
                </div>

                <a href="{{ route('admin.project-requests.index') }}" class="text-sm text-green-600 hover:text-green-700">
                    مشاهده همه
                </a>

            </div>

            <div class="overflow-x-auto">

                <table class="w-full text-sm text-right">

                    <thead class="bg-gray-50 border-y border-gray-100">

                        <tr>

                            <th class="px-6 py-4">
                                نام
                            </th>

                            <th class="px-6 py-4">
                                دسته‌بندی
                            </th>

                            <th class="px-6 py-4">
                                تلفن
                            </th>

                            <th class="px-6 py-4">
                                وضعیت
                            </th>

                            <th class="px-6 py-4">
                                تاریخ
                            </th>

                        </tr>

                    </thead>

                    <tbody class="divide-y divide-gray-100">

                        @forelse ($latestRequests as $request)
                            <tr class="hover:bg-gray-50 transition">

                                <td class="px-6 py-4 font-medium text-gray-800">
                                    {{ $request->name }}
                                </td>

                                <td class="px-6 py-4 text-gray-500">
                                    {{ $request->category?->name ?? '—' }}
                                </td>

                                <td class="px-6 py-4 text-gray-500">
                                    {{ $request->phone }}
                                </td>

                                <td class="px-6 py-4">

                                    <span class="px-2.5 py-1 rounded-full text-xs bg-gray-100 text-gray-600">
                                        {{ $request->status_label }}
                                    </span>

                                </td>

                                <td class="px-6 py-4 text-gray-400">
                                    {{ $request->created_at->format('Y/m/d') }}
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-gray-400">
                                    هنوز درخواستی ثبت نشده است.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- Projects + Technologies --}}
        {{-- ========================================================= --}}

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">

            {{-- Latest Projects --}}
            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm overflow-hidden">

                <div class="p-6 flex items-center justify-between">

                    <div>
                        <h2 class="text-lg font-bold text-gray-800">
                            پروژه‌های اخیر
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            آخرین پروژه‌های ثبت‌شده
                        </p>
                    </div>

                    <a href="{{ route('admin.projects.index') }}" class="text-sm text-green-600">
                        همه پروژه‌ها
                    </a>

                </div>

                <div class="divide-y divide-gray-100">

                    @forelse ($latestProjects as $project)
                        <div class="p-5 flex items-center justify-between gap-4">

                            <div class="min-w-0">

                                <h3 class="font-semibold text-gray-800 truncate">
                                    {{ $project->title }}
                                </h3>

                                <p class="text-xs text-gray-400 mt-1">
                                    {{ $project->category?->name ?? 'بدون دسته‌بندی' }}
                                </p>

                            </div>

                            <a href="{{ route('admin.projects.show', $project) }}"
                                class="shrink-0 text-sm text-green-600 hover:text-green-700">
                                مشاهده
                            </a>

                        </div>

                    @empty

                        <div class="p-8 text-center text-gray-400">
                            پروژه‌ای وجود ندارد.
                        </div>
                    @endforelse

                </div>

            </div>


            {{-- Technologies --}}
            <div class="bg-white border border-gray-100 rounded-2xl shadow-sm p-6">

                <div class="mb-6">

                    <h2 class="text-lg font-bold text-gray-800">
                        تکنولوژی‌های محبوب
                    </h2>

                    <p class="text-sm text-gray-500 mt-1">
                        بیشترین استفاده در پروژه‌ها
                    </p>

                </div>

                <div class="space-y-5">

                    @foreach ($popularTechnologies as $technology)
                        <div>

                            <div class="flex items-center justify-between mb-2">

                                <span class="text-sm font-medium text-gray-700">
                                    {{ $technology->name }}
                                </span>

                                <span class="text-xs text-gray-400">
                                    {{ $technology->projects_count }} پروژه
                                </span>

                            </div>

                            @php
                                $maxProjects = max($popularTechnologies->max('projects_count'), 1);

                                $percentage = round(($technology->projects_count / $maxProjects) * 100);
                            @endphp

                            <div class="w-full h-2 bg-gray-100 rounded-full">

                                <div class="h-full bg-gray-700 rounded-full" style="width: {{ $percentage }}%"></div>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- System Overview --}}
        {{-- ========================================================= --}}

        <div class="bg-gray-900 rounded-2xl p-6 text-white">

            <div class="mb-6">

                <h2 class="text-lg font-bold">
                    خلاصه سیستم
                </h2>

                <p class="text-sm text-gray-400 mt-1">
                    وضعیت کلی بخش‌های مدیریتی
                </p>

            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">

                <div class="bg-white/5 rounded-xl p-4">
                    <p class="text-xs text-gray-400">
                        پروژه‌ها
                    </p>

                    <p class="text-xl font-bold mt-2">
                        {{ $projectsCount }}
                    </p>
                </div>

                <div class="bg-white/5 rounded-xl p-4">
                    <p class="text-xs text-gray-400">
                        دسته‌بندی‌ها
                    </p>

                    <p class="text-xl font-bold mt-2">
                        {{ $categoriesCount }}
                    </p>
                </div>

                <div class="bg-white/5 rounded-xl p-4">
                    <p class="text-xs text-gray-400">
                        تکنولوژی‌ها
                    </p>

                    <p class="text-xl font-bold mt-2">
                        {{ $technologiesCount }}
                    </p>
                </div>

                <div class="bg-white/5 rounded-xl p-4">
                    <p class="text-xs text-gray-400">
                        سرویس‌ها
                    </p>

                    <p class="text-xl font-bold mt-2">
                        {{ $servicesCount }}
                    </p>
                </div>

            </div>

        </div>

    </div>


    {{-- ============================================================= --}}
    {{-- Chart.js --}}
    {{-- ============================================================= --}}



@endsection
