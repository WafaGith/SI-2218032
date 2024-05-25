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
        Schema::create('penumpang', function (Blueprint $table) {
            $table->id('id_penumpang');
            $table->string('namaPenumpang');
            $table->string('alamat');
            $table->enum('jenisKelamin', ['Laki-Laki', 'Perempuan']);
            $table->bigInteger('noTelepon');
            $table->string('statusPenerbangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penumpang');
    }
};
