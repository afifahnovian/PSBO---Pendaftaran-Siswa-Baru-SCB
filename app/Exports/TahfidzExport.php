<?php

namespace App\Exports;

use App\CalonSiswa;
use App\DataSiswaUmum;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;

class TahfidzExport implements FromQuery
{
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return DataSiswaUmum::select('NISN', 'nama_lengkap', 'provinsi')->get();
    }
}
