<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    public function run(): void
    {
        Technology::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
        ]);

        Technology::create([
            'name' => 'PHP',
            'slug' => 'php',
        ]);

        Technology::create([
            'name' => 'React',
            'slug' => 'react',
        ]);

        Technology::create([
            'name' => 'JavaScript',
            'slug' => 'javascript',
        ]);

        Technology::create([
            'name' => 'Tailwind CSS',
            'slug' => 'tailwind-css',
        ]);

        Technology::create([
            'name' => 'MySQL',
            'slug' => 'mysql',
        ]);

        Technology::create([
            'name' => 'HTML',
            'slug' => 'html',
        ]);

        Technology::create([
            'name' => 'CSS',
            'slug' => 'css',
        ]);

        Technology::create([
            'name' => 'Git',
            'slug' => 'git',
        ]);

        Technology::create([
            'name' => 'GitHub',
            'slug' => 'github',
        ]);
    }
}