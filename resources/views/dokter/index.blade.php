@extends('mainlayout/header')

@section('judul', 'Antrian Pasien')

@section('content')
    <div class="content-wrapper">
        <section class="content" style="padding: 2%">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Antrian Poli Dokter Umum</h3>

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
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama Pasien</th>
                                        <th>Poli</th>
                                        <th style="width: 40px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($antrianpolidokter as $antriandokter)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $antriandokter->patient_name->nama }}</td>
                                            <td>
                                                {{ $antriandokter->poli_kunjungan }}
                                            </td>
                                            <td>
                                                <div class="flex-container">

                                                    @if ($antriandokter->pemeriksaan_fisik)
                                                        <span class="badge bg-success">Telah Diperiksa</span>
                                                    @else
                                                        <a href="/pemeriksaandokter/{{ $antriandokter->id }}"
                                                            class="badge bg-danger" style="margin-right: 5%;">Periksa</a>
                                                        <span class="badge bg-warning">Belum Periksa</span>
                                                    @endif

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $antrianpolidokter->links() }}
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Antrian Poli Tindakan</h3>

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
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama Pasien</th>
                                        <th>Poli</th>
                                        <th style="width: 40px">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($antriantindakan as $antripoliantindakan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $antripoliantindakan->patient_name->nama }}</td>
                                            <td>
                                                {{ $antripoliantindakan->poli_kunjungan }}
                                            </td>
                                            <td>
                                                <div class="flex-container">
                                                    @if ($antripoliantindakan->tindakan)
                                                        <span class="badge bg-success">Telah Diperiksa</span>
                                                    @else
                                                        <a href="/pemeriksaandokter/{{ $antriandokter->id }}"
                                                            class="badge bg-danger" style="margin-right:2%;">Periksa</a>
                                                        <span class="badge bg-warning">Belum Periksa</span>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $antriantindakan->links() }}
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
