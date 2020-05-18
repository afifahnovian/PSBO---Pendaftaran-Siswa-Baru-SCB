<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

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
        
        return view('pages.dashboard')->with('provinsi', json_encode($array));
        // return view('pages.dashboard');
    }

    
}
