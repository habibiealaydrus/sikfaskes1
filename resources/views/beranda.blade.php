@extends('mainlayout/header')

@section('judul', 'Beranda')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        {{-- @include('mainlayout/contentheader') --}}
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('mainlayout/infoboxes')
                @include('mainlayout/row2')
                @include('mainlayout/row1')
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
