<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetodePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metode_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_jasa_pengiriman');
            $table->string('nama_jenis_layanan');
            $table->string('no_resi');
            $table->timestamps();

            $table->foreign('id_pemesanan')->references('id')->on('pemesanan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jasa_pengiriman')->references('id')->on('jasa_pengiriman')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metode_pengiriman');
    }
}
