<?php

namespace App\Exports;

use App\CalonSiswa;
use App\DataSiswaUmum;
use Maatwebsite\Excel\Concerns\FromCollection;

class SMPExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CalonSiswa::all();
    }
    // public function collection(Collection $rows)
    // {
    //     foreach ($rows as $row) 
    //     {
            // EmployeeType::create([
            //     'name' => $row[1],
            // ]);

            // Contact::create([
            //     'institution' => $row[3],
            //     'type' => $row[4],
            //     'address' => $row[5],
            // ]);
    //     }
    // }
}
