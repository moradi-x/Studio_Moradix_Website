
@extends('admin.layouts.layout')

@section('title', 'Message Details')

@section('content')
    <div class="admin-contact-show">

        <div class="admin-contact-show-header">
            <h1 class="admin-contact-show-title">پیام‌ها</h1>
        </div>

        <div class="admin-contact-show-card">
            <div class="admin-contact-show-grid">

                <div class="admin-contact-show-field">
                    <label>نام</label>
                    <div class="admin-contact-show-value">
                        {{ $contactMessage->name }}
                    </div>
                </div>

                <div class="admin-contact-show-field">
                    <label>شماره تماس</label>
                    <div class="admin-contact-show-value" dir="ltr">
                        {{ $contactMessage->phone }}
                    </div>
                </div>

                <div class="admin-contact-show-field">
                    <label>نوع درخواست</label>
                    <div class="admin-contact-show-value">
                        {{ $contactMessage->request_type_label ?: '-' }}
                    </div>
                </div>

                <div class="admin-contact-show-field">
                    <label>نوع پروژه</label>
                    <div class="admin-contact-show-value">
                        {{ $contactMessage->project_type_label ?: '-' }}
                    </div>
                </div>

                <div class="admin-contact-show-field admin-contact-show-full">
                    <label>تاریخ</label>
                    <div class="admin-contact-show-value">
{{ $contactMessage->created_at
    ? \Morilog\Jalali\Jalalian::fromCarbon($contactMessage->created_at)->format('%d %B %Y ساعت %H:%M')
    : '-' }}                    </div>
                </div>

                <div class="admin-contact-show-field admin-contact-show-full">
                    <label>پیام</label>
                    <div class="admin-contact-show-value admin-contact-show-message">{{ $contactMessage->message ?: 'No message provided.' }}</div>
                </div>

            </div>

            <div class="admin-contact-show-actions">
                <a
                    href="{{ route('admin.contact-messages.index') }}"
                    class="admin-contact-show-back"
                >
                    بازگشت
                </a>
            </div>
        </div>

    </div>
@endsection
