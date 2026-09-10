@extends('admin.layouts.layout')

@section('title', 'Edit Project Request')

@section('content')

<div class="flex items-center justify-between mb-6">

    <h1 class="text-lg font-bold text-gray-800">
        Edit Project Request
    </h1>

</div>

<div class="bg-white p-6 rounded-lg shadow max-w-3xl">

    <form action="{{ route('admin.project-requests.update', $projectRequest) }}"
          method="POST">

        @csrf
        @method('PUT')

        {{-- Name --}}
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-700">
                Name
            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name', $projectRequest->name) }}"
                class="w-full border rounded-lg px-4 py-2"
            >

            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-700">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email', $projectRequest->email) }}"
                class="w-full border rounded-lg px-4 py-2"
            >

            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Phone --}}
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-700">
                Phone
            </label>

            <input
                type="text"
                name="phone"
                value="{{ old('phone', $projectRequest->phone) }}"
                class="w-full border rounded-lg px-4 py-2"
            >

            @error('phone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Category --}}
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-700">
                Category
            </label>

            <select
                name="category_id"
                class="w-full border rounded-lg px-4 py-2"
            >
                <option value="">Select Category</option>

                @foreach($categories as $category)

                    <option value="{{ $category->id }}"
                        {{ old('category_id', $projectRequest->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>

            @error('category_id')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Budget --}}
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-700">
                Budget
            </label>

            <input
                type="text"
                name="budget"
                value="{{ old('budget', $projectRequest->budget) }}"
                class="w-full border rounded-lg px-4 py-2"
            >

            @error('budget')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Description --}}
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-700">
                Description
            </label>

            <textarea
                name="description"
                rows="6"
                class="w-full border rounded-lg px-4 py-3"
            >{{ old('description', $projectRequest->description) }}</textarea>

            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        {{-- Status --}}
        <div class="mb-5">
            <label class="block mb-2 font-medium text-gray-700">
                Status
            </label>

            <select
                name="status"
                class="w-full border rounded-lg px-4 py-2"
            >
                <option value="new"
                    {{ old('status', $projectRequest->status) === 'new' ? 'selected' : '' }}>
                    New
                </option>

                <option value="contacted"
                    {{ old('status', $projectRequest->status) === 'contacted' ? 'selected' : '' }}>
                    Contacted
                </option>

                <option value="completed"
                    {{ old('status', $projectRequest->status) === 'completed' ? 'selected' : '' }}>
                    Completed
                </option>

                <option value="rejected"
                    {{ old('status', $projectRequest->status) === 'rejected' ? 'selected' : '' }}>
                    Rejected
                </option>
            </select>

            @error('status')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-3">

            <button
                type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
                Update
            </button>

            <a href="{{ route('admin.project-requests.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

        </div>

    </form>

</div>

@endsection