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
    Schema::create('features', function (Blueprint $table) {
        $table->id();

        $table->foreignId('feature_category_id')
            ->constrained('feature_categories')
            ->cascadeOnDelete();

        $table->string('name', 150);
        $table->string('slug', 150)->unique();
        $table->string('icon', 100)->nullable();
        $table->text('description')->nullable();

        $table->unsignedSmallInteger('sort_order')->default(0);
        $table->boolean('is_active')->default(true);

        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('features');
}
};
