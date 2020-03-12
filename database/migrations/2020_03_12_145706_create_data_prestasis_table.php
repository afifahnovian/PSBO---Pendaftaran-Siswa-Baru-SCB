<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_prestasis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_calonsiswa')->unsigned();//fk id_calonsiswa
            $table->integer('prestasi')->nullable(); //jika ada prestasi (1), jika tidak (0)

            //foreign key
            $table->foreign('id_calonsiswa')->references('id')->on('calon_siswas')->onDelete('cascade');
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
        Schema::dropIfExists('data_prestasis');
    }
}
