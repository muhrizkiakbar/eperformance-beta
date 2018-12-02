@extends('layouts.app')

@section('body')
    <body class="vertical-layout vertical-overlay-menu 2-columns   menu-expanded fixed-navbar" 
    data-open="click" data-menu="vertical-overlay-menu" data-col="2-columns">
    
    @include('layouts.header')
    @include('layouts.sidebar')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
            <!-- line chart section start -->
            <section id="chartjs-line-charts">
                <!-- Line Chart -->
                <div class="row">
                    <div class="col-xl-2 col-lg-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Pencarian</h4>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="form-group">
                                <select class="select2-data-array form-control" id="cari-periode"></select>
                                </div>
                                <div class="form-group">
                                    <select class="select2-data-array form-control" id="cari-instansi"></select>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer loading" hidden>
                            <p class="float-sm-center text-center m-0"><i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Loading...</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="judul-grafik">Grafik Performance Absen Tahun</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body chartjs">
                            <canvas id="absen-line-chart" height="500"></canvas>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col-xl-2 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pencarian</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Kehadiran Bulanan</label>
                                        <div class='input-group date' id='bulan-tahun'>
                                            <input type='text' class="form-control" />
                                            <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label >Kehadiran Harian</label>
                                        <div class='input-group date' id='hari-bulan-tahun'>
                                            <input type='text' class="form-control" />
                                            <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="label-bulanan">Tabel Performance Kehadiran Bulanan</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                    <table class="table table-striped table-responsive">
                                        <thead class="bg-blue-grey bg-lighten-4">
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">SKPD</th>
                                            <th scope="col">Persentase Kehadiran</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabel-kehadiran-bulan">
                                            
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="label-harian">Tabel Performance Kehadiran Harian</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <table class="table table-striped table-responsive">
                                    <thead class="bg-blue-grey bg-lighten-4">
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">SKPD</th>
                                        <th scope="col">Persentase Kehadiran</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabel-kehadiran-harian">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-2 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pencarian</h4>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Apel Bulanan</label>
                                        <div class='input-group date' id='apel-bulan-tahun'>
                                            <input type='text' class="form-control" />
                                            <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label >Apel Harian</label>
                                        <div class='input-group date' id='apel-hari-bulan-tahun'>
                                            <input type='text' class="form-control" />
                                            <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="label-apel-bulanan">Tabel Performance Apel Bulanan</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                    <table class="table table-striped table-responsive">
                                        <thead class="bg-blue-grey bg-lighten-4">
                                            <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">SKPD</th>
                                            <th scope="col">Persentase Apel</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabel-apel-bulan">
                                            
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="label-apel-harian">Tabel Performance Apel Harian</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <table class="table table-striped table-responsive">
                                    <thead class="bg-blue-grey bg-lighten-4">
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">SKPD</th>
                                        <th scope="col">Persentase Apel</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabel-apel-harian">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // line chart section end -->
            </div>
        </div>
    </div>

    
    @include('layouts.footer')
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('vendors/js/charts/chart.min.js')}}    " type="text/javascript"></script>
    <script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/pickers/dateTime/moment-with-locales.min.js')}}"
    type="text/javascript"></script>
    <script src="{{asset('vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js')}}"
    type="text/javascript"></script>
    
    <script src="{{asset('vendors/js/pickers/pickadate/legacy.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="{{asset('js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/scripts/customizer.js')}}" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('js/scripts/pickers/dateTime/bootstrap-datetime.js')}}"
    type="text/javascript"></script>
    {{-- <script src="{{asset('js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script> --}}
    <script type="text/javascript">

        //KEHADIRAN BULANAN
        $('#bulan-tahun').datetimepicker({
            viewMode: 'years',
            format: 'YYYY-MM'
        });

        $('#bulan-tahun').on('dp.change', function(e){
            $('#tabel-kehadiran-bulan').html('');
            $.ajax({
                async : true,
                type : 'POST',
                url: 'http://eabsen.kalselprov.go.id/api/absensi/instansi/bulan/kehadiran?tanggal='+$('#bulan-tahun').find("input").val(),
                beforeSend: function () {
                    $('#tabel-kehadiran-bulan').append('<tr><td colspan="3"><center><i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Loading...</center></td></tr>')
                },
            }).done(function(response){
                $('#tabel-kehadiran-bulan').html('');
                document.getElementById("label-bulanan").innerHTML = "Tabel Performance Absen Bulan "+($('#bulan-tahun').find("input").val()).substring(5)+'-'+($('#bulan-tahun').find("input").val()).substring(4,0);
                $.each(response, function( index, value){
                    $('#tabel-kehadiran-bulan').append('<tr><th class="text-center" scope="row">'+(index+1)+'</th><td>'+value.namaInstansi+'</td><td class="text-right">'+value.persentase_kehadiran+'%</td></tr>')
                });
            }).fail(function (error) {
                console.log(error);
            }); 
        });

        //KEHADIRAN HARIAN
        $('#hari-bulan-tahun').datetimepicker({
            format: 'D-M-Y',
        });

        $('#hari-bulan-tahun').on('dp.change', function(e){
            $('#tabel-kehadiran-harian').html('');
            $.ajax({
                async : true,
                type : 'POST',
                url: 'http://eabsen.kalselprov.go.id/api/absensi/instansi/hari/kehadiran?tanggal='+$('#hari-bulan-tahun').find("input").val(),
                beforeSend: function () {
                    $('#tabel-kehadiran-harian').append('<tr><td colspan="3"><center><i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Loading...</center></td></tr>')
                },
            }).done(function(response){
                $('#tabel-kehadiran-harian').html('');
                document.getElementById("label-harian").innerHTML = "Tabel Performance Absen Tanggal "+$('#hari-bulan-tahun').find("input").val();
                $.each(response, function( index, value){
                    $('#tabel-kehadiran-harian').append('<tr><th class="text-center" scope="row">'+(index+1)+'</th><td>'+value.namaInstansi+'</td><td class="text-right">'+value.persentase_kehadiran+'%</td></tr>')
                });
            }).fail(function (error) {
                console.log(error);
            }); 
        });
        
        //APEL BULANAN
        $('#apel-bulan-tahun').datetimepicker({
            viewMode: 'years',
            format: 'YYYY-MM'
        });

        $('#apel-bulan-tahun').on('dp.change', function(e){
            $('#tabel-apel-bulan').html('');
            $.ajax({
                async : true,
                type : 'POST',
                url: 'http://eabsen.kalselprov.go.id/api/absensi/instansi/bulan/apel?tanggal='+$('#apel-bulan-tahun').find("input").val(),
                beforeSend: function () {
                    $('#tabel-apel-bulan').append('<tr><td colspan="3"><center><i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Loading...</center></td></tr>')
                },
            }).done(function(response){
                $('#tabel-apel-bulan').html('');
                document.getElementById("label-apel-bulanan").innerHTML = "Tabel Performance Apel Bulan "+($('#apel-bulan-tahun').find("input").val()).substring(5)+'-'+($('#apel-bulan-tahun').find("input").val()).substring(4,0);
                $.each(response, function( index, value){
                    $('#tabel-apel-bulan').append('<tr><th class="text-center" scope="row">'+(index+1)+'</th><td>'+value.namaInstansi+'</td><td class="text-right">'+value.persentase_apel+'%</td></tr>')
                });
            }).fail(function (error) {
                console.log(error);
            }); 
        });

        //APEL HARIAN
        $('#apel-hari-bulan-tahun').datetimepicker({
            format: 'D-M-Y',
        });

        $('#apel-hari-bulan-tahun').on('dp.change', function(e){
            $('#tabel-apel-harian').html('');
            $.ajax({
                async : true,
                type : 'POST',
                url: 'http://eabsen.kalselprov.go.id/api/absensi/instansi/hari/apel?tanggal='+$('#apel-hari-bulan-tahun').find("input").val(),
                beforeSend: function () {
                    $('#tabel-apel-harian').append('<tr><td colspan="3"><center><i class="fa fa-circle-o-notch fa-spin fa-fw"></i>Loading...</center></td></tr>')
                },
            }).done(function(response){
                $('#tabel-apel-harian').html('');
                document.getElementById("label-apel-harian").innerHTML = "Tabel Performance Apel Tanggal "+$('#apel-hari-bulan-tahun').find("input").val();
                $.each(response, function( index, value){
                    $('#tabel-apel-harian').append('<tr><th class="text-center" scope="row">'+(index+1)+'</th><td>'+value.namaInstansi+'</td><td class="text-right">'+value.persentase_apel+'%</td></tr>')
                });
            }).fail(function (error) {
                console.log(error);
            }); 
        });
    
        var monthText = ['Null', 'Januari', 'Februari', 'Maret',
                            'April', 'Mei', 'Juni', 'Juli',
                            'Agustus', 'September', 'Oktober',
                            'November', 'Desember'];

        var dataMonthChart = [];
        var chartarea = document.getElementById('absen-line-chart').getContext('2d');

        
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'bottom',
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Bulan'
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Persentase'
                    }
                }]
            },
            title: {
                display: true,
                text: 'GRAFIK PERFORMANCE ABSEN'
            }
        };

        var chartData = {
            labels: [],
            datasets: []
        };
        var config = {
            type: 'line',
            options : chartOptions,
            data : chartData
        };
        window.myBar = new Chart(chartarea, config);
        
        function setchart(chartTitle ,dataLabel, response) {
            window.myBar.destroy()
            
            window.myBar = new Chart(chartarea, {
                type: 'line',
                data:{
                    labels: dataLabel,
                    datasets: [{
                        label: "Apel",
                        data: response.apel,
                        fill: false,
                        borderColor: "#23992e",
                        pointBorderColor: "#23992e",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Hadir",
                        data: response.hadir,
                        fill: false,
                        borderColor: "#224899",
                        pointBorderColor: "#224899",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Ijin",
                        data: response.ijin,
                        lineTension: 0,
                        fill: false,
                        borderColor: "#FF7D4D",
                        pointBorderColor: "#FF7D4D",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Ijin Terlambat",
                        data: response.ijinterlambat,
                        fill: false,
                        borderColor: "#843d07",
                        pointBorderColor: "#843d07",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Keperluan Lain",
                        data: response.keperluanlain,
                        fill: false,
                        borderColor: "#EFEF11",
                        pointBorderColor: "#EFEF11",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Pulang Cepat",
                        data: response.pulangcepat,
                        fill: false,
                        borderColor: "#B239B4",
                        pointBorderColor: "#B239B4",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Sakit",
                        data: response.sakit,
                        fill: false,
                        borderColor: "#00A5A8",
                        pointBorderColor: "#00A5A8",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Tanpa Kabar",
                        data: response.tanpakabar,
                        fill: false,
                        borderColor: "#e20f4f",
                        pointBorderColor: "#e20f4f",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Tugas Belajar",
                        data: response.tb,
                        fill: false,
                        borderColor: "#F85ABF",
                        pointBorderColor: "#F85ABF",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Terlambat",
                        data: response.terlambat,
                        fill: false,
                        borderColor: "#17F58C",
                        pointBorderColor: "#17F58C",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }, {
                        label: "Tugas Luar",
                        data: response.tl,
                        fill: false,
                        borderColor: "#000000",
                        pointBorderColor: "#000000",
                        pointBackgroundColor: "#FFF",
                        pointBorderWidth: 2,
                        pointHoverBorderWidth: 2,
                        pointRadius: 4,
                    }]
                },
                options : {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        position: 'bottom',
                    },
                    hover: {
                        mode: 'label'
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            gridLines: {
                                color: "#f3f3f3",
                                drawTicks: false,
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Bulan'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            gridLines: {
                                color: "#f3f3f3",
                                drawTicks: false,
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Persentase'
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: chartTitle
                    }
                }
            });
        };

        var tahun_selected;
        var instansi_selected;
        var instansi_text;

        $("#cari-periode").select2({
            placeholder: "Periode",
            allowClear: true
        });
        $("#cari-instansi").select2({
            placeholder: "SKPD",
            allowClear: true
        });

        $("#cari-periode").on('select2:select', function (e) {
            var data = e.params.data;
            tahun_selected = data.id;
        });
        
        $("#cari-instansi").on('select2:select', function (e) {
            var data = e.params.data;
            instansi_selected = data.id;
            instansi_text = data.text;
        });

        $.ajax({
            async : true,
            type : 'get',
            url: 'http://eabsen.kalselprov.go.id/api/tahun/absensi',
        }).done(function(response){
            $.map(response, function(val){
                $("#cari-periode").append($("<option />").val(val['periode']).text(val['periode']));
            });
            $('#cari-periode').val(null).trigger('change');
        }).fail(function (error) {
            console.log(error);
        });

        $.ajax({
            async : true,
            type : 'get',
            url: 'http://eabsen.kalselprov.go.id/api/instansis',
        }).done(function(response){
            $.map(response, function(val){
                $("#cari-instansi").append($("<option />").val(val['id']).text(val['namaInstansi']));
            });
            $('#cari-instansi').val(null).trigger('change');
        }).fail(function (error) {
            console.log(error);
        });
        
        $(".select2-data-array").on('select2:select', function () {
            if (( instansi_selected != null) && (tahun_selected != null)) {
                $.ajax({
                    async : true,
                    type : 'POST',
                    url: 'http://eabsen.kalselprov.go.id/api/absensi/bulan?tanggal='+tahun_selected+'&instansi_id='+instansi_selected,
                    beforeSend: function () {
                        $(".loading").attr(
                            'hidden', false
                        )
                    },
                    complete: function(){
                        $(".loading").attr(
                            'hidden', true
                        )
                    },
                }).done(function(response){
                    dataMonthChart = [];
                    $.each(response.datasets, function( index, value){
                        dataMonthChart.push(monthText[parseInt(value.substring(5))]);
                    });
                    
                    setchart(instansi_text, dataMonthChart, response);

                    document.getElementById("judul-grafik").innerHTML = "Grafik Performance Absen Tahun "+tahun_selected;
                }).fail(function (error) {
                    console.log(error);
                });
            };
        });
        
        
    </script>
    <!-- END PAGE LEVEL JS-->
    </body>
@endsection