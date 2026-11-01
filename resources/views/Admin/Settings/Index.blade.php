
@extends('admin.layouts.layout')

@section('title', 'Settings')

@section('content')

    <div class="admin-setting-index">

        @include('admin.sections.messages')

        <div class="admin-setting-index-header">

            <h1 class="admin-setting-index-title">
                تنظیمات
            </h1>

            <a href="{{ route('admin.settings.create') }}"
               class="admin-setting-index-create">
                تنظیمات جدید
            </a>

        </div>

        <div class="admin-setting-index-table-card">

            <div class="admin-setting-index-table-wrapper">

                <table class="admin-setting-index-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>مقدار</th>
                            <th class="admin-setting-index-actions-heading">
                                عملیات
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($settings as $key => $setting)

                            <tr>

                                <td class="admin-setting-index-number">
                                    {{ $settings->firstItem() + $key }}
                                </td>

                                <td class="admin-setting-index-key">
                                    {{ $setting->key }}
                                </td>

                                <td class="admin-setting-index-value">
                                    {{ $setting->value ?? '-' }}
                                </td>

                                <td>
                                    <div class="admin-setting-index-actions">

                                        <a href="{{ route('admin.settings.edit', $setting) }}"
                                           class="admin-setting-index-edit">
                                            ویرایش
                                        </a>

                                        <form action="{{ route('admin.settings.destroy', $setting) }}"
                                              method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="admin-setting-index-delete">
                                                حذف
                                            </button>

                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="4" class="admin-setting-index-empty">
                                    تنظیماتی پیدا نشد.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

        <div class="admin-setting-index-pagination">
            {{ $settings->links() }}
        </div>

    </div>

@endsection
