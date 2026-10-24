@extends('admin.layouts.layout')

@section('title', 'Message Details')

@section('content')

<div class="flex items-center justify-between mb-6">
    <h1 class="text-lg font-bold text-gray-800">
        Message Details
    </h1>

    <a
        href="{{ route('admin.project-requests.index') }}"
        class="px-4 py-2 rounded-lg bg-gray-500 text-white text-sm hover:bg-gray-600 transition"
    >
        Back to Messages
    </a>
</div>

<div class="bg-white p-6 rounded-lg shadow max-w-5xl">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        {{-- Name --}}
        <div>
            <label class="block mb-2 font-medium text-gray-700">
                Name
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->name }}
            </div>
        </div>

        {{-- Phone --}}
        <div>
            <label class="block mb-2 font-medium text-gray-700">
                Phone
            </label>

            <div
                dir="ltr"
                class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50 text-left"
            >
                {{ $projectRequest->phone }}
            </div>
        </div>

        {{-- Request Type --}}
        <div>
            <label class="block mb-2 font-medium text-gray-700">
                Request Type
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->request_type ?: '-' }}
            </div>
        </div>

        {{-- Project Type --}}
        <div>
            <label class="block mb-2 font-medium text-gray-700">
                Project Type
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->project_type ?: '-' }}
            </div>
        </div>

        {{-- Created At --}}
        <div class="md:col-span-2">
            <label class="block mb-2 font-medium text-gray-700">
                Received At
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-2.5 text-gray-800 bg-gray-50">
                {{ $projectRequest->created_at?->format('Y/m/d H:i') ?? '-' }}
            </div>
        </div>

        {{-- Message --}}
        <div class="md:col-span-2">
            <label class="block mb-2 font-medium text-gray-700">
                Message
            </label>

            <div class="border border-gray-300 rounded-lg px-4 py-3 text-gray-800 bg-gray-50 whitespace-pre-line min-h-[160px]">{{ $projectRequest->message ?: 'No message provided.' }}</div>
        </div>

    </div>

    {{-- Actions --}}
    <div class="flex items-center gap-3 mt-6">

        <a
            href="{{ route('admin.project-requests.index') }}"
            class="px-6 py-2.5 rounded-lg bg-gray-500 text-white hover:bg-gray-600 transition"
        >
            Back
        </a>

        <form
            action="{{ route('admin.project-requests.destroy', $projectRequest->id) }}"
            method="POST"
            onsubmit="return confirm('Are you sure you want to delete this message?')"
        >
            @csrf
            @method('DELETE')

            <button
                type="submit"
                class="px-6 py-2.5 rounded-lg bg-red-500 text-white hover:bg-red-600 transition"
            >
                Delete Message
            </button>
        </form>

    </div>

</div>

@endsection