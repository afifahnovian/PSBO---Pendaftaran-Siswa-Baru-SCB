@extends('layouts.header')
@section('title',' Kontak Pendaftaran Mahasiswa Baru SCB')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7.5 mt-5 mb-6">
                <h4 class="fs-title" style="padding-top: 20%;padding-bottom:5% ; align-content:center; align-text:center"> Info Lebih Lanjut Mengenai Pendaftaran Siswa Baru </h4>
                @if(!empty($data_posts))
                    <div class="row" style="padding: 2%">
                        <a target="_blank" class="kontak" href="https://api.whatsapp.com/send?phone={{$data_posts->where('tipe_post','kontak1')->first()->isi_post}}" style="color: black; align-content:center"><i <i class="fab fa-whatsapp" id="kontakppdb" style="color: #F8B400"></i>Narahubung 1 :{{$data_posts->where('tipe_post','kontak1')->first()->isi_post}} </a>
                    </div>
                    <div class="row" style="padding: 2%">
                        <a target="_blank" class="kontak" href="https://api.whatsapp.com/send?phone={{$data_posts->where('tipe_post','kontak2')->first()->isi_post}}" style="color: black; align-content:center"><i <i class="fab fa-whatsapp" id="kontakppdb" style ="color:#F8B400;"></i>Narahubung 2 :{{$data_posts->where('tipe_post','kontak2')->first()->isi_post}}</a>
                    </div>
                @endif
               
            </div>
        </div>
    </div>
@endsection