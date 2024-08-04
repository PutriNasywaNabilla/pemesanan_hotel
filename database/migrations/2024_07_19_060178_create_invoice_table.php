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
        Schema::create('invoice', function (Blueprint $table) {
            $table->unsignedBigInteger('id_invoice')->unique();
            $table->text('deskripsi')->notnullable(); 
            $table->enum('status', ['bayar', 'dp', 'lunas'])->notnullable();
            $table->integer('besar_dp')->nullable();
            $table->unsignedBigInteger('id_reservasi')->nullable();
            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
