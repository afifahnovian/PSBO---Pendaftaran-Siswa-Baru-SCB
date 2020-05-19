<fieldset>
    <div class="card slide slide_6">
        <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Prestasi Akademik')}} </h4>
            </div>
            
            @foreach($prestasis as $prestasi)
                <div class="card-body">   
                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Jenis Lomba')}} </label>
                        <div class="col-md-9" style="width: 60%; float:right">
                            <p >: {{$prestasi->jenis_lomba}} </p>
                        </div>
                    </div>   
                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tingkat Lomba')}} </label>
                        <div class="col-md-9" style="width: 60%; float:right">
                            <p >: {{$prestasi->tingkat_lomba}}  </p>
                        </div>
                    </div>   
                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Peringkat')}} </label>
                        <div class="col-md-9" style="width: 60%; float:right">
                            <p >:{{$prestasi->peringkat}} </p>
                        </div>
                    </div>   
                </div>
            @endforeach
        </div>
        
    </div>
</fieldset>
