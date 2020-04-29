@extends('layouts.header')
@section('title','Data Siswa')

@section('content')
<!-- nomor page -->
<div class="stepper" style="text-align:center;">
    <span class="step active">1</span>
    <span class="step active">2</span>
    <span class="step">3</span>
    <span class="step">4</span>
    <span class="step">5</span>
    <span class="step">6</span>
</div>

<!--Page Form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <form method="POST" action="{{url('/form1')}}">
                <div class="subform">
                    <div class="subtitle"> <h4>Data Siswa Umum</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">

                    <div class="form-group">
                    <label for="fname">Nama Lengkap</label>
                    <input type="text" class="form-control"  name="namalengkap" placeholder="Nama">
                    </div>
                    
                    <div class="form-group">
                    <label for="panggilan">Nama Panggilan</label>
                    <input type="text" class="form-control"  name="namapanggilan" placeholder="Panggilan">
                    </div>

                    <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" name="jeniskelamin" class="custom-select">
                            <option value="">Pilih...</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                        <label for="tempatlahir">Tempat lahir</label>
                        <input type="text" class="form-control"name="tempatlahir" placeholder="Tempat lahir">
                        </div>
                        <div class="form-group col-md-5" style="float:right; margin-right:0%" >
                        <label for="tgllahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir">
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" rows="3"></textarea>
                    </div>  

                    <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" class="form-control" name="nisn" placeholder="NISN">
                    </div> 

                </div>

                <div class="subform">
                        <div class="subtitle"> <h4>Data Kesehatan Siswa</h4></div>
                        <hr style="margin-left: 25px; margin-right:36px">
                        <div class="form-group">
                        <label for="tinggibadan">Tinggi badan (cm)</label>
                        <input type="number" class="form-control" name="tinggibadan" placeholder="Tinggi Badan">
                        </div>

                        <div class="form-group">
                        <label for="beratbadan">Berat Badan(kg)</label>
                        <input type="number" class="form-control" name="beratbadan" placeholder="Berat Badan">
                        </div>

                        <div class="form-group">
                        <label for="riwayatpenyakit">Penyakit yang pernah diderita / alergi</label>
                        <input type="text" class="form-control" name="riwayatpenyakit" placeholder="Riwayat Penyakit">
                        </div>
                        
                        <div class="form-group">
                        <label for="golongandarah">Golongan Darah</label>
                        <div class="choice">
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="1" name="golongandarah" value="A" class="custom-control-input">
                            <label class="custom-control-label" for="1">A</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="2" name="golongandarah" value="B" class="custom-control-input">
                            <label class="custom-control-label" for="2">B</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="3" name="golongandarah" value="AB" class="custom-control-input">
                            <label class="custom-control-label" for="3">AB</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="4" name="golongandarah" value="O" class="custom-control-input">
                            <label class="custom-control-label" for="4">O</label>
                            </div>
                        </div>
                        </div>


                        <div class="form-group">
                        <label for="#">BPJS</label>
                        <div class="choice1">
                            <div class="custom-control custom-radio custom-control-inline" >
                            <input type="radio" id="iya" name="BPJS" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="iya">Ada</label>
                            </div>
                            
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="tidak" name="BPJS" value="0" class="custom-control-input">
                            <label class="custom-control-label" for="tidak">Tidak Ada</label>
                            </div>
                        </div>
                </div>

                <!-- button -->
                <div class="nextprev">
                    <div class="prev" style="float:left">
                    <button type="button" style="border: 2px solid #2C786C; border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px; ">
                            <a class="left-btn" href="{{url('/form0')}}" style="color:darkgreen" >SEBELUMNYA</a>
                        </button>
                    </div>

                    <div class="next" style="float:right">
                        <button type="button" style="background-color: #2C786C;border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px;">
                            <a class="right-btn" href="{{url('/form2')}}" style="color:white" >SELANJUTNYA</a>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
