@extends('layouts.header')
@section('title','Data Siswa')

@section('content')
<!-- nomor page -->
<div class="stepper" style="text-align:center;">
    <span class="step active">1</span>
    <span class="step active">2</span>
    <span class="step active">3</span>
    <span class="step active">4</span>
    <span class="step">5</span>
    <span class="step">6</span>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <form method="POST" action="url{{'/form3'}}">
                <!-- Ayah Kandung -->
                <div class="subform">
                    <div class="subtitle"><h4>Data Keluarga</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">
                    <div class="sub subtitle"><h6>Ayah Kandung</h6></div>
                    
                    <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="nama" placeholder="Nama Lengkap Ayah">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" class="form-control"name="tempatlahir" placeholder="Tempat lahir">
                        </div>
                        <div class="form-group col-md-5" style="float:right; margin-right:0%" >
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status_hidup">Status</label>
                        <div class="choice">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="H" name="status_hidup" value="Hidup" class="custom-control-input">
                            <label class="custom-control-label" for="H">Hidup</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="C" name="status_hidup" value="Cerai" class="custom-control-input">
                            <label class="custom-control-label" for="C">Cerai</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="M" name="status_hidup" value="Meninggal" class="custom-control-input">
                            <label class="custom-control-label" for="M">Meninggal</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control"  name="umur" placeholder="Umur Ayah Kandung">
                    </div>

                    <div class="form-group">
                    <label for="pendidikan terakhir">Pendidikan Terakhir</label>
                    <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Sarjana">Diploma</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                            <option value="Tidak sekolah">Tidak sekolah</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control"  name="pekerjaan" placeholder="Pekerjaan Ayah Kandung">
                    </div>

                    <div class="form-group">
                    <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
                    <input type="text" class="form-control"  name="penghasilan_pokok" placeholder="Contoh : Rp.800.000,00">
                    </div>

                    <div class="form-group">
                    <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
                    <input type="text" class="form-control"  name="penghasilan_sekunder" placeholder="Contoh : Rp.300.000,00">
                    </div>

                    <div class="form-group">
                    <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
                    <select id="jumlah_tanggungan" name="jumlah_tanggungan" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="1">1-2 orang</option>
                            <option value="3">3-4 orang</option>
                            <option value="5">5-6 orang</option>
                            <option value="6">>6 orang</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="kesehatan">Kondisi Kesehatan</label>
                    <select id="kesehatan" name="kesehatan" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="1">Sehat</option>
                            <option value="2">Sakit-sakitan / sakit sementara</option>
                            <option value="3">Sakit tua/ sakit kambuh</option>
                            <option value="4">Sakit permanen / menjalani pengobatan rutin</option>
                        </select>
                    </div>
                </div>
           
                <!-- Ibu Kandung -->
                <div class="subform">
                    <div class="sub subtitle"><h6>Ibu Kandung</h6></div>
                    
                    <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="nama" placeholder="Nama Lengkap Ibu">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" class="form-control"name="tempatlahir" placeholder="Tempat lahir">
                        </div>
                        <div class="form-group col-md-5" style="float:right; margin-right:0%" >
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status_hidup">Status</label>
                        <div class="choice">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="H" name="status_hidup" value="Hidup" class="custom-control-input">
                            <label class="custom-control-label" for="H">Hidup</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="C" name="status_hidup" value="Cerai" class="custom-control-input">
                            <label class="custom-control-label" for="C">Cerai</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="M" name="status_hidup" value="Meninggal" class="custom-control-input">
                            <label class="custom-control-label" for="M">Meninggal</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control"  name="umur" placeholder="Umur Ibu Kandung">
                    </div>

                    <div class="form-group">
                    <label for="pendidikan terakhir">Pendidikan Terakhir</label>
                    <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Sarjana">Diploma</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                            <option value="Tidak sekolah">Tidak sekolah</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control"  name="pekerjaan" placeholder="Pekerjaan Ayah Kandung">
                    </div>

                    <div class="form-group">
                    <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
                    <input type="text" class="form-control"  name="penghasilan_pokok" placeholder="Contoh : Rp.800.000,00">
                    </div>

                    <div class="form-group">
                    <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
                    <input type="text" class="form-control"  name="penghasilan_sekunder" placeholder="Contoh : Rp.300.000,00">
                    </div>

                    <div class="form-group">
                    <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
                    <select id="jumlah_tanggungan" name="jumlah_tanggungan" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="1">1-2 orang</option>
                            <option value="3">3-4 orang</option>
                            <option value="5">5-6 orang</option>
                            <option value="6">>6 orang</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="kesehatan">Kondisi Kesehatan</label>
                    <select id="kesehatan" name="kesehatan" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="1">Sehat</option>
                            <option value="2">Sakit-sakitan / sakit sementara</option>
                            <option value="3">Sakit tua/ sakit kambuh</option>
                            <option value="4">Sakit permanen / menjalani pengobatan rutin</option>
                        </select>
                    </div>
                </div>

                <!-- Wali  -->
                <div class="subform">
                    <div class="sub subtitle"><h6>Wali / Ayah Tiri / Ibu Tiri</h6></div>
                    
                    <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="nama" placeholder="Nama Lengkap Wali">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                        <label for="tempat_lahir">Tempat lahir</label>
                        <input type="text" class="form-control"name="tempatlahir" placeholder="Tempat lahir">
                        </div>
                        <div class="form-group col-md-5" style="float:right; margin-right:0%" >
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status_hidup">Status</label>
                        <div class="choice">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="H" name="status_hidup" value="Hidup" class="custom-control-input">
                            <label class="custom-control-label" for="H">Hidup</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="C" name="status_hidup" value="Cerai" class="custom-control-input">
                            <label class="custom-control-label" for="C">Cerai</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="M" name="status_hidup" value="Meninggal" class="custom-control-input">
                            <label class="custom-control-label" for="M">Meninggal</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control"  name="umur" placeholder="Umur Wali">
                    </div>

                    <div class="form-group">
                    <label for="pendidikan terakhir">Pendidikan Terakhir</label>
                    <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Sarjana">Sarjana</option>
                            <option value="Sarjana">Diploma</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                            <option value="Tidak sekolah">Tidak sekolah</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control"  name="pekerjaan" placeholder="Pekerjaan Wali">
                    </div>

                    <div class="form-group">
                    <label for="penghasilan_pokok">Penghasilan Pokok (per bulan)</label>
                    <input type="text" class="form-control"  name="penghasilan_pokok" placeholder="Contoh : Rp.800.000,00">
                    </div>

                    <div class="form-group">
                    <label for="penghasilan_sekunder">Penghasilan Diluar Penghasilan Pokok (per bulan) </label>
                    <input type="text" class="form-control"  name="penghasilan_sekunder" placeholder="Contoh : Rp.300.000,00">
                    </div>

                    <div class="form-group">
                    <label for="jumlah_tanggungan">Jumlah Tanggungan Keluarga</label>
                    <select id="jumlah_tanggungan" name="jumlah_tanggungan" class="custom-select">
                            <option value="1">1-2 orang</option>
                            <option value="3">3-4 orang</option>
                            <option value="5">5-6 orang</option>
                            <option value="6">>6 orang</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="kesehatan">Kondisi Kesehatan</label>
                    <select id="kesehatan" name="kesehatan" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="1">Sehat</option>
                            <option value="2">Sakit-sakitan / sakit sementara</option>
                            <option value="3">Sakit tua/ sakit kambuh</option>
                            <option value="4">Sakit permanen / menjalani pengobatan rutin</option>
                        </select>
                    </div>
                </div>
                  <!-- button -->
                 <div class="nextprev">
                    <div class="prev" style="float:left">
                    <button type="button" style="border: 2px solid #2C786C; border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px; ">
                            <a class="left-btn" href="{{url('/form2')}}" style="color:darkgreen" >SEBELUMNYA</a>
                        </button>
                    </div>

                    <div class="next" style="float:right">
                        <button type="button" style="background-color: #2C786C;border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px;">
                            <a class="right-btn" href="{{url('/form4')}}" style="color:white" >SELANJUTNYA</a>
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection