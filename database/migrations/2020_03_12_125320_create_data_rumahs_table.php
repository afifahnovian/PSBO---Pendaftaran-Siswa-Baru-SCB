<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataRumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_rumahs', function (Blueprint $table) {
            $table->bigIncrements('id');//id datarumah
           
            $table->string('status_kepemilikan_rumah');//sewa pemilikan rumah
            $table->string('tahun_perolehan');//tahun perolehan
            $table->string('kualitas_rumah');//kualitas rumah tinggal e.g layak huni,tidak layak huni
            $table->string('luas_tanah'); //luas tanah rumah
            $table->string('MCK'); // keadaan mandi cuci kakus e.g : kepemilikan sndiri di dalam rumah, or diluar rumah or berbagi pakai
            $table->string('sumber_air'); //sumber air di rumah e.g : sumur or pdam
            $table->string('daya_listrik');//daya listrik rumah
            $table->integer('harta_tidak_bergerak')->nullable();//contoh : punya sawah,ladang,tanah, punya(1),tidak punya(0)
            $table->string('nama_harta')->nullable(); //nama harta tidak bergerak e.g: Sawah
            $table->string('status_kepemilikan_harta')->nullable();//status kepemilikan harta e.g: milik sendiri
<<<<<<< HEAD
=======
            
            //foreignkey dari tabel calon siswa
            $table->bigInteger('calonsiswa_id')->unsigned();
            $table->foreign('calonsiswa_id')->references('id')->on('calon_siswas')->onDelete('cascade');
>>>>>>> 891bd7b376d05e4055bd49bbb8da1f6bd2ccc39e
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
        Schema::dropIfExists('data_rumahs');
    }
}
