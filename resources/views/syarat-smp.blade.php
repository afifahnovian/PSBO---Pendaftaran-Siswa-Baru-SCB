@extends('layouts.header')
@section('title',' Pendaftaran Mahasiswa Baru SCB')
@section('content')    
  <div class="container">
        <!-- Masthead-->
        <header class="masthead bg-primary text-black text-left">
            <div class="container d-flex align-items-left flex-column">
                <h1 class="masthead-heading mb-0">Syarat Calon Peserta Didik Baru Siswa SMP Sekolah Cendekia BAZNAS</h1><br><br><br>
                    <div class="syarat-smp">
                        @php 
                        echo $data_posts->where('tipe_post','syaratsmp')->first()->isi_post
                        @endphp
                    </div>
                    <br>
                    
                <!--Narahubung-->
                <h3>Narahubung :</h3><br>
                <div class="container">
                @if(!empty($data_posts))
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn1 btn-social mx-3 mb-4 pt-0"><i class="fas fa-fw fa-phone-alt" style ="color:#ffffff;"></i></a>
                                    </div>
                                    <div class="col-8 mt-2" >
                                        <span class="masthead-subsubsubheading font-weight-light mb-0"><a href="https://api.whatsapp.com/send?phone={{$data_posts->where('tipe_post','kontaksmp1')->first()->isi_post}}">Narahubung 1 :{{$data_posts->where('tipe_post','kontaksmp1')->first()->isi_post}}</a></span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="col-lg-8">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2">
                                        <a class="btn1 btn-social mx-3 mb-4 pt-0"><i class="fas fa-fw fa-phone-alt" style ="color:#ffffff;"></i></a>
                                    </div>
                                    <div class="col-8 mt-2" >
                                        <span class="masthead-subsubsubheading font-weight-light mb-0"><a href="https://api.whatsapp.com/send?phone={{$data_posts->where('tipe_post','kontaksmp2')->first()->isi_post}}">Narahubung 2 :{{$data_posts->where('tipe_post','kontaksmp2')->first()->isi_post}}</a></span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </header>
    </div>
    
    
    @include('layouts.footer-upfront')

@endsection