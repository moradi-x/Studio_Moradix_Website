<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectImageController extends Controller
{
    
    public function upload($primaryimage, $images)
{
    $fileNamePrimaryImage =
        now()->format('Ymd_His')
        . '_'
        . Str::random(3)
        . '_'
        . $primaryimage->getClientOriginalName();

    $primaryimage->move( public_path(env('PROJECT_IMAGES_UPLOAD_PATH')), $fileNamePrimaryImage );
    $fileNameImages = [];

    foreach ($images as $image) {
        $fileNameImage =
            now()->format('Ymd_His')
            . '_'
            . Str::random(3)
            . '_'
            . $image->getClientOriginalName();

        $image->move(
            public_path(env('PROJECT_IMAGES_UPLOAD_PATH')),
            $fileNameImage
        );

        array_push(
            $fileNameImages,
            $fileNameImage
        );
    }

    return [
        'fileNamePrimaryImage' => $fileNamePrimaryImage,
        'fileNameImages' => $fileNameImages,
    ];
}
    /**
     * صفحه مدیریت تصاویر پروژه
     */
    public function edit(Project $project)
    {
        $project->load('images');

        return view(
            'admin.projects.images-edit',
            compact('project')
        );
    }

    /**
     * اضافه کردن تصاویر جدید
     */
    public function add(Request $request, Project $project)
    {
        $request->validate([
            'primary_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'images' => [
                'nullable',
                'array',
            ],

            'images.*' => [
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | تغییر تصویر اصلی
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('primary_image')) {

            $oldPrimary = $project->primary_image;

            $file = $request->file('primary_image');

            $fileName =
                now()->format('Ymd_His')
                . '_'
                . Str::random(3)
                . '_'
                . $file->getClientOriginalName();

            $file->storeAs(
                'projects',
                $fileName,
                'public'
            );

            /*
            |--------------------------------------------------------------------------
            | حذف تصویر اصلی قبلی اگر در project_images نباشد
            |--------------------------------------------------------------------------
            */

            $oldPrimaryIsNormalImage = $project->images()
                ->where('image', $oldPrimary)
                ->exists();

            if (
                $oldPrimary &&
                !$oldPrimaryIsNormalImage &&
                Storage::disk('public')->exists(
                    'projects/' . $oldPrimary
                )
            ) {
                Storage::disk('public')->delete(
                    'projects/' . $oldPrimary
                );
            }

            $project->update([
                'primary_image' => $fileName,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | اضافه کردن تصاویر معمولی
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('images')) {

            foreach ($request->file('images') as $image) {

                $fileName =
                    now()->format('Ymd_His')
                    . '_'
                    . Str::random(3)
                    . '_'
                    . $image->getClientOriginalName();

                $image->storeAs(
                    'projects',
                    $fileName,
                    'public'
                );

                $project->images()->create([
                    'image' => $fileName,
                ]);
            }
        }

        return redirect()
            ->route(
                'admin.projects.images.edit',
                $project
            )
            ->with(
                'success',
                'تصاویر پروژه با موفقیت اضافه شدند.'
            );
    }

    /**
     * حذف تصویر
     */
    public function destroy(
        Request $request,
        Project $project
    ) {
        $request->validate([
            'image_id' => [
                'required',
                'exists:project_images,id',
            ],
        ]);

        $image = ProjectImage::where(
            'project_id',
            $project->id
        )->findOrFail(
            $request->image_id
        );

        /*
        |--------------------------------------------------------------------------
        | جلوگیری از حذف تصویر اصلی
        |--------------------------------------------------------------------------
        */

        if (
            $project->primary_image === $image->image
        ) {
            return back()->with(
                'error',
                'عکس اصلی پروژه را نمی‌توانید حذف کنید.'
            );
        }

        /*
        |--------------------------------------------------------------------------
        | حذف فایل از Storage
        |--------------------------------------------------------------------------
        */

        if (
            Storage::disk('public')->exists(
                'projects/' . $image->image
            )
        ) {
            Storage::disk('public')->delete(
                'projects/' . $image->image
            );
        }

        /*
        |--------------------------------------------------------------------------
        | حذف رکورد دیتابیس
        |--------------------------------------------------------------------------
        */

        $image->delete();

        return back()->with(
            'success',
            'تصویر با موفقیت حذف شد.'
        );
    }

    /**
     * تعیین تصویر اصلی
     */
    public function setPrimary(
        Request $request,
        Project $project
    ) {
        $request->validate([
            'image_id' => [
                'required',
                'exists:project_images,id',
            ],
        ]);

        $image = ProjectImage::where(
            'project_id',
            $project->id
        )->findOrFail(
            $request->image_id
        );

        $oldPrimary = $project->primary_image;

        /*
        |--------------------------------------------------------------------------
        | بررسی اینکه تصویر قبلی، تصویر معمولی هم هست یا نه
        |--------------------------------------------------------------------------
        */

        $oldPrimaryIsNormalImage = $project->images()
            ->where('image', $oldPrimary)
            ->exists();

        /*
        |--------------------------------------------------------------------------
        | اگر تصویر قبلی فقط primary بوده، فایلش حذف شود
        |--------------------------------------------------------------------------
        */

        if (
            $oldPrimary &&
            !$oldPrimaryIsNormalImage &&
            Storage::disk('public')->exists(
                'projects/' . $oldPrimary
            )
        ) {
            Storage::disk('public')->delete(
                'projects/' . $oldPrimary
            );
        }

        /*
        |--------------------------------------------------------------------------
        | تنظیم تصویر جدید به عنوان primary
        |--------------------------------------------------------------------------
        */

        $project->update([
            'primary_image' => $image->image,
        ]);

        return back()->with(
            'success',
            'تصویر انتخاب‌شده به عنوان عکس اصلی تنظیم شد.'
        );
    }
}