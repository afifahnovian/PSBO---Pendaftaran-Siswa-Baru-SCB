<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CalonSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calon_siswas', function (Blueprint $table) { 
        
        $table->bigInteger('id_datasiswaumum')->unsigned();
        $table->bigInteger('id_datasekolah')->unsigned();
        $table->bigInteger('id_datakesehatan')->unsigned();
        $table->bigInteger('id_datahafalansiswa')->unsigned();
        $table->bigInteger('id_datakeunikansiswa')->unsigned();
        $table->bigInteger('id_datarumah')->unsigned();
        $table->bigInteger('id_dataprestasi')->unsigned();
        //foreign key
        $table->foreign('id_datasiswaumum')->references('id')->on('data_siswa_umums')->onDelete('cascade'); //fk yang reference ke datasiswaumum
        $table->foreign('id_datasekolah')->references('id')->on('data_sekolahs')->onDelete('cascade');//fk yang reference ke datasekolah
        $table->foreign('id_datakesehatan')->references('id')->on('data_kesehatan_siswas')->onDelete('cascade');//id tabel DataKesehatan
        $table->foreign('id_datahafalansiswa')->references('id')->on('data_hafalan_siswas')->onDelete('cascade');//id tabel hafalan siswa
        $table->foreign('id_datakeunikansiswa')->references('id')->on('data_keunikan_siswas')->onDelete('cascade');//id tabel keunikan siswa
        $table->foreign('id_datarumah')->references('id')->on('data_rumahs')->onDelete('cascade');//id tabel Datarumah (done)
        $table->foreign('id_dataprestasi')->references('id')->on('data_prestasis')->onDelete('cascade');//id tabel DataPrestasi (done)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
