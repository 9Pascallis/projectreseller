<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap_user');
            $table->date('tanggal_lahir_user');
            $table->string('email')->unique();
            $table->string('no_telp_user');
            $table->string('password');
            $table->string('alamat_user');
            $table->string('provinsi_user');
            $table->string('kota_user');
            $table->string('kecamatan_user');
            $table->string('kode_pos_user');
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
        Schema::dropIfExists('user');
    }
}
