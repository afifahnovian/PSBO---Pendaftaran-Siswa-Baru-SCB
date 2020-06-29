@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Tahfidz'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Semua Calon Siswa Tahfidz</h4>
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
                                    @foreach($data_umums as $data_umum)
                                        <tr>
                                            <td>
                                                {{ $data_umum->nama_lengkap }}
                                            </td>
                                            <td>
                                                {{ $data_umum->jenis_kelamin }}
                                            </td>
                                            <td>
                                                {{ App\DataSekolah::where(['calonsiswa_id' => $data_umum->calonsiswa_id])->pluck('asal_sekolah')->first() }}
                                            </td>
                                            <td>
                                                {{ $data_umum->provinsi }}
                                            </td>
                                            <td>
                                                {{ $data_umum->status_siswa }}
                                            </td>
                                            <td class="text-right">
                                                <a href="/pages/individu/{{$data_umum->calonsiswa_id}}" class="btn btn-sm btn-primary">
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