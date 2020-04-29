@extends('layouts.header')
@section('title','Data Pengisi Form')

@section('content')
<!-- nomor page -->
<div class="stepper" style="text-align:center;">
    <span class="step active">1</span>
    <span class="step">2</span>
    <span class="step">3</span>
    <span class="step">4</span>
    <span class="step">5</span>
    <span class="step">6</span>
</div>
<!-- Page form --> 
<div class="container">
  <div class="row justify-content-center">
      <div class="col-lg-8 mt-5 mb-5">
        <form method="POST" action="{{url('/form')}}"> 
        <!--utk form yang ada upload fotonya, formatnya gini, biar fotonya di encryp-->
        <!-- <form method="POST" action="{{url('/form')}}" enctype="multipart/form-data"> -->
        <div class="subform">
            <div class="subtitle"> <h4>Data Pengisi Form</h4></div>
            <hr style="margin-left: 25px; margin-right:36px">
            <div class="form-group">
              <label for="#">Nama Lengkap</label>
              <input type="text" class="form-control"  name="pengisiform" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
              <label for="#">Nomor HP</label>
              <input type="text" class="form-control" name="nohp" placeholder="Nomor HP">
            </div>

            <div class="form-group">
              <label for="#">Email</label>
              <input type="text" class="form-control" name="email" placeholder="Alamat Email">
            </div>
        </div>
      <!-- button -->
        <div class="nextprev">
            <div class="prev" style="float:left">
              <button type="button" style="border: 2px solid #2C786C; border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px; ">
                    <a class="left-btn" href="{{url('/form0')}}" style="color:darkgreen" >SEBELUMNYA</a>
                </button>
            </div>
            <div class="next" style="float:right">
                <button type="button" style="background-color: #2C786C;border-radius: 12px; padding:8px; padding-left:20px; padding-right:20px;">
                    <a class="right-btn" href="{{url('/form1')}}" style="color:white" >SELANJUTNYA</a>
                </button>
            </div>
        </div>

      </form>
    </div>
  </div>
</div>

@endsection