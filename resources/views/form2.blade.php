@extends('layouts.header')
@section('title','Data Siswa')

@section('content')
<!-- nomor page -->
<div class="stepper" style="text-align:center;">
    <span class="step active">1</span>
    <span class="step active">2</span>
    <span class="step active">3</span>
    <span class="step">4</span>
    <span class="step">5</span>
    <span class="step">6</span>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <form method="POST" action="url{{'/form2'}}">
            <!-- Data Keunikan Siswa -->
                <div class="subform">
                    <div class="subtitle"> <h4>Data Keunikan Calon Siswa</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">

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
                    <div class="subtitle"><h4>Data Hafalan Calon Siswa</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">

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
                    <div class="subtitle"><h4>Data Sekolah Sebelumnya</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">

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
                    <div class="subtitle"><h4>Data Prestasi Akademik</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">
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
                <!-- button -->
                <div class="nextprev">
                    <div class="prev" style="float:left">
                    <button type="button" style="border: 2px solid #2C786C; border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px; ">
                            <a class="left-btn" href="{{url('/form1')}}" style="color:darkgreen" >SEBELUMNYA</a>
                        </button>
                    </div>

                    <div class="next" style="float:right">
                        <button type="button" style="background-color: #2C786C;border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px;">
                            <a class="right-btn" href="{{url('/form3')}}" style="color:white" >SELANJUTNYA</a>
                        </button>
                    </div>
                </div>
            
            </form>
        </div>
    </div>
</div>

@endsection