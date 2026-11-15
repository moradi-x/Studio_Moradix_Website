<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\ProjectImageController;
use App\Models\ProjectImage;
use Illuminate\Support\Facades\File;
use App\Models\FeatureCategory;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['category'])
            ->latest()
            ->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }



    public function create()
    {
        $categories = Category::orderBy('name')->get();

        $featureCategories = FeatureCategory::with([
            'features' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('sort_order');
            },
        ])
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('admin.projects.create', compact(
            'categories',
            'featureCategories'
        ));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => ['required', 'exists:categories,id'],

            'title' => ['required', 'string', 'max:255'],

            'slug' => [
                'required',
                'string',
                'max:255',
                'unique:projects,slug',
            ],

            // English Slug
            'slug_en' => [
                'nullable',
                'string',
                'max:255',
                'unique:projects,slug_en',
            ],

            'short_description' => ['required', 'string'],
            'description' => ['required', 'string'],

            'primary_image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
            ],

            'images' => ['required', 'array'],

            'images.*' => [
                'image',
                'mimes:jpg,jpeg,png,webp',
            ],

            'project_url' => ['nullable'],
            'github_url' => ['nullable'],

            'status' => ['required', 'boolean'],

            'feature_ids' => ['nullable', 'array'],

            'feature_ids.*' => [
                'integer',
                'distinct',
                'exists:features,id',
            ],

            'title_en' => ['nullable', 'string', 'max:255'],
            'short_description_en' => ['nullable', 'string'],
            'description_en' => ['nullable', 'string'],
        ]);

        try {
            DB::beginTransaction();

            // آپلود تصاویر
            $ProjectImageController = new ProjectImageController();

            $fileNameImages = $ProjectImageController->upload(
                $request->primary_image,
                $request->images
            );

            // ایجاد پروژه
            $project = Project::create([
                'category_id' => $validated['category_id'],

                'title' => $validated['title'],
                'title_en' => $validated['title_en'] ?? null,

                'slug' => $validated['slug'],
                'slug_en' => $validated['slug_en'] ?? null,

                'short_description' => $validated['short_description'],
                'short_description_en' => $validated['short_description_en'] ?? null,

                'description' => $validated['description'],
                'description_en' => $validated['description_en'] ?? null,

                'primary_image' => $fileNameImages['fileNamePrimaryImage'],

                'project_url' => $validated['project_url'] ?? null,
                'github_url' => $validated['github_url'] ?? null,

                'status' => $validated['status'],
            ]);

            // ایجاد تصاویر پروژه
            foreach ($fileNameImages['fileNameImages'] as $fileNameImage) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image' => $fileNameImage,
                ]);
            }

            // ثبت ویژگی‌های پروژه
            $project->features()->sync(
                $validated['feature_ids'] ?? []
            );

            DB::commit();
        } catch (\Throwable $ex) {

            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'error',
                    'مشکلی در ایجاد پروژه رخ داد: '
                        . $ex->getMessage()
                );
        }

        return redirect()
            ->route('admin.projects.index')
            ->with(
                'success',
                'پروژه «' . $project->title . '» با موفقیت ایجاد شد.'
            );
    }

    public function show(Project $project)
    {
        $project->load([
            'category',
            'images',
        ]);

        return view('admin.projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
        $categories = Category::orderBy('name')->get();

        $featureCategories = FeatureCategory::with([
            'features' => function ($query) {
                $query->where('is_active', true)
                    ->orderBy('sort_order');
            },
        ])
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $project->load('features');

        return view('admin.projects.edit', compact(
            'categories',
            'featureCategories',
            'project'
        ));
    }


    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'category_id' => [
                'required',
                'exists:categories,id',
            ],

            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'slug' => [
                'required',
                'string',
                'max:255',
                'unique:projects,slug,' . $project->id,
            ],

            // English Slug
            'slug_en' => [
                'nullable',
                'string',
                'max:255',
                'unique:projects,slug_en,' . $project->id,
            ],

            'short_description' => [
                'required',
                'string',
            ],

            'description' => [
                'required',
                'string',
            ],

            'project_url' => [
                'nullable',
                'url',
            ],

            'github_url' => [
                'nullable',
                'url',
            ],

            'status' => [
                'required',
                'boolean',
            ],

            'feature_ids' => [
                'nullable',
                'array',
            ],

            'feature_ids.*' => [
                'integer',
                'distinct',
                'exists:features,id',
            ],

            'title_en' => [
                'nullable',
                'string',
                'max:255',
            ],

            'short_description_en' => [
                'nullable',
                'string',
            ],

            'description_en' => [
                'nullable',
                'string',
            ],
        ]);

        try {
            DB::beginTransaction();

            // ویرایش اطلاعات پروژه
            $project->update([
                'category_id' => $validated['category_id'],

                'title' => $validated['title'],
                'title_en' => $validated['title_en'] ?? null,

                'slug' => $validated['slug'],
                'slug_en' => $validated['slug_en'] ?? null,

                'short_description' => $validated['short_description'],
                'short_description_en' => $validated['short_description_en'] ?? null,

                'description' => $validated['description'],
                'description_en' => $validated['description_en'] ?? null,

                'project_url' => $validated['project_url'] ?? null,
                'github_url' => $validated['github_url'] ?? null,

                'status' => $validated['status'],
            ]);

            // ویرایش ویژگی‌های پروژه
            $project->features()->sync(
                $validated['feature_ids'] ?? []
            );

            DB::commit();
        } catch (\Throwable $ex) {

            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'error',
                    'مشکلی در ویرایش پروژه رخ داد: ' . $ex->getMessage()
                );
        }

        return redirect()
            ->route('admin.projects.index')
            ->with(
                'success',
                'پروژه «' . $project->title . '» با موفقیت ویرایش شد.'
            );
    }

    public function destroy(Request $request, Project $project)
    {
        try {
            DB::beginTransaction();

            // مسیر پوشه تصاویر پروژه
            $uploadPath = public_path(
                env('PROJECT_IMAGES_UPLOAD_PATH')
            );

            // حذف عکس اصلی
            if ($project->primary_image) {

                $primaryImagePath = $uploadPath
                    . '/'
                    . $project->primary_image;

                if (File::exists($primaryImagePath)) {
                    File::delete($primaryImagePath);
                }
            }

            // حذف عکس‌های فرعی
            $project->load('images');

            foreach ($project->images as $image) {

                $imagePath = $uploadPath
                    . '/'
                    . $image->image;

                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            // حذف عکس‌های فرعی از جدول project_images
            $project->images()->delete();


            // حذف خود پروژه
            $project->delete();

            $page = $request->input('page', 1);

            DB::commit();
        } catch (\Throwable $ex) {

            DB::rollBack();

            return redirect()
                ->back()
                ->with(
                    'error',
                    'مشکلی در حذف پروژه رخ داد: ' . $ex->getMessage()
                );
        }

        return redirect()
            ->route('admin.projects.index', ['page' => $page])
            ->with(
                'deleted',
                'پروژه «' . $project->title . '» با موفقیت حذف شد.'
            );
    }
}
