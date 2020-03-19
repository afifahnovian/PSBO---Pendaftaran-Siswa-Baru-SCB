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
            $table->string('NISN');// atribut NISN
            $table->string('nama_lengkap'); //atribut nama lengkap
            $table->string('nama_panggilan');//atribut nama panggilan
            $table->integer('jenis_kelamin'); //atribut jk : 1 lk 2 pr
            $table->string('tempat_lahir'); // atribut tempatLahir
            $table->date('tanggal_lahir'); //atribut tanggalLahir
            //$table->string('agama'); //atribut agama
            $table->longText('alamat'); //atribut alamat
           
            
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
