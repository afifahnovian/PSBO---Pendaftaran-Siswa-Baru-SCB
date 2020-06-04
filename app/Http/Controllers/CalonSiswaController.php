<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\CalonSiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class CalonSiswaController extends Controller
{
    public function exportSMP() 
    {
        return Excel::download(new SMPExport, 'calonsiswa.xlsx');
    }
    public function exportTahfidz() 
    {
        return Excel::download(new TahfidzExport, 'calonsiswa.xlsx');
    }
}
