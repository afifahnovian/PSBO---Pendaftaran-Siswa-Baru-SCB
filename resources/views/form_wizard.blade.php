@extends('layouts.header')
@section('title','Data Pengisi Form')
@section('content')
<ul class="nav justify-content-center" style="margin-top: 150px">
  <li class="nav-item-num ">
    <a class="nav-link active" href="#">1</a>
  </li>
  <li class="nav-item-num">
    <a class="nav-link" href="#">2</a>
  </li>
  <li class="nav-item-num">
    <a class="nav-link" href="#">3</a>
  </li>
  <li class="nav-item-num" >
    <a class="nav-link" href="#">4</a>
  </li>
</ul>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">      
            <form action="#" id="form_regis" method="POST">
                        <div class="tab" >
                            <div class="subtitle"> <h4>Data Pengisi Form</h4></div>
                                <hr style="margin-left: 25px; margin-right:36px">
                                    <div class="form-group">
                                        <label for="#">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="pengisiform" name="pengisiform" placeholder="Nama Lengkap" maxlength="30" required >
                                        <span id="error_pengisiform" class="text-danger"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="#">Nomor HP</label>
                                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Nomor HP" maxlength="13" required>
                                        <span id="error_nohp" class="text-danger"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="#">Email</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email" maxlength="40" required> 
                                        <span id="error_email" class="text-danger"></span>
                                    </div>
                                  
                            </div>

                    <div class="tab" >
                        <div class="subtitle"> <h4>Data Siswa Umum</h4></div>
                                <hr style="margin-left: 25px; margin-right:36px">
                                <div class="form-group">
                                    <label for="namalengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control"  id="namalengkap" name="namalengkap" placeholder="Nama">
                                    <span id="error_namalengkap" class="text-danger"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="panggilan">Nama Panggilan</label>
                                    <input type="text" class="form-control" id="namapanggilan"  name="namapanggilan" placeholder="Panggilan">
                                    <span id="error_namapanggilan" class="text-danger"></span>
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
                                        <span id="error_tempatlahir" class="text-danger"></span>
                                    </div>
                                        <div class="form-group col-md-5" style="float:right; margin-right:0%" >
                                        <label for="tgllahir">Tanggal Lahir</label>
                                        <input type="date" class="form-control" name="tanggallahir">
                                        <span id="error_tanggallahir" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat Lengkap</label>
                                    <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" rows="3"></textarea>
                                    <
                                </div>  

                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="text" class="form-control" name="nisn" placeholder="NISN">
                                </div> 
                                
                    </div>

                    <div class="tab">
                        <div class="subtitle"> <h4>Data Kesehatan Siswa</h4></div>
                                    <hr style="margin-left: 25px; margin-right:36px">
                                    <div class="form-group">
                                        <label for="tinggibadan">Tinggi badan (cm)</label>
                                        <input type="number" class="form-control" id="tinggibadan" name="tinggibadan" placeholder="Tinggi Badan">
                                    
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
                                            <div style="overflow:auto;">
                                            <div style="float:right;">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                            </div>
                    </div>
            </div>        
        </div>
    </form>
</div>
@endsection