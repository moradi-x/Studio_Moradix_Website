<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   public function definition(): array
{
    return [

        'title' => fake()->sentence(2),

        'slug' => fake()->slug(),

        'description' => fake()->paragraph(),

        'status' => true,

        'order' => fake()->numberBetween(1,10),

    ];
}
}
