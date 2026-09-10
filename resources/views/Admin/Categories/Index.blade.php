@extends('admin.layouts.Layout')

@section('title', 'Categories')

@section('content')

    @include('admin.sections.messages')

    <div class="flex items-center justify-between mb-5">

        <h1 class="text-lg font-bold text-gray-800">
            Categories
        </h1>

        <a href="{{ route('admin.categories.create') }}"
            class="px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700 transition shadow-sm">
            Create Category
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

                    <th class="px-4 py-2.5 text-center font-semibold text-gray-600">
                        Actions
                    </th>

                </tr>

            </thead>


            <tbody>

                @forelse($categories as $key => $category)
                    <tr class="border-b hover:bg-gray-50 transition">

                        <td class="px-4 py-2.5 text-gray-500">
                            {{ $categories->firstItem() + $key }}
                        </td>

                        <td class="px-4 py-2.5 font-medium text-gray-800">
                            {{ $category->name }}
                        </td>

                        <td class="px-4 py-2.5 text-gray-600">
                            {{ $category->slug }}
                        </td>

                        <td class="px-4 py-2.5">
                            <div class="flex justify-center gap-2">

                                <a href="{{ route('admin.categories.edit', $category) }}"
                                    class="px-3 py-1.5 rounded-md bg-blue-500 text-white text-xs hover:bg-blue-600">
                                    Edit
                                </a>

                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST">

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
                        <td colspan="4" class="text-center py-6 text-gray-500">
                            No categories found
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>


    <div class="mt-4">
        {{ $categories->links() }}
    </div>

@endsection
