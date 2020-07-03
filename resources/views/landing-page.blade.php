@extends('layouts.header')
@section('title',' Pendaftaran Mahasiswa Baru SCB')
@section('content')
    <!-- bagian atas Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container"> 
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center" style="margin-top: 100px;" >
                    @if(session('success'))
                        <div class="alert alert-success" role="alert" style="width: 100%">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>{{session('success')}}</p>
                        </div>
                    @endif
            </div>
            <div class="row">
                <!-- Portfolio Item 1-->
                <div class="col-md-6 col-lg-4 mb-5" style = margin-top:10rem;>
                    <div class="mx-auto">
                        <h2>Penerimaan <br>
                            Peserta Didik Baru <br> 
                            SMP Cendekia BAZNAS</h2>
                    </div>
                  
                    <?php $status = $data_posts->where('tipe_post','status_ppdb')->first()->isi_post ?>
                    @if($status == 1)
                    <div class="text-left mt-4" id="buttonDaftar">
                        <a class="btn btn-xl btn-btn-primary" style="color: white" href="{{url('/kategorisiswa')}}"> Daftar Sekarang </a>
                    </div>
                    @endif

                    @if($status == 0)
                    <div class="text-left mt-4">
                        <button class="btn btn-xl btn btn-secondary" style="color: white; " href="{{url('/kategorisiswa')}} disabled">Pendaftaran Ditutup</button>
                    </div>
                    @endif
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
                        @if(!empty($data_posts))
                            <h3>{{$data_posts->where('tipe_post','headline-1')->first()->isi_post}}</h3><br>
                            <p>{{$data_posts->where('tipe_post','headline-p')->first()->isi_post}}</p>
                        @endif
                    </div>
                </div>
                <br>
                <br>
            
            </div>
        </div>
    </section>


    <!-- persyaratan pendaftaran-->
    <h3 class="page-section-heading1 text-center text-secondary">Persyaratan Pendaftaran</h3>
        <div class="container" style="margin-right:20%;margin-left:20%">
            <!-- Portfolio Grid Items-->
            <div class="row" style="align-content: center; padding-top:25px">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-4 col-lg-3.5 mb-4" style="align-items: center">
                        <div class="portfolio-item mx-auto" >
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div>
                            <a class="link" href="{{url('/syarat-smp')}}"><img class="img-fluid" style="align:center;" src="assets/img/siswa-smp.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-4 col-lg-3.5 mb-4" style="align-items: center">
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
                    @if(!empty($data_posts))
                        <h5 class="text-center" style ="color:#004445;">{{$data_posts->where('tipe_post','timeline_title_1')->first()->isi_post}}</h5>
                        <p class ="text-center">{{$data_posts->where('tipe_post','timeline-1')->first()->isi_post}}</p>
                    @endif
                    </div>
                </div>
                <!-- Portfolio Item 2-->
                <div class="col-md-6 col-lg-4-1">
                    <div class="mx-auto" >
                    @if(!empty($data_posts))
                        <h5 class="text-center" style ="color:#004445;">{{$data_posts->where('tipe_post','timeline_title_2')->first()->isi_post}}</h5>
                        <p class ="text-center">{{$data_posts->where('tipe_post','timeline-2')->first()->isi_post}}</p>
                    @endif
                    </div>
                </div>
                <!-- Portfolio Item 3-->
                <div class="col-md-6 col-lg-4-1">
                    <div class="mx-auto" >
                    @if(!empty($data_posts))
                        <h5 class="text-center" style ="color:#004445;">{{$data_posts->where('tipe_post','timeline_title_3')->first()->isi_post}}</h5>
                        <p class ="text-center">{{$data_posts->where('tipe_post','timeline-3')->first()->isi_post}}</p>
                    @endif
                    </div>
                </div>
                <!-- Portfolio Item 4-->
                <div class="col-md-6 col-lg-4-1 mb-lg-0">
                    <div class="mx-auto">
                    @if(!empty($data_posts))
                        <h5 class="text-center" style ="color:#004445;">{{$data_posts->where('tipe_post','timeline_title_4')->first()->isi_post}}</h5>
                        <p class ="text-center">{{$data_posts->where('tipe_post','timeline-4')->first()->isi_post}}</p>
                    @endif
                    </div>
                </div>
                <!-- Portfolio Item 5-->
                <div class="col-md-6 col-lg-4-1 mb-md-0">
                    <div class="mx-auto">
                    @if(!empty($data_posts))
                        <h5 class="text-center" style ="color:#004445;">{{$data_posts->where('tipe_post','timeline_title_5')->first()->isi_post}}</h5>
                        <p class ="text-center">{{$data_posts->where('tipe_post','timeline-5')->first()->isi_post}}</p>
                    @endif
                    </div>
                </div>
                <!-- Portfolio Item 6-->
                <div class="col-md-6 col-lg-4-1">
                    <div class="mx-auto">
                    @if(!empty($data_posts))
                        <h5 class="text-center" style ="color:#004445;">{{$data_posts->where('tipe_post','timeline_title_6')->first()->isi_post}}</h5>
                        <p class ="text-center">{{$data_posts->where('tipe_post','timeline-6')->first()->isi_post}}</p>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kotak Kuning -->
    <section class="page-section portfolio" id="portfolio" >
        <div class="container">
            <!-- Portfolio Grid Items-->
            <div class="row" style="padding-right: 2%; padding-left:2%">
                <!-- Portfolio Item 1-->
                <div class="col-md-6-1 col-lg-4-3 container-1 mb-5 bg-kotak-kuning" style="border-radius: 15px; ">
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
    
       <!-- FAQ -->
       @include('content.faq')
    
    <!-- Footer -->
    @include('layouts.footer-upfront')
    
@endsection
   <!-- Navigation-->
