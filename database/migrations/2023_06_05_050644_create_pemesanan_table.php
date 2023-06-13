<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->date('tanggal_pemesanan');
            $table->string('invoice');
            $table->integer('total_harga_pemesanan');
            $table->string('status');
            $table->string('nama_lengkap_penerima');
            $table->string('nomor_hp_penerima');
            $table->string('alamat_penerima');
            $table->string('provinsi_penerima');
            $table->string('kota_penerima');
            $table->string('kecamatan_penerima');
            $table->integer('kode_pos_penerima');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
