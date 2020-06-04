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
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use DB;
use App\Status;
use Response;
use App\DataPost;

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
            // elseif($page ==! "individu") {
            return view("pages.{$page}");
            // }
        }
        return abort(404);
    }
    
    

    public function ShowIndividu($id){
        $calonsiswa = CalonSiswa::find($id);
        $prestasis = DataPrestasi::where(['calonsiswa_id' => $calonsiswa->id])->get();
        return view('pages.individu')->with([
            'calonsiswa' => $calonsiswa,
            'prestasis' => $prestasis
            ]);
    }

    public function  Updateindividu($id){
        $calonsiswa = CalonSiswa::find($id);
        // $status = status::all();
        return view('pages.edit')->with('calonsiswa', $calonsiswa);
    }

    public function Editindividu(Request $request, $id){
        $this->validate($request,[
            'status'=>'required'
            // 'tipe_siswa'=>'required' 
        ]);
        $calonsiswa = CalonSiswa::find($id);
        $calonsiswa->status_siswa = $request->status;
        $prestasis = DataPrestasi::where(['calonsiswa_id' => $calonsiswa->id])->get();
        // $calonsiswa->update($request->status_siswa);

        $calonsiswa->save();
        return view('/pages/individu', compact('calonsiswa', 'prestasis'))->with('info','Data berhasil di perbaharui');
    }

     //menampilkan daftar calon siswa sesuai tipe calon siswa, yaitu SMP atau tahfidz
     public function tablesSMP(){ 
        $calonsiswas = CalonSiswa::Orderby('id')->where('tipe_siswa', 'SMP')->get();
        $tipe_siswa = 'SMP';
        return view('/pages/tableSMP')->with([
            'calonsiswas' => $calonsiswas,
            'tipe_siswa'=> $tipe_siswa
        ]);
    }
    public function tablesTahfidz(){ 
        $calonsiswas = CalonSiswa::Orderby('id')->where('tipe_siswa', 'Tahfidz')->get();
        $tipe_siswa = 'Tahfidz';
        return view('/pages/tableTahfidz')->with([
            'calonsiswas' => $calonsiswas,
            'tipe_siswa'=> $tipe_siswa
        ]);
    }
    //menampilkan tabel hasil pencarian
    //masi gagal hue
    public function table(Request $request){
        $query = $request->input('query');
        $data_umums = DataSiswaUmum::where('nama_lengkap', 'like', "%$query%")->get();
        // dd($data_umums);
        return view('pages/table')->with('data_umums', $data_umums);
        // if($request->has('cari')) {
        //     $data_umums = DataSiswaUmum::where('nama_lengkap', 'like', '%'.$request->cari.'%' )->get();
        //     return view('/pages/table', ['data_umums'=> $data_umums]);
        // }
        // else{
        //     return view('/pages/pencarian');
        // }
    }

    //menampilkan berkas
    public function berkas(){
        // if ($tipe == "KK") {
        // $pathToFile = 'berkassmp/KK/logo.png';
        // return response()->file($pathToFile);
        // }

        $filename = 'LKP13_P1_G64170023.pdf';
        $path = storage_path($filename);

        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }

    public function AllPost(){
        $data_posts = DataPost::all();
        return view('pages.post',compact('data_posts'));
    }
}
