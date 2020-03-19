<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Form Pendaftaran Masahasiswa baru</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href= "https://fonts.googleapis.com/css?family=Open+Sans">

        <!-- Styles -->
        <style>
            /* Style inputs, select elements and textareas */
            input[type=text], select, textarea{
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                resize: vertical;
            }

            /* Style the label to display next to the inputs */
            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            /* Style the submit button */
            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            /* Floating column for labels: 25% width */
            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            /* Floating column for inputs: 75% width */
            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
                .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }
        </style>
    </head>

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
