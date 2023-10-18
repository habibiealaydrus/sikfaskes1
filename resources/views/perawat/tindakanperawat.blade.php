@extends('mainlayout/header')

@section('judul', 'Tindakan Perawat')

@section('content')
    <div class="content-wrapper">
        <section class="content" style="padding: 2%">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tindakan Perawat</h3>
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
                            <form action="/simpantindakan/{{ $id }}" method="post">
                                @method ('PUT')
                                @csrf
                                <div class="form-group">
                                    <label>Tindakan</label>
                                    <textarea type='text' id='seluruhtindakan' name="tindakan" class="form-control" rows="3">
                                    </textarea>

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="form-check" class="listtindakan">
                            <input type="checkbox" name="tindakan" class="tindakan" value="Jahit 5 jakitan"
                                onclick="cektindakan()">
                            <label for="vehicle1">Jahit 5 jakitan</label><br>
                            <input type="checkbox" name="tindakan" class="tindakan" value="insisi" onclick="cektindakan()">
                            <label for="vehicle1">Insisi</label><br>
                            <input type="checkbox" name="tindakan" class="tindakan" value="bedah muka"
                                onclick="cektindakan()">
                            <label for="vehicle1">bedah muka</label><br>
                            <input type="checkbox" name="tindakan" class="tindakan" value="bedah celana"
                                onclick="cektindakan()">
                            <label for="vehicle1">bedah celana</label><br>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
    </div>
    <script>
        function cektindakan() {
            let pilihan = document.querySelectorAll('input[name="tindakan"]:checked');
            let tindakanseluruh = document.getElementById('seluruhtindakan');
            values = [];
            pilihan.forEach((checkbox) => {
                values.push(checkbox.value);
            });
            tindakanseluruh.innerHTML = values;
        }
    </script>
@endsection
