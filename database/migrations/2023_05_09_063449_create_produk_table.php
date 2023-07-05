<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_jenis_produk');
            $table->string('nama_produk')->unique();
            $table->longText('deskripsi_produk');
            $table->integer('harga_produk');
            $table->integer('diskon_produk');
            $table->integer('harga_reseller');
            $table->string('foto_utama_produk');
            $table->integer('berat_produk');
            $table->timestamps();
            
            $table->foreign('id_jenis_produk')->references('id')->on('jenis_produk')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk');
    }
}
