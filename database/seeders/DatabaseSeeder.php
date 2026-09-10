<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Technology;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Service;
use App\Models\ProjectRequest;
use App\Models\Setting;


class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        // Admin
        Admin::factory()->create();



        // Categories
        Category::factory(5)->create();



        // Technologies
        Technology::factory(10)->create();



        // Projects
        Project::factory(10)
            ->create()
            ->each(function ($project) {


                // تصاویر پروژه
                ProjectImage::factory(3)->create([
                    'project_id' => $project->id
                ]);


                // اتصال تکنولوژی‌ها
                $technologies = Technology::inRandomOrder()
                    ->limit(3)
                    ->pluck('id');


                $project->technologies()
                    ->attach($technologies);


            });



        // Services
        Service::factory(5)->create();



        // Requests
        ProjectRequest::factory(10)->create();



        // Settings
        Setting::factory(5)->create();

    }

}