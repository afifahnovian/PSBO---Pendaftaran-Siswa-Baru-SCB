<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_masters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_dataprestasi')->unsigned();//fk id_dataprestasi
            $table->string('jenis_lomba');
            $table->string('tingkat_Lomba');
            $table->string('peringkat');
            //foreign key
            $table->foreign('id_dataprestasi')->references('id')->on('data_prestasis')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasi_masters');
    }
}
