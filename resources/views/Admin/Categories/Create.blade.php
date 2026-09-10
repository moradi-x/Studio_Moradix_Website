@extends('admin.layouts.layout')


@section('title', 'Create Category')


@section('content')
    @include('admin.sections.errors')

    <h1 class="text-2xl font-bold mb-6">

        Create Category

    </h1>



    <form action="{{ route('admin.categories.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow max-w-2xl">


        @csrf



        <div class="mb-5">


            <label class="block mb-2 font-medium">
                Name
            </label>


            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded-lg px-4 py-2">


            @error('name')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror


        </div>





        <div class="mb-5">


            <label class="block mb-2 font-medium">
                Slug
            </label>


            <input type="text" name="slug" value="{{ old('slug') }}" class="w-full border rounded-lg px-4 py-2">


            @error('slug')
                <p class="text-red-500 text-sm mt-1">
                    {{ $message }}
                </p>
            @enderror


        </div>





        <button class="bg-green-600 text-white px-6 py-2 rounded-lg">

            Save

        </button>

        <a href="{{ route('admin.categories.index') }}"
           class="px-6 py-2 rounded-lg bg-red-500 text-white hover:bg-red-600 transition">
             Back
        </a>



    </form>



@endsection
