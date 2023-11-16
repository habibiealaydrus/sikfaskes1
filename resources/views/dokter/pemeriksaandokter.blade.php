@extends('mainlayout/header')

@section('judul', 'Pemeriksaan Dokter')

@section('content')
    <div class="content-wrapper">
        <section class="content" style="padding: 2%">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Pemeriksaan Dokter</h3>
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
                                <div class="info-box-content">
                                    <span class="info-box-text">Nama : {{ $datadasarpasien->nama }}</span>
                                    <span class="info-box-text">No.Rekam Medis
                                        : {{ $datadasarpasien->nomor_rekam_medis }}</span>
                                    <span class="info-box-text">Tanggal Lahir
                                        : {{ $datadasarpasien->tanggal }}</span>
                                    <span class="info-box-text">Jenis Kelamin
                                        : {{ $datadasarpasien->gender }}</span>
                                </div>
                            </div>
                            <form action="/simpanpemeriksaanperawat/{{ $id }}" method="post">
                                @method ('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Anamanase</label>
                                    <textarea type='text' name="anamnase"class="form-control" rows="3" placeholder="Anamnase"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Pemeriksaan Fisik</label>
                                    <textarea type="text" name="pemeriksaan_fisik"class="form-control" rows="3"
                                        placeholder="tekanan darah dan lainya"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Diagnosa</label>
                                    <link rel="stylesheet"
                                        href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css">
                                    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                                        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

                                    <select name="diagnosa" id="diagnosa" class="form-control">
                                        @foreach ($icdx as $diagnosa)
                                            <option value="{{ $diagnosa->code_icd_x }}">{{ $diagnosa->diagnosa }} -
                                                {{ $diagnosa->code_icd_x }} </option>
                                        @endforeach
                                    </select>
                                    <div id="search_list"></div>
                                </div>
                                <div class="form-group">
                                    <label>Tindakan</label>
                                    <input type="text" name="tindakan" class="form-control" rows="3"
                                        placeholder="Apabila ada tindakan">
                                </div>
                                <div class="form-group">
                                    <label>Resep</label>
                                    <textarea type="text" name="resep"class="form-control" rows="3" placeholder="resep obat"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Riwayat Pasien</h3>
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
                                <div class="info-box-content">
                                    <div class="flex-container-diagnosagit">
                                        @foreach ($medrec as $riwayat)
                                            <div class="col-sm-3">
                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Tanggal berobat :
                                                            {{ $riwayat->created_at->format('d/m/Y') }}</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <ul>
                                                            <li>Poli : {{ $riwayat->poli_kunjungan }}</li>
                                                            <li>Diagnosa : {{ $riwayat->diagnosa }}</li>
                                                            <li>Resep : {{ $riwayat->resep }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
    <script>
        jQuery('#diagnosa').chosen();
    </script>
@endsection
