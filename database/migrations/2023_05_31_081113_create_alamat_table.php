<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alamat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->char('id_provinsi', 2);
            $table->char('id_kabupaten', 4);
            $table->char('id_kecamatan', 7);
            
            $table->string('alamat');
            $table->string('kode_pos');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('user')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('alamat');
    }
}
