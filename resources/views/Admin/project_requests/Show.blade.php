@extends('admin.layouts.layout')

@section('title', 'Show Project Request')

@section('content')

<div class="flex items-center justify-between mb-6">

    <h1 class="text-lg font-bold text-gray-800">
        Show Project Request
    </h1>

</div>

<div class="bg-white p-6 rounded-lg shadow max-w-3xl">

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Name
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $projectRequest->name }}
        </div>
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Email
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $projectRequest->email ?? '-' }}
        </div>
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Phone
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $projectRequest->phone }}
        </div>
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Category
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $projectRequest->category->name ?? '-' }}
        </div>
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Budget
        </label>

        <div class="border rounded-lg px-4 py-2 text-gray-800 bg-gray-50">
            {{ $projectRequest->budget ?? '-' }}
        </div>
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Description
        </label>

        <div class="border rounded-lg px-4 py-3 text-gray-800 bg-gray-50 whitespace-pre-line">
            {{ $projectRequest->description }}
        </div>
    </div>

    <div class="mb-5">
        <label class="block mb-2 font-medium text-gray-700">
            Status
        </label>

        <div class="border rounded-lg px-4 py-2 bg-gray-50">

            @if($projectRequest->status === 'new')
                <span class="text-blue-600 font-medium">
                    New
                </span>
            @elseif($projectRequest->status === 'contacted')
                <span class="text-yellow-600 font-medium">
                    Contacted
                </span>
            @elseif($projectRequest->status === 'completed')
                <span class="text-green-600 font-medium">
                    Completed
                </span>
            @else
                <span class="text-red-600 font-medium">
                    Rejected
                </span>
            @endif

        </div>
    </div>

    <div class="flex items-center gap-3">

        <a
            href="{{ route('admin.project-requests.edit', $projectRequest) }}"
            class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition">
            Edit
        </a>

        <a href="{{ route('admin.project-requests.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>

    </div>

</div>

@endsection