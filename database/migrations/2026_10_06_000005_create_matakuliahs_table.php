<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id')->constrained('prodis')->cascadeOnDelete();
            $table->foreignId('dosen_id')->nullable()->constrained('dosens')->nullOnDelete();
            $table->string('kode', 10)->unique();
            $table->string('nama');
            $table->unsignedTinyInteger('sks');
            $table->unsignedTinyInteger('semester');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('matakuliahs');
    }
};
