<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataOrangtua extends Model
{
    public function CalonSiswa(){
        return $this->belongsTo('App\CalonSiswa');
    }
}
