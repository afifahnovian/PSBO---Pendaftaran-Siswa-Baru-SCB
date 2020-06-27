<?php

namespace App\Exports;

use App\DataSiswaUmum;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;


class SMPExport implements FromQuery

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return DataSiswaUmum::select('NISN', 'nama_lengkap', 'tipe_siswa', 'jenis_kelamin', 'provinsi')->where([
            ['tipe_siswa', 'SMP'],
            ['status_siswa', 'Lolos'],
            ['jenis_kelamin', 'Perempuan'],
        ])->get();
    }

    public function headigs(): array
    {
        return [
            'NISN',
            'Nama Lengkap',
            'tipe',
            'jenis kelamin',
            'Provinsi',
        ];
    }
}
