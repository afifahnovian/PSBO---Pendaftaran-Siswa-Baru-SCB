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
use App\faqSCB;
use App\SyaratPendaftaran;

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
    
    public function ShowIndividu($id) {
        $calonsiswa = CalonSiswa::find($id);
        $prestasis = DataPrestasi::where(['calonsiswa_id' => $calonsiswa->id])->get();
        $berkas = BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->get();
        $sertif = BerkasDaftar::where(['calonsiswa_id' => $calonsiswa->id])->select('sertifikat')->get();
        return view('pages.individu')->with([
            'calonsiswa' => $calonsiswa,
            'prestasis' => $prestasis,
            'berkas' => $berkas, 
            'sertif' => $sertif
            ]);

        // return dd($sertif);
    }

    //fungsi untuk melakukan update status
    public function  Updateindividu($id) {
        $calonsiswa = CalonSiswa::find($id);
        $status = DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_siswa')->first();
        return view('pages.edit')->with([
            'calonsiswa' => $calonsiswa,
            'status_siswa' => $status
            ]);
    }

    // melakukan perubahan status individu
    public function Editindividu(Request $request, $id) {
        $this->validate( $request,[
            'status'=>'required' 
        ]);
        $calonsiswa = CalonSiswa::find($id);
        $data_umums = DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->first();
        $data_umums->status_siswa = $request->status;
        $prestasis = DataPrestasi::where(['calonsiswa_id' => $calonsiswa->id])->get();
        $data_umums->save();
        return view('/pages/individu', compact('calonsiswa', 'data_umums', 'prestasis'))->with('info','Data berhasil di perbaharui');
    }

     //menampilkan daftar calon siswa sesuai tipe calon siswa, yaitu SMP atau tahfidz
     public function tablesSMP( $status ) { 
        if ($status  == "belum"){
            $data_umums = DataSiswaUmum::Orderby('calonsiswa_id')->where([
                ['tipe_siswa', 'SMP'], 
                ['status_siswa', 'Pertimbangan'],
                ])->get();
            $tipe_siswa = 'SMP';
            return view('/pages/tableSMP')->with([
                'data_umums' => $data_umums,
                'tipe_siswa'=> $tipe_siswa
            ]);
        }
        else {
            $data_umums = DataSiswaUmum::Orderby('calonsiswa_id')->where([
                ['tipe_siswa', 'SMP'], 
                ['status_siswa', 'Lolos'],
                ])->orWhere([
                    ['tipe_siswa', 'SMP'], ['status_siswa', 'Tidak Lolos']
                    ])->get();
            $tipe_siswa = 'SMP';
            return view('/pages/tableSMP_sudah')->with([
                'data_umums' => $data_umums,
                'tipe_siswa'=> $tipe_siswa
            ]);
        }
    }

    public function tablesTahfidz($status) {
        if ($status  == "belum"){
            $data_umums = DataSiswaUmum::Orderby('calonsiswa_id')->where([
                ['tipe_siswa', 'Tahfidz'], 
                ['status_siswa', 'Pertimbangan']
                ])->get();
            $tipe_siswa = 'Tahfidz';
            return view('/pages/tableTahfidz')->with([
                'data_umums' => $data_umums,
                'tipe_siswa'=> $tipe_siswa
            ]);
        }
        else {
            $data_umums = DataSiswaUmum::Orderby('calonsiswa_id')->where([
                ['tipe_siswa', 'Tahfidz'], 
                ['status_siswa', 'Lolos'],
                ])->orWhere([
                    ['tipe_siswa', 'SMP'], 
                    ['status_siswa', 'Tidak Lolos'],
                    ])->get();
            $tipe_siswa = 'Tahfidz';
            return view('/pages/tableTahfidz_sudah')->with([
                'data_umums' => $data_umums,
                'tipe_siswa'=> $tipe_siswa
            ]);
        }
    }

    //melihat berkas
    public function berkasView($detail, $id){
        $berkas = BerkasDaftar::find($id);
        $berkas_detail = $berkas->$detail;
        if ($berkas_detail === null){
            return redirect("/pages/individu/{$id}")->with('info', 'File tidak ditemukan');
        } else {
            return view('/pages/show', compact('berkas_detail'));
        }
        // return dd($berkas_detail);
    }

    //download berkas
    public function berkasDownload($detail, $id){
        $berkas = BerkasDaftar::find($id);
        $berkas_detail = $berkas->$detail;
        if ($berkas_detail === null){
            return redirect("/pages/individu/{$id}")->with('info', 'File tidak ditemukan');
        } else {
            return response()->download($berkas_detail);
        }
        // return dd($berkas_detail);
    }

    //menampilkan berkas
    // public function berkas(){
        // if ($tipe == "KK") {
        // $pathToFile = 'berkassmp/KK/logo.png';
        // return response()->file($pathToFile);
        // }

    //     $filename = 'LKP13_P1_G64170023.pdf';
    //     $path = storage_path($filename);

    //     return Response::make(file_get_contents($path), 200, [
    //         'Content-Type' => 'application/pdf',
    //         'Content-Disposition' => 'inline; filename="'.$filename.'"'
    //     ]);
    // }

    public function AllPost(){
        $data_posts       = DataPost::all();
        $kontak1          = DataPost::where('tipe_post','kontak1')->first();
        $kontak2          = DataPost::where('tipe_post','kontak2')->first();
        $status_ppdb      = DataPost::where('tipe_post','status_ppdb')->first();
        return view('pages.kontenutama.konten-utama', compact('data_posts','kontak1','kontak2','status_ppdb'));
    }

    public function viewFAQ()
    {
        $faq = faqSCB::all();
        $no          = 1;
        return view('pages.faq.faq',compact('faq','no'));
    }
    public function viewCreateFAQ()
    {
        return view('pages.faq.create-faq');
    }
    
    public function viewEditFAQ($id)
    {
        $faq = faqSCB::where('id',$id)->first();
        return view('pages.faq.edit-faq',compact('faq'));
    }

    public function viewEditSyaratSMP()
    {
        $data_posts = DataPost::where('tipe_post','syaratsmp')->first();
        return view('pages.syaratsmp.edit-syarat-pendaftaran-smp',compact('data_posts'));
    }

    public function syaratSMP(){
        $data_posts          = DataPost::where('tipe_post','syaratsmp')->first();
        $kontaksmp1          = DataPost::where('tipe_post','kontaksmp1')->first();
        $kontaksmp2          = DataPost::where('tipe_post','kontaksmp2')->first();
        return view('pages.syaratsmp.syarat-pendaftaran-smp', compact('data_posts','kontaksmp1','kontaksmp2'));
    }

    public function viewEditSyaratTahfidz()
    {
        $data_posts = DataPost::where('tipe_post','syarattahfidz')->first();
        return view('pages.syarattahfidz.edit-syarat-pendaftaran-tahfidz',compact('data_posts'));
    }

    public function syaratTahfidz(){
        $data_posts              = DataPost::where('tipe_post','syarattahfidz')->first();
        $kontaktahfidz1          = DataPost::where('tipe_post','kontaktahfidz1')->first();
        $kontaktahfidz2          = DataPost::where('tipe_post','kontaktahfidz2')->first();
        return view('pages.syarattahfidz.syarat-pendaftaran-tahfidz', compact('data_posts','kontaktahfidz1','kontaktahfidz2'));
    }
    
}