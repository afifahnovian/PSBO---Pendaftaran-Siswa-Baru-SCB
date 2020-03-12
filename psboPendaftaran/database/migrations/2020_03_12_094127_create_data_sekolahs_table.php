<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSekolahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sekolahs', function (Blueprint $table) {
            $table->bigIncrements('id');//pk tabel data sekolah
            $table->bigInteger('id_calonsiswa')->unsigned();// fk idcalonsiswa
            $table->string('asal_sekolah');// atribut asal sekolah
            $table->longText('alamat_sekolah');//atribut alamat sekolah
            $table->string('no_telp_sekolah');//atribut noTelpsekolah

            $table->timestamps();

            //foreign key
            $table->foreign('id_calonsiswa')->references('id')->on('calon_siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_sekolahs');
    }
}
