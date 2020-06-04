<?php

namespace App\Exports;

use App\CalonSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class TahfidzExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CalonSiswa::all();
    }
}
