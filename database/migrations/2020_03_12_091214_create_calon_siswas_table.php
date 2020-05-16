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
            $table->bigIncrements('id'); 
            $table->string('status_siswa')->default('Pertimbangan'); // set default : pertimbangan , Lulus untuk siswa lulus, tidak lulus untuk siswa tak lulus
            $table->string('tipe_siswa');// smp dan tahfidz
            $table->timestamps(); 
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
