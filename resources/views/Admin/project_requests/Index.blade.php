@extends('admin.layouts.layout')

@section('title', 'Project Requests')

@section('content')

<div class="flex items-center justify-between mb-6">

    <h1 class="text-lg font-bold text-gray-800">
        Project Requests
    </h1>

    <a href="{{ route('admin.project-requests.create') }}"
            class="px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700 transition shadow-sm">
        Crate Request
    </a>

</div>

@if(session('success'))

    <div class="mb-5 bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
        {{ session('success') }}
    </div>

@endif

<div class="bg-white rounded-lg shadow overflow-hidden">

    <table class="w-full text-sm text-left">

        <thead class="bg-gray-50 border-b">

            <tr>
                <th class="px-5 py-3">#</th>
                <th class="px-5 py-3">Name</th>
                <th class="px-5 py-3">Phone</th>
                <th class="px-5 py-3">Category</th>
                <th class="px-5 py-3">Budget</th>
                <th class="px-5 py-3">Status</th>
                <th class="px-5 py-3 text-center">Actions</th>
            </tr>

        </thead>

        <tbody>

            @forelse($projectRequests as $projectRequest)

                <tr class="border-b last:border-0">

                    {{-- # --}}
                    <td class="px-5 py-4">
                        {{ $projectRequests->firstItem() + $loop->index }}
                    </td>

                    {{-- Name --}}
                    <td class="px-5 py-4 font-medium text-gray-800">
                        {{ $projectRequest->name }}
                    </td>

                    {{-- Phone --}}
                    <td class="px-5 py-4">
                        {{ $projectRequest->phone }}
                    </td>

                    {{-- Category --}}
                    <td class="px-5 py-4">
                        {{ $projectRequest->category->name ?? '-' }}
                    </td>

                    {{-- Budget --}}
                    <td class="px-5 py-4">
                        {{ $projectRequest->budget ?? '-' }}
                    </td>

                   {{-- Status --}}
<td class="px-5 py-4">

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

</td>

                    {{-- Actions --}}
                    <td class="px-5 py-4">

                        <div class="flex justify-center gap-2">

                            <a href="{{ route('admin.project-requests.show', $projectRequest) }}"
                               class="px-3 py-1.5 rounded-md bg-gray-500 text-white text-xs hover:bg-gray-600">
                                Show
                            </a>

                            <a href="{{ route('admin.project-requests.edit', $projectRequest) }}"
                               class="px-3 py-1.5 rounded-md bg-blue-500 text-white text-xs hover:bg-blue-600">
                                Edit
                            </a>

                            <form action="{{ route('admin.project-requests.destroy', $projectRequest) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="px-3 py-1.5 rounded-md bg-red-500 text-white text-xs hover:bg-red-600">
                                    Delete
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="7"
                        class="px-5 py-8 text-center text-gray-500">

                        No project requests found.

                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>

<div class="mt-5">
    {{ $projectRequests->links() }}
</div>

@endsection