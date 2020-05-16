@extends('layouts\header')
@section('title',' Hasil Pendaftaran')
@section('content')
  <!-- Mulai -->
  <!-- Ini buat nampilin info correct(pop up notif), but. hanya yg dari controoler info -->
  @if(session('info'))
  <div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p class="mb-0">{{session('info')}}</p>
  </div>
  @endif
  
<!-- END -->
  <div class="table">
    <h2>Data Calon siswa </h2>
    <div class="table-responsive">          
    <table class="table">
      <thead>
        <tr>
          <th>Nomor</th>
          <th>Nama Lengkap</th>
          <th>Nama Panggilan</th>
          <th>Jenis Kelamin</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
          <th>NISN</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <!--looping nomor tabel-->
          <?php
          $nomor = 0;
          ?>
      <!--looping datasiswa yang akan ditampilkan berdasarkan input yg diterima pada form-->
      @foreach($datasiswa as $siswa)
      <?php
          $nomor+=1;
      ?>
        <tr>
          <!--penamaan sesuai pada nama di database-->
          <td>{{$nomor}}</td> 
          <td>{{$siswa->nama_lengkap}}</td> 
          <td>{{$siswa->nama_panggilan}}</td>
          <td>{{$siswa->jenis_kelamin}}</td>
          <td>{{$siswa->tempat_lahir}}</td>
          <td>{{$siswa->tanggal_lahir}}</td>
          <td>{{$siswa->alamat}}</td>
          <td>{{$siswa->NISN}}</td>
          
          <td> 
            <div class="row">
              <a href='{{url("/form/update/".$siswa->id)}}' class="btn btn-info" role="button">Edit</a>
              </div>
          </td>
          
          <td>
              <div class="row">
              <a href='{{url("/form/delete/".$siswa->id)}}' class="btn btn-danger" role="button">Delete</a>
              </div>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
    </div>
  </div>

@endsection
