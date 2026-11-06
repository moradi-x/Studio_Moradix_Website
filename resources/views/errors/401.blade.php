
@extends('errors.layout')

@section('code', '401')
@section('title', 'نیاز به احراز هویت دارید')
@section('message', 'برای دسترسی به این بخش ابتدا باید هویت خود را تأیید کنید. لطفاً وارد حساب کاربری خود شوید و دوباره تلاش کنید.')

@section('icon')
<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
    <circle cx="12" cy="8" r="4"/>
    <path d="M5 21v-2a7 7 0 0 1 14 0v2"/>
</svg>
@endsection
