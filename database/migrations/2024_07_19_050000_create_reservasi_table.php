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
        Schema::create('reservasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_reservasi')->unique();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->date('tanggal')->notnullable();
            $table->date('tanggal_mulai')->notnullable();
            $table->date('tanggal_akhir')->notnullable();
            $table->unsignedBigInteger('id_hotel');
            $table->foreign('id_hotel')->references('id_hotel')->on('harga_hari_ini');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
