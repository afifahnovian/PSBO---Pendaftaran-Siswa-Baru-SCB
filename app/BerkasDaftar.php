<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BerkasDaftar extends Model
{
    protected $fillable = ['rapor_sd', 'kartu_keluarga', 'ijazah_STTB_STK', 'pasfoto', 'sertifikat', 'pernyataan_tahfidz'];
    public function CalonSiswa(){
        return $this->belongsTo('App\CalonSiswa');
    }
}
