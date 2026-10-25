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
            'image' => 'fake-gallery-1.png',
        ]);

        ProjectImage::create([
            'project_id' => 1,
            'image' => 'fake-gallery-2.png',
        ]);

        ProjectImage::create([
            'project_id' => 2,
            'image' => 'fake-project-1.png',
        ]);

        ProjectImage::create([
            'project_id' => 2,
            'image' => 'fake-project-2.png',
        ]);
    }
}
