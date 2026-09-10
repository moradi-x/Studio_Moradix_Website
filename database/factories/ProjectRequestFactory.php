<?php

namespace Database\Factories;

use App\Models\ProjectRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ProjectRequest>
 */
class ProjectRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [

        'name' => fake()->name(),

        'email' => fake()->email(),

        'phone' => fake()->phoneNumber(),

        'project_type' => 'Website',

        'budget' => '100-200 میلیون',

        'description' => fake()->paragraph(),

        'status' => 'new',

    ];
}
}
