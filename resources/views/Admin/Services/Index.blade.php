@extends('admin.layouts.layout')

@section('title', 'Services')

@section('content')

    @include('admin.sections.messages')

    <div class="flex items-center justify-between mb-5">
        <h1 class="text-lg font-bold text-gray-800">
            Services
        </h1>

        <a href="{{ route('admin.services.create') }}"
            class="px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700 transition shadow-sm">
            Create Service
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm border overflow-hidden">

        <table class="w-full text-sm">

            <thead class="bg-gray-50 border-b">
                <tr>
                    <th class="px-4 py-2.5 text-left font-semibold text-gray-600">#</th>
                    <th class="px-4 py-2.5 text-left font-semibold text-gray-600">Title</th>
                    <th class="px-4 py-2.5 text-left font-semibold text-gray-600">Slug</th>
                    <th class="px-4 py-2.5 text-left font-semibold text-gray-600">Status</th>
                    <th class="px-4 py-2.5 text-left font-semibold text-gray-600">Order</th>
                    <th class="px-4 py-2.5 text-center font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($services as $key => $service)
                    <tr class="border-b hover:bg-gray-50 transition">

                        <td class="px-4 py-2.5 text-gray-500">
                            {{ $services->firstItem() + $key }}
                        </td>

                        <td class="px-4 py-2.5 font-medium text-gray-800">
                            {{ $service->title }}
                        </td>

                        <td class="px-4 py-2.5 text-gray-600">
                            {{ $service->slug }}
                        </td>

                        <td class="px-4 py-2.5">
                            @if ($service->status)
                                <span class="px-2.5 py-1 rounded-full bg-green-100 text-green-700 text-xs">
                                    Active
                                </span>
                            @else
                                <span class="px-2.5 py-1 rounded-full bg-red-100 text-red-700 text-xs">
                                    Inactive
                                </span>
                            @endif
                        </td>

                        <td class="px-4 py-2.5 text-gray-600">
                            {{ $service->order }}
                        </td>

                        <td class="px-4 py-2.5">
                            <div class="flex justify-center gap-2">

                                <a href="{{ route('admin.services.show', $service) }}"
                                    class="px-3 py-1.5 rounded-md bg-gray-500 text-white text-xs hover:bg-gray-600">
                                    Show
                                </a>


                                <a href="{{ route('admin.services.edit', $service) }}"
                                    class="px-3 py-1.5 rounded-md bg-blue-500 text-white text-xs hover:bg-blue-600">
                                    Edit
                                </a>

                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST">
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
                        <td colspan="6" class="text-center py-6 text-gray-500">
                            No services found
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>

    <div class="mt-4">
        {{ $services->links() }}
    </div>

@endsection
