@extends('admin.layouts.layout')

@section('title', 'Edit Category')

@section('content')

@include('admin.sections.errors')

<div class="flex items-center justify-between mb-6">

    <h1 class="text-lg font-bold text-gray-800">
ویرایش دسته بندی     </h1>

</div>


<form action="{{ route('admin.categories.update', $category) }}"
      method="POST"
      class="bg-white p-6 rounded-lg shadow max-w-2xl">

    @csrf
    @method('PUT')


    <!-- Name -->
    <div class="mb-5">

        <label class="block mb-2 font-medium text-gray-700">
            نام
        </label>

        <input
            type="text"
            name="name"
            value="{{ old('name', $category->name) }}"
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
            اسلاگ
        </label>

        <input
            type="text"
            name="slug"
            value="{{ old('slug', $category->slug) }}"
            class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-green-500"
        >

        @error('slug')
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
            ویرایش
        </button>

        <a href="{{ route('admin.categories.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             برگشت
        </a>

    </div>


</form>

@endsection

