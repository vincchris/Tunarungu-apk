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
        Schema::create('babs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->foreignId('kelas_id')->constrained();
            $table->foreignId('mata_pelajaran_id')->constrained();
            $table->string('kode');
            $table->string('nama');
            $table->string('gambar')->nullable();
            $table->string('audio')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('babs');
    }
};