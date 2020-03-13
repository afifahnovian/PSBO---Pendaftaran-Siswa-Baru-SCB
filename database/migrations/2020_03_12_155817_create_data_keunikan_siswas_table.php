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
           
            $table->longText('hal_khusus'); //keunikan khusus siswa
            $table->longText('citacita');
            $table->longText('hobi');
            $table->longText('harapan_orgtua');
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
