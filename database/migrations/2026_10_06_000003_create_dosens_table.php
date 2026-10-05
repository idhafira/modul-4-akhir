<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prodi_id')->constrained('prodis')->cascadeOnDelete();
            $table->string('nidn', 15)->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('jabatan')->default('Asisten Ahli');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
