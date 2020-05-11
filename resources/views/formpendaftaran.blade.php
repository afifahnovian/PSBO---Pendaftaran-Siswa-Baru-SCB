@extends('layouts.header')
@section('title',' Form Pendaftaran')
@section('content')
<!-- MultiStep Form -->
<div class="container">
    <div class="row justify-content-center"">
        <div class="col-lg-8 mt-5 mb-5">
            <form id="msform">
                <!-- progressbar -->
                <ul id="progressbar" style="align-content: center" class="justify-content-center">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <!-- fieldsets -->
                <fieldset>
                    <h2 class="fs-title">Data Pengisi Form</h2> 
                    <hr>
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
                        <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>

                <fieldset>
                    <!-- Data Siswa --> 
                    <div class="subform">
                        <h2 class="fs-title">Data Mahasiswa</h2>
                        <hr>
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
                                <option value="lk">Laki-laki</option>
                                <option value="pr">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="tempatlahir">Tempat lahir</label>
                            <input type="text" class="form-control" name="tempatlahir" style="float:left;"  placeholder="Tempat lahir">
                            </div>
                            <div class="form-group col-md-6" style="float:right;" >
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

                    <!-- Data Kesehatan --> 
                    <div class="subform">
                        <h2 class="fs-title">Data Kesehatan</h2>
                        <hr>
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
                    
                    <!--Button -->
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                </fieldset>

                <fieldset>
                    <!-- Data Keunikan Siswa -->       
                    <div class="subform">
                            <h2 class="fs-title">Data Keunikan Calon Siswa</h2></div>
                            <hr>

                            <div class="form-group">
                            <label for="hal_khusus">Hal-hal khusus (keunikan, passion, kebiasaan)</label>
                            <input type="text" class="form-control"  name="hal_khusus" placeholder="Hal-hal khusus...">
                            </div>
                            
                            <div class="form-group">
                            <label for="citacita">Cita-Cita</label>
                            <input type="text" class="form-control"  name="citacita" placeholder="Cita-cita">
                            </div>

                            <div class="form-group">
                            <label for="hobi">Hobi</label>
                            <input type="text" class="form-control"  name="hobi" placeholder="Hobi-hobi">
                            </div>

                            <div class="form-group">
                            <label for="harapan_orgtua">Harapan Orang Tua</label>
                            <input type="text" class="form-control"  name="harapan_orgtua" placeholder="Harapan Orang Tua">
                            </div>
                    </div>
                    <!-- Data Hafalan Calon Siswa-->
                    <div class="subform">
                        <h2 class="fs-title">Data Hafalan Calon Siswa</h2>
                        <hr>

                        <div class="form-group">
                        <label for="jumlah_hafalan">Jumlah Hafalan (Juz)</label>
                        <input type="text" class="form-control"  name="jumlah_hafalan" placeholder="Jumlah Hafalan">
                        </div>

                        <div class="form-group">
                        <label for="nama_juz">Juz yang telah dihafal</label>
                        <input type="text" class="form-control"  name="nama_juz" placeholder="Nama juz yang dihafal">
                        </div>
                    </div>

                    <!-- Data Sekolah Sebelumnya --> 
                    <div class="subform">
                        <h2 class="fs-title">Data Sekolah Sebelumnya</h2>
                        <hr>

                        <div class="form-group">
                        <label for="asal_sekolah">Asal Sekolah</label>
                        <input type="text" class="form-control"  name="asal_sekolah" placeholder="Asal sekolah sebelumnya">
                        </div>
                        
                        <div class="form-group">
                        <label for="alamat_sekolah">Alamat Sekolah</label>
                        <textarea class="form-control" name="alamat_sekolah" placeholder="Alamat sekolah" rows="3"></textarea>
                        </div>
                        
                        <div class="form-group">
                        <label for="no_telp_sekolah">Nomor Telepon Sekolah </label>
                        <input type="text" class="form-control"  name="asal_sekolah" placeholder="Nomor telepon sekolah">
                        </div>
                    </div>
                    <!-- Data Prestasi Akademik --> 
                    <div class="subform">
                        <h2 class="fs-title">Data Prestasi Akademik</h2></div>
                        <hr>
                        <div class="sub subtitle"><h6>Prestasi 1</h6></div>
                        <div class="form-group">
                        <label for="jenis_lomba">Jenis Lomba </label>
                        <input type="text" class="form-control"  name="jenis_lomba" placeholder="Lomba kesenian, science, dsb">
                        </div>

                        <div class="form-group">
                        <label for="tingkat_Lomba">Tingkat Lomba</label>
                        <select id="tingkat" name="tingkat_Lomba" class="custom-select">
                                <option value="">Pilih...</option>
                                <option value="sekolah">Sekolah</option>
                                <option value="kecamatan">Kecamatan</option>
                                <option value="kabupaten">Kabupaten</option>
                                <option value="provinsi">Provinsi</option>
                                <option value="nasional">Nasional</option>
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="peringkat">Peringkat </label>
                        <input type="text" class="form-control"  name="peringkat" placeholder="Peringkat lomba">
                        </div>
                    </div>

                    <!--Button -->
                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>

                
                <fieldset>

                    <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                    <input type="submit" name="submit" class="submit action-button" value="Submit"/>
                
                </fieldset>
            </form>
        </div>
    </div>
</div>

@endsection

