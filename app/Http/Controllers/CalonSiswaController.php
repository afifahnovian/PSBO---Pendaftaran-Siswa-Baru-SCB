<?php

namespace App\Http\Controllers;
use App\CalonSiswa;
use App\DataSiswaUmum;

use Illuminate\Http\Request;

use App\Exports\SMPExport;
use App\Exports\TahfidzExport;
use Maatwebsite\Excel\Facades\Excel;

class CalonSiswaController extends Controller
{
    public function exportSMP() 
    {
        return Excel::download(new SMPExport, 'calonsiswaSMP.xlsx');
    }
    public function exportTahfidz() 
    {
        return Excel::download(new TahfidzExport, 'calonsiswaTahfidz.xlsx');
    }
}
