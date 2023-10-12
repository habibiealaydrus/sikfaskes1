@extends('mainlayout/header')

@section('judul', 'Pendafataran')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="padding:1%;">
                        <div class="card card-primary">
                            @if (Session::has('status'))
                                <div class="alert alert-{{ Session::get('button') }} alert-dismissible fade show"
                                    role="alert">
                                    <strong>{{ Session::get('massage') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </strong>
                                </div>
                            @endif
                            <div class="card-header">
                                <h3 class="card-title">Form Data Dasar Pasien Baru</h3>
                            </div>
                            <form method="post" action="/simpandatapasienbaru">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="hidden" name="nomor_rekam_medis" class="form-control hide"
                                            id="medicalrecordnumber" value="{{ $medrec }}">
                                    </div>
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input type="number" name="nik" class="form-control" id="nik"
                                            placeholder="Nomor Induk Penduduk" value="{{ old('nik') }}">
                                        @error('nik')
                                            <small class="badge badge-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1"
                                            placeholder="Nama Lengkap" value="{{ old('nama') }}">
                                        @error('nama')
                                            <small class="badge badge-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" class="form-control" id="Tempat Lahir"
                                            placeholder="Tempat Lahir" value="{{ old('tempat_lahir') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tanggal" class="form-control" id="Tempat Lahir"
                                            placeholder="Tanggal Lahir" value="{{ old('tanggal') }}">
                                        @error('tanggal')
                                            <small class="badge badge-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select name="gender" class="form-control" id="gender">
                                            <option value="L">Lelaki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" name="alamat" class="form-control" id="Tempat Lahir"
                                            placeholder="Alamat sesuai identitas" value="{{ old('alamat') }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <select name="agama" class="form-control" id="agama">
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen</option>
                                            <option value="3">Budha</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Status Pernikahan</label>
                                        <select name="status_pernikahan" class="form-control" id="status">
                                            <option value="1">Belum Menikah</option>
                                            <option value="2">Menikah</option>
                                            <option value="3">Janda/Duda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select name="pekerjaan" class="form-control" id="status">
                                            <option value="1">Belum Bekerja</option>
                                            <option value="2">Pegawai</option>
                                            <option value="3">Wiraswasta</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
