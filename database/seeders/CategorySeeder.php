<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'سایت فروشگاهی',
            'slug' => 'ecommerce',
        ]);

        Category::create([
            'name' => 'سایت شرکتی',
            'slug' => 'corporate',
        ]);

        Category::create([
            'name' => 'سایت نمونه کار',
            'slug' => 'portfolio',
        ]);

        Category::create([
            'name' => 'سایت رزومه‌ای',
            'slug' => 'resume',
        ]);

        Category::create([
            'name' => 'سایت پروژه‌های دانشجویی',
            'slug' => 'student-projects',
        ]);
    }
}