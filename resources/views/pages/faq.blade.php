@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'FAQ'
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
                        <h4 class="card-title m-2"> FAQ</h4>
                    </div>
                    <div class="col-6" style="float: right">
                        <div class="mt-0">
                            <a href="{{route('admin-view-create-faq')}}" style="float:right;" type="button" class="btn btn-primary waves-light waves-effect"><i class="mdi mdi-plus-circle mr-2"></i>Tambahkan Input</a>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width: 5%">No </th>
                            <th style="width: 30%"> Pertanyaan </th>
                            <th style="width: 45%"> Jawaban </th>
                            <th style="width: 20%"> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($faq as $faqs)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$faqs->question}}</td>
                            <td>@php echo $faqs->answer @endphp</td>
                            <td>
                                <a href="{{route('admin-view-edit-faq',$faqs->id)}}" type="button" class="btn btn-icon waves-effect waves-light btn-primary"><i class="fas fa-edit" style="vertical-align: -0.75em;"></i></a>
                                <a href="{{route('delete-faq',$faqs->id)}}" type="button" class="btn btn-icon waves-effect waves-light btn-danger"><i class="fas fa-trash" style="vertical-align: -0.75em;"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr class="active">
                            <td colspan="5">
                                <div class="text-right">
                                    <ul class="pagination pagination-split justify-content-end footable-pagination"></ul>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection