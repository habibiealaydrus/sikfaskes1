@extends('mainlayout/header')

@section('judul', 'Pendaftaran Poli/Unit')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="col-md-6" style="padding-top:1%">
                <div class="card" style="padding:1%;">
                    @include('pendaftaran/daftarpoli')
                </div>
            </div>
        </section>
    </div>
@endsection
