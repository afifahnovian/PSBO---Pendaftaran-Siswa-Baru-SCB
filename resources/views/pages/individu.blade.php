@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'individu'
])

@section('content')
    <div class="content">
        <div class="row ">
            <div class="col-md-8" id="slider">
                <div id="slides">
                    <div id="overflow">
                        <div class="inner">
                            <div class="card slide slide_1">
                                <div class="slide-content">
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Pengisi Form')}} </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengisiForm::where(['calonsiswa_id' => $calonsiswa->id])->pluck('pengisiform')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Nomor HP')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengisiForm::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nohp')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Email')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengisiForm::where(['calonsiswa_id' => $calonsiswa->id])->pluck('email')->first() }} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Umum Calon Siswa')}} </h4>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nama_lengkap')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Nama Panggilan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nama_panggilan')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Jenis Kelamin')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('jenis_kelamin')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tempat Lahir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tempat_lahir')->first() }}</p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tanggal Lahir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggal_lahir')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Alamat')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('alamat')->first() }} </p>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Kota/Kabupaten')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kota_kabupaten')->first() }} </p>
                                            </div>
                                        </div>  
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Provinsi')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('provinsi')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('NISN')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('NISN')->first() }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card slide slide_2">
                                <div class="slide-content">
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Kesehatan Calon Siswa')}} </h4>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tinggi Badan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tinggi_badan')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Berat Badan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('berat_badan')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Penyakit yang pernah diderita/alergi')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('riwayat_penyakit')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Golongan Darah')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('golongan_darah')->first() }}</p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('BPJS')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('BPJS')->first() }} </p>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Keunikan Calon Siswa')}} </h4>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Hal-hal khusus (keunikan, passion, kebiasaan)')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('hal_khusus')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Cita-cita')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('citacita')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Hobi')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('hobi')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Harapan Orang Tua')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('harapan_orgtua')->first() }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card slide slide_3">
                                <div class="slide-content">
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Sekolah Sebelumnya')}} </h4>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Asal Sekolah')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSekolah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('asal_sekolah')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Alamat Sekolah')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSekolah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('alamat_sekolah')->first() }}  </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Nomor Telepon Sekolah')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataSekolah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('no_telp_sekolah')->first() }} </p>
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Prestasi Akademik')}} </h4>
                                    </div>
                                    {{ $prestasis = App\DataPrestasi::where(['calonsiswa_id' => $calonsiswa->id])->get() }}
                                    @foreach($prestasis as $prestasi)
                                        <div class="card-body">   
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Jenis Lomba')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{$prestasi->jenis_lomba}} </p>
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Tingkat Lomba')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{$prestasi->tingkat_lomba}}  </p>
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Peringkat')}} </label>
                                                <div class="col-md-9">
                                                    <p >:{{$prestasi->peringkat}} </p>
                                                </div>
                                            </div>   
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card slide slide_4">
                                <div class="slide-content">
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Keluarga')}} </h4>
                                        <h6 class="card-title">{{__('Ayah Kandung')}}</h6>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('nama')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tempat Lahir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('tempat_lahir')->first() }}  </p>
                                            </div>
                                            <label class="col-md-3 col-form-label"> {{__('Tanggal Lahir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('tanggal_lahir')->first() }}  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Umur')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('umur')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Pendidikan Terakhir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('pendidikan_terakhir')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Pekerjaan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('pekerjaan')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Penghasilan Pokok')}} </label>
                                            <div class="col-md-9">
                                                <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('penghasilan_pokok')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Penghaislan Tambahan')}} </label>
                                            <div class="col-md-9">
                                                <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('penghasilan_sekunder')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Jumlan Tanggungan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('jumlah_tanggungan')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Kondisi Kesehatan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('kesehatan')->first() }} </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h6 class="card-title">{{__('Ibu Kandung')}}</h6>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('nama')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tempat Lahir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('tempat_lahir')->first() }}  </p>
                                            </div>
                                            <label class="col-md-3 col-form-label"> {{__('Tanggal Lahir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('tanggal_lahir')->first() }}  </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Umur')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('umur')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Pendidikan Terakhir')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('pendidikan_terakhir')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Pekerjaan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('pekerjaan')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Penghasilan Pokok')}} </label>
                                            <div class="col-md-9">
                                                <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('penghasilan_pokok')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Penghaislan Tambahan')}} </label>
                                            <div class="col-md-9">
                                                <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('penghasilan_sekunder')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Jumlan Tanggungan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('jumlah_tanggungan')->first() }} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Kondisi Kesehatan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('kesehatan')->first() }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card slide slide_5">
                                <div class="slide-content">
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Rumah Tinggal dan Fasilitas Keluarga')}} </h4>
                                    </div>
                                    <div>
                                        <div class="card-body">   
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Status Kepemilikan Rumah')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_kepemilikan_rumah')->first() }} </p>
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Tahun Peroleh')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tahun_perolehan')->first() }} </p>
                                                </div>
                                                <label class="col-md-3 col-form-label"> {{__('Kualitas')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kualitas_rumah')->first() }}  </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Luas (m2)')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('luas_tanah')->first() }} m^2</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Mandi, cuci, kakus')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('MCK')->first() }} </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Sumber Air')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('sumber_air')->first() }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="card-body">   
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Daya Listrik (KWh)')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('daya_listrik')->first() }}  </p>
                                                </div>
                                                <label class="col-md-3 col-form-label"> {{__('Harta Tidak Bergerak')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('harta')->first() }}  </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Status Kepemilikan Harta')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_kepemilikan_harta')->first() }} </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Kendaraan yang Dimiliki')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kendaraan')->first() }} </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 col-form-label"> {{__('Status Kepemilikan Kendaraan')}} </label>
                                                <div class="col-md-9">
                                                    <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_kepemilikan_kendaraan')->first() }} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="card slide slide_6">
                                <div class="slide-content">
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Data Sekolah Sebelumnya')}} </h4>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Kebutuhan Hidup')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kebutuhan_hidup')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Kebutuhan Rumah Tangga')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('Kebutuhan_RT')->first() }}  </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tanggungan Pendidikan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_pendidikan')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tanggungan Kesehatan')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_kesehatan')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tanggungan Hutang')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_hutang')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tanggungan Listrik')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_listrik')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Tanggungan Telepon')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_telepon')->first() }} </p>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Total Pengeluaran')}} </label>
                                            <div class="col-md-9">
                                                <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('total_pengeluaran')->first() }} </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card slide slide_7">
                                <div class="slide-content">
                                    <div class="card-header">
                                        <h4 class="card-title"> {{__('Berkas Calon Siswa')}} </h4>
                                    </div>
                                    <div class="card-body">   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Kartu Keluarga')}} </label>
                                            <div class="col-md-9">
                                                <!-- <p >: Fulan </p> -->
                                                <a href="http://www.unhas.ac.id/rhiza/arsip/arsip-macam2/Ade_Muti/Kartu-Keluarga.pdf" >: kartu keluarga</a>
                                            </div>
                                        </div>   
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Rapor')}} </label>
                                            <div class="col-md-9">
                                                <a >: Rapor  </a>
                                            </div>
                                            <label class="col-md-3 col-form-label"> {{__('Ijazah')}} </label>
                                            <div class="col-md-9">
                                                <a >: ijazah  </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Pas Foto')}} </label>
                                            <div class="col-md-9">
                                                <a >: pas foto </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 col-form-label"> {{__('Sertifikat')}} </label>
                                            <div class="col-md-9">
                                                <p >: Sertifikat </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <form id="editstatus">
                    <div class="card">
                        <div class="slide-content">
                            <div class="card-header">
                                <h4 class="card-title"> {{__(' Status Siswa')}} </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <label class="col-md-3 col-form-label"> {{__('Status')}} </label>
                                    <div class="col-md-9">
                                        <a >: {{$calonsiswa->status_siswa}} </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <td class="text-right">
                                    <a href="/pages/individu/{{$calonsiswa->id}}/edit" class="btn btn-sm btn-primary">
                                        ubah
                                    </a>
                                </td>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
@endsection