<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTempatWisata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tempat_wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat_wisata',30);
            $table->string('harga_tiket',1);
            $table->string('kebersihan',1);
            $table->string('jarak_tempuh',1);
            $table->string('waktu_kunjungan',1);
            $table->string('jumlah_pengunjung',1);
            $table->string('popularitas',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_tempat_wisata');
    }
}
