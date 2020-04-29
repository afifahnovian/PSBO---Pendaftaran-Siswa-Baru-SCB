<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasDaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_daftars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rapor_sd');
            $table->string('kartu_keluarga');
            $table->string('ijazah_STTB_STK');
            $table->string('pasfoto');
            $table->string('sertifikat'); //one to many
            $table->string('pernyataan_tahfidz');
            
            //foreignkey dari tabel calon siswa
            $table->bigInteger('calonsiswa_id')->unsigned();
            $table->foreign('calonsiswa_id')->references('id')->on('calon_siswas')->onDelete('cascade'); 
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
        Schema::dropIfExists('berkas_daftars');
    }
}
