<fieldset>
    <div class="card slide slide_2">
        <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
                <div class="card-header">
                    <h4 class="card-title"> {{__('Data Umum Calon Siswa')}} </h4>
                </div>

                <div class="card-body">   
                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Nama Lengkap')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nama_lengkap')->first() }} </p>
                        </div>
                    </div>  
                    
                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Nama Panggilan')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nama_panggilan')->first() }} </p>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Jenis Kelamin')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('jenis_kelamin')->first() }} </p>
                        </div>
                    </div>   

                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tempat Lahir')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tempat_lahir')->first() }}</p>
                        </div>
                    </div>   

                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tanggal Lahir')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggal_lahir')->first() }} </p>
                        </div>
                    </div>   

                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Alamat')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('alamat')->first() }} </p>
                        </div>
                    </div>  

                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Kota/Kabupaten')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kota_kabupaten')->first() }} </p>
                        </div>
                    </div>  

                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('Provinsi')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('provinsi')->first() }} </p>
                        </div>
                    </div>   

                    <div class="row">
                        <label class="col-md-3" style="padding-bottom: 5%"> {{__('NISN')}} </label>
                        <div class="col-md-9">
                            <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('NISN')->first() }} </p>
                        </div>
                    </div>

                </div>
        </div>
    </div>
</fieldset>

