<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UtsCucimobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_customer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plat_nomor');
            $table->string('nama_mobil');
            $table->string('warna_mobil');
            $table->string('jenis_pelayanan');
            $table->string('uang_bayar');
            $table->text('keterangan');
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
        Schema::dropIfExists('transaksi_customer');
    }
}
