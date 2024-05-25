<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pemesanan', function (Blueprint $table) {
            $table->id('id_pesan');
            $table->foreignId('id_penumpang')->constrained('penumpang'); // Assuming 'tb_pesawat' is the name of the related table
            $table->foreignId('id_harga')->constrained('tb_harga'); // Assuming 'tb_harga' is the name of the related table
            $table->time('jam_keberangkatan');
            $table->time('jam_kedatangan');
            $table->string('bandara_awal');
            $table->string('bandara_tujuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pemesanan');
    }
}
