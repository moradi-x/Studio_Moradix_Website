@extends('admin.layouts.layout')


@section('title', 'Create Category')



@section('content')
    <div class="admin-category-create">


        <h1 class="admin-category-create-title">
             دسته بندی جدید
        </h1>

        <form action="{{ route('admin.categories.store') }}"
              method="POST"
              class="admin-category-create-form">

            @csrf

            <div class="admin-category-create-field">
                <label for="category-name">نام</label>

                <input
                    type="text"
                    id="category-name"
                    name="name"
                    value="{{ old('name') }}"
                >

                @error('name')
                    <p class="admin-category-create-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="admin-category-create-field">
                <label for="category-slug">اسلاگ</label>

                <input
                    type="text"
                    id="category-slug"
                    name="slug"
                    value="{{ old('slug') }}"
                >

                @error('slug')
                    <p class="admin-category-create-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="admin-category-create-actions">
                <button type="submit" class="admin-category-create-save">
                    ذخیره
                </button>

                <a href="{{ route('admin.categories.index') }}"
                   class="admin-category-create-back">
                    برگشت
                </a>
            </div>

        </form>
    </div>
@endsection
