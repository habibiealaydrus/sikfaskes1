@extends('mainlayout/header')

@section('judul', 'User Admin')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @include('user/userlist')
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
