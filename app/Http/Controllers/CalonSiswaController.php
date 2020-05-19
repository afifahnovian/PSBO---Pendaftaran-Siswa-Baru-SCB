<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\CalonSiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class CalonSiswaController extends Controller
{
    public function export() 
    {
        return Excel::download(new CalonSiswaExport, 'calonsiswa.xlsx');
    }
}
