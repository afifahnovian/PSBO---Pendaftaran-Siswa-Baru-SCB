@extends('layouts.header')

@section('content')

            <div class="container" style="align-content: center">
            <h3 class="page-section-heading1 text-center text-secondary" style="padding-top: 150px">Kategori Siswa</h3>
                <!-- Portfolio Grid Items-->
                <div class="row" style="align-content: center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-4 col-lg-3.5 mb-4" style="margin-left: 180px">
                        <div class="portfolio-item mx-auto" >
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div>
                            <a class="link" href="{{url('/form')}}"><img class="img-fluid" style="align:center;" src="assets/img/siswa-smp.png" alt="" /></a>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-4 col-lg-3.5 mb-4" >
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div>
                            <a class="link" href="{{url('/form')}}"><img class="img-fluid" src="assets/img/siswa-tahfiz.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
    

@endsection
