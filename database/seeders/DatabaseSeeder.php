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
            ProjectSeeder::class,
            ProjectImageSeeder::class,
            ContactMessageSeeder::class,
            SettingSeeder::class,
            FeatureSeeder::class,
            StudioServiceSeeder::class,
            StudioTechnologySeeder::class,
        ]);
    }
}
