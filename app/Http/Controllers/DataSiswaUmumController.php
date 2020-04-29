<?php

namespace App\Http\Controllers;

use App\DataKesehatan;
use Illuminate\Http\Request;
use App\DataSiswaUmum; //model yg disimpan
use App\DataKesehatanSiswa;
use App\DataPengisiForm;

class DataSiswaUmumController extends Controller
{
    //pergi ke page step 2
    public function view1(){ // untuk pergi view data siswa umum
        $datasiswa= DataSiswaUmum::all(); // Select all data from tabel datasiswaumum
        $pengisiform = DataPengisiForm::all();
        $datakesehatan = DataKesehatanSiswa::all();
        return view('/table', compact('datasiswa','pengisiform','datakesehatan')); 
    }
    //nampilin halaman input form
    public function create(){ // untuk pergi view data siswa umum
        return view('form');
    }
    public function create1(){ // untuk pergi view data siswa umum
        return view('form1');
    }
    public function create2(){ // untuk pergi view data siswa umum
        return view('form2');
    }
    public function create3(){ // untuk pergi view data siswa umum
        return view('form3');
    }
    public function create4(){ // untuk pergi view data siswa umum
        return view('form4');
    }
    public function create5(){ // untuk pergi view data siswa umum
        return view('form5-UploadBerkasSMP');
    }

    //delete data pada form
    public function deleteData($id){
        $datasiswa= DataSiswaUmum::find($id);
        $datasiswa->delete();
        return redirect('/table')->with('info','Data berhasil di hapus');// delete data dengan adanya pop up message
    }

    //save data yang diinput ke database
    public function storeData(Request $request){ //untuk input data pada form, request diperlukan karna dia menerima data
        $this->validate($request,[ // untuk constraint
            //tulis nama sesuai 'name' di file blade
            /* Pengisi Form*/
            'pengisiform'=>'required|max:20',
            'nohp'=>'required',
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
        $pengisiform->save();
        return redirect('/form1'); // langsung
    }

    //update data 
    public function update($id){ // untuk pergi view data siswa umum
        $datasiswa = DataSiswaUmum::find($id);
        // return $datasiswa;
        return view('edit',compact('datasiswa'));//return ke view edit
    }

    //edit data pada form
    public function edit(Request $request,$id){
        $this->validate($request,[ // untuk constraint
            //tulis nama sesuai 'name' di file blade(FE), 
            //required | constraint
            'nisn'=>'required|max:20|numeric', 
            'namalengkap'=>'required|string',
            'namapanggilan'=>'required|string',
            'jeniskelamin'=>'required',
            'tempatlahir'=>'required|string',
            'tanggallahir'=>'required',
            'alamat'=>'required'
        ]);
        $datasiswa = DataSiswaUmum::find($id);
        $datasiswa->NISN = $request->nisn;
        $datasiswa->nama_lengkap = $request->namalengkap;
        $datasiswa->nama_panggilan = $request->namapanggilan;
        $datasiswa->jenis_kelamin = $request->jeniskelamin;
        $datasiswa->tempat_lahir = $request->tempatlahir;
        $datasiswa->tanggal_lahir = $request->tanggallahir;
        $datasiswa->alamat = $request->alamat;

        $datasiswa->save();
        return redirect('/table')->with('info','Data berhasil di perbaharui');// delete data dengan adanya pop up message
    }
   
}
