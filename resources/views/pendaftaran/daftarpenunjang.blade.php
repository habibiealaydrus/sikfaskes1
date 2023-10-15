@extends('mainlayout/header')

@section('judul', 'Pendaftaran Penunjang')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="col-md-6" style="padding-top:1%">
                <div class="card" style="padding:1%;">
                    <div class="container ">
                        <h5>Konfirmasi Pendaftaran Poli/Unit</h5>
                        <form action="/cetakantrianpenunjang" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Nomor Medical Record </label>
                                <input type="text" name="nomor_rekam_medik" class="form-control hide"
                                    id="nomor_rekam_medik" value="{{ $idpatient->nomor_rekam_medis }}">
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" class="form-control hide" id="nik"
                                    value="{{ $idpatient->nik }}">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control hide" id="nik"
                                    value="{{ $idpatient->nama }}">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="text" name="tanggal" class="form-control hide" id="nik"
                                    value="{{ date('d-m-Y', strtotime($idpatient->tanggal)) }}">
                            </div>
                            <div class="form-group">
                                <label>Poli/Unit</label>
                                <select name="poli_kunjungan" id="poli_kunjungan" class="form-control hide">
                                    @foreach ($unit as $unit)
                                        <option value="{{ $unit->nama_unit }}">{{ $unit->nama_unit }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <p>Apakah pasien tersebut ingin didaftarkan?</p>
                            <button type="submit" class="btn btn-primary">Cetak & Daftarkan
                            </button>
                            <a href="/pendaftaranpenunjang" type="button" class="btn btn-warning ">
                                BATAL
                            </a>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
