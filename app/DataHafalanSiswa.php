<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataHafalanSiswa extends Model
{
    public function CalonSiswa(){
        return $this->belongsTo('App\CalonSiswa');
    }
}
