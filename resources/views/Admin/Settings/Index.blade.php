@extends('admin.layouts.layout')

@section('title', 'Settings')

@section('content')

    @include('admin.sections.messages')

    <div class="flex items-center justify-between mb-5">
        <h1 class="text-lg font-bold text-gray-800">
            Settings
        </h1>

        <a href="{{ route('admin.settings.create') }}"
            class="px-4 py-2 rounded-lg bg-green-600 text-white text-sm font-medium hover:bg-green-700 transition shadow-sm">
            Create Setting
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
                        Key
                    </th>

                    <th class="px-4 py-2.5 text-left font-semibold text-gray-600">
                        Value
                    </th>

                    <th class="px-4 py-2.5 text-center font-semibold text-gray-600">
                        Actions
                    </th>
                </tr>
            </thead>

            <tbody>

                @forelse($settings as $key => $setting)
                    <tr class="border-b hover:bg-gray-50 transition">

                        <td class="px-4 py-2.5 text-gray-500">
                            {{ $settings->firstItem() + $key }}
                        </td>

                        <td class="px-4 py-2.5 font-medium text-gray-800">
                            {{ $setting->key }}
                        </td>

                        <td class="px-4 py-2.5 text-gray-600">
                            {{ $setting->value ?? '-' }}
                        </td>

                        <td class="px-4 py-2.5">
                            <div class="flex justify-center gap-2">

                                <a href="{{ route('admin.settings.show', $setting) }}"
                                    class="px-3 py-1.5 rounded-md bg-gray-500 text-white text-xs hover:bg-gray-600">
                                    Show
                                </a>


                                <a href="{{ route('admin.settings.edit', $setting) }}"
                                    class="px-3 py-1.5 rounded-md bg-blue-500 text-white text-xs hover:bg-blue-600">
                                    Edit
                                </a>

                                <form action="{{ route('admin.settings.destroy', $setting) }}" method="POST">

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
                            No settings found
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

    <div class="mt-4">
        {{ $settings->links() }}
    </div>

@endsection
