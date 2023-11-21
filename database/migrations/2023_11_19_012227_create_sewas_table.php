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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->varchar('nomor_kontrak');
            $table->string('nama_penyewa');
            $table->string('no_hp');
            $table->integer('no_unit');
            $table->integer('jumlah_bayar');
            $table->date('tanggal_bayar');
            $table->date('tanggal_tempo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
