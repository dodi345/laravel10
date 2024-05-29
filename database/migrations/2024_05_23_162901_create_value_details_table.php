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
        Schema::create('value_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->integer('others_value');
            $table->integer('uts');
            $table->integer('uas');
            $table->integer('final_value');
            $table->string('grade_final');
            $table->foreignId('value_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('value_details');
    }
};
