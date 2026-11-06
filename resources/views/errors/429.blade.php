
@extends('errors.layout')

@section('code', '429')
@section('title', 'درخواست‌های بیش از حد مجاز')
@section('message', 'در مدت کوتاهی درخواست‌های زیادی ارسال کرده‌اید. برای حفظ امنیت و پایداری سرویس، لطفاً کمی صبر کنید و دوباره تلاش کنید.')

@section('icon')
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="9"/>
    <path d="M12 7v5"/>
    <path d="M12 16h.01"/>
</svg>
@endsection
