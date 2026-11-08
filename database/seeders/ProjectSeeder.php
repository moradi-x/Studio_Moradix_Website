<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Feature;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $project = Project::create([
            'category_id' => 1,

            // اطلاعات فارسی
            'title' => 'فروشگاه اینترنتی',
            'slug' => 'ecommerce-website',
            'short_description' => 'یک فروشگاه اینترنتی مدرن و حرفه‌ای.',
            'description' => 'طراحی و توسعه یک فروشگاه اینترنتی مدرن با امکانات کامل.',

            // اطلاعات انگلیسی
            'title_en' => 'E-commerce Website',
            'short_description_en' => 'A modern and professional e-commerce website.',
            'description_en' => 'Design and development of a modern e-commerce website with complete features.',

            'primary_image' => 'fake-project-1.png',
            'project_url' => 'https://example.com',
            'github_url' => 'https://github.com/example/ecommerce',
            'status' => true,
        ]);

        $project->features()->sync(
            Feature::inRandomOrder()->take(5)->pluck('id')
        );

        $project = Project::create([
            'category_id' => 2,

            // اطلاعات فارسی
            'title' => 'سایت شرکتی',
            'slug' => 'corporate-website',
            'short_description' => 'وب‌سایت معرفی یک شرکت.',
            'description' => 'طراحی و توسعه یک وب‌سایت شرکتی برای معرفی خدمات و فعالیت‌های شرکت.',

            // اطلاعات انگلیسی
            'title_en' => 'Corporate Website',
            'short_description_en' => 'A website designed to introduce a company.',
            'description_en' => 'Design and development of a corporate website to showcase the company’s services and activities.',

            'primary_image' => 'fake-project-2.png',
            'project_url' => 'https://example.com',
            'github_url' => null,
            'status' => true,
        ]);

        $project->features()->sync(
            Feature::inRandomOrder()->take(5)->pluck('id')
        );
    }
}