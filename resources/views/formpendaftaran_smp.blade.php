@extends('layouts.header')
@section('title',' Form Pendaftaran')
@section('content')
<!-- MultiStep Form -->
  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <ul id="progressbar" style="align-content: center" class="justify-content-center">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            <form id="msform" role="form" method="POST" action="{{url('/formpendaftaran_smp')}}" enctype="multipart/form-data">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                @endif

                @csrf
                <!-- progressbar -->
                <!-- form halaman 1-->
                @include('formsmp.fieldset1')
                <!-- form halaman 2-->
                @include('formsmp.fieldset2')
                <!-- form halaman 3-->
                @include('formsmp.fieldset3')
                <!-- form halaman 4-->
                @include('formsmp.fieldset4')
                <!-- form halaman 5-->
                @include('formsmp.fieldset5')
                <!-- form halaman 6-->
                @include('formsmp.fieldset6')
            </form>
        </div>
    </div>
</div>

@endsection

