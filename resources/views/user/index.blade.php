@extends('mainlayout/header')

@section('judul', 'User Admin')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- TABLE: Users -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <button type="button" class="btn btn-primary">
                                    Tambah User
                                </button>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Nama User</th>
                                                <th>Role</th>
                                                <th>Nama email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($pengguna as $item)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td><span
                                                            class="badge badge-success">{{ $item->user_relation['name_role'] }}</span>
                                                    </td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            <span class="badge badge-success">Edit</span>
                                                            <span class="badge badge-danger">Hapus</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- TABLE: Users -->
                        <div class="card">
                            <div class="card-header border-transparent">
                                <button type="button" class="btn btn-primary">
                                    Tambah Role
                                </button>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table m-0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama Role</th>
                                                <th>aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($Nama_role as $role_Nama)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $role_Nama->id }}</td>
                                                    <td><span class="badge badge-success">{{ $role_Nama->name_role }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                                                            <span class="badge badge-success">Edit</span>
                                                            <span class="badge badge-danger">Hapus</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.card-body -->

                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
