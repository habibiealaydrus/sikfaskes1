@extends('mainlayout/header')

@section('judul', 'Tindakan Perawat')

@section('content')
    <div class="content-wrapper">
        <section class="content" style="padding: 2%">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Laporan Berdasarkan Gender</h3>
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

                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
