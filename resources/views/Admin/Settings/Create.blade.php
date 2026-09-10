@extends('admin.layouts.layout')

@section('title', 'Create Setting')

@section('content')

@include('admin.sections.errors')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-lg font-bold text-gray-800">
        Create Setting
    </h1>
</div>

<form action="{{ route('admin.settings.store') }}"
      method="POST"
      class="bg-white p-6 rounded-lg shadow max-w-2xl">

    @csrf

    <div class="mb-5">

        <label class="block mb-2 font-medium text-gray-700">
            Key
        </label>

        <input
            type="text"
            name="key"
            value="{{ old('key') }}"
            placeholder="site_name"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

        @error('key')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror

    </div>

    <div class="mb-5">

        <label class="block mb-2 font-medium text-gray-700">
            Value
        </label>

        <textarea
            name="value"
            rows="5"
            placeholder="Enter setting value..."
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >{{ old('value') }}</textarea>

        @error('value')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror

    </div>

    <div class="flex items-center gap-3">

        <button
            type="submit"
            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
            Create
        </button>

         <a href="{{ route('admin.settings.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

    </div>

</form>

@endsection
