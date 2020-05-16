<?php

namespace App\Http\Controllers;

use App\CalonSiswa;
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
    
    //delete data pada form
    public function deleteData($id){
        $datasiswa= DataSiswaUmum::find($id);
        $datasiswa->delete();
        return redirect('/table')->with('info','Data berhasil di hapus');// delete data dengan adanya pop up message
    }

    //save data yang diinput ke database
    public function storeData(Request $request){ //untuk input data pada form, request diperlukan karna dia menerima data
        $this->validate($request,[ 
            /* Pengisi Form*/
            'tipe_siswa'=>'required'
        ]);
        /* data pengisi form */
        $tipesiswa = new CalonSiswa();
        $pengisiform->pengisiform = $request->pengisiform;

        //save objek siswa ke database
        $tipesiswa->save();
        return redirect('/formpendaftaran_smp'); // langsung
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
