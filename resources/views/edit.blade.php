@extends('layouts\header')
    <!---form--->
<body>
<!-- Mulai -->
<!-- Ini buat nampilin error -->
<!-- Biasanya yg error taronya di yg ada form form gitu, kek create dkk. abis ni gw contohin -->
@if(count($errors)>0)
  @foreach($errors->all() as $error)
    <div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{$error}}
  </div>
  @endforeach
@endif

<!-- End -->
<div class="formulir">
  <!-- ini datasiswa karna nama variabel dari backend namanya data siswa -->
  <!-- itu titik maksudnya append string -->
  <form method="POST" action="{{url('/form/edit/'.$datasiswa->id)}}"> 
  <!--wajib cantumin di stiap form utk akses token, biar ga error -->
  @csrf 
    <div class="row">
      <div class="col-25">
        <label for="fname">Nama lengkap</label>
      </div>
      <div class="col-75">
        <input type="text" id="namalengkap" name="namalengkap" placeholder="Nama" value="{{$datasiswa->nama_lengkap}}">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="panggilan">Nama Panggilan</label>
      </div>
      <div class="col-75">
        <input type="text" id="namapanggilan" name="namapanggilan" placeholder="Panggilan" value="{{$datasiswa->nama_panggilan}}">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="jk">Jenis Kelamin</label>
      </div>

      <div class="col-75">
        <select id="jk" name="jeniskelamin">
        <option value="2" @if ($datasiswa->jeniskelamin == 2)
            selected
            @endif>Perempuan</option>
        <option value="1" @if ($datasiswa->jeniskelamin == 1)
                    selected
                    @endif>Laki-Laki</option>
        </select>
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="tempatlahir">Tempat Lahir</label>
      </div>
      <div class="col-75">
        <input type="text" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir" value="{{$datasiswa->tempat_lahir}}">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="tempatlahir">Tanggal Lahir</label>
      </div>
      <div class="col-75">
        <input type="date" id="tgllahir" name="tanggallahir" value="{{$datasiswa->tanggal_lahir}}">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="alamat">Alamat Tempat tinggal</label>
      </div>
      <div class="col-75">
        <textarea id="alamat" name="alamat" placeholder="Alamat Lengkap" style="height:100px" >{{$datasiswa->alamat}}</textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="nisn">NISN</label>
      </div>
      <div class="col-75">
        <input type="text" id="nisn" name="nisn" placeholder="NISN" value="{{$datasiswa->NISN}}">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Update">
    </div>

  </form>
</div>
</body>
