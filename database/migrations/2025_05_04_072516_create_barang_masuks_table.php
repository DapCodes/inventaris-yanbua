<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_id')->constrained('bukus')->onDelete('cascade');
            $table->foreignId('diterima_oleh')->constrained('users')->onDelete('cascade');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->text('catatan')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangmasuks');
    }
};
