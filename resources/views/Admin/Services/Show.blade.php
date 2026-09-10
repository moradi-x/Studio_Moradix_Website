@extends('admin.layouts.layout')

@section('title', 'Show Service')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-lg font-bold text-gray-800">
        Show Service
    </h1>
</div>

<div class="bg-white p-6 rounded-lg shadow max-w-2xl">

    {{-- Title --}}
    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Title
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $service->title }}
        </div>
    </div>

    {{-- Slug --}}
    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Slug
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $service->slug }}
        </div>
    </div>

    {{-- Description --}}
    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Description
        </label>

        <div class="border rounded-lg px-4 py-3 text-gray-800 bg-gray-50 whitespace-pre-line">{{ $service->description }}</div>
    </div>

    {{-- Status --}}
    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Status
        </label>

        <div class="border rounded-lg px-4 py-2 bg-gray-50">
            @if($service->status)
                <span class="text-green-600 font-medium">
                    Active
                </span>
            @else
                <span class="text-red-600 font-medium">
                    Inactive
                </span>
            @endif
        </div>
    </div>

    {{-- Order --}}
    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Order
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $service->order }}
        </div>
    </div>

    {{-- Buttons --}}
    <div class="flex items-center gap-3">

        <a href="{{ route('admin.services.edit', $service) }}"
           class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
            Edit
        </a>

        <a href="{{ route('admin.services.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>
    </div>

</div>

@endsection