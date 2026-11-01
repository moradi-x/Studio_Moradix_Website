@extends('admin.layouts.layout')

@section('title', 'پروژه‌ها')

@section('content')

    <div class="admin-project-index">

        {{-- Header --}}
        <div class="admin-project-index-header">

            <h1 class="admin-project-index-title">
                پروژه‌ها
            </h1>

            <a href="{{ route('admin.projects.create') }}" class="admin-project-index-create">
                پروژه جدید
            </a>

        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="admin-project-index-alert admin-project-index-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Error Message --}}
        @if (session('error'))
            <div class="admin-project-index-alert admin-project-index-error">
                {{ session('error') }}
            </div>
        @endif

        {{-- Projects Table --}}
        <div class="admin-project-index-table-card">

            <div class="admin-project-index-table-wrapper">

                <table class="admin-project-index-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم پروژه</th>
                            <th class="admin-project-index-center">دسته‌بندی</th>
                            <th>وضعیت</th>
                            <th class="admin-project-index-center">عملیات</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($projects as $project)
                            <tr>

                                {{-- ID --}}
                                <td class="admin-project-index-id">
                                    {{ $project->id }}
                                </td>

                                {{-- Project Name --}}
                                <td class="admin-project-index-name">
                                    {{ $project->title }}
                                </td>

                                {{-- Category --}}
                                <td class="admin-project-index-category">
                                    @if ($project->category)
                                        {{ $project->category->name }}
                                    @else
                                        <span class="admin-project-index-dash">—</span>
                                    @endif
                                </td>

                                {{-- Project Status --}}
                                <td>
                                    @if ((int) $project->status === 1)
                                        <span class="admin-project-index-status admin-project-index-completed">
                                            <span></span>
                                            تکمیل شده
                                        </span>
                                    @else
                                        <span class="admin-project-index-status admin-project-index-development">
                                            <span></span>
                                            در حال توسعه
                                        </span>
                                    @endif
                                </td>

                                {{-- Actions --}}
                                <td class="admin-project-index-actions-cell">

                                    <details class="admin-project-index-menu">

                                        <summary class="admin-project-index-menu-button">
                                            عملیات

                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M19 9l-7 7-7-7" />
                                            </svg>
                                        </summary>

                                        {{-- Operations Menu --}}
                                        <div class="admin-project-index-menu-content">

                                            <a href="{{ route('admin.projects.edit', $project) }}"
                                                class="admin-project-index-menu-edit">
                                                ویرایش پروژه
                                            </a>

                                            <a href="{{ route('admin.projects.images.edit', $project) }}"
                                                class="admin-project-index-menu-images">
                                                ویرایش تصاویر
                                            </a>

                                            <a href="{{ route('admin.projects.show', $project) }}"
                                                class="admin-project-index-menu-show">
                                                نمایش
                                            </a>

                                            <div class="admin-project-index-menu-divider"></div>

                                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                                                onsubmit="return confirm('آیا مطمئنی می‌خواهی پروژه «{{ $project->title }}» و تمام تصاویر آن حذف شود؟')">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="admin-project-index-menu-delete">
                                                    حذف پروژه
                                                </button>

                                            </form>

                                        </div>

                                    </details>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" class="admin-project-index-empty">
                                    هنوز هیچ پروژه‌ای ثبت نشده است.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

            {{-- Pagination --}}
            @if ($projects->hasPages())
                <div class="admin-project-index-pagination">
                    {{ $projects->links() }}
                </div>
            @endif

        </div>

    </div>

@endsection
