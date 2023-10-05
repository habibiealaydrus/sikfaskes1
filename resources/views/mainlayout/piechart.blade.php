<div class="card">
    <div class="card-header">
        <h3 class="card-title">Peringkat kunjungan</h3>

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
        <div class="row">
            <div id="piechart" style="width: 100%;"></div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.card-body -->

    <!-- /.footer -->
</div>
<!-- /.card -->
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
            title: 'Jumlah Kunjungan Unit'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
