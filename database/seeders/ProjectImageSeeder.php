<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectImage;

class ProjectImageSeeder extends Seeder
{
    public function run(): void
    {
        ProjectImage::create([
            'project_id' => 1,
            'image' => 'projects/img.png',
        ]);

        ProjectImage::create([
            'project_id' => 2,
            'image' => 'projects/img.png',
        ]);

        ProjectImage::create([
            'project_id' => 3,
            'image' => 'projects/img.png',
        ]);

        ProjectImage::create([
            'project_id' => 4,
            'image' => 'projects/img.png',
        ]);

        ProjectImage::create([
            'project_id' => 5,
            'image' => 'projects/img.png',
        ]);
    }
}