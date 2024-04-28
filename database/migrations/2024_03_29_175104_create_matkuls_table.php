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
        Schema::create('matkuls', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('dosen_id')->constrained('dosens', 'id')->onDelete('cascade');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('sks');
            $table->enum('type', ['MKU', 'MKW']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matkuls');
    }
};
