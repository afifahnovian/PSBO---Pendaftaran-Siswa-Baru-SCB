<!-- page untuk edit status siswa -->
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'EditStatus'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card slide slide_1">
                    <div class="slide-content">
                        <div class="card-header">
                            <h4 class="card-title"> {{__('Data Umum Calon Siswa')}} </h4>
                        </div>
                        <div class="card-body">   
                            <div class="row">
                                <label class="col-md-3 col-form-label"> {{__('Nama Lengkap')}} </label>
                                <div class="col-md-9">
                                    <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nama_lengkap')->first() }} </p>
                                </div>
                            </div>   
                            <div class="row">
                                <label class="col-md-3 col-form-label"> {{__('Jenis Kelamin')}} </label>
                                <div class="col-md-9">
                                    <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('jenis_kelamin')->first() }} </p>
                                </div>
                            </div>   
                            <div class="row">
                                <label class="col-md-3 col-form-label"> {{__('Kota/Kabupaten')}} </label>
                                <div class="col-md-9">
                                    <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('kota_kabupaten')->first() }} </p>
                                </div>
                            </div>  
                            <div class="row">
                                <label class="col-md-3 col-form-label"> {{__('Provinsi')}} </label>
                                <div class="col-md-9">
                                    <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('provinsi')->first() }} </p>
                                </div>
                            </div>   
                            <div class="row">
                                <label class="col-md-3 col-form-label"> {{__('NISN')}} </label>
                                <div class="col-md-9">
                                    <p >: {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('NISN')->first() }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="slide-content">
                        <div class="card-header">
                            <h4 class="card-title"> {{__(' Status Siswa')}} </h4>
                        </div>
                        <form action="/pages/individu/{{$calonsiswa->id}}/update" method="post">
                            <div class="card-body">
                                {{csrf_field()}}
                                <select name="status" class="custom-select">
                                    <option value="Pertimbangan" @if($calonsiswa->status_siswa == 'Pertimbangan') selected @endif> Pertimbangan </option>
                                    <option value="Lolos" @if($calonsiswa->status_siswa == 'Lolos') selected @endif> Lolos </option>
                                    <option value="Tidak Lolos" @if($calonsiswa->status_siswa == 'Tidak Lolos') selected @endif> Tidak Lolos </option>
                                </select>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <td class="text-right">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Update">
                                </td>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection