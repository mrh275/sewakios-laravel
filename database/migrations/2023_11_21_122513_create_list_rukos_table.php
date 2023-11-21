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
        Schema::create('list_rukos', function (Blueprint $table) {
            $table->id();
            $table->integer('no_unit');
            $table->string('gedung');
            $table->string('tipe_unit');
            $table->integer('jumlah_lantai');
            $table->integer('harga_sewa');
            $table->string('status')->default("Tersedia");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_rukos');
    }
};
