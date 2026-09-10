<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {

            $table->id();


            // ارتباط با دسته بندی
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();


            $table->string('title');


            $table->string('slug')
                ->unique();


            $table->text('short_description');


            $table->longText('description');


            // تصویر اصلی پروژه
            $table->string('primary_image');


            // لینک سایت پروژه
            $table->string('project_url')
                ->nullable();


            // لینک گیت هاب پروژه
            $table->string('github_url')
                ->nullable();


            // نمایش پروژه
            $table->boolean('status')
                ->default(true);


            // نمایش در صفحه اصلی
            $table->boolean('featured')
                ->default(false);


            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};