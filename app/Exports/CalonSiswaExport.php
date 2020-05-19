<?php

namespace App\Exports;

use App\BerkasDaftar;
use App\DataPengisiForm;
use App\DataSiswaUmum; 
use App\DataKesehatanSiswa;
use App\DataPengeluaran;
use App\DataPrestasi;
use App\DataRumah;
use App\DataSekolah;
use App\DataKeunikanSiswa;
use App\DataWali;
use App\CalonSiswa;
use App\DataOrangtua;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class CalonSiswaExport implements FromCollection, WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //pilih semua calon siswa
    public function collection()
    {
        return CalonSiswa::all();
    }

    //buat dua sheet untuk perempuan dan laki-laki
    // Excel::create('Filename', function($excel) {

        // Our first sheet
        // $excel1->sheet('SMP Ikhwan', function($sheet) {
    
        // });
    
        // Our second sheet
        // $excel2->sheet('SMP Akhwat', function($sheet) {
    
        // });
    
    // })->export('xls');

    
}
