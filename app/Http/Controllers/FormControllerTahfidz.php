<?php

namespace App\Http\Controllers;

use App\DataHafalanSiswa;
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
use Illuminate\Http\Request;

class FormControllerTahfidz extends Controller
{
    public function createForm(){
        return view('/formpendaftaran_tahfidz');
    }

    public function storeTipeSiswaTahfidz($tipesiswa2){
        $calonsiswa2 = new CalonSiswa;
        $calonsiswa2->tipe_siswa = $tipesiswa2;
        $calonsiswa2->save();
        return redirect('/formpendaftaran_tahfidz');
    }

     //save data yang diinput ke database
     public function storeData(Request $request){ 
        $this->validate($request,[ // untuk constraint
            /* Pengisi Form*/
            'pengisiform'       =>'required|max:20',
            'nohp'              =>'required|max:13',
            'email'             =>'required',
             /*Data siswa umum*/
             'nisn'             =>'required|max:20',
             'namalengkap'      =>'required|max:40',
             'namapanggilan'    =>'required|max:10',
             'jeniskelamin'     =>'required',
             'tempatlahir'      =>'required',
             'tanggallahir'     =>'required',
             'alamat'           =>'required',
             'kota_kabupaten'   =>'required',
             'provinsi'         =>'required',
             /*Data Kesehatan Siswa*/
             'tinggibadan'              =>'required | max:3',
             'beratbadan'               =>'required | max:3',
             'riwayatpenyakit'          =>'required',
             'golongandarah'            =>'required',
             'BPJS'                     =>'required',
             /* Data Sekolah sebelumnya */
            'asal_sekolah'              =>'required',
            'alamat_sekolah'            =>'required',
            'no_telp_sekolah'           =>'required | max:12',
            /* Data hafalan */
            'jumlahhafalan'              =>'required',
            'namajuz'                    =>'required',
            /*Data rumah */
            'status_kepemilikan_rumah'  =>'required',
            'tahun_perolehan'           =>'required',
            'kualitas_rumah'            =>'required',
            'luas_tanah'                =>'required',
            'MCK'                       =>'required',
            'sumber_air'                =>'required',
            'daya_listrik'              =>'required',
        
            /* data keunikan siswa*/
            'hal_khusus'                =>'required',
            'citacita'                  =>'required',
            'hobi'                      =>'required',
            'harapan_orgtua'            =>'required',
            /* Data Wali - ayah*/
            'wali_type_ayah'            =>'required',
            'namaayah'                  =>'required',
            'tempatlahirayah'           =>'required',
            'tanggallahirayah'          =>'required',
            'status_hidup_ayah'         =>'required',
            'umurayah'                  =>'required|max:3',
            'pendidikan_terakhir_ayah'  =>'required',
            'pekerjaanayah'             =>'required',
            'penghasilan_pokok_ayah'    =>'required',
            'penghasilan_sekunder_ayah' =>'required',
            'jumlah_tanggungan_ayah'    =>'required',
            'kesehatanayah'             =>'required',
            /* Data Wali - ibu*/
            'wali_type_ibu'             =>'required',
            'namaibu'                   =>'required',
            'tempatlahiribu'            =>'required',
            'tanggallahiribu'           =>'required',
            'status_hidup_ibu'          =>'required',
            'umuribu'                   =>'required|max:3',
            'pendidikan_terakhir_ibu'   =>'required',
            'pekerjaanibu'              =>'required',
            'penghasilan_pokok_ibu'     =>'required',
            'penghasilan_sekunder_ibu'  =>'required',
            'jumlah_tanggungan_ibu'     =>'required',
            'kesehatanibu'              =>'required',
            /* Data Pengeluaran*/
            'kebutuhanhidup'            =>'required',
            'kebutuhanRT'               =>'required',
            'tanggunganpendidikan'      =>'required',
            'tanggungankesehatan'       =>'required',
            'tanggunganhutang'          =>'required',
            'tanggunganlistrik'         =>'required',
            'tanggungantelepon'         =>'required',
            'total'                     =>'required',
            /*Berkas Tahfidz */
            'rapor_sd'                  =>'required|max : 2048',
            'kartu_keluarga'            =>'required|image|max : 2048',
            'ijazah_STTB_STK'           =>'required|max : 2048',
            'pasfoto'                   =>'required|image|max : 2048',
            'pernyataantahfidz'         =>'required|max : 2048'
            
        ]);
        /*Berkas */
        $berkastahfidz                      = new BerkasDaftar();
        $berkastahfidz->calonsiswa_id       = CalonSiswa::max('id');//manggil id calonsiswa
        $berkastahfidz->rapor_sd            = $request->rapor_sd;
        $berkastahfidz->kartu_keluarga      = $request->kartu_keluarga;
        $berkastahfidz->ijazah_STTB_STK     = $request->ijazah_STTB_STK;
        $berkastahfidz->pasfoto             = $request->pasfoto;
        $berkastahfidz->sertifikat          = $request->sertifikat;
        $berkastahfidz->pernyataan_tahfidz  = $request->pernyataantahfidz;
        
        /*Validasi file upload */
        if ($request->hasFile('rapor_sd')) //name di form
        {
            $filerapor                          = $request->rapor_sd; //name form
            $berkastahfidz->rapor_sd            = 'berkastahfidz/raporSD'.$filerapor->getClientOriginalName();
        }
        if ($request->hasFile('ijazah_STTB_STK')) //name di form
        {
            $fileijazah                         = $request->ijazah_STTB_STK; //name form
            $berkastahfidz->ijazah_STTB_STK     = 'berkastahfidz/ijazah'.$fileijazah->getClientOriginalName();
        }

        if ($request->hasFile('sertifikat')) //name di form
        {
            $filesertifikat                     = $request->sertifikat; //name form
            $berkastahfidz->sertifikat          = 'berkastahfidz/sertifikat'.$filesertifikat->getClientOriginalName();
        }
        
        if ($request->hasFile('pernyataantahfidz')) //name di form
        {
            $filetahfidz                        = $request->pernyataantahfidz; //name form
            $berkastahfidz->pernyataantahfidz   = 'berkastahfidz/sertifikat'.$filetahfidz->getClientOriginalName();
        }

        if ($request->hasFile('kartu_keluarga'))
        {
            $fileKK                             = $request->kartu_keluarga;
            //$kartu_keluarga               = Image::make($fileKK)->resize(1920, 1280)->save('berkastahfidz/'.$fileKK->getClientOriginalName());
            $berkastahfidz->kartu_keluarga      = 'berkastahfidz/KK'.$fileKK->getClientOriginalName();
        }

        if ($request->hasFile('pasfoto'))
        {
            $filefoto                           = $request->pasfoto;
            //$pasfoto                      = Image::make($filefoto)->resize(1920, 1280)->save('berkastahfidz/'.$filefptp->getClientOriginalName());
            $berkastahfidz->pasfoto             = 'berkastahfidz/Foto'.$filefoto->getClientOriginalName();
        }
        
        $berkastahfidz->save();
        
        /* data pengisi form */
        $datapengisiform                    = new DataPengisiForm();
        $datapengisiform->calonsiswa_id     = CalonSiswa::max('id');
        $datapengisiform->pengisiform       = $request->pengisiform;
        $datapengisiform->nohp              = $request->nohp;
        $datapengisiform->email             = $request->email;
        $datapengisiform->save();
    
        /*data mahasiswa umum*/
        $datasiswa                      = new DataSiswaUmum(); //objek datasiswa
        $datasiswa->calonsiswa_id       = CalonSiswa::max('id');
        $datasiswa->NISN                = $request->nisn;
        $datasiswa->nama_lengkap        = $request->namalengkap;
        $datasiswa->nama_panggilan      = $request->namapanggilan;
        $datasiswa->jenis_kelamin       = $request->jeniskelamin;
        $datasiswa->tempat_lahir        = $request->tempatlahir;
        $datasiswa->tanggal_lahir       = $request->tanggallahir;
        $datasiswa->alamat              = $request->alamat;
        $datasiswa->kota_kabupaten      = $request->kota_kabupaten;
        $datasiswa->provinsi            = $request->provinsi;
        $datasiswa->save();
        
        // Data keunikan siswa
        $datakeunikan                   = new DataKeunikanSiswa();
        $datakeunikan->calonsiswa_id    = CalonSiswa::max('id');
        $datakeunikan->hal_khusus       = $request->hal_khusus; //db    = name
        $datakeunikan->citacita         = $request->citacita;
        $datakeunikan->hobi             = $request->hobi;
        $datakeunikan->harapan_orgtua   = $request->harapan_orgtua;
        $datakeunikan->save();
        
        /* data kesehatan siswa */
        $datakesehatan                      = new DataKesehatanSiswa();
        $datakesehatan->calonsiswa_id       = CalonSiswa::max('id');
        $datakesehatan->tinggi_badan        = $request->tinggibadan;
        $datakesehatan->berat_badan         = $request->beratbadan;
        $datakesehatan->riwayat_penyakit    = $request->riwayatpenyakit;
        $datakesehatan->golongan_darah      = $request->golongandarah;
        $datakesehatan->BPJS                = $request->BPJS;
        $datakesehatan->save();
        
            /* data sekolah */
        $datasekolah                        = new DataSekolah();
        $datasekolah->calonsiswa_id         = CalonSiswa::max('id');
        $datasekolah->asal_sekolah          = $request->asal_sekolah;
        $datasekolah->alamat_sekolah        = $request->alamat_sekolah;
        $datasekolah->no_telp_sekolah       = $request->no_telp_sekolah;
        $datasekolah->save();
         /* data sekolah */
        $datasekolah                        = new DataSekolah();
        $datasekolah->calonsiswa_id         = CalonSiswa::max('id');
        $datasekolah->asal_sekolah          = $request->asal_sekolah;
        $datasekolah->alamat_sekolah        = $request->alamat_sekolah;
        $datasekolah->no_telp_sekolah       = $request->no_telp_sekolah;
        $datasekolah->save();
        
        /*data hafalan */
        $datahafalan                        = new DataHafalanSiswa();
        $datahafalan->jumlah_hafalan        = $request->jumlahhafalan;
        $datahafalan->nama_juz              = $request->namajuz;
        $datahafalan->save();
        /* data prestasi */
        $dataprestasi1                      = new DataPrestasi();
        $dataprestasi1->calonsiswa_id       = CalonSiswa::max('id');
        $dataprestasi1->jenis_lomba         = $request->jenis_lomba_1;
        $dataprestasi1->tingkat_lomba       = $request->tingkat_lomba_1;
        $dataprestasi1->peringkat           = $request->peringkat1;
        $dataprestasi1->save();

        $dataprestasi2                      = new DataPrestasi();
        $dataprestasi2->calonsiswa_id       = CalonSiswa::max('id');
        $dataprestasi2->jenis_lomba         = $request->jenis_lomba_2;
        $dataprestasi2->tingkat_lomba       = $request->tingkat_lomba_2;
        $dataprestasi2->peringkat           = $request->peringkat2;
        $dataprestasi2->save();

        $dataprestasi3                      = new DataPrestasi();
        $dataprestasi3->calonsiswa_id       = CalonSiswa::max('id');
        $dataprestasi3->jenis_lomba         = $request->jenis_lomba_3;
        $dataprestasi3->tingkat_lomba       = $request->tingkat_lomba_3;
        $dataprestasi3->peringkat           = $request->peringkat3;
        $dataprestasi3->save();
        
        //data  wali
        $dataayah                       = new DataOrangtua();
        $dataayah->calonsiswa_id        = CalonSiswa::max('id');
        $dataayah->wali_type            = $request->wali_type_ayah;
        $dataayah->nama                 = $request->namaayah;
        $dataayah->tempat_lahir         = $request->tempatlahirayah;
        $dataayah->tanggal_lahir        = $request->tanggallahirayah;
        $dataayah->status_hidup         = $request->status_hidup_ayah;
        $dataayah->umur                 = $request->umurayah;
        $dataayah->pendidikan_terakhir  = $request->pendidikan_terakhir_ayah;
        $dataayah->pekerjaan            = $request->pekerjaanayah;
        $dataayah->penghasilan_pokok    = $request->penghasilan_pokok_ayah;
        $dataayah->penghasilan_sekunder = $request->penghasilan_sekunder_ayah;
        $dataayah->jumlah_tanggungan    = $request->jumlah_tanggungan_ayah;
        $dataayah->kesehatan            = $request->kesehatanayah;
        $dataayah->save();

        $datawali                       = new DataWali();
        $datawali->calonsiswa_id        = CalonSiswa::max('id');
        $datawali->wali_type            = $request->wali_type;
        $datawali->nama                 = $request->namawali;
        $datawali->tempat_lahir         = $request->tempatlahirwali;
        $datawali->tanggal_lahir        = $request->tanggallahirwali;
        $datawali->status_hidup         = $request->status_hidup_wali;
        $datawali->umur                 = $request->umurwali;
        $datawali->pendidikan_terakhir  = $request->pendidikan_terakhir_wali;
        $datawali->pekerjaan            = $request->pekerjaanwali;
        $datawali->penghasilan_pokok    = $request->penghasilan_pokok_wali;
        $datawali->penghasilan_sekunder = $request->penghasilan_sekunder_wali;
        $datawali->jumlah_tanggungan    = $request->jumlah_tanggungan_wali;
        $datawali->kesehatan            = $request->kesehatanwali;
        $datawali->save();
        
        $dataibu                        = new DataOrangtua();
        $dataibu->calonsiswa_id         = CalonSiswa::max('id');
        $dataibu->wali_type             = $request->wali_type_ibu;
        $dataibu->nama                  = $request->namaibu;
        $dataibu->tempat_lahir          = $request->tempatlahiribu;
        $dataibu->tanggal_lahir         = $request->tanggallahiribu;
        $dataibu->status_hidup          = $request->status_hidup_ibu;
        $dataibu->umur                  = $request->umuribu;
        $dataibu->pendidikan_terakhir   = $request->pendidikan_terakhir_ibu;
        $dataibu->pekerjaan             = $request->pekerjaanibu;
        $dataibu->penghasilan_pokok     = $request->penghasilan_pokok_ibu;
        $dataibu->penghasilan_sekunder  = $request->penghasilan_sekunder_ibu;
        $dataibu->jumlah_tanggungan     = $request->jumlah_tanggungan_ibu;
        $dataibu->kesehatan             = $request->kesehatanibu;
        $dataibu->save();
        // data rumah
        $datarumah                                  = new DataRumah();
        $datarumah->calonsiswa_id                   = CalonSiswa::max('id');
        $datarumah->status_kepemilikan_rumah        = $request->status_kepemilikan_rumah;
        $datarumah->tahun_perolehan                 = $request->tahun_perolehan;
        $datarumah->kualitas_rumah                  = $request->kualitas_rumah;
        $datarumah->luas_tanah                      = $request->luas_tanah;
        $datarumah->MCK                             = $request->MCK;
        $datarumah->sumber_air                      = $request->sumber_air;
        $datarumah->daya_listrik                    = $request->daya_listrik;
        $datarumah->harta                           = $request->harta;
        $datarumah->status_kepemilikan_harta        = $request->status_kepemilikan_harta;
        $datarumah->kendaraan                       = $request->kendaraan;
        $datarumah->status_kepemilikan_kendaraan    = $request->status_kepemilikan_kendaraan;
        $datarumah->save();
    
        /*Data Pengeluaran */
        $datapengeluaran                            = new DataPengeluaran();
        $datapengeluaran->calonsiswa_id             = CalonSiswa::max('id');
        $datapengeluaran->kebutuhan_hidup           = $request->kebutuhanhidup;
        $datapengeluaran->kebutuhan_RT              = $request->kebutuhanRT;
        $datapengeluaran->tanggungan_pendidikan     = $request->tanggunganpendidikan;
        $datapengeluaran->tanggungan_kesehatan      = $request->tanggungankesehatan;
        $datapengeluaran->tanggungan_hutang         = $request->tanggunganhutang;
        $datapengeluaran->tanggungan_listrik        = $request->tanggunganlistrik;
        $datapengeluaran->tanggungan_telepon        = $request->tanggungantelepon;
        $datapengeluaran->total_pengeluaran         = $request->total;
        $datapengeluaran->save();
        
        return redirect('/')->with('success', 'Pendaftaran Terkirim');
    }
}
