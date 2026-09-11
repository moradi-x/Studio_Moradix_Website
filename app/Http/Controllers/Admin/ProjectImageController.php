<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProjectImageController extends Controller
{

    //  Upload images
    public function upload($primaryimage, $images)
    {
        $fileNamePrimaryImage =
            now()->format('Ymd_His')
            . '_'
            . Str::random(3)
            . '_'
            . $primaryimage->getClientOriginalName();

        $primaryimage->move(
            public_path(
                env('PROJECT_IMAGES_UPLOAD_PATH')
            ),
            $fileNamePrimaryImage
        );

        $fileNameImages = [];

        foreach ($images as $image) {

            $fileNameImage =
                now()->format('Ymd_His')
                . '_'
                . Str::random(3)
                . '_'
                . $image->getClientOriginalName();

            $image->move(
                public_path(
                    env('PROJECT_IMAGES_UPLOAD_PATH')
                ),
                $fileNameImage
            );

            $fileNameImages[] = $fileNameImage;
        }

        return [
            'fileNamePrimaryImage' => $fileNamePrimaryImage,
            'fileNameImages' => $fileNameImages,
        ];
    }

    //  Edit images page
    public function edit(Project $project)
    {
        $project->load('images');

        return view(
            'admin.projects.edit_images',
            compact('project')
        );
    }

    //  Add  Update images
    public function add(Request $request, Project $project)
    {
        $request->validate([
            'primary_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp',],
            'images' => ['nullable', 'array',],
            'images.*' => ['nullable',   'image', 'mimes:jpg,jpeg,png,webp',],
        ]);

        if ($request->primary_image == null &&  $request->images == null) {
            return redirect()
                ->back()
                ->withErrors([
                    'msg' => 'تصویر اصلی یا تصاویر پروژه الزامی هست',
                ]);
        }

        try {
            DB::beginTransaction();
            //  آپلود عکس اصلی
            if ($request->hasFile('primary_image')) {
                $primaryImage = $request->file('primary_image');

                $oldImagePath = public_path(
                    env('PROJECT_IMAGES_UPLOAD_PATH')  . '/' . $project->primary_image
                );

                $existsInImages = ProjectImage::where('project_id',   $project->id)
                    ->where('image', $project->primary_image)
                    ->exists();

                if (!$existsInImages && File::exists($oldImagePath)) {
                    File::delete($oldImagePath);
                }


                $fileNamePrimaryImage =
                    now()->format('Ymd_His')
                    . '_'
                    . Str::random(3)
                    . '_'
                    . $primaryImage->getClientOriginalName();



                $primaryImage->move(
                    public_path(
                        env('PROJECT_IMAGES_UPLOAD_PATH')
                    ),
                    $fileNamePrimaryImage
                );
                //  ثبت عکس اصلی در Project
                $project->update([
                    'primary_image' => $fileNamePrimaryImage,
                ]);
            }
            //    آپلود عکس های فرعی
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $fileNameImage =
                        now()->format('Ymd_His')
                        . '_'
                        . Str::random(3)
                        . '_'
                        . $image->getClientOriginalName();

                    $image->move(
                        public_path(
                            env('PROJECT_IMAGES_UPLOAD_PATH')
                        ),
                        $fileNameImage
                    );
                    ProjectImage::create([
                        'project_id' => $project->id,
                        'image' => $fileNameImage,
                    ]);
                }
            }

            DB::commit();
        } catch (\Throwable $ex) {

            DB::rollBack();
            return redirect()
                ->back()
                ->with(
                    'error',
                    'مشکلی در ویرایش تصاویر پروژه رخ داد: '
                        . $ex->getMessage()
                );
        }

        DB::commit();

        return redirect()
            ->route('admin.projects.index')
            ->with(
                'success',
                'تصاویر پروژه «' . $project->title . '» با موفقیت ویرایش شد.'
            );
    }
    public function destroy(Request $request, Project $project)
    {
        $request->validate([
            'image_id' => [
                'required',
                'exists:project_images,id',
            ],
        ]);

        $projectImage = ProjectImage::where(
            'project_id',
            $project->id
        )->findOrFail($request->image_id);

        $imagePath = public_path(
            env('PROJECT_IMAGES_UPLOAD_PATH')
                . '/'
                . $projectImage->image
        );

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $projectImage->delete();

        return redirect()
            ->back()
            ->with(
                'success',
                'تصویر با موفقیت حذف شد.'
            );
    }
}
