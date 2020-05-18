@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'tables'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Semua Calon Siswa</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Jenis Kelamin
                                    </th>
                                    <th>
                                        Asal Sekolah
                                    </th>
                                    <th>
                                        Provinsi
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach($calonsiswas as $calonsiswa)
                                        <tr>
                                            <td>
                                                {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('nama_panggilan')->first() }}
                                            </td>
                                            <td>
                                                {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('jenis_kelamin')->first() }}
                                            </td>
                                            <td>
                                                {{ App\DataSekolah::where(['calonsiswa_id' => $calonsiswa->id])->pluck('asal_sekolah')->first() }}
                                            </td>
                                            <td>
                                                {{ App\DataSiswaUmum::where(['calonsiswa_id' => $calonsiswa->id])->pluck('provinsi')->first() }}
                                            </td>
                                            <td>
                                                {{ $calonsiswa->status_siswa }}
                                            </td>
                                            <td class="text-right">
                                                <a href="/pages/individu/{{$calonsiswa->id}}" class="btn btn-sm btn-primary">
                                                    detail
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection