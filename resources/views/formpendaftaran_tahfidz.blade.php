@extends('layouts.header')
@section('title','Data Pengisi Form')
@section('content')
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
            
           <form id="msform" role="form" method="POST" action="{{url('/formpendaftaran_tahfidz/post')}}" enctype="multipart/form-data">
                
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                @csrf   

                @include('formtahfidz.fieldset_1')
                
                @include('formtahfidz.fieldset_2')

                @include('formtahfidz.fieldset_3')

                @include('formtahfidz.fieldset_4')

                @include('formtahfidz.fieldset_5')

                @include('formtahfidz.fieldset_6')

                
            </form>
            
        </div>
    </div>
</div>
@endsection