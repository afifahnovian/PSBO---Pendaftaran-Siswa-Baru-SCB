<?php

namespace App\Http\Controllers;
use App\CalonSiswa;
use App\DataSiswaUmum;

use Illuminate\Http\Request;

use App\Exports\SMPExportPerempuan;
use App\Exports\SMPExportLaki;
use App\Exports\TahfidzExportPerempuan;
use App\Exports\TahfidzExportLaki;
use Maatwebsite\Excel\Facades\Excel;

class CalonSiswaController extends Controller
{
    public function exportSMPPR() 
    {
        return Excel::download(new SMPExportPerempuan, 'calonsiswaSMP-Perempuan.xlsx');
    }
    public function exportSMPLK() 
    {
        return Excel::download(new SMPExportLaki, 'calonsiswaSMP-Laki.xlsx');
    }
    public function exportTahfidzPR() 
    {
        return Excel::download(new TahfidzExportPerempuan, 'calonsiswaTahfidz-Perempuan.xlsx');
    }
    public function exportTahfidzLK() 
    {
        return Excel::download(new TahfidzExportLaki, 'calonsiswaTahfidz-Laki.xlsx');
    }
}
