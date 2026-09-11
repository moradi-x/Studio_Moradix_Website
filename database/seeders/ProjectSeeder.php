<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::create([
            'category_id' => 1,
            'title' => 'فروشگاه اینترنتی',
            'slug' => 'ecommerce-website',
            'short_description' => 'یک فروشگاه اینترنتی مدرن و حرفه‌ای.',
            'description' => 'طراحی و توسعه یک فروشگاه اینترنتی مدرن با امکانات کامل.',
            'primary_image' => 'img.png',
            'project_url' => 'https://example.com',
            'github_url' => 'https://github.com/example/ecommerce',
            'status' => true,
            'featured' => true,
        ]);

        Project::create([
            'category_id' => 2,
            'title' => 'سایت شرکتی',
            'slug' => 'corporate-website',
            'short_description' => 'وب‌سایت معرفی یک شرکت.',
            'description' => 'طراحی و توسعه یک وب‌سایت شرکتی برای معرفی خدمات و فعالیت‌های شرکت.',
            'primary_image' => 'img.png',
            'project_url' => 'https://example.com',
            'github_url' => null,
            'status' => true,
            'featured' => true,
        ]);

        Project::create([
            'category_id' => 3,
            'title' => 'سایت نمونه کار',
            'slug' => 'portfolio-website',
            'short_description' => 'وب‌سایت حرفه‌ای برای نمایش نمونه‌کارها.',
            'description' => 'طراحی یک وب‌سایت نمونه کار مدرن برای نمایش پروژه‌ها و مهارت‌ها.',
            'primary_image' => 'img.png',
            'project_url' => 'https://example.com',
            'github_url' => 'https://github.com/example/portfolio',
            'status' => true,
            'featured' => false,
        ]);

        Project::create([
            'category_id' => 4,
            'title' => 'سایت رزومه‌ای',
            'slug' => 'resume-website',
            'short_description' => 'وب‌سایت رزومه و معرفی مهارت‌ها.',
            'description' => 'یک وب‌سایت رزومه‌ای برای معرفی مهارت‌ها، سوابق کاری و تجربیات.',
            'primary_image' => 'img.png',
            'project_url' => null,
            'github_url' => 'https://github.com/example/resume',
            'status' => true,
            'featured' => false,
        ]);

        Project::create([
            'category_id' => 5,
            'title' => 'پروژه دانشجویی',
            'slug' => 'student-project',
            'short_description' => 'یک پروژه دانشجویی وب.',
            'description' => 'یک پروژه دانشجویی با طراحی ساده و کاربردی.',
            'primary_image' => 'img.png',
            'project_url' => null,
            'github_url' => null,
            'status' => true,
            'featured' => false,
        ]);
    }
}