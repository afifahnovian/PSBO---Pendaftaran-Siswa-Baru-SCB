@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'FAQ'
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
                <h4 class="card-title mt-0">Tambah FAQ</h4>
            </div>

            <div class="card-body">
                <form id="edit-faq" class="form-horizontal" action="{{route('edit-faq')}}" method="POST">
                    {{ csrf_field() }}
                    <input id="id" type="text" name="id" value="{{ $faq->id }}" hidden>
                    <div class="form-group">
                        <label for="question">Pertanyaan<span class="text-danger">*</span></label>
                        <input class="form-control" name="question" value="{{ $faq->question }}" required="" maxlength = "200" type="text" id="question" placeholder="Enter title">
                    </div>

                    <input id="answer" type="text" name="answer" value="{{ $faq->answer }}" hidden>
                    <div class="form-group">
                        <label for="answer">Jawaban<span class="text-danger">*</span></label>
                        <div id="snow-editor" style="height: 300px;">@php echo $faq->answer @endphp</div>
                        <!-- <br> -->
                        <!-- <textarea name="answer"  id="snow-editor" style="width: 100%; height:300px">@php echo $faq->answer @endphp</textarea> -->
                    </div>

                    <div class="form-group account-btn m-t-10">
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Edit FAQ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection