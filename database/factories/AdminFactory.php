<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    public function definition(): array
    {
        return [

            'name' => 'Moradix Admin',

            'email' => 'admin@moradix.com',

            'password' => Hash::make('password'),

        ];
    }
}