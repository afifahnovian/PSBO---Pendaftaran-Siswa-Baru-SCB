<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalonSiswasTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('calon_siswas', function (Blueprint $table) { // inisisasi atribut yang ada di tabel
            //primary key
            $table->bigIncrements('id'); //id yang auto increment 
            $table->timestamps(); //untuk generate otomatis data (update data realtime)
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calon_siswas');
    }
}
