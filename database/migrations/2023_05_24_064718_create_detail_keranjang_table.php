<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailKeranjangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_keranjang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_keranjang');
            $table->integer('kuantitas');
            $table->integer('jumlah_harga');
            $table->timestamps();

            $table->foreign('id_produk')->references('id')->on('produk');
            $table->foreign('id_keranjang')->references('id')->on('keranjang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_keranjang');
    }
}
