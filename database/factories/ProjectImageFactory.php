<?php

namespace Database\Factories;

use App\Models\ProjectImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProjectImage>
 */
class ProjectImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [

        'project_id' => \App\Models\Project::factory(),

        'image' => 'projects/img.png',

    ];
}
}
