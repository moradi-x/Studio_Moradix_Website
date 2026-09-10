@extends('admin.layouts.layout')

@section('title', 'Create Service')

@section('content')

@include('admin.sections.errors')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-lg font-bold text-gray-800">
        Create Service
    </h1>
</div>

<form action="{{ route('admin.services.store') }}"
      method="POST"
      class="bg-white p-6 rounded-lg shadow max-w-2xl">

    @csrf

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Title
        </label>

        <input
            type="text"
            name="title"
            value="{{ old('title') }}"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

        @error('title')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Slug
        </label>

        <input
            type="text"
            name="slug"
            value="{{ old('slug') }}"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

        @error('slug')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Description
        </label>

        <textarea
            name="description"
            rows="5"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >{{ old('description') }}</textarea>

        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Order
        </label>

        <input
            type="number"
            name="order"
            value="{{ old('order', 0) }}"
            min="0"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

        @error('order')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6">
        <label class="inline-flex items-center cursor-pointer">

            <input
                type="checkbox"
                name="status"
                value="1"
                {{ old('status', true) ? 'checked' : '' }}
                class="w-4 h-4 text-green-600 rounded border-gray-300 focus:ring-green-500"
            >

            <span class="ml-2 text-sm font-medium text-gray-700">
                Active
            </span>

        </label>
    </div>

    <div class="flex items-center gap-3">

        <button
            type="submit"
            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
            Create
        </button>

        <a href="{{ route('admin.services.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

    </div>

</form>

@endsection
