<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_requests', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('email')
                ->nullable();

            $table->string('phone');

            $table->string('project_type');

            $table->string('budget')
                ->nullable();

            $table->text('description');

            $table->enum('status', [
                'new',
                'contacted',
                'completed',
                'rejected'
            ])->default('new');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_requests');
    }
};
