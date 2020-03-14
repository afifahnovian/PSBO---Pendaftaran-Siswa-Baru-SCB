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
        
        $table->string('status_siswa'); //baru bisa diisi setelah proses seleksi, makanya bukan foreign key, nilai defaultnya: belum, trus bisa diubah ke lolos atau tidak lolos
        $table->string('tipe_siswa'); //nilai defaulnya siswa biasa, baru nanti diubah ke siswa tahfiz
            
        $table->bigInteger('id_datasiswaumum')->unsigned();
        $table->bigInteger('id_datasekolah')->unsigned();
        $table->bigInteger('id_datakesehatan')->unsigned();
        $table->bigInteger('id_datahafalansiswa')->unsigned();
        $table->bigInteger('id_datakeunikansiswa')->unsigned();
        $table->bigInteger('id_datarumah')->unsigned();
        $table->bigInteger('id_dataprestasi')->unsigned();
        $table->bigInteger('id_datawali')->unsigned();
        $table->bigInteger('id_datapengeluaran')->unsigned();
        $table->bigInteger('id_berkasdaftar')->unsigned();
        
        //assign foreign key
        $table->foreign('id_datasiswaumum')->references('id')->on('data_siswa_umums')->onDelete('cascade'); //fk yang reference ke datasiswaumum
        $table->foreign('id_datasekolah')->references('id')->on('data_sekolahs')->onDelete('cascade');//fk yang reference ke datasekolah
        $table->foreign('id_datakesehatan')->references('id')->on('data_kesehatan_siswas')->onDelete('cascade');//id tabel DataKesehatan
        $table->foreign('id_datahafalansiswa')->references('id')->on('data_hafalan_siswas')->onDelete('cascade');//id tabel hafalan siswa
        $table->foreign('id_datakeunikansiswa')->references('id')->on('data_keunikan_siswas')->onDelete('cascade');//id tabel keunikan siswa
        $table->foreign('id_datarumah')->references('id')->on('data_rumahs')->onDelete('cascade');//id tabel Datarumah (done)
        $table->foreign('id_dataprestasi')->references('id')->on('data_prestasis')->onDelete('cascade');//id tabel DataPrestasi (done)
        $table->foreign('id_datawali')->references('id')->on('data_walis')->onDelete('cascade');
        $table->foreign('id_datapengeluaran')->references('id')->on('data_pengeluarans')->onDelete('cascade');
        $table->foreign('id_berkasdaftar')->references('id')->on('berkas_daftars')->onDelete('cascade');
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
