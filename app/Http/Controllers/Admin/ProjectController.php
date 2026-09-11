<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\ProjectImageController;
use App\Models\ProjectImage;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['category', 'technologies'])
            ->oldest()
            ->paginate(10);

        return view('admin.projects.index', compact('projects'));
    }
    public function create()
    {
        $categories = Category::orderBy('name')->get();

        $technologies = Technology::orderBy('name')->get();

        return view('admin.projects.create', compact(
            'categories',
            'technologies'
        ));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string',  'max:255', 'unique:projects,slug',],
            'short_description' => ['required', 'string',],
            'description' => ['required', 'string',],
            'primary_image' => ['required', 'image', 'mimes:jpg,jpeg,png,webp',],
            'images' => ['required', 'array',],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp',],
            'project_url' => ['nullable'],
            'github_url' => ['nullable'],
            'status' => ['required',    'boolean',],
            'featured' => ['nullable', 'boolean',],
            'technologies' => ['required',  'array',],
            'technologies.*' => ['required', 'exists:technologies,id',],
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
                'category_id' => $request->category_id,
                'title' => $request->title,
                'slug' => $request->slug,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'primary_image' => $fileNameImages['fileNamePrimaryImage'],
                'project_url' => $request->project_url,
                'github_url' => $request->github_url,
                'status' => $request->status,
                'featured' => $request->featured ?? false,
            ]);

            // ایجاد تصاویر پروژه
            foreach ($fileNameImages['fileNameImages'] as $fileNameImage) {
                ProjectImage::create([
                    'project_id' => $project->id,
                    'image' => $fileNameImage,
                ]);
            }

            // اتصال تکنولوژی‌ها
            $project->technologies()->attach($request->technologies);
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
            'technologies',
            'images',
        ]);

        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        $categories = Category::all();

        $technologies = Technology::all();

        $project->load([
            'technologies',
        ]);

        return view(
            'admin.projects.edit',
            compact(
                'categories',
                'technologies',
                'project'
            )
        );
    }
    public function update(Request $request, Project $project)
    {
        $request->validate([
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

            'featured' => [
                'nullable',
                'boolean',
            ],

            'technologies' => [
                'required',
                'array',
                'min:1',
            ],

            'technologies.*' => [
                'exists:technologies,id',
            ],
        ]);

        try {

            DB::beginTransaction();

            // ویرایش اطلاعات پروژه
            $project->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'slug' => $request->slug,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'project_url' => $request->project_url,
                'github_url' => $request->github_url,
                'status' => $request->status,
                'featured' => $request->featured ?? false,
            ]);

            // ویرایش تکنولوژی‌های پروژه
            $project->technologies()->sync(
                $request->technologies
            );

            DB::commit();
        } catch (\Throwable $ex) {

            DB::rollBack();

            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'error',
                    'مشکلی در ویرایش پروژه رخ داد: '
                        . $ex->getMessage()
                );
        }

        return redirect()
            ->route('admin.projects.index')
            ->with(
                'success',
                'پروژه «' . $project->title . '» با موفقیت ویرایش شد.'
            );
    }

    public function destroy(Project $project)
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

            // حذف ارتباط پروژه با تکنولوژی‌ها
            $project->technologies()->detach();

            // حذف خود پروژه
            $project->delete();

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
            ->route('admin.projects.index')
            ->with(
                'success',
                'پروژه «' . $project->title . '» با موفقیت حذف شد.'
            );
    }
}
