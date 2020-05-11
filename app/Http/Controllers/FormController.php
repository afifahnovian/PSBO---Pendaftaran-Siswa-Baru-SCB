<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\DataPengisiForm;
use App\DataSiswaUmum; //model yg disimpan
use App\DataKesehatanSiswa;


class FormController extends Controller
{
    public function create(){
        $pengisiform = DataPengisiForm::all();
        $datasiswa= DataSiswaUmum::all();
        $datakesehatan = DataKesehatanSiswa::all();
        return view('/table', compact('datasiswa','pengisiform','datakesehatan')); 
    }
    
    //save data yang diinput ke database
    public function storeData(Request $request){ //untuk input data pada form, request diperlukan karna dia menerima data
        $this->validate($request,[ // untuk constraint
            /* Pengisi Form*/
            'pengisiform'=>'required|max:20',
            'nohp'=>'required|max:13',
            'email'=>'required',

             /*Data siswa umum*/
             'nisn'=>'required|max:20',
             'namalengkap'=>'required',
             'namapanggilan'=>'required',
             'jeniskelamin'=>'required',
             'tempatlahir'=>'required',
             'tanggallahir'=>'required',
             'alamat'=>'required',
             /*Data Kesehatan Siswa*/
             'tinggibadan'=>'required | max:3',
             'beratbadan'=>'required | max 3',
             'riwayatpenyakit'=>'required',
             'golongandarah'=>'required',
             'BPJS'=>'required'
        ]);
        /* data pengisi form */
        $pengisiform = new DataPengisiForm();
        $pengisiform->pengisiform = $request->pengisiform;
        $pengisiform->nohp = $request->nohp;
        $pengisiform->email = $request->email;
        $pengisiform->save();
         /*data mahasiswa umum*/
         $datasiswa = new DataSiswaUmum(); //objek datasiswa
         $datasiswa->NISN = $request->nisn;
         $datasiswa->nama_lengkap = $request->namalengkap;
         $datasiswa->nama_panggilan = $request->namapanggilan;
         $datasiswa->jenis_kelamin = $request->jeniskelamin;
         $datasiswa->tempat_lahir = $request->tempatlahir;
         $datasiswa->tanggal_lahir = $request->tanggallahir;
         $datasiswa->alamat = $request->alamat;
         /* data kesehatan siswa */
         $datakesehatan = new DataKesehatanSiswa();
         $datakesehatan->tinggi_badan = $request->tinggibadan;
         $datakesehatan->berat_badan = $request->beratbadan;
         $datakesehatan->riwayat_penyakit = $request->riwayatpenyakit;
         $datakesehatan->golongan_darah = $request->golongandarah;
         $datakesehatan->BPJS = $request->BPJS;
         //save objek siswa ke database
         $datasiswa->save();
         $datakesehatan->save();
        return redirect('/'); // langsung
    }

}
