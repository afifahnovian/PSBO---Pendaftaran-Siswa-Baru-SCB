<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataOrangtuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_orangtuas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('wali_type');
            $table->string('nama'); //nama wali, ibu atau bapak atau lainnya
            $table->string('tempat_lahir'); //tempat lahir wali murid
            $table->date('tanggal_lahir'); //tanggal lahir wali murid
            $table->string('status_hidup'); //jika di wakilkan selain orangtua, apakah orangtuanya masih hidup atau tidak
            $table->integer('umur');
            $table->string('pendidikan_terakhir'); //pendidikan terkahir wali murid
            $table->string('pekerjaan'); //pekerjaan wali murid
            $table->bigInteger('penghasilan_pokok'); //pendapatan pokok wali murid
            $table->bigInteger('penghasilan_sekunder'); //pendapatan diluar pendapatan pokok
            $table->string('jumlah_tanggungan'); //jumlah anggota kerluarga yang menjadi tanggungan wali murid
            $table->string('kesehatan'); //kondisi kesehatan wali murid

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
        Schema::dropIfExists('data_orangtuas');
    }
}
