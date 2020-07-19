@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Konten'
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
        <!-- Ubah Tombol Pendaftaran -->
        <div class="col-sm-12">
                <div class="card ml-3 mr-3">
                    <div class="card-header">
                        <h4 class="header-title mt-0">Tombol Pendaftaran</h4> 
                    </div>
                    
                    <div class="card-body">
                        <form role="form" action="{{url('/pages/update-tombol-daftar')}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="status_ppdb" class="control-label mb-1">Tombol Pendataran PPDB</label>
                                    <!-- <input id="status_ppdb" name="status_ppdb" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$status_ppdb->isi_post}}"> -->
                                    <select id="status_ppdb" name="status_ppdb" class="custom-select">
                                        <option value="1" @if($status_ppdb->isi_post=='1') selected='selected' @endif >Buka</option>
                                        <option value="0" @if($status_ppdb->isi_post=='0') selected='selected' @endif >Tutup</option>
                                    </select>
                                </div>   
                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Update Tombol Pendaftaran</button>
                                </div>
                        </form>
                    </div>
                              
                </div>
            </div>
            <!-- Headline -->
            <div class="col-sm-12">
                <div class="card ml-3 mr-3">
                        <div class="card-header">
                            <h4 class="header-title mt-0">Headline Pendaftaran</h4> 
                        </div>
                        <div class="card-body">           
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
                                    <textarea name="headline_p" id="textarea-input" style="height: 200px" class="form-control">{{$data_posts->where('tipe_post','headline-p')->first()->isi_post}}</textarea>
                                </div>
                                <!-- button submit -->
                                <div>
                                    <button  type="submit" class="btn btn-lg btn-primary btn-block">Update Headline</button>
                                </div>
                            </form>
                        </div>                           
                </div>
            </div>
            
            <br>
            <br>
            <!-- Timeline -->
            <div class="col-sm-12">
                <div class="card ml-3 mr-3">
                    <div class="card-header">
                        <h4 class="header-title mt-0">Timeline Pendaftaran</h4> 
                    </div>
                    
                    <div class="card-body">
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
                                    <label for="timeline-5" class="control-label mb-1">Tanggal timeline 5</label>
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

            <!-- Footer : Narahubung -->
            <div class="col-sm-12">
                <div class="card ml-3 mr-3">
                    <div class="card-header">
                        <h4 class="header-title mt-0">Footer : Narahubung</h4> 
                    </div>
                    
                    <div class="card-body">
                        <form role="form" action="{{url('/pages/update-narahubung')}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="narahubung-1" class="control-label mb-1">Narahubung 1</label>
                                    <input id="narahubung-1" name="narahubung_1" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','narahubung-1')->first()->isi_post}}">
                                </div>   

                                <div class="form-group">
                                    <label for="narahubung-2" class="control-label mb-1">Narahubung 2</label>
                                    <input id="narahubung-2" name="narahubung_2" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','narahubung-2')->first()->isi_post}}">
                                </div>   

                                <div class="form-group">
                                    <label for="narahubung-3" class="control-label mb-1">Narahubung 3</label>
                                    <input id="narahubung-3" name="narahubung_3" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','narahubung-3')->first()->isi_post}}">
                                </div>   

                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Update Narahubung</button>
                                </div>
                        </form>
                    </div>
                              
                </div>
            </div>

             <!-- Footer : Sosmed -->
             <div class="col-sm-12">
                <div class="card ml-3 mr-3">
                    <div class="card-header">
                        <h4 class="header-title mt-0">Footer : Sosial Media</h4> 
                    </div>
                    
                    <div class="card-body">
                        <form role="form" action="{{url('/pages/update-sosmed')}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="website-scb" class="control-label mb-1">Website</label>
                                    <input id="website-scb" name="website_scb" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','website-scb')->first()->isi_post}}">
                                </div>   

                                <div class="form-group">
                                    <label for="twitter-scb" class="control-label mb-1">Twitter</label>
                                    <input id="twitter-scb" name="twitter_scb" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','twitter-scb')->first()->isi_post}}">
                                </div>   

                                <div class="form-group">
                                    <label for="email-scb" class="control-label mb-1">Email</label>
                                    <input id="email-scb" name="email_scb" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','email-scb')->first()->isi_post}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="facebook-scb" class="control-label mb-1">Facebook</label>
                                    <input id="facebook-scb" name="facebook_scb" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','facebook-scb')->first()->isi_post}}">
                                </div>   

                                <div class="form-group">
                                    <label for="instagram-scb" class="control-label mb-1">Instagram</label>
                                    <input id="instagram-scb" name="instagram_scb" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','instagram-scb')->first()->isi_post}}">
                                </div>   

                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Update Sosial Media</button>
                                </div>
                        </form>
                    </div>
                              
                </div>
            </div>
            
            <!-- Footer : Alamat -->
             <div class="col-sm-12">
                <div class="card ml-3 mr-3">
                    <div class="card-header">
                        <h4 class="header-title mt-0">Footer : Alamat Sekolah</h4> 
                    </div>
                    
                    <div class="card-body">
                        <form role="form" action="{{url('/pages/update-alamat')}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="alamat-scb" class="control-label mb-1">Website</label>
                                    <input id="alamat-scb" name="alamat_scb" type="text" class="form-control" aria-required="true" aria-invalid="false" value= "{{$data_posts->where('tipe_post','alamat-scb')->first()->isi_post}}">
                                </div>   

                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Update Alamat</button>
                                </div>
                        </form>
                    </div>
                              
                </div>
            </div>

             <!-- Footer : Kontak Admin PPDB -->
             <div class="col-sm-12">
                <div class="card ml-3 mr-3">
                    <div class="card-header">
                        <h4 class="header-title mt-0">Kontak : Kontak Admin PPDB</h4> 
                    </div>
                    
                    <div class="card-body">
                        <form role="form" action="{{url('/pages/update-kontak-ppdb')}}" method="post">
                            {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="kontak1" class="control-label mb-1">Kontak Narahubung PPDB 1</label>
                                    <input id="kontak1" name="kontak1" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$kontak1->isi_post}}">
                                    <span class="help-block text-muted"><mdall>Harap sertakan kode negara (contoh: +6281000000000)</mdall></span>
                                </div> 
                                
                                <div class="form-group">
                                    <label for="kontak2" class="control-label mb-1">Kontak Narahubung PPDB 2</label>
                                    <input id="kontak2" name="kontak2" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$kontak2->isi_post}}">
                                    <span class="help-block text-muted"><mdall>Harap sertakan kode negara (contoh: +6281000000000)</mdall></span>
                                </div> 

                                <div>
                                    <button type="submit" class="btn btn-lg btn-primary btn-block">Update Kontak PPDB</button>
                                </div>
                        </form>
                    </div>
                              
                </div>
            </div>
            
            
                
        </div>
    </div>

@endsection

