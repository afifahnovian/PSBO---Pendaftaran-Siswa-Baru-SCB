<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataHafalanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_hafalan_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_calonsiswa')->unsigned();//fk id_calonsiswa
            $table->integer('jumlah_hafalan')->nullable();//jumlahhafalan siswa
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
        Schema::dropIfExists('data_hafalan_siswas');
    }
}
