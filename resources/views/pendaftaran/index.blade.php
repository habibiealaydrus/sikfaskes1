@extends('mainlayout/header')

@section('judul', 'List Medical Record')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="col-md-12">
                <div class="card">
                    @include('pendaftaran/listmedicalrecord')
                </div>
            </div>
        </section>
    </div>
@endsection
