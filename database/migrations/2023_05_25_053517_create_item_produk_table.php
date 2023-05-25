<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_ukuran');
            $table->unsignedBigInteger('id_warna');
            $table->integer('total_stok_item_produk');
            $table->string('foto_item_produk');
            $table->timestamps();

            $table->foreign('id_produk')->references('id')->on('produk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_ukuran')->references('id')->on('ukuran')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_warna')->references('id')->on('warna')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_produk');
    }
}
