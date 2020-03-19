<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRumah extends Model
{
    public function CalonSiswa(){
        return $this->belongsTo('App\CalonSiswa');
    }
}
