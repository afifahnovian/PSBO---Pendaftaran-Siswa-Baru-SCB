@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Syarat'
])

@section('content')
<div class="row">
    <div class="col-md-12 mt-5">
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
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title m-2"> Syarat Pendaftaran SMP</h4>
                    </div>
                </div> 
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead justify-content-center>
                        <tr align="center"> 
                            <th style="width: 70%"> Persyaratan </th>
                            <th style="width: 30%"> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>@php echo $data_posts->where('tipe_post','syaratsmp')->first()->isi_post @endphp</td>
                            <td align="center">
                                <a href="{{route('admin-view-edit-syarat-smp')}}" type="button" class="btn btn-icon waves-effect waves-light btn-primary" ><i class="fas fa-edit" style="vertical-align: -0.75em;"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card ml-3 mr-3">
            <div class="card-header">
                <h4 class="header-title mt-0">Narahubung SMP</h4> 
            </div>
            
            <div class="card-body">
                <form role="form" action="{{url('/pages/update-narahubung-smp')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="kontaksmp1" class="control-label mb-1">Narahubung 1</label>
                        <input id="kontaksmp1" name="kontaksmp1" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$kontaksmp1->isi_post}}">
                        <span class="help-block text-muted"><mdall>Harap sertakan kode negara (contoh: +6281000000000)</mdall></span>
                    </div> 
                    
                    <div class="form-group">
                        <label for="kontaksmp2" class="control-label mb-1">Narahubung 2</label>
                        <input id="kontaksmp2" name="kontaksmp2" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$kontaksmp2->isi_post}}">
                        <span class="help-block text-muted"><mdall>Harap sertakan kode negara (contoh: +6281000000000)</mdall></span>
                    </div> 
                    <div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Update Narahubung</button>
                    </div>
                </form>
            </div>
                        
        </div>
    </div>
</div>
@endsection