<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTechnologySeeder extends Seeder
{
    public function run(): void
    {
        $projects = Project::all();
        $technologies = Technology::all();

        if ($projects->isEmpty() || $technologies->isEmpty()) {
            return;
        }

        $projectTechnology = [];

        foreach ($projects as $project) {
            // برای هر پروژه 1 تا 3 تکنولوژی تصادفی
            $randomTechnologies = $technologies
                ->random(min(rand(1, 3), $technologies->count()));

            foreach ($randomTechnologies as $technology) {
                $projectTechnology[] = [
                    'project_id' => $project->id,
                    'technology_id' => $technology->id,
                ];
            }
        }

        DB::table('project_technology')->insert($projectTechnology);
    }
}