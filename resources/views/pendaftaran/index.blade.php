@extends('mainlayout/header')

@section('judul', 'Pendafataran')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @include('pendaftaran/listmedicalrecord')
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
