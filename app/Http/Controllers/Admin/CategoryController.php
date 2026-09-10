<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{


    public function index()
    {
        $categories = Category::latest()->paginate(10);

        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }



    public function create()
    {
        return view('admin.categories.create');
    }



    // public function store(Request $request)

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
        ]);

        $category = Category::create($validated);

        return redirect()
            ->route('admin.categories.index')
            ->with('success', 'کتگوری «' . $category->name . '» با موفقیت ایجاد شد.');
    }



    public function show(Category $category)
    {
        //
    }




    public function edit(Category $category)
    {

        return view('admin.categories.edit', [

            'category' => $category

        ]);
    }




    // public function update(Request $request, Category $category)
    // {

    //     $validated = $request->validate([

    //         'name' => 'required|string|max:255',

    //         'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,

    //     ]);


    //     $category->update($validated);



    //     return redirect()

    //         ->route('admin.categories.index')

    //         ->with('success', 'Category updated successfully');

    // }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' =>
            'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id,
        ]);

        $category->update($validated);

        return redirect()
            ->route('admin.categories.index')->with('success', 'این کتگوری با نام «' .
                $category->name . '» با موفقیت ویرایش شد.');
    }


    public function destroy(Category $category)
    {
        $name = $category->name;

        $category->delete();

        return redirect()
    ->route('admin.categories.index')
    ->with('success', 'کتگوری «' . $category->name . '» با موفقیت حذف شد.');
    }

    
}
