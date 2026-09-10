@extends('admin.layouts.layout')

@section('title', 'Edit Technology')

@section('content')

@include('admin.sections.errors')

<div class="flex items-center justify-between mb-6">

    <h1 class="text-lg font-bold text-gray-800">
        Edit Technology
    </h1>

</div>


<form action="{{ route('admin.technologies.update', $technology) }}"
      method="POST"
      class="bg-white p-6 rounded-lg shadow max-w-2xl">

    @csrf
    @method('PUT')


    <!-- Name -->
    <div class="mb-5">

        <label class="block mb-2 font-medium text-gray-700">
            Name
        </label>

        <input
            type="text"
            name="name"
            value="{{ old('name', $technology->name) }}"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

        @error('name')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror

    </div>


    <!-- Slug -->
    <div class="mb-5">

        <label class="block mb-2 font-medium text-gray-700">
            Slug
        </label>

        <input
            type="text"
            name="slug"
            value="{{ old('slug', $technology->slug) }}"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

        @error('slug')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror

    </div>


    <!-- Description -->
    <div class="mb-5">

        <label class="block mb-2 font-medium text-gray-700">
            Description
        </label>

        <textarea
            name="description"
            rows="4"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >{{ old('description', $technology->description) }}</textarea>

        @error('description')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror

    </div>


    <!-- Buttons -->
    <div class="flex items-center gap-3">

        <button
            type="submit"
            class="bg-green-600 text-white px-6 py-2 rounded-lg hover:bg-green-700 transition">
            Update
        </button>

        <a href="{{ route('admin.categories.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

    </div>

</form>

@endsection
