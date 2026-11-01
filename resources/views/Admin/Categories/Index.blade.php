@extends('admin.layouts.Layout')

@section('title', 'Categories')


@section('content')

    <div class="admin-category-index">

        @include('admin.sections.messages')

        <div class="admin-category-index-header">
            <h1 class="admin-category-index-title">
                دسته بندی ها
            </h1>

            <a href="{{ route('admin.categories.create') }}"
               class="admin-category-index-create">
                ایجاد دسته بندی جدید
            </a>
        </div>

        <div class="admin-category-index-table-card">
            <div class="admin-category-index-table-wrapper">
                <table class="admin-category-index-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>اسلاگ</th>
                            <th class="admin-category-index-actions-heading">عملیات</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($categories as $key => $category)
                            <tr>
                                <td class="admin-category-index-number">
                                    {{ $categories->firstItem() + $key }}
                                </td>

                                <td class="admin-category-index-name">
                                    {{ $category->name }}
                                </td>

                                <td class="admin-category-index-slug">
                                    {{ $category->slug }}
                                </td>

                                <td>
                                    <div class="admin-category-index-actions">

                                        <a href="{{ route('admin.categories.edit', $category) }}"
                                           class="admin-category-index-edit">
                                            ویرایش
                                        </a>

                                        <form action="{{ route('admin.categories.destroy', $category) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="admin-category-index-delete">
                                                حذف
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="admin-category-index-empty">
                                    دسته‌بندی‌ای پیدا نشد.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="admin-category-index-pagination">
            {{ $categories->links() }}
        </div>

    </div>

@endsection
