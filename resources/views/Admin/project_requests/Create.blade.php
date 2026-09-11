@extends('admin.layouts.layout')

@section('title', 'Create Project Request')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-lg font-bold text-gray-800">
        Create Project Request
    </h1>
</div>

<div class="bg-white p-6 rounded-lg shadow max-w-5xl">

    <form action="{{ route('admin.project-requests.store') }}" method="POST">

        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

            {{-- Name --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-500"
                >

                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Enter email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-500"
                >

                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Phone --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Phone
                </label>

                <input
                    type="text"
                    name="phone"
                    value="{{ old('phone') }}"
                    placeholder="Enter phone number"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-500"
                >

                @error('phone')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Category --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Category
                </label>

                <select
                    name="category_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 bg-white focus:outline-none focus:ring-2 focus:ring-green-500"
                >
                    <option value="">Select Category</option>

                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Budget --}}
            <div>
                <label class="block mb-2 font-medium text-gray-700">
                    Budget
                </label>

                <input
                    type="text"
                    name="budget"
                    value="{{ old('budget') }}"
                    placeholder="e.g. 1000 - 2000 USD"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2.5 focus:outline-none focus:ring-2 focus:ring-green-500"
                >

                @error('budget')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

      {{-- Status --}}
<div>
    <label class="block mb-2 font-medium text-gray-700">
        وضعیت
    </label>

    <select
        name="status"
        class="w-full border border-gray-300 rounded-lg px-4 py-2.5 bg-white focus:outline-none focus:ring-2 focus:ring-green-500"
    >
        <option value="new"
            {{ old('status', 'new') === 'new' ? 'selected' : '' }}>
            جدید
        </option>

        <option value="contacted"
            {{ old('status') === 'contacted' ? 'selected' : '' }}>
            در حال پیگیری
        </option>

        <option value="completed"
            {{ old('status') === 'completed' ? 'selected' : '' }}>
            تکمیل شده
        </option>

        <option value="rejected"
            {{ old('status') === 'rejected' ? 'selected' : '' }}>
            رد شده
        </option>
    </select>

    @error('status')
        <p class="text-red-500 text-sm mt-1">
            {{ $message }}
        </p>
    @enderror
</div>

            {{-- Description --}}
            <div class="md:col-span-2 lg:col-span-3">

                <label class="block mb-2 font-medium text-gray-700">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="7"
                    placeholder="Enter project description"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green-500 resize-y"
                >{{ old('description') }}</textarea>

                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror

            </div>

        </div>

        <div class="flex items-center gap-3 mt-6">

            <button
                type="submit"
                class="bg-green-500 text-white px-6 py-2.5 rounded-lg hover:bg-green-600 transition"
            >
                Save
            </button>

             <a href="{{ route('admin.project-requests.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

        </div>

    </form>

</div>

@endsection
