<?php

namespace App\Exports;

use App\DataSiswaUmum;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SMPExport implements FromQuery

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return DataSiswaUmum::select('NISN', 'nama_lengkap', 'provinsi')->get();
    }

    // public function headigs(): array
    // {
    //     return [
    //         'NISN',
    //         'Nama Lengkap',
    //         'Provinsi',
    //     ];
    // }
}
