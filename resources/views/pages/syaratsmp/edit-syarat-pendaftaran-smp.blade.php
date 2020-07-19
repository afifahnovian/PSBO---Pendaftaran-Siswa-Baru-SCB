@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Syarat'
])
@section('content')
<div class="row">
    <div class="col-sm-12 mt-5">
        <div class="card mt-4 ml-3 mr-3">
            <div class="message mt-2 ml-2 mr-2" >
                @if (session()->has('success'))
                    <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card-header">
                <h4 class="card-title mt-0">Syarat SMP</h4>
            </div>

            <div class="card-body">
                <form id="edit-syarat-smp" class="form-horizontal" action="{{url('/pages/update-syarat-smp')}}" method="POST">
                    {{ csrf_field() }}
                    <input id="syaratsmp" type="text" name="syaratsmp" value="{{ $data_posts->where('tipe_post','syaratsmp')->first()->isi_post }}" hidden>
                    <div class="form-group">
                        <label for="syaratsmp">Isi Syarat SMP<span class="text-danger">*</span></label>
                        <div id="snow-editor" style="height: 300px;">@php echo $data_posts->where('tipe_post','syaratsmp')->first()->isi_post @endphp</div>
                    </div>

                    <div class="form-group account-btn m-t-10">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Edit Syarat SMP</button>
                    </div>
                </form>
            </div>
                    
        </div>
    </div>
    
</div>
@endsection