@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Syarat'
])

@section('content')
<div class="content">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{{session('success')}}</p>
                </div>
        @endif
        <div class="row">
                     
            </div>
            

           
        </div>
    </div>


@endsection
