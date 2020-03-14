<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPengeluaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pengeluarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('kebutuhan_hidup'); //uang yang dikeluarkan tiap bulan untuk kebutuhan hidup
            $table->integer('kebutuhan_RT'); //uang yang dikeluarkan tiap bulan untuk kebutuhan rumah tangga
            $table->integer('tanggunang_pendidikan'); //uang yang dikeluarkan tiap bulan untuk membayar pendidikan keluarga yang ditanggung wali
            $table->integer('tanggunang_kesehatan'); //uang yang dikeluarkan tiap bulan untuk membayar biaya kesehatan keluarga yang ditanggung wali
            $table->integer('tanggungan_hutang'); //uang yang dikeluarkan tiap bulan untuk membayar hutang atau cicilan
            $table->integer('tanggungan_listrik'); //uang yang dikeluarkan tiap bulan untuk membayar biaya listrik
            $table->integer('tanggungan_telepon'); //uang yang dikeluarkan tiap bulan untuk membayar biaya telefon
            $table->integer('total_pengeluaran'); //totalan dari semua yang diatas (bikin di controller cara totalinnya)
            
            //foreignkey dari tabel calon siswa
            $table->bigInteger('calonsiswa_id')->unsigned();
            $table->foreign('calonsiswa_id')->references('id')->on('calon_siswas')->onDelete('cascade');
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
        Schema::dropIfExists('data_pengeluarans');
    }
}
