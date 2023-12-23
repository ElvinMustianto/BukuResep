<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pastries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('nama_resep');
            $table->string('slug')->unique();
            $table->text('excerpt');
            $table->text('bahan');
            $table->text('cara_masak');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pastries');
    }
};