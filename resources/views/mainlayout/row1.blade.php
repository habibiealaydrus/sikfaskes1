<!-- monthly recap report -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Statistik Jumlah Pasien</h5>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <p class="text-center">
                    <strong>{{ $startMonth }} - {{ date('l, d-m-Y') }}</strong>
                </p>
            </div>
            <div style="padding: 2%">
                <div id="top_x_div" style="height: 200px;"></div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
            ['Jam ', 'Jumlah Pasien', {
                role: 'style'
            }],
            <?php
            foreach ($totalkunjunganharian as $key => $value) {
                echo '[' . "'" . date('d-m-Y', strtotime($value->created_at)) . "'" . ',' . $value->count . ',' . " 'color:gray'" . '],';
            }
            ?>
        ]);

        var options = {
            'backgroundColor': 'transparent',
            legend: {
                position: 'none'
            },
            chartArea: {
                backgroundColor: 'transparent',
            },

            bar: {
                groupWidth: "90%"
            }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
    };
</script>
