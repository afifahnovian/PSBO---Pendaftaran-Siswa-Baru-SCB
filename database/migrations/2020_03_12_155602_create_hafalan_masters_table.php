<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHafalanMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalan_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_datahafalansiswa')->unsigned();//fk idhafalansiswa
            $table->longText('nama_juz');
            //foreignkey
            $table->foreign('id_datahafalansiswa')->references('id')->on('data_hafalan_siswas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hafalan_masters');
    }
}
