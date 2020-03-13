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
            $table->string('prestasi')->nullable();
            $table->string('jenis_lomba')->nullable();
            $table->string('tingkat_Lomba')->nullable();
            $table->string('peringkat')->nullable();
            
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
