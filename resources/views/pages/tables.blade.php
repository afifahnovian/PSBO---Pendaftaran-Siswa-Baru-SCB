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
                                        Asal Daerah
                                    </th>
                                    <th>
                                        Asal Sekolah
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Dakota
                                        </td>
                                        <td>
                                            Perempuan
                                        </td>
                                        <td>
                                            Jakarta
                                        </td>
                                        <td>
                                            SDN 1 Pagi
                                        </td>
                                        <td>
                                            Lolos
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('page.index', 'individu') }}" class="btn btn-sm btn-primary">
                                                detail
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Dakota
                                        </td>
                                        <td>
                                            Perempuan
                                        </td>
                                        <td>
                                            Jakarta
                                        </td>
                                        <td>
                                            SDN 1 Pagi
                                        </td>
                                        <td>
                                            Lolos
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('page.index', 'individu') }}" class="btn btn-sm btn-primary">
                                                detail
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Dakota
                                        </td>
                                        <td>
                                            Perempuan
                                        </td>
                                        <td>
                                            Jakarta
                                        </td>
                                        <td>
                                            SDN 1 Pagi
                                        </td>
                                        <td>
                                            Tidak Lolos
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('page.index', 'individu') }}" class="btn btn-sm btn-primary">
                                                detail
                                            </a>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>
                                            Minerva Hooper
                                        </td>
                                        <td>
                                            Curaçao
                                        </td>
                                        <td>
                                            Sinaai-Waas
                                        </td>
                                        <td>
                                            ffffffff
                                        </td>
                                        <td class="text-right">
                                            <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">
                                                detail
                                            </a>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> Table on Plain Background</h4>
                        <p class="card-category"> Here is a subtitle for this table</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Country
                                    </th>
                                    <th>
                                        City
                                    </th>
                                    <th class="text-right">
                                        Salary
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td class="text-right">
                                            $36,738
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Minerva Hooper
                                        </td>
                                        <td>
                                            Curaçao
                                        </td>
                                        <td>
                                            Sinaai-Waas
                                        </td>
                                        <td class="text-right">
                                            $23,789
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Sage Rodriguez
                                        </td>
                                        <td>
                                            Netherlands
                                        </td>
                                        <td>
                                            Baileux
                                        </td>
                                        <td class="text-right">
                                            $56,142
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Philip Chaney
                                        </td>
                                        <td>
                                            Korea, South
                                        </td>
                                        <td>
                                            Overland Park
                                        </td>
                                        <td class="text-right">
                                            $38,735
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Doris Greene
                                        </td>
                                        <td>
                                            Malawi
                                        </td>
                                        <td>
                                            Feldkirchen in Kärnten
                                        </td>
                                        <td class="text-right">
                                            $63,542
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mason Porter
                                        </td>
                                        <td>
                                            Chile
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $78,615
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Jon Porter
                                        </td>
                                        <td>
                                            Portugal
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $98,615
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
@endsection