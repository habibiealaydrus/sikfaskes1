<!-- TABLE: LATEST ORDERS -->
<div class="card">
    <div class="card-header border-transparent">
        <h3 class="card-title">Pendaftaran</h3>
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
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table m-0">
                <thead>
                    <tr>
                        <th>Rekam Medis</th>
                        <th>Poli Kunjungan </th>
                        <th>Waktu daftar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataHariIni as $item)
                        <tr>
                            <td>{{ $item->nomor_rekam_medik }}</td>
                            <td>{{ $item->poli_kunjungan }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $dataHariIni->links() }}
    </div>
    <!-- /.card-footer -->
</div>
<!-- /.card -->
