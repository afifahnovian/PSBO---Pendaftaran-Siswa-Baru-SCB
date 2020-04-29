@extends('layouts.header')
@section('title','Data Siswa')

@section('content')

<div class="stepper" style="text-align:center;">
    <span class="step active">1</span>
    <span class="step active">2</span>
    <span class="step active">3</span>
    <span class="step active">4</span>
    <span class="step active">5</span>
    <span class="step">6</span>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <form method="POST" action="{{url('/form4')}}">
            <div class="subform">
                    <div class="subtitle"> <h4>Data Rumah Tinggal dan Fasilitas Keluarga</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">
                    
                    <div class="form-group">
                    <label for="status_kepemilikan_rumah">Status Kepemilikan Rumah</label>
                    <select id="status_kepemilikan_rumah" name="status_kepemilikan_rumah" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Sendiri">Milik Sendiri</option>
                            <option value="Bulanan">Sewa Bulanan</option>
                            <option value="Tahunan">Sewa Tahunan</option>
                            <option value="Bebas Sewa">Bebas Sewa</option>
                            <option value="Rumah Dinas">Rumah Dinas</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="tahun_perolehan">Tahun Perolehan</label>
                    <input type="year" class="form-control"  name="tahun_perolehan">
                    </div>
                    
                    <div class="form-group">
                    <label for="kualitas_rumah">Kualitas Rumah</label>
                    <select id="kualitas_rumah" name="kualitas_rumah" class="custom-select">
                            <option value="Layak">Layak Huni</option>
                            <option value="Setengah Layak">Setengah Layak</option>
                            <option value="Tidak Layak">Tidak Layak Huni</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="luas_tanah">Luas Tanah (m2)</label>
                    <select id="luas_tanah" name="luas_tanah" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="25 ">25</option>
                            <option value="25-50">25-50</option>
                            <option value="50-99">50-99</option>
                            <option value="100-200">100-200</option>
                            <option value=">200">>200</option>
                        </select>
                    </div>
                    
    

                    <div class="form-group">
                    <label for="MCK">Mandi, Cuci, Kakus</label>
                    <select id="MCK" name="MCK" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Dalam rumah">Kepemilikan sendiri di dalam rumah</option>
                            <option value="Luar Rumah">Kepemilikan sendiri di luar rumah</option>
                            <option value="Berbagi">Berbagi pakai</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="sumber_air">Sumber Air</label>
                    <select id="sumber_air" name="sumber_air" class="custom-select">
                            <option value="Sumur">Sumur</option>
                            <option value="PDAM">PDAM</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="daya_listrik">Daya Listrik (kWh)</label>
                    <select id="daya_listrik" name="daya_listrik" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="450">450</option>
                            <option value="900">900</option>
                            <option value="1300">1300</option>
                            <option value=">1300">>1300</option>
                           
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="harta">Harta Tidak Bergerak</label>
                    <select id="harta" name="harta" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Sawah">Sawah</option>
                            <option value="Ladang">Ladang</option>
                            <option value="Kolam">Kolam</option>
                            <option value="Tanah">Tanah</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="status_kepemilikan_harta">Status Kepemilikan Harta</label>
                    <select id="status_kepemilikan_harta" name="status_kepemilikan_harta" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Beli">Beli</option>
                            <option value="Sewa">Sewa</option>
                            <option value="Warisan">Warisan</option>
                            <option value="Hibah">Hibah</option>
                            <option value="Tidak ada">Tidak Ada</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="kendaraan">Kendaraan Bermotor yang dimiliki</label>
                    <select id="kendaraan" name="kendaraan" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="Motor">Motor</option>
                            <option value="Mobil">Mobil</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label for="status_kepemilikan_kendaraan">Status Kepemilikan Harta</label>
                    <select id="status_kepemilikan_kendaraan" name="status_kepemilikan_kendaraan" class="custom-select">
                            <option value="Beli">Beli</option>
                            <option value="Sewa">Sewa</option>
                            <option value="Warisan">Warisan</option>
                            <option value="Hibah">Hibah</option>
                        </select>
                    </div>

                <!-- button -->
                 <div class="nextprev">
                    <div class="prev" style="float:left">
                    <button type="button" style="border: 2px solid #2C786C; border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px; ">
                            <a class="left-btn" href="{{url('/form3')}}" style="color:darkgreen" >SEBELUMNYA</a>
                        </button>
                    </div>

                    <div class="next" style="float:right">
                        <button type="button" style="background-color: #2C786C;border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px;">
                            <a class="right-btn" href="{{url('/form5-UploadBerkasSMP')}}" style="color:white" >SELANJUTNYA</a>
                        </button>
                    </div>
                </div>                   
    
        </form>
        </div>
    </div>
</div>
@endsection