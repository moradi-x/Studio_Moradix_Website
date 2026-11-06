
@extends('errors.layout')

@section('code', '503')
@section('title', 'سرویس موقتاً در دسترس نیست')
@section('message', 'سرویس به دلیل انجام عملیات فنی یا نگهداری موقتاً در دسترس نیست. لطفاً کمی بعد دوباره مراجعه کنید.')

@section('icon')
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
    <path d="M12 3v3"/>
    <path d="M12 18v3"/>
    <path d="M4.22 4.22l2.12 2.12"/>
    <path d="M17.66 17.66l2.12 2.12"/>
    <path d="M3 12h3"/>
    <path d="M18 12h3"/>
    <circle cx="12" cy="12" r="4"/>
</svg>
@endsection
