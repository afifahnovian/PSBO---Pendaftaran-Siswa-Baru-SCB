@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'post'
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
            <!-- Headline -->
            <div class="card-box table-responsive" style="margin-left: 5%;margin-right: 5%">
                <h4 class="header-title">Headline Pendaftaran</h4><br>                
                <form role="form" action="{{url('/pages/update-headline')}}" method="post">
                    {{ csrf_field() }}
                    <!-- headline penerimaan siswa baru -->
                    <div class="form-group">
                        <label for="headline-1" class="control-label mb-1">Headline Judul</label>
                        <input id="headline-1" name="headline_1" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$data_posts->where('tipe_post','headline-1')->first()->isi_post}}">
                    </div>
                    <!-- konten headline -->
                    <div class="form-group">
                        <label for="headline-p" class="control-label mb-1">Deskripsi</label>
                        <textarea name="headline_p" id="textarea-input" rows="10" class="form-control">{{$data_posts->where('tipe_post','headline-p')->first()->isi_post}}</textarea>
                    </div>
                    <!-- button submit -->
                    <div>
                        <button  type="submit" class="btn btn-lg btn-primary btn-block">Update Headline</button>
                    </div>
                </form>                          
            </div>
            <br>

            <!-- Timeline -->
            <div class="card-box table-responsive" style="margin-left: 5%;margin-right: 5%">
                <h4 class="header-title">Timeline Pendaftaran</h4><br>                
                <form role="form" action="{{url('/pages/update-timeline')}}" method="post">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="timeline_title_1" class="control-label mb-1">Judul timeline 1</label>
                            <input id="timeline_title_1" name="timeline_title_1" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline_title_1')->first()->isi_post}}">
                        </div>   

                        <div class="form-group">
                            <label for="timeline-1" class="control-label mb-1">Tanggal timeline 1 </label>
                            <input id="timeline-1" name="timeline_1" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline-1')->first()->isi_post}}">
                        </div>

                        <div class="form-group">
                            <label for="timeline_title_2" class="control-label mb-1">Judul timeline 2</label>
                            <input id="timeline_title_2" name="timeline_title_2" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline_title_2')->first()->isi_post}}">
                        </div>  
                        <div class="form-group">
                            <label for="timeline-2" class="control-label mb-1">Tanggal timeline 2</label>
                            <input id="timeline-2" name="timeline_2" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline-2')->first()->isi_post}}">
                        </div>                   
                        
                        <div class="form-group">
                            <label for="timeline_title_3" class="control-label mb-1">Judul timeline 3</label>
                            <input id="timeline_title_3" name="timeline_title_3" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline_title_3')->first()->isi_post}}">
                        </div>  

                        <div class="form-group">
                            <label for="timeline-3" class="control-label mb-1">Tanggal timeline 3</label>
                            <input id="timeline-3" name="timeline_3" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline-3')->first()->isi_post}}">
                        </div>                  
                        
                        <div class="form-group">
                            <label for="timeline_title_4" class="control-label mb-1">Judul timeline 4</label>
                            <input id="timeline_title_4" name="timeline_title_4" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline_title_4')->first()->isi_post}}">
                        </div>  
                        <div class="form-group">
                            <label for="timeline-4" class="control-label mb-1">Tanggal timeline 4</label>
                            <input id="timeline-4" name="timeline_4" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline-4')->first()->isi_post}}">
                        </div>
                        
                        <div class="form-group">
                            <label for="timeline_title_5" class="control-label mb-1">Judul timeline 5</label>
                            <input id="timeline_title_5" name="timeline_title_5" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline_title_5')->first()->isi_post}}">
                        </div>  
                        <div class="form-group">
                            <label for="timeline-5" class="control-label mb-1">Tanggal timeline 5 5</label>
                            <input id="timeline-5" name="timeline_5" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline-5')->first()->isi_post}}">
                        </div>

                        <div class="form-group">
                            <label for="timeline_title_6" class="control-label mb-1">Judul timeline 6</label>
                            <input id="timeline_title_6" name="timeline_title_6" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline_title_6')->first()->isi_post}}">
                        </div>  
                        <div class="form-group">
                            <label for="timeline-6" class="control-label mb-1">Tanggal timeline 6</label>
                            <input id="timeline-6" name="timeline_6" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','timeline-6')->first()->isi_post}}">
                        </div>
                        
                        <div>
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Update Timeline</button>
                        </div>
                </form>           
            </div>
                
        </div>
    </div>

@endsection

