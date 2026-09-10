@extends('admin.layouts.layout')

@section('title', 'Technologies')

@section('content')

@include('admin.sections.messages')

<div class="flex items-center justify-between mb-5">

    <h1 class="text-lg font-bold text-gray-800">
        Technologies
    </h1>

    <a href="{{ route('admin.technologies.create') }}"
       class="px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700 transition shadow-sm">
        Create Technology
    </a>

</div>


<div class="bg-white rounded-xl shadow-sm border overflow-hidden">

    <table class="w-full text-sm">

        <thead class="bg-gray-50 border-b">

            <tr>

                <th class="px-4 py-2.5 text-left font-semibold text-gray-600">
                    #
                </th>

                <th class="px-4 py-2.5 text-left font-semibold text-gray-600">
                    Name
                </th>

                <th class="px-4 py-2.5 text-left font-semibold text-gray-600">
                    Slug
                </th>

                <th class="px-4 py-2.5 text-left font-semibold text-gray-600">
                    Description
                </th>

                <th class="px-4 py-2.5 text-center font-semibold text-gray-600">
                    Actions
                </th>

            </tr>

        </thead>


        <tbody>

            @forelse($technologies as $key => $technology)

                <tr class="border-b hover:bg-gray-50 transition">

                    <td class="px-4 py-2.5 text-gray-500">
                        {{ $technologies->firstItem() + $key }}
                    </td>

                    <td class="px-4 py-2.5 font-medium text-gray-800">
                        {{ $technology->name }}
                    </td>

                    <td class="px-4 py-2.5 text-gray-600">
                        {{ $technology->slug }}
                    </td>

                    <td class="px-4 py-2.5 text-gray-600">
                        {{ $technology->description ?? '-' }}
                    </td>

                    <td class="px-4 py-2.5">

                        <div class="flex justify-center gap-2">

                            <a href="{{ route('admin.technologies.edit', $technology) }}"
                               class="px-3 py-1.5 rounded-md bg-blue-500 text-white text-xs hover:bg-blue-600">
                                Edit
                            </a>

                            <form action="{{ route('admin.technologies.destroy', $technology) }}"
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

                    <td colspan="5"
                        class="text-center py-6 text-gray-500">
                        No technologies found
                    </td>

                </tr>

            @endforelse

        </tbody>

    </table>

</div>


<div class="mt-4">

    {{ $technologies->links() }}

</div>

@endsection
