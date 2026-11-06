
@extends('errors.layout')

@section('code', '419')
@section('title', 'اعتبار نشست شما به پایان رسیده است')
@section('message', 'مدت اعتبار نشست شما تمام شده یا صفحه برای مدت طولانی باز مانده است. لطفاً به صفحه قبل برگردید، صفحه را مجدداً بارگذاری کنید و دوباره تلاش کنید.')

@section('icon')
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="12" r="9"/>
    <path d="M12 7v5l3 2"/>
</svg>
@endsection
