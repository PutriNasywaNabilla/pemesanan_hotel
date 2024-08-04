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
        Schema::create('kamar', function (Blueprint $table) {
            $table->id('id_kamar')->unique();
            $table->string('nama_kamar', 100)->notnullable();
            $table->enum('jenis_kamar', ['deluxe', 'superior', 'president'])->notnullable();
            $table->integer('ukuran_kamar')->notnullable();
            $table->integer('harga')->notnullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamar');
    }
};
