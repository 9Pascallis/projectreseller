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
            $table->unsignedBigInteger('id_item_produk');
            $table->unsignedBigInteger('id_keranjang');
            $table->integer('kuantitas');
            $table->integer('jumlah_harga');
            $table->timestamps();

            $table->foreign('id_item_produk')->references('id')->on('item_produk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_keranjang')->references('id')->on('keranjang')->onUpdate('cascade')->onDelete('cascade');
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
