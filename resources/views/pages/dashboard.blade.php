@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'dashboard'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body cars-dashboard">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-single-02 text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Total Calon Siswa</p>
                                    <p class="card-title">300
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body cars-dashboard">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-tag-content text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Sudah Diseleksi</p>
                                    <p class="card-title">100
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body cars-dashboard">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-ruler-pencil text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Belum Diseleksi</p>
                                    <p class="card-title">200
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body cars-dashboard">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="nc-icon nc-badge text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Jumlah Admin PPDB</p>
                                    <p class="card-title">10
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title"> Persebaran Daerah Asal Siswa SCB </h5>
                        <p class="card-category">Berdasarkan Provinsi</p>
                    </div>
                    <div class="card-body">
                        <div class="piechart" id="piechart" style="width: 750px; height: 400px; margin-left:14%;margin-right:14%;"></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- button untuk download file excel -->
        <div class="row">
            <div class="float-right col-md-6">
                <a href="pages/export" class="btn btn-block btn-success">
                    Download Excel Calon Siswa SMP
                </a>
            </div>
            <div class="float-right col-md-6">
            <a href="pages/export" class="btn btn-block btn-success">
                Download Excel Calon Siswa Tahfidz
            </a>
        </div>
        </div>
@endsection

@push('scripts')
    <script>
        // $(document).ready(function() {
        //     // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        //     // demo.initChartsPages();
        // });
        
        // Pie Chart
        var analytics = <?php echo $prov_array; ?>;

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart()
            {
                var data = google.visualization.arrayToDataTable(analytics);
                var options = {
                title : '',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
            }
    </script>
@endpush