@extends('admin.layouts.layout')

@section('title', 'Show Project Request')

@section('content')

<div class="flex items-center justify-between mb-6">

    <h1 class="text-lg font-bold text-gray-800">
        Show Project Request
    </h1>

</div>


<div class="bg-white p-6 rounded-lg shadow max-w-5xl">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">


        {{-- Name --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Name
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->name }}
            </div>

        </div>


        {{-- Email --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Email
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->email ?? '-' }}
            </div>

        </div>


        {{-- Phone --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Phone
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->phone }}
            </div>

        </div>


        {{-- Category --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Category
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->category->name ?? '-' }}
            </div>

        </div>


        {{-- Budget --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Budget
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->budget ?? '-' }}
            </div>

        </div>


        {{-- Status --}}
        <div>

            <label class="block mb-2 font-medium text-gray-700">
                Status
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 bg-gray-50">

                @if($projectRequest->status === 'new')

                    <span class="px-2.5 py-1 rounded-full text-xs bg-blue-100 text-blue-700">
                        {{ $projectRequest->status_label }}
                    </span>

                @elseif($projectRequest->status === 'contacted')

                    <span class="px-2.5 py-1 rounded-full text-xs bg-yellow-100 text-yellow-700">
                        {{ $projectRequest->status_label }}
                    </span>

                @elseif($projectRequest->status === 'completed')

                    <span class="px-2.5 py-1 rounded-full text-xs bg-green-100 text-green-700">
                        {{ $projectRequest->status_label }}
                    </span>

                @elseif($projectRequest->status === 'rejected')

                    <span class="px-2.5 py-1 rounded-full text-xs bg-red-100 text-red-700">
                        {{ $projectRequest->status_label }}
                    </span>

                @endif

            </div>

        </div>


        {{-- Description --}}
        <div class="md:col-span-2 lg:col-span-3">

            <label class="block mb-2 font-medium text-gray-700">
                Description
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-3 text-gray-800 bg-gray-50 whitespace-pre-line min-h-[160px]">{{ $projectRequest->description }}</div>

        </div>

    </div>


    {{-- Buttons --}}
    <div class="flex items-center gap-3 mt-6">

        <a
            href="{{ route('admin.project-requests.edit', $projectRequest) }}"
            class="bg-blue-500 text-white px-6 py-2.5 rounded-lg hover:bg-blue-600 transition"
        >
            Edit
        </a>

        <a href="{{ route('admin.project-requests.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

    </div>

</div>

@endsection

