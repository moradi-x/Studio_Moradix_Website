<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * نمایش لیست تکنولوژی‌ها
     */
    public function index()
    {
        $technologies = Technology::latest()->paginate(10);

        return view('admin.technologies.index', compact('technologies'));
    }


    /**
     * نمایش فرم ایجاد تکنولوژی
     */
    public function create()
    {
        return view('admin.technologies.create');
    }


    /**
     * ذخیره تکنولوژی جدید
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:technologies,slug',
            'description' => 'nullable|string',
        ]);

        $technology = Technology::create($validated);

        return redirect()
            ->route('admin.technologies.index')
            ->with(
                'success',
                'تکنولوژی «' . $technology->name . '» با موفقیت ایجاد شد.'
            );
    }


    /**
     * نمایش فرم ویرایش تکنولوژی
     */
    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }


    /**
     * بروزرسانی تکنولوژی
     */
    public function update(Request $request, Technology $technology)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:technologies,slug,' . $technology->id,
            'description' => 'nullable|string',
        ]);

        $technology->update($validated);

        return redirect()
            ->route('admin.technologies.index')
            ->with(
                'success',
                'تکنولوژی «' . $technology->name . '» با موفقیت ویرایش شد.'
            );
    }


    /**
     * حذف تکنولوژی
     */
    public function destroy(Technology $technology)
    {
        $name = $technology->name;

        $technology->delete();

        return redirect()
            ->route('admin.technologies.index')
            ->with(
                'success',
                'تکنولوژی «' . $name . '» با موفقیت حذف شد.'
            );
    }
}
