@extends('admin.layouts.layout')

@section('title', 'پیام‌های سایت')

@section('content')
    <div class="admin-contact-index">

        <div class="admin-contact-index-header">
            <h1 class="admin-contact-index-title">پیام‌های سایت</h1>
        </div>

        @if (session('success'))
            <div class="admin-contact-index-alert admin-contact-index-alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('deleted'))
            <div class="admin-contact-index-alert admin-contact-index-alert-error">
                {{ session('deleted') }}
            </div>
        @endif

        @if (session('error'))
            <div class="admin-contact-index-alert admin-contact-index-alert-error">
                {{ session('error') }}
            </div>
        @endif

        <div class="admin-contact-index-table-card">
            <div class="admin-contact-index-table-wrapper">
                <table class="admin-contact-index-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام</th>
                            <th>شماره تماس</th>
                            <th>نوع درخواست</th>
                            <th>نوع پروژه</th>
                            <th>تاریخ ثبت</th>
                            <th class="admin-contact-index-actions-heading">عملیات</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($contactMessages as $contactMessage)
                            <tr>
                                <td>
                                    {{ $contactMessages->firstItem() + $loop->index }}
                                </td>

                                <td class="admin-contact-index-name">
                                    {{ $contactMessage->name }}
                                </td>

                                <td dir="ltr">
                                    {{ $contactMessage->phone }}
                                </td>

                                <td>
                                    {{ $contactMessage->request_type_label }}
                                </td>

                                <td>
                                    {{ $contactMessage->project_type_label }}
                                </td>

                                <td>
                                    {{ $contactMessage->created_at
                                        ? \Morilog\Jalali\Jalalian::fromCarbon($contactMessage->created_at)->format('%d %B %Y ساعت %H:%M')
                                        : '-' }}
                                </td>

                                <td>
                                    <div class="admin-contact-index-actions">
                                        <a href="{{ route('admin.contact-messages.show', $contactMessage->id) }}"
                                            class="admin-contact-index-show">
                                            مشاهده
                                        </a>

                                        <form action="{{ route('admin.contact-messages.destroy', $contactMessage->id) }}"
                                            method="POST" onsubmit="return confirm('از حذف این پیام مطمئن هستید؟')">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="page" value="{{ request('page', 1) }}">

                                            <button type="submit" class="admin-contact-index-delete">
                                                حذف
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="admin-contact-index-empty">
                                    هنوز پیامی ثبت نشده است.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="admin-contact-index-pagination">
            {{ $contactMessages->links() }}
        </div>

    </div>
@endsection
