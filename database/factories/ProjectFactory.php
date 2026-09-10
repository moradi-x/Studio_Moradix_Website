<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'category_id' => \App\Models\Category::factory(),

            'title' => fake()->sentence(3),

            'slug' => fake()->slug(),

            'short_description' => fake()->sentence(),

            'description' => fake()->paragraph(),

            'primary_image' => 'projects/img.png',
            
            'project_url' => fake()->url(),

            'github_url' => fake()->url(),

            'status' => true,

            'featured' => fake()->boolean(),

        ];
    }
}
