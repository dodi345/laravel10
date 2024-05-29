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
        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lecturer_id')->constrained();
            $table->integer('composition_other_values');
            $table->integer('composition_uts_values');
            $table->integer('composition_uas_values');
            $table->foreignId('semester_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('academic_year_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
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
        Schema::dropIfExists('values');
    }
};
