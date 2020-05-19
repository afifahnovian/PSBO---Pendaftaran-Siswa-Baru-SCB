@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'individu'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-8" id="slider" style="width: 75%; float:left">
                <div id="slides">
                    <div id="overflow">
                        <div class="inner">
                            <!-- Slide Konten 1 -->
                            @include('pages.detail-individu.slide1')
                            <!-- SLide Konten 2 -->
                            @include('pages.detail-individu.slide2')
                             <!-- Slide Konten 3 -->
                             @include('pages.detail-individu.slide3')
                             <!-- Slide Konten 4 -->
                             @include('pages.detail-individu.slide4')
                             <!-- Slide Konten 5 -->
                             @include('pages.detail-individu.slide5')
                             <!-- Slide Konten 6 -->
                             @include('pages.detail-individu.slide6')
                             <!-- Slide Konten 7 -->
                             @include('pages.detail-individu.slide7')
                             <!-- Slide Konten 8 -->
                             @include('pages.detail-individu.slide8')
                             <!-- Slide Konten 9 -->
                             @include('pages.detail-individu.slide9')
                             <!-- Slide Konten 10 -->
                             @include('pages.detail-individu.slide10')  
                             
                        </div>
                    </div>
                </div>

                <!-- status siswa -->
            
            </div>

            <div class="col" style="width: 25%;float:right">
                    <form id="editstatus">
                        <div class="card">
                            <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
                                <div class="card-header">
                                    <h4 class="card-title"> {{__(' Status Siswa')}} </h4>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <label class="col-md-3"> {{__('Status')}}</label>
                                        <div class="col-md-7">
                                            <a>: {{$calonsiswa->status_siswa}} </a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-footer" style="float: right">
                                        <a href="/pages/individu/{{$calonsiswa->id}}/edit" class="btn btn-sm btn-primary" type="submit" value="update"> Ubah </a>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
        
    </div>
@endsection

@push('scripts')
<script>
    

</script>
@endpush