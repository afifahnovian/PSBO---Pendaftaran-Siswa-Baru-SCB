@extends('layouts.header')
@section('title','Data Siswa')

@section('content')

<div class="stepper" style="text-align:center;">
    <span class="step active">1</span>
    <span class="step active">2</span>
    <span class="step active">3</span>
    <span class="step active">4</span>
    <span class="step active">5</span>
    <span class="step active">6</span>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <form method="POST" action="url{{'/form5-UploadBerkasSMP'}}">
                <div class="subform">
                    <div class="subtitle"><h4>Upload Berkas</h4></div>
                    <hr style="margin-left: 25px; margin-right:36px">
                    
                    <div class="form-group">
                        <label for="kartu_keluarga">Scan / Foto Kartu Keluarga</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="kartu_keluarga" required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih file ... (.jpg / .png / .pdf) (</label>
                            <div class="invalid-feedback">File tidak boleh kosong</div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="rapor_sd">Scan / Foto rapor Kelas IV sampai V</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="rapor_sd" required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih file ... (.jpg / .png / .pdf) (</label>
                            <div class="invalid-feedback">File tidak boleh kosong</div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="ijazah_STTB_STK">Scan / Foto Ijazah/STTB/STK</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="ijazah_STTB_STK" required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih file ... (.jpg / .png / .pdf) (</label>
                            <div class="invalid-feedback">File tidak boleh kosong</div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="pasfoto">Pas Foto Calon Siswa Ukuran 4 x 6</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="pasfoto" required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih file ... (.jpg / .png / .pdf) (</label>
                            <div class="invalid-feedback">File tidak boleh kosong</div>
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="pernyataan_tahfidz">Surat Pernyataan Tahfidz</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="validatedCustomFile" name="pernyataan_tahfidz" required>
                            <label class="custom-file-label" for="validatedCustomFile">Pilih file ... (.jpg / .png / .pdf) (</label>
                            <div class="invalid-feedback">File tidak boleh kosong</div>
                        </div>
                    </div>
                </div>
                
             <!-- button -->
             <div class="nextprev">
                    <div class="prev" style="float:left">
                    <button type="button" style="border: 2px solid #2C786C; border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px; ">
                            <a class="left-btn" href="{{url('/form4')}}" style="color:darkgreen" >SEBELUMNYA</a>
                        </button>
                    </div>

                    <div class="next" style="float:right">
                        <button type="button" style="background-color: #2C786C;border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px;">
                            <a class="right-btn" href="#" style="color:white" >KIRIM</a>
                        </button>
                    </div>
                </div>                           
        </form>

        </div>
    </div>
</div>

@endsection