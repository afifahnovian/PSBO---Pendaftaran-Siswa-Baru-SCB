<fieldset>
    <div class="card slide slide_6">
        <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Prestasi Akademik')}} </h4>
            </div>
            
            @foreach($prestasis as $prestasi)
                <div class="card-body">   
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Jenis Lomba')}} </label>
                        <div class="col-md-9">
                            <p >: {{$prestasi->jenis_lomba}} </p>
                        </div>
                    </div>   
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Tingkat Lomba')}} </label>
                        <div class="col-md-9">
                            <p >: {{$prestasi->tingkat_lomba}}  </p>
                        </div>
                    </div>   
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Peringkat')}} </label>
                        <div class="col-md-9">
                            <p >:{{$prestasi->peringkat}} </p>
                        </div>
                    </div>   
                </div>
            @endforeach
        </div>
        
    </div>
</fieldset>
