<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSiswaUmum; //model yg disimpan
class DataSiswaUmumController extends Controller
{
    //nampilin hasil input
    public function view(){ // untuk pergi view data siswa umum
        $datasiswa= DataSiswaUmum::all(); // Select all data from tabel datasiswaumum
        return view('table', compact('datasiswa')); //halaman yg menampilkan isi input dari form
    }
    //nampilin halaman input form
    public function create(){ // untuk pergi view data siswa umum
        return view('form');
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
            'nisn'=>'required|max:20',
            'namalengkap'=>'required',
            'namapanggilan'=>'required',
            'jeniskelamin'=>'required',
            'tempatlahir'=>'required',
            'tanggallahir'=>'required',
            'alamat'=>'required'
        ]);
        $datasiswa = new DataSiswaUmum(); //objek datasiswa
        $datasiswa->NISN = $request->nisn;
        $datasiswa->nama_lengkap = $request->namalengkap;
        $datasiswa->nama_panggilan = $request->namapanggilan;
        $datasiswa->jenis_kelamin = $request->jeniskelamin;
        $datasiswa->tempat_lahir = $request->tempatlahir;
        $datasiswa->tanggal_lahir = $request->tanggallahir;
        //$datasiswa->agama = $request->agama
        $datasiswa->alamat = $request->alamat;
        //save objek siswa ke database
        $datasiswa->save();
        return redirect('/table'); // langsung
    }

    //update data 
    public function update($id){ // untuk pergi view data siswa umum
        $datasiswa = DataSiswaUmum::find($id);
        // return $datasiswa;
        return view('edit',compact('datasiswa'));//return ke view edit
    }

    //edit data pada form
    public function edit(Request $request,$id){
        // 1. pastiin dari frontend datanya udah bener
        // 2. karna da bener yauda
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
