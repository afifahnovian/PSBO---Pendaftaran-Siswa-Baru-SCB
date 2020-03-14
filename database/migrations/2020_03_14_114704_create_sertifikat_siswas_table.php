<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSertifikatSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sertifikat_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_sertifikat');
            $table->longText('keterangan');
            
            //foreignkey dari tabel berkas daftar
            $table->bigInteger('id_berkasdaftar')->unsigned();
            $table->foreign('id_berkasdaftar')->references('id')->on('berkas_daftars')->onDelete('cascade');

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
        Schema::dropIfExists('sertifikat_siswas');
    }
}
