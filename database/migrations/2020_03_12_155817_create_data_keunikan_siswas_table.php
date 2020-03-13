<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKeunikanSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keunikan_siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_calonsiswa')->unsigned();//fk id_calonsiswa
            $table->longText('hal_khusus'); //keunikan khusus siswa
            $table->longText('citacita');
            $table->longText('hobi');
            $table->longText('harapan_orgtua');
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
        Schema::dropIfExists('data_keunikan_siswas');
    }
}
