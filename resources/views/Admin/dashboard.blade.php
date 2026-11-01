@extends('admin.layouts.layout')

@section('title', 'داشبورد')

@section('content')

    <div class="admin-dashboard">
        {{-- ========================================================= --}}
        {{-- Header --}}
        {{-- ========================================================= --}}


        <div class="admin-dashboard-header">

            <div class="admin-dashboard-heading">
                <h1 class="admin-dashboard-title">داشبورد</h1>
                <p class="admin-dashboard-subtitle">
                    نمای کلی عملکرد و وضعیت وب‌سایت
                </p>
            </div>

            <div class="admin-dashboard-actions">

                <a href="{{ url('/') }}" target="_blank" class="admin-btn admin-btn-outline">
                    مشاهده سایت
                </a>

                <a href="{{ route('admin.projects.create') }}" class="admin-btn admin-btn-primary">
                    <span>+</span>
                    پروژه جدید
                </a>

            </div>

        </div>



        {{-- ========================================================= --}}
        {{-- KPI Cards --}}
        {{-- ========================================================= --}}


        <div class="admin-kpi-grid">

            {{-- Projects --}}
            <div class="admin-kpi-card admin-kpi-green">
                <div class="admin-kpi-top">
                    <div>
                        <p class="admin-kpi-label">کل پروژه‌ها</p>
                        <p class="admin-kpi-value">
                            {{ number_format($projectsCount) }}
                        </p>
                    </div>
                    <div class="admin-kpi-icon">◈</div>
                </div>

                <a href="{{ route('admin.projects.index') }}" class="admin-kpi-link">
                    مشاهده پروژه‌ها
                    <span>←</span>
                </a>
            </div>

            {{-- Requests --}}
            <div class="admin-kpi-card admin-kpi-blue">
                <div class="admin-kpi-top">
                    <div>
                        <p class="admin-kpi-label">کل پیام‌ها و درخواست‌ها</p>
                        <p class="admin-kpi-value">
                            {{ number_format($newRequestsCount) }}
                        </p>
                    </div>
                    <div class="admin-kpi-icon">!</div>
                </div>

                <a href="{{ route('admin.contact-messages.index') }}" class="admin-kpi-link">
                    مشاهده درخواست‌ها
                    <span>←</span>
                </a>
            </div>

            {{-- Visits --}}
            <div class="admin-kpi-card admin-kpi-purple">
                <div class="admin-kpi-top">
                    <div>
                        <p class="admin-kpi-label">بازدید امروز</p>
                        <p class="admin-kpi-value">
                            {{ number_format($todayVisits) }}
                        </p>
                    </div>
                    <div class="admin-kpi-icon">◉</div>
                </div>
            </div>

            {{-- Unique Visitors --}}
            <div class="admin-kpi-card admin-kpi-orange">
                <div class="admin-kpi-top">
                    <div>
                        <p class="admin-kpi-label">بازدیدکننده یکتا</p>
                        <p class="admin-kpi-value">
                            {{ number_format($uniqueVisitors) }}
                        </p>
                        <p class="admin-kpi-caption">۳۰ روز اخیر</p>
                    </div>
                    <div class="admin-kpi-icon">◌</div>
                </div>
            </div>

            {{-- Categories --}}
            <div class="admin-kpi-card admin-kpi-teal">
                <div class="admin-kpi-top">
                    <div>
                        <p class="admin-kpi-label">دسته‌بندی‌ها</p>
                        <p class="admin-kpi-value">
                            {{ number_format($categoriesCount) }}
                        </p>
                    </div>
                    <div class="admin-kpi-icon">▦</div>
                </div>
            </div>

        </div>



        {{-- ========================================================= --}}
        {{-- Visit Chart --}}
        {{-- ========================================================= --}}


        <div class="admin-panel-card admin-visits-panel">

            <div class="admin-panel-header">

                <div>
                    <h2 class="admin-panel-title">آمار بازدید سایت</h2>
                    <p class="admin-panel-subtitle">
                        روند بازدید ۳۰ روز اخیر
                    </p>
                </div>

                <div class="admin-visits-today">
                    <span>بازدید امروز</span>
                    <strong>{{ number_format($todayVisits) }}</strong>
                </div>

            </div>

            <div class="admin-visits-chart">
                <canvas id="visitsChart" data-visits='@json($visitsChart)'></canvas>
            </div>

        </div>


        {{-- ========================================================= --}}
        {{-- Requests + Categories --}}
        {{-- ========================================================= --}}


        <div class="admin-dashboard-two-columns">

            {{-- Message Types --}}
            <div class="admin-panel-card">

                <div class="admin-panel-section-heading">
                    <h2 class="admin-panel-title">تفکیک پیام‌ها</h2>
                    <p class="admin-panel-subtitle">
                        تعداد پیام‌ها بر اساس نوع درخواست
                    </p>
                </div>

                <div class="admin-message-types">

                    @forelse ($messagesByType as $item)
                        @php
                            $typeLabel = match ($item->request_type) {
                                'project' => 'درخواست پروژه',
                                'contact' => 'پیام عمومی',
                                default => $item->request_type,
                            };
                        @endphp

                        <div class="admin-message-type-row">

                            <div class="admin-message-type-info">
                                <span class="admin-message-type-dot"></span>
                                <span>{{ $typeLabel }}</span>
                            </div>

                            <span class="admin-message-type-count">
                                {{ number_format($item->total) }}
                            </span>

                        </div>

                    @empty

                        <p class="admin-empty-message">
                            هنوز پیامی ثبت نشده است.
                        </p>
                    @endforelse

                </div>

            </div>


            {{-- Categories --}}
            <div class="admin-panel-card">

                <div class="admin-panel-section-heading">
                    <h2 class="admin-panel-title">پروژه‌ها بر اساس دسته‌بندی</h2>
                    <p class="admin-panel-subtitle">
                        پراکندگی پروژه‌های ثبت‌شده
                    </p>
                </div>

                <div class="admin-category-list">

                    @foreach ($projectsByCategory as $category)
                        @php
                            $percentage =
                                $projectsCount > 0 ? round(($category->projects_count / $projectsCount) * 100) : 0;
                        @endphp

                        <div class="admin-category-item">

                            <div class="admin-category-info">
                                <span>{{ $category->name }}</span>
                                <strong>{{ number_format($category->projects_count) }}</strong>
                            </div>

                            <div class="admin-category-progress">
                                <div class="admin-category-progress-fill" style="width: {{ $percentage }}%">
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </div>



        {{-- ========================================================= --}}
        {{-- Latest Requests --}}
        {{-- ========================================================= --}}


        <div class="admin-panel-card admin-latest-requests">

            <div class="admin-panel-header">

                <div>
                    <h2 class="admin-panel-title">آخرین درخواست‌ها</h2>
                    <p class="admin-panel-subtitle">
                        جدیدترین درخواست‌های ثبت‌شده
                    </p>
                </div>

                <a href="{{ route('admin.contact-messages.index') }}" class="admin-panel-link">
                    مشاهده همه
                    <span>←</span>
                </a>

            </div>

            <div class="admin-table-wrapper">

                <table class="admin-table">

                    <thead>
                        <tr>
                            <th>نام</th>
                            <th>نوع درخواست</th>
                            <th>نوع پروژه</th>
                            <th>تلفن</th>
                            <th>تاریخ</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($latestRequests as $request)
                            <tr>
                                <td class="admin-table-name">
                                    {{ $request->name }}
                                </td>

                                <td>
                                    {{ $request->request_type }}
                                </td>

                                <td>
                                    {{ $request->project_type }}
                                </td>

                                <td dir="ltr" class="admin-table-phone">
                                    {{ $request->phone }}
                                </td>

                                <td class="admin-table-date">
                                    {{ $request->created_at?->format('Y/m/d') ?? '—' }}
                                </td>
                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="admin-table-empty">
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


        <div class="admin-dashboard-two-columns">

            {{-- Latest Projects --}}
            <div class="admin-panel-card admin-latest-projects">

                <div class="admin-panel-header">
                    <div>
                        <h2 class="admin-panel-title">پروژه‌های اخیر</h2>
                        <p class="admin-panel-subtitle">
                            آخرین پروژه‌های ثبت‌شده
                        </p>
                    </div>

                    <a href="{{ route('admin.projects.index') }}" class="admin-panel-link">
                        همه پروژه‌ها
                        <span>←</span>
                    </a>
                </div>

                <div class="admin-project-list">

                    @forelse ($latestProjects as $project)
                        <div class="admin-project-item">

                            <div class="admin-project-info">
                                <h3>{{ $project->title }}</h3>

                                <p>
                                    {{ $project->category?->name ?? 'بدون دسته‌بندی' }}
                                </p>
                            </div>

                            <a href="{{ route('admin.projects.show', $project) }}" class="admin-project-view">
                                مشاهده
                            </a>

                        </div>

                    @empty

                        <div class="admin-project-empty">
                            پروژه‌ای وجود ندارد.
                        </div>
                    @endforelse

                </div>

            </div>


            {{-- System Overview --}}
            <div class="admin-system-card">

                <div class="admin-system-heading">
                    <h2>خلاصه سیستم</h2>
                    <p>وضعیت کلی بخش‌های مدیریتی</p>
                </div>

                <div class="admin-system-stats">

                    <div class="admin-system-stat">
                        <p>پروژه‌ها</p>
                        <strong>{{ number_format($projectsCount) }}</strong>
                    </div>

                    <div class="admin-system-stat">
                        <p>دسته‌بندی‌ها</p>
                        <strong>{{ number_format($categoriesCount) }}</strong>
                    </div>

                </div>

            </div>

        </div>



        {{-- ============================================================= --}}
        {{-- Chart.js --}}
        {{-- ============================================================= --}}



    @endsection
