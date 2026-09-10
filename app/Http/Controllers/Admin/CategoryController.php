<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

$categories = Category::latest()->paginate(10);

        return Inertia::render('Admin/Categories/Index', [

            'categories' => $categories

        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{

    return Inertia::render('Admin/Categories/Create');

}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    $validated = $request->validate([

        'name' => 'required|string|max:255',

        'slug' => 'required|string|max:255|unique:categories,slug',

    ]);



    Category::create($validated);



    return redirect()
        ->route('admin.categories.index')
        ->with('success', 'Category created successfully');

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
{

    return Inertia::render('Admin/Categories/Edit', [

        'category' => $category

    ]);

}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
{

    $validated = $request->validate([

        'name' => 'required|string|max:255',

        'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,

    ]);



    $category->update($validated);



    return redirect()
        ->route('admin.categories.index')
        ->with('success', 'Category updated successfully');

}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
