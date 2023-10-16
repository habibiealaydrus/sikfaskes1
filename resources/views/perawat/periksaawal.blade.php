@extends('mainlayout/header')

@section('judul', 'Antrian Pasien')

@section('content')
    <div class="content-wrapper">
        <section class="content" style="padding: 2%">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pemeriksaan Fisik Pasien</h3>
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
                            <div class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                @foreach ($datadasarpasien as $itemdata)
                                    <div class="info-box-content">
                                        <span class="info-box-text">Nama : {{ $itemdata->nama }}</span>
                                        <span class="info-box-text">No.Rekam Medis
                                            : {{ $itemdata->nomor_rekam_medis }}</span>
                                        <span class="info-box-text">Tanggal Lahir
                                            : {{ $itemdata->tanggal }}</span>
                                        <span class="info-box-text">Jenis Kelamin
                                            : {{ $itemdata->gender }}</span>
                                    </div>
                                @endforeach
                            </div>
                            <form action="/simpanpemeriksaanperawat" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Anamanase</label>
                                    <textarea name="anamnase"class="form-control" rows="3" placeholder="Anamnase"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Pemeriksaan Fisik</label>
                                    <textarea name="pemeriksaan_fisik"class="form-control" rows="3" placeholder="tekanan darah dan lainya"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
@endsection
