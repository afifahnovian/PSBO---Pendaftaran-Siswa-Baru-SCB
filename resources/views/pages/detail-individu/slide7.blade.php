<fieldset>
    <div class="card slide slide_7" style="padding-left: 3%;padding-right: 3%; padding-top:1%; padding-bottom:1% ">
        <div class="slide-content">
            <!-- ayah -->
            <div class="card-header">
                <h4 class="card-title"> {{__('Data Keluarga')}} </h4>
                <h6 class="card-title">{{__('Ayah Kandung')}}</h6>
            </div>

            <div class="card-body">  

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('nama')->first() }} </p>
                    </div>
                </div>   

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Tempat Lahir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('tempat_lahir')->first() }}  </p>
                    </div>
                    <label class="col-md-3 col-form-label"> {{__('Tanggal Lahir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('tanggal_lahir')->first() }}  </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Umur')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('umur')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Pendidikan Terakhir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('pendidikan_terakhir')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Pekerjaan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('pekerjaan')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Penghasilan Pokok')}} </label>
                    <div class="col-md-9">
                        <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('penghasilan_pokok')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Penghaislan Tambahan')}} </label>
                    <div class="col-md-9">
                        <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('penghasilan_sekunder')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Jumlan Tanggungan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('jumlah_tanggungan')->first() }} </p>
                    </div>
                </div>

                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Kondisi Kesehatan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ayah Kandung'])->pluck('kesehatan')->first() }} </p>
                    </div>
                </div>
            </div>

            <!-- Ibu -->
            <div class="card-header">
                <h6 class="card-title">{{__('Ibu Kandung')}}</h6>
            </div>

            <div class="card-body">   
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('nama')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Tempat Lahir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('tempat_lahir')->first() }}  </p>
                    </div>
                    <label class="col-md-3 col-form-label"> {{__('Tanggal Lahir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('tanggal_lahir')->first() }}  </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Umur')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('umur')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Pendidikan Terakhir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('pendidikan_terakhir')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Pekerjaan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('pekerjaan')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Penghasilan Pokok')}} </label>
                    <div class="col-md-9">
                        <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('penghasilan_pokok')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Penghaislan Tambahan')}} </label>
                    <div class="col-md-9">
                        <p >: Rp. {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('penghasilan_sekunder')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Jumlan Tanggungan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('jumlah_tanggungan')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Kondisi Kesehatan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataOrangtua::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'ibu Kandung'])->pluck('kesehatan')->first() }} </p>
                    </div>
                </div>
            </div>

            <!-- Wali -->
            <div class="card-header">
                <h6 class="card-title">{{__('Wali / Ayah Tiri / Ibu Tiri')}}</h6>
            </div>

            <div class="card-body">   
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('nama')->first() }} </p>
                    </div>
                </div>   
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Tempat Lahir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('tempat_lahir')->first() }}  </p>
                    </div>
                    <label class="col-md-3 col-form-label"> {{__('Tanggal Lahir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('tanggal_lahir')->first() }}  </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Umur')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('umur')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Pendidikan Terakhir')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('pendidikan_terakhir')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Pekerjaan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('pekerjaan')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Penghasilan Pokok')}} </label>
                    <div class="col-md-9">
                        <p >: Rp. {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('penghasilan_pokok')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Penghaislan Tambahan')}} </label>
                    <div class="col-md-9">
                        <p >: Rp. {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('penghasilan_sekunder')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Jumlan Tanggungan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('jumlah_tanggungan')->first() }} </p>
                    </div>
                </div>
                <div class="row">
                    <label class="col-md-3 col-form-label"> {{__('Kondisi Kesehatan')}} </label>
                    <div class="col-md-9">
                        <p >: {{ App\DataWali::where(['calonsiswa_id' => $calonsiswa->id, 'wali_type' => 'wali'])->pluck('kesehatan')->first() }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</fieldset>
