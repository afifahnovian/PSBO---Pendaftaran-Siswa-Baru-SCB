<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataWalisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_walis', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->string('status_hubungan_keluarga')->nullable(); //siapa yang bertindak sebagai wali murid, bapak / ibu / yang lainnya
            $table->string('wali_type')->nullable();
            $table->string('nama')->nullable(); //nama wali, ibu atau bapak atau lainnya
            $table->string('tempat_lahir')->nullable(); //tempat lahir wali murid
            $table->date('tanggal_lahir')->nullable(); //tanggal lahir wali murid
            $table->string('status_hidup')->nullable(); //jika di wakilkan selain orangtua, apakah orangtuanya masih hidup atau tidak
            $table->integer('umur')->nullable();
            $table->string('pendidikan_terakhir')->nullable(); //pendidikan terkahir wali murid
            $table->string('pekerjaan')->nullable(); //pekerjaan wali murid
            $table->bigInteger('penghasilan_pokok')->nullable(); //pendapatan pokok wali murid
            $table->bigInteger('penghasilan_sekunder')->nullable(); //pendapatan diluar pendapatan pokok
            $table->string('jumlah_tanggungan')->nullable(); //jumlah anggota kerluarga yang menjadi tanggungan wali murid
            $table->string('kesehatan')->nullable(); //kondisi kesehatan wali murid

            //foreignkey dari tabel calon siswa
            $table->bigInteger('calonsiswa_id')->unsigned();
            $table->foreign('calonsiswa_id')->references('id')->on('calon_siswas')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('data_walis')->nullable();
    }
}
