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

            // ارتباط با دسته‌بندی
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete();

            // نام فارسی و انگلیسی
            $table->string('title');
            $table->string('title_en')->nullable();

            $table->string('slug')->unique();

            // توضیح کوتاه فارسی و انگلیسی
            $table->text('short_description');
            $table->text('short_description_en')->nullable();

            // توضیحات کامل فارسی و انگلیسی
            $table->longText('description');
            $table->longText('description_en')->nullable();

            // تصویر اصلی پروژه
            $table->string('primary_image');

            // لینک سایت پروژه
            $table->string('project_url')->nullable();

            // لینک گیت‌هاب پروژه
            $table->string('github_url')->nullable();

            // وضعیت نمایش پروژه
            $table->boolean('status')->default(true);

            // زمان ایجاد و ویرایش
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};