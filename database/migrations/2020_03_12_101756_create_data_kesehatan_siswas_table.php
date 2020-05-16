<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKesehatanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kesehatan_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');//id tabel
            
            $table->float('tinggi_badan') ;// atribut tinggi badan 
            $table->float('berat_badan');// atribut berat badan
            $table->longText('riwayat_penyakit')->nullable();//atribut riwayat penyakit
            $table->string('golongan_darah');//atribut golongan darah
            $table->string('BPJS');//status punya bpjs, iya(1), tidak(2), (3) asuransi lain selain bpjs
          
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
        Schema::dropIfExists('data_kesehatan_siswas');
    }
}
