<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{

    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {

            $table->id();


            // عنوان خدمت
            $table->string('title');


            // آدرس خدمت
            $table->string('slug')
                ->unique();


            // توضیحات کامل
            $table->longText('description');


            // نمایش یا عدم نمایش
            $table->boolean('status')
                ->default(true);


            // ترتیب نمایش در سایت
            $table->integer('order')
                ->default(0);


            $table->timestamps();

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('services');
    }

};