@extends('mainlayout/header')

@section('judul', 'Tindakan Perawat')

@section('content')
    <div class="content-wrapper">
        <section class="content" style="padding: 2%">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Presentasi Berdasarkan Poli</h3>
                            <div class="card-tools">
                                <div class="card-tools">
                                    <!-- This will cause the card to maximize when clicked -->
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                            class="fas fa-expand"></i></button>
                                    <!-- This will cause the card to collapse when clicked -->
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i></button>
                                    <!-- This will cause the card to be removed when clicked -->
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                            class="fas fa-times"></i></button>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <div id="piechart" style="width: 100%; padding:0; margin:0"></div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['poli_kunjungan', 'count'],
            <?php
            foreach ($totalkunjungan as $key => $value) {
                echo '[' . "'" . $value->poli_kunjungan . "'" . ',' . $value->count . '],';
            }
            ?>
        ]);

        var options = {
            'backgroundColor': 'transparent',
            legend: {
                textStyle: {
                    color: '#ffffff'
                },
                position: 'bottom'
            },
            chartArea: {
                width: '100%',
                height: '80%',
            },
            animation: {
                duration: 1000,
                easing: 'in'
            },

            slices: {
                2: {
                    offset: 0.05
                }

            }


        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
