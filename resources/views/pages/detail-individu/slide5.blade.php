<fieldset>
    <div class="card slide slide_5">
        <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Sekolah Sebelumnya')}} </h4>
            </div>

            <div class="card-body">   
                <div class="row">
                    <label class="col-md-4" style="padding-bottom: 5%"> {{__('Asal Sekolah')}} </label>
                    <div class="col-md-6">
                        <p >: {{ App\DataSekolah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('asal_sekolah')->first() }} </p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-4" style="padding-bottom: 5%"> {{__('Alamat Sekolah')}} </label>
                    <div class="col-md-6">
                        <p >: {{ App\DataSekolah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('alamat_sekolah')->first() }}  </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-4" style="padding-bottom: 5%"> {{__('Nomor Telepon Sekolah')}} </label>
                    <div class="col-md-6">
                        <p >: {{ App\DataSekolah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('no_telp_sekolah')->first() }} </p>
                    </div>
                </div>   

            </div>

            
        </div>
        
    </div>
</fieldset>
