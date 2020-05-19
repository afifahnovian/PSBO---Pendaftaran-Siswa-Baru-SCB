<fieldset>
    <div class="card slide slide_3">
        <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Kesehatan Calon Siswa')}} </h4>
            </div>

            <div class="card-body">   
                <div class="row">
                    <label class="col-md-5" style="padding-bottom: 5%"> {{__('Tinggi Badan')}} </label>
                    <div class="col-md-5">
                        <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tinggi_badan')->first() }} </p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-5" style="padding-bottom: 5%"> {{__('Berat Badan')}} </label>
                    <div class="col-md-5">
                        <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('berat_badan')->first() }} </p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-5" style="padding-bottom: 5%"> {{__('Riwayat penyakit/ alergi')}} </label>
                    <div class="col-md-5">
                        <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('riwayat_penyakit')->first() }} </p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-5" style="padding-bottom: 5%"> {{__('Golongan Darah')}} </label>
                    <div class="col-md-5">
                        <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('golongan_darah')->first() }}</p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-5" style="padding-bottom: 5%"> {{__('BPJS')}} </label>
                    <div class="col-md-5">
                        <p >: {{ App\DataKesehatanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('BPJS')->first() }} </p>
                    </div>
                </div>   
            </div>

        </div>
        
    </div>
</fieldset>
