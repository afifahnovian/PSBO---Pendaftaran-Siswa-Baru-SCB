@extends('layouts.header')
@section('content')
<div class="container" style="align-content: center">
<h3 class="page-section-heading1 text-center text-secondary" style="padding-top: 15% ; padding-bottom:3%">Kategori Siswa</h3>
    <!-- Portfolio Grid Items-->
    <div class="row" style="align-content: center ;margin-left: 24%">
        <!-- Portfolio Item 1-->
        <div class="col-md-4 col-lg-3.5 mb-4">
            <div class="portfolio-item mx-auto" >
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center" style="align-content: center">
                    <div class="portfolio-item-caption-content text-center text-white"></i></div>
                </div>
                <a href="/kategorisiswasmp/SMP"><img class="img-fluid" src="assets/img/siswa-smp.png" alt="" /></a>
                
            </div>
        </div>
        <!-- Portfolio Item 2-->
        <div class="col-md-4 col-lg-3.5 mb-4" >
            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center" style="align-content: center">
                    <div class="portfolio-item-caption-content text-center text-white"></i></div>
                </div>
                <a href="/kategorisiswatahfidz/Tahfidz"><img class="img-fluid" src="assets/img/siswa-tahfiz.png" alt="" /></a>
            </div>
        </div>
    </div> 
</div>
    

@endsection
