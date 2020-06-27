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
        return DataSiswaUmum::where([
        ['tipe_siswa', 'Tahfidz'],
        ['status_siswa', 'Lolos'],
        ['jenis_kelamin', 'Perempuan'],
    ])->select('NISN', 'nama_lengkap', 'tipe_siswa', 'jenis_kelamin', 'provinsi')->get();
    }
}
