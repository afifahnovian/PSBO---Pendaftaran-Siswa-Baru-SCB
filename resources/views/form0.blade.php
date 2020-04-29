@extends('layouts.header')

@section('content')
<div class="row-choice">
<div class="row-title">
        <h3 >Kategori Siswa</h3>
    </div>
    <a href="{{url('/form')}}" class="card-link"> <div class="column-choice1"> </a>
        <div class="card-choice1">
            <img class="card-img1" src="{{url('/images/umum.png')}}">
            <div class="card-img-overlay">
                <div class="card-title1">
                    <h5 >Siswa SMP</h5>
                </div>
            </div>
        </div>
    </div>
    
    <a href="{{url('/form')}}" class="card-link"> <div class="column-choice2"> </a>
    <div class="card-choice2">
        <img class="card-img2" src="{{url('/images/khusus.png')}}">
            <div class="card-img-overlay">
                <div class="card-title2">
                    <h5 >Siswa Tahfidz</h5>
                </div>
            </div>
    </div>
  </div>
</div>

@endsection
