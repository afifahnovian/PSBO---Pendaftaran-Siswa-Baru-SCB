<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\CalonSiswa;
use App\DataSiswaUmum;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = DB::table('data_siswa_umums')
                ->select(
                    DB::raw('provinsi as provinsi'),
                    DB::raw('count(*) as number'))
                ->groupBy('provinsi')
                ->get();

        $array[] = ['Provinsi','Number'];
        foreach($data as $key => $value){
            $array[++$key] = [$value->provinsi, $value->number];
        }

        $belum_diseleksi = DataSiswaUmum::where('status_siswa', 'Pertimbangan')->get()->count();
        $sudah_diseleksi = DataSiswaUmum::where('status_siswa', 'Lolos') ->orWhere('status_siswa', 'Tidak Lolos')->get()->count();

        return view('pages.dashboard')->with([
            'provinsi'=> json_encode($array),
            'belum_diseleksi' => $belum_diseleksi,
            'sudah_diseleksi' => $sudah_diseleksi 
            ]);
        // /return view('pages.dashboard');
    }

    
}
