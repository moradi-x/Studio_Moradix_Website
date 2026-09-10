<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('project_images', function (Blueprint $table) {

            $table->id();


            // ارتباط با پروژه
            $table->foreignId('project_id')
                ->constrained('projects')
                ->cascadeOnDelete();


            // مسیر عکس
            $table->string('image');


            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('project_images');
    }

};