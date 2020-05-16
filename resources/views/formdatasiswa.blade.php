@extends('layouts.header')
@section('title',' Form Pendaftaran')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mt-5 mb-5">
            <form id="msform" role="form" method="POST" action="{{url('/formpendaftaran_smp')}}" enctype="multipart/form-data">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>
                    @endforeach
                @endif

                @if(session('success'))
                    <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p class="mb-0">{{session('success')}}</p>
                </div>
                @endif
                @csrf
                
            </form>
        </div>
    </div>
</div>