<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CategorySeeder::class,
            TechnologySeeder::class,
            ProjectSeeder::class,
            ProjectImageSeeder::class,
            ServiceSeeder::class,
            ProjectRequestSeeder::class,
            SettingSeeder::class,
            ProjectTechnologySeeder::class,

        ]);
    }
}
