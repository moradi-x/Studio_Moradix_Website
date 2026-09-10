@extends('admin.layouts.layout')

@section('title', 'Show Setting')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-lg font-bold text-gray-800">
        Show Setting
    </h1>
</div>

<div class="bg-white p-6 rounded-lg shadow max-w-2xl">

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Key
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $setting->key }}
        </div>
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Value
        </label>

        <div class="border rounded-lg px-4 py-3 text-gray-800 bg-gray-50 whitespace-pre-line">{{ $setting->value ?? '-' }}</div>
    </div>

    <div class="flex items-center gap-3">

        <a href="{{ route('admin.settings.edit', $setting) }}"
           class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
            Edit
        </a>

        <a href="{{ route('admin.settings.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

    </div>

</div>

@endsection