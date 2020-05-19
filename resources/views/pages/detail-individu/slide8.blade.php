<fieldset>
    <div class="card slide slide_8" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
        <div class="slide-content">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Rumah Tinggal dan Fasilitas Keluarga')}} </h4>
            </div>
            <div>
                <div class="card-body">   
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Status Kepemilikan Rumah')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_kepemilikan_rumah')->first() }} </p>
                        </div>
                    </div>   
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Tahun Peroleh')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tahun_perolehan')->first() }} </p>
                        </div>
                        <label class="col-md-3 col-form-label"> {{__('Kualitas')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kualitas_rumah')->first() }}  </p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Luas (m2)')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('luas_tanah')->first() }} m^2</p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Mandi, cuci, kakus')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('MCK')->first() }} </p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Sumber Air')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('sumber_air')->first() }} </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card-body">   
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Daya Listrik (KWh)')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('daya_listrik')->first() }}  </p>
                        </div>
                        <label class="col-md-3 col-form-label"> {{__('Harta Tidak Bergerak')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('harta')->first() }}  </p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Status Kepemilikan Harta')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_kepemilikan_harta')->first() }} </p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Kendaraan yang Dimiliki')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kendaraan')->first() }} </p>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-3 col-form-label"> {{__('Status Kepemilikan Kendaraan')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataRumah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('status_kepemilikan_kendaraan')->first() }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</fieldset>
