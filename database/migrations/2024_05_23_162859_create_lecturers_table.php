<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name');
            $table->integer('nidn')->unique();
            $table->string('image')->nullable();
            $table->foreignId('course_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('prodi_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('major_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
