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
                    <!-- <div class="card-footer ">
                        <div class="stats">
                            <i class="fa fa-refresh"></i> Update Now
                        </div>
                    </div> -->
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
                    <!-- <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar-o"></i> Last day
                        </div>
                    </div> -->
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
                    <!-- <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> In the last hour
                        </div>
                    </div> -->
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
                        <h5 class="card-title">Persebaran Siswa Cendekia Basnaz</h5>
                        <p class="card-category">Berdasarkan Provinsi</p>
                    </div>
                    <div class="card-body ">
                        <canvas>
                            <div class="piechart" id="piechart" style="width: 750px; height: 450px"></div>
                        </canvas>
                         <!-- <div id="pie_chart" style width="750" height="450"></div> -->
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            
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
        <!-- Chart -->
       <!-- <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header">
                       <h5 class="card-title"> Persebaran Siswa Cendekia Basnaz</h5>
                       <p class="card-category"> Berdasarkan Provinsi</p>
                   </div>
                   <div class="card-body">
                        <figure class="highcharts-figure">
                        <div id="ChartProvinsi"></div>
                        </figure>
                   </div>
               </div>
           </div>
       </div> -->
    </div>
@endsection

@push('scripts')
    <script>
        // $(document).ready(function() {
        //     // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        //     // demo.initChartsPages();
        // });
        
        // var analytics = @json($provinsi ?? '');
        var analytics = <?php echo $provinsi ?? ''; ?>;

            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart()
            {
                var data = google.visualization.arrayToDataTable(analytics);
                var options = {
                title : 'Persebaran Siswa Sekolah Cendekia Basnaz'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
            }

    </script>
@endpush