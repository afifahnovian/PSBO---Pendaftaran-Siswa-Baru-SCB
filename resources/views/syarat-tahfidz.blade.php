@extends('layouts.header')
@section('title',' Pendaftaran Mahasiswa Baru SCB')
@section('content')    
<!-- Masthead-->
<div class="container">
    <header class="masthead bg-primary text-black text-left">
        <div class="container d-flex align-items-left flex-column">
            <h1 class="masthead-heading mb-0">Syarat Calon Peserta Didik Baru Siswa Tahfidz Sekolah Cendekia BAZNAS</h1><br><br><br>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Persyaratan Umum</p>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
            </div>
            <!-- persyaratan-->
            <ol class="masthead-subsubheading font-weight-light mb-0 ml-4">
                <li>Beragama Islam. </li>
                <li>Berasal dari keluarga dhuafa atau tidak mampu. </li>
                <li>Lulus SD/Sederajat, usia maksimal 14 tahun pada 31 Juli 2020. </li>
                <li>Berbadan sehat dan tidak memiliki penyakit menular dan melampirkan surat dari dokter. </li>
                <li>Bersedia mengikuti seluruh tahapan seleksi sesuai dengan ketentuan yang berlaku. </li>
                <li>Tidak memiliki anggota keluarga yang sedang atau pernah mendapatkan beasiswa di Sekolah Cendekia BAZNAS. </li>
                <li>Tidak mengundurkan diri saat dinyatakan lolos seleksi.</li>
            </ol>
            <br>
            <br>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">Persyaratan Khusus</p>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
            </div>
            <!-- persyaratan-->
            
                <ol class="masthead-subsubheading font-weight-light mb-0 ml-4">
                    <li>Memiliki prestasi akademik dengan rata-rata nilai rapor kelas IV-V minimal 7.5 pada mata 
                pelajaran; Bahasa Indonesia, Ilmu Pengetahuan Alam (IPA), Matematika.</li> 
                    <li>Mengisi formulir pendaftaran. </li>
                    <li>Siap bertempat tinggal di asrama. </li>
                    <li>Mengumpulkan berkas: </li>
                    <ul class="masthead-subsubheading font-weight-light mb-0 ml-4" style="list-style-type:circle;">
                        <li>Fotokopi kartu keluarga. </li>
                        <li>Fotokopi rapor kelas IV hingga V yang telah dilegalisasi oleh pihak sekolah asal. </li>
                        <li>Fotokopi Surat Keterangan Tidak Mampu (SKTM), fotokopi piagam atau sertifikat prestasi yang pernah di raih (bila ada).</li>
                        <li>Surat Pernyataan Tahfidz yang dapat di download <a href=" "> disini.</a>
                    </ul>
                </ol>
                <br>
                <br>
                <br>
            <!--Narahubung-->
            <p class="masthead-subsubheading font-weight-light mb-0">Narahubung :</p><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4-2">
                        <div class="container-2">
                            <div class="row-2">
                                <div class="col-3">
                                    <a class="btn1 btn-social mx-3 mb-2"><i class="fas fa-fw fa-phone-alt" style ="color:#ffffff;" ></i></a>
                                </div>
                                <div class="col-9">
                                    <span class="masthead-subsubsubheading font-weight-light mb-0">Fatur (0852 8142 8912)</span>
                                </div>
                            </div>
                        </div>
                        <div class="container-2">
                            <div class="row-2">
                                <div class="col-3">
                                    <a class="btn1 btn-social mx-3 mb-2"><i class="fas fa-fw fa-phone-alt" style ="color:#ffffff;"></i></a>
                                </div>
                                <div class="col-9">
                                    <span class="masthead-subsubsubheading font-weight-light mb-0">Suci (0857 8250 7617)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
 <!-- footer -->
 @include('layouts.footer')
 
@endsection