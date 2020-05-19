<fieldset>
    <div class="card slide slide_9" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
        <div class="slide-content">
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Pengeluaran')}} </h4>
            </div>
            <div class="card-body">   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Kebutuhan Hidup')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kebutuhan_hidup')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Kebutuhan Rumah Tangga')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('Kebutuhan_RT')->first() }}  </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tanggungan Pendidikan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_pendidikan')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tanggungan Kesehatan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_kesehatan')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tanggungan Hutang')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_hutang')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tanggungan Listrik')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_listrik')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Tanggungan Telepon')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('tanggungan_telepon')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3" style="padding-bottom: 5%"> {{__('Total Pengeluaran')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataPengeluaran::where(['calonsiswa_id' => $calonsiswa->id])->pluck('total_pengeluaran')->first() }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
