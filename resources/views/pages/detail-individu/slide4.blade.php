<fieldset>
    <div class="card slide slide_4">
        <div class="slide-content" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Keunikan Calon Siswa')}} </h4>
            </div>

            <div class="card-body">   
                <div class="row">
                    <label class="col-md-4" style="padding-bottom: 5%"> {{__('Hal-hal khusus')}} </label>
                    <div class="col-md-6" style="float: right">
                        <p >: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('hal_khusus')->first() }} </p>
                    </div>
                </div> 

                <div class="row">
                    <label class="col-md-4" style="padding-bottom: 5%"> {{__('Cita-cita')}} </label>
                    <div class="col-md-6" style="float: right">
                        <p >: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('citacita')->first() }} </p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-4" style="padding-bottom: 5%"> {{__('Hobi')}} </label>
                    <div class="col-md-6" style="float: right">
                        <p>: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('hobi')->first() }} </p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-4" style="padding-bottom: 5%"> {{__('Harapan Orang Tua')}} </label>
                    <div class="col-md-6" style="float: right">
                        <p >: {{ App\DataKeunikanSiswa::where(['calonsiswa_id' => $calonsiswa->id])->pluck('harapan_orgtua')->first() }} </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</fieldset>

