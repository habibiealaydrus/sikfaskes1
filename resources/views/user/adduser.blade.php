@extends('mainlayout/header')

@section('judul', 'Add User')

@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row mt-2 mb-2">
                <section class="col-md-6">
                    <div class="card mx-3 my-3 px-3 py-3">
                        <div class="container ">
                            <h5>Konfirmasi Penghapusan Data</h5>
                            <form action="/destroy/{{ $data->id }}" method="POST" class="mt-3 mb-3">
                                @method('DELETE')
                                @csrf
                                <p>Anda ingin yakin menghapus data {{ $data->email }} ?</p>
                                <button type="submit" class="btn btn-danger ">YA</button>
                                <a href="/user" type="button" class="btn btn-primary ">CANCEL</a>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
