@extends('layouts.header')
@section('title',' Pendaftaran Mahasiswa Baru SCB')
@section('content')
    <!-- bagian atas Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            
            <!-- Portfolio Grid Items-->
            <div class="row">
                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p class="mb-0">{{session('success')}}</p>
                </div>
                @endif
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5" style = margin-top:10rem;>
                    <div class="mx-auto">
                        <h2>Penerimaan <br>
                            Peserta Didik Baru <br> 
                            SMP Cendekia BAZNAS</h2>
                    </div>
                    <!--Button-->
                    <div class="text-left mt-4">
                    <a class="btn btn-xl btn-outline-light1" href="{{url('/kategorisiswa')}}">Daftar Sekarang</a>
                </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5" style = margin-top:5rem;>
                    <div class="mx-auto" >
                        <img class="img-fluid" src="assets/img/foto3.png" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5" style = margin-top:5rem;>
                    <div class="mx-auto">
                        <img class="img-fluid" src="assets/img/foto2.png" alt="" />
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="mx-auto">
                        <h3>Penerimaan Peserta Didik Baru Tahun Pelajaran 2019/2020</h3><br>
                        <p>SEKOLAH CENDEKIA BAZNAS (SCB) merupakan sekolah bebas biaya dan berasrama bagi dhuafa untuk putra dan putri Indonesia, yang berada di bawah pengelolaan Badan Amil Zakat Nasional (BAZNAS). <br><br>
                            SCB memiliki motto membangun karakter-mengoptimalkan potensi. Setiap siswa menempuh pendidikan formal (kurikulum dinas pendidikan), pembinaan karakter islam, qur’an hadist serta pengembangan potensi sesuai minat dan bakat. <br><br>
                            SCB membuka pendaftaran calon Peserta Didik Baru Angkatan III Tahun Pelajaran 2019/2020. Masa pendaftaran dimulai 31 Oktober – 28 Desember 2019</p>
                    </div>
                </div>
                <br>
                <br>
            
            </div>
        </div>
    </section>

    <!-- persyaratan pendaftaran-->
    <h3 class="page-section-heading1 text-center text-secondary">Persyaratan Pendaftaran</h3>

   
        <div class="container">
            <!-- Portfolio Grid Items-->
            <div class="row" style="align-content: center; padding-top:25px">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-5 col-lg-3.5 mb-4" style="margin-left: 105px">
                        <div class="portfolio-item mx-auto" >
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div>
                            <a class="link" href="{{url('/syarat-smp')}}"><img class="img-fluid" style="align:center;" src="assets/img/siswa-smp.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-5 col-lg-3.5 mb-4" >
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div>
                            <a class="link" href="{{url('/syarat-tahfidz')}}"><img class="img-fluid" src="assets/img/siswa-tahfiz.png" alt="" /></a>
                        </div>
                    </div>
                </div>
        </div>
    

    <!-- Alur dan Timeline -->
    <h3 class="page-section-heading1 text-center text-secondary mb-0" style="padding-top: 45px">Alur dan Timeline</h3>
    <br><br>
    <img class="img-fluid1" src="assets/img/alur timeline.png" alt="" />

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Grid Items-->
            <div class="row">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4-1">
                    <div class="mx-auto" >
                    <h5 class="text-center" style ="color:#004445;">Pendaftaran & Seleksi Berkas</h5>
                    <p class ="text-center">31 Okt – 28 Des 2019</p>
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4-1">
                    <div class="mx-auto" >
                    <h5 class="text-center" style ="color:#004445;">Pengumuman Seleksi Berkas</h5>
                    <p class ="text-center">31 Okt – 28 Des 2019</p>
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4-1">
                    <div class="mx-auto" >
                    <h5 class="text-center" style ="color:#004445;">Tes Akademik</h5>
                    <p class ="text-center">19 Jan 2020</p>
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4-1 mb-lg-0">
                    <div class="mx-auto">
                    <h5 class="text-center" style ="color:#004445;">Survei Faktual</h5>
                    <p class ="text-center">2 – 23 Februari 2020</p>
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4-1 mb-md-0">
                    <div class="mx-auto">
                    <h5 class="text-center" style ="color:#004445;">Psikotes & Tes Baca Alquran</h5>
                    <p class ="text-center">14 – 23 Maret 2020</p>
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4-1">
                    <div class="mx-auto">
                    <h5 class="text-center" style ="color:#004445;">Pengumuman Hasil</h5>
                    <p class ="text-center">13 April 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kotak Kuning -->
    <section class="page-section portfolio" id="portfolio" >
        <div class="container">
            <!-- Portfolio Grid Items-->
            <div class="row">
                <!-- Portfolio Item 1-->
                <div class="col-md-6-1 col-lg-4-3 container-1 mb-5 bg-kotak-kuning" style="border-radius: 15px;">
                    <div class="mx-auto-1">
                        <div class="row-1">
                            <img class="img-fluid2" src="assets/img/alert 2.png" alt="" />
                            <p class="col-lg-4-4 mx-auto-1" style="margin-top:0rem;">Tidak ada pungutan biaya apapun mulai proses seleksi, kedatangan calon peserta didik, hingga pendidikan selama berada di SMP Cendekia BAZNAS.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('layouts.footer-upfront')
@endsection
   <!-- Navigation-->
