<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSiswaUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswa_umums', function (Blueprint $table) {
            $table->bigIncrements('id');//id table data siswa umum
            $table->string('status_siswa')->default('Pertimbangan'); 
            $table->string('tipe_siswa');// smp dan tahfidz
            $table->string('NISN');// atribut NISN
            $table->string('nama_lengkap'); //atribut nama lengkap
            $table->string('nama_panggilan');//atribut nama panggilan
            $table->string('jenis_kelamin'); //atribut jk 
            $table->string('tempat_lahir'); // atribut tempatLahir
            $table->date('tanggal_lahir'); //atribut tanggalLahir
            $table->longText('alamat'); //atribut alamat
            $table->string('kota_kabupaten');
            $table->string('provinsi');  
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
        Schema::dropIfExists('data_siswa_umums');
    }
}
