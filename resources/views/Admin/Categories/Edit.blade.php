@extends('admin.layouts.layout')

@section('title', 'Edit Category')


@section('content')

    <div class="admin-category-edit">

        @include('admin.sections.errors')

        <div class="admin-category-edit-header">
            <h1 class="admin-category-edit-title">
                ویرایش دسته بندی
            </h1>
        </div>

        <form action="{{ route('admin.categories.update', $category) }}"
              method="POST"
              class="admin-category-edit-form">

            @csrf
            @method('PUT')

            <div class="admin-category-edit-field">
                <label for="category-name">نام</label>

                <input
                    type="text"
                    id="category-name"
                    name="name"
                    value="{{ old('name', $category->name) }}"
                >

                @error('name')
                    <p class="admin-category-edit-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="admin-category-edit-field">
                <label for="category-slug">اسلاگ</label>

                <input
                    type="text"
                    id="category-slug"
                    name="slug"
                    value="{{ old('slug', $category->slug) }}"
                >

                @error('slug')
                    <p class="admin-category-edit-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="admin-category-edit-actions">
                <button type="submit" class="admin-category-edit-save">
                    ویرایش
                </button>

                <a href="{{ route('admin.categories.index') }}"
                   class="admin-category-edit-back">
                    برگشت
                </a>
            </div>

        </form>
    </div>

@endsection

