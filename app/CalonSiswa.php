<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalonSiswa extends Model
{
    public function DataSiswaUmum(){
        return $this->hasOne('App\DataSiswaUmum');
    }
    
    public function DataSekolah(){
        return $this->hasOne('App\DataSekolah');
    }

    public function DataKesehatanSiswa(){
        return $this->hasOne('App\DataKesehatanSiswa');
    }

    public function DataRumah(){
        return $this->hasOne('App\DataRumah');
    }

    public function DataPrestasi(){
        return $this->hasOne('App\DataPrestasi');
    }

    public function DataHafalanSiswa(){
        return $this->hasOne('App\DataHafalanSiswa');
    }

    public function DataKeunikanSiswa(){
        return $this->hasOne('App\DataKeunikanSiswa');
    }

    public function DataPengeluaran(){
        return $this->hasOne('App\DataPengeluaran');
    }

    public function DataWali(){
        return $this->hasOne('App\DataWali');
    }

    public function BerkasDaftar(){
        return $this->hasOne('App\BerkasDaftar');
    }
}
