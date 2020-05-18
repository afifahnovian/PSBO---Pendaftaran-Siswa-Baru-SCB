<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

class PageController extends Controller
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
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {

            if ($page == "tables") {
                $calonsiswas = CalonSiswa::all();
                return view('pages.tables')->with('calonsiswas', $calonsiswas);
            }
            elseif($page ==! "individu") {
            return view("pages.{$page}");
            }
        }
        return abort(404);
    }
    
    
    public function ShowIndividu($id){
        $calonsiswa = CalonSiswa::find($id);
        return view('pages.individu')->with('calonsiswa', $calonsiswa);
    }

    // public function ShowCalonSiswa(){
    //     $calonsiswas = CalonSiswa::orderBy('created_at');
    //     return view('index')->with('calonsiswas', $calonsiswas);
    // }
}
