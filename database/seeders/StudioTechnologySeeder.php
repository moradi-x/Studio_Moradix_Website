<?php

namespace Database\Seeders;

use App\Models\StudioTechnology;
use Illuminate\Database\Seeder;

class StudioTechnologySeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['Laravel', 'laravel/laravel-original.svg'],
            ['PHP', 'php/php-original.svg'],
            ['JavaScript', 'javascript/javascript-original.svg'],
            ['TypeScript', 'typescript/typescript-original.svg'],
            ['HTML5', 'html5/html5-original.svg'],
            ['CSS3', 'css3/css3-original.svg'],
            ['Tailwind CSS', 'tailwindcss/tailwindcss-original.svg'],
            ['React', 'react/react-original.svg'],
            ['Vue.js', 'vuejs/vuejs-original.svg'],
            ['Node.js', 'nodejs/nodejs-original.svg'],
            ['MySQL', 'mysql/mysql-original.svg'],
            ['PostgreSQL', 'postgresql/postgresql-original.svg'],
            ['Git', 'git/git-original.svg'],
            ['GitHub', 'github/github-original.svg'],
            ['Bootstrap', 'bootstrap/bootstrap-original.svg'],
            ['Sass', 'sass/sass-original.svg'],
            ['Vite', 'vitejs/vitejs-original.svg'],
            ['Python', 'python/python-original.svg'],
        ];

        foreach ($items as $index => [$name, $logo]) {
            StudioTechnology::updateOrCreate(
                ['name' => $name],
                [
                    'logo' => $logo,
                    'sort_order' => $index + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
