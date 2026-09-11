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
    public function edit(Project $project) {}

    public function update(
        Request $request,
        Project $project
    ) {}

    public function destroy(Project $project) {}
}
