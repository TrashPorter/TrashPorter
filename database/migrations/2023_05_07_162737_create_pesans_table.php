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
        Schema::create('pesans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor');
            $table->dateTime('datetime');
            $table->integer('harga_botol')->nullable();
            $table->integer('jumlah_botol')->nullable();
            $table->integer('harga_kaleng')->nullable();
            $table->integer('jumlah_kaleng')->nullable();
            $table->integer('harga_kardus')->nullable();
            $table->integer('jumlah_kardus')->nullable();
            $table->integer('harga_so')->nullable();
            $table->integer('jumlah_so')->nullable();
            $table->boolean('botol')->nullable();
            $table->boolean('kaleng')->nullable();
            $table->boolean('kardus')->nullable();
            $table->boolean('organik')->nullable();
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('pos');
            $table->longText('message');
            $table->integer('ongkir');
            $table->timestamps();
            $table->integer('harga_total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesans');
    }
};
