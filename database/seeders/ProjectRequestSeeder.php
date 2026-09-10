<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProjectRequest;
use Illuminate\Database\Seeder;

class ProjectRequestSeeder extends Seeder
{
    public function run(): void
    {
        $ecommerce = Category::where('slug', 'ecommerce')->first();
        $corporate = Category::where('slug', 'corporate')->first();
        $portfolio = Category::where('slug', 'portfolio')->first();
        $resume = Category::where('slug', 'resume')->first();
        $studentProjects = Category::where('slug', 'student-projects')->first();

        ProjectRequest::create([
            'name' => 'Ali Ahmadi',
            'email' => 'ali@example.com',
            'phone' => '09123456789',
            'category_id' => $ecommerce->id,
            'budget' => '1000 - 2000 USD',
            'description' => 'I need a modern e-commerce website.',
            'status' => 'new',
        ]);

        ProjectRequest::create([
            'name' => 'Sara Mohammadi',
            'email' => 'sara@example.com',
            'phone' => '09121234567',
            'category_id' => $corporate->id,
            'budget' => '2000 - 4000 USD',
            'description' => 'I need a professional corporate website.',
            'status' => 'contacted',
        ]);

        ProjectRequest::create([
            'name' => 'Reza Karimi',
            'email' => null,
            'phone' => '09129876543',
            'category_id' => $portfolio->id,
            'budget' => '500 - 1000 USD',
            'description' => 'I need a portfolio website to showcase my work.',
            'status' => 'new',
        ]);

        ProjectRequest::create([
            'name' => 'Mina Hosseini',
            'email' => 'mina@example.com',
            'phone' => '09122345678',
            'category_id' => $resume->id,
            'budget' => '500 - 1000 USD',
            'description' => 'I need a clean and professional resume website.',
            'status' => 'completed',
        ]);

        ProjectRequest::create([
            'name' => 'Mohammad Rezaei',
            'email' => 'mohammad@example.com',
            'phone' => '09123456780',
            'category_id' => $studentProjects->id,
            'budget' => '300 - 700 USD',
            'description' => 'I need a website for a student project.',
            'status' => 'rejected',
        ]);
    }
}