<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengirimanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemesanan');
            $table->unsignedBigInteger('id_jasa_pengiriman');
            $table->string('nama_jenis_layanan');
            $table->string('no_resi');
            $table->string('nama_lengkap_penerima');
            $table->string('nomor_hp_penerima');
            $table->string('alamat_penerima');
            $table->char('id_provinsi', 2);
            $table->char('id_kabupaten', 4);
            $table->char('id_kecamatan', 7);
            $table->integer('kode_pos_penerima');
            $table->timestamps();

            $table->foreign('id_pemesanan')->references('id')->on('pemesanan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_jasa_pengiriman')->references('id')->on('jasa_pengiriman')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_provinsi')->references('id')->on('provinces')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kabupaten')->references('id')->on('regencies')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('id_kecamatan')->references('id')->on('districts')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengiriman');
    }
}
