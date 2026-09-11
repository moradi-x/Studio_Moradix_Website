<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_visits', function (Blueprint $table) {
            $table->id();

            $table->date('visit_date');

            $table->string('session_hash', 64);

            $table->timestamps();

            $table->index('visit_date');
            $table->index('session_hash');

            $table->unique([
                'visit_date',
                'session_hash',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_visits');
    }
};