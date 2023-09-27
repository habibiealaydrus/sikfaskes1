@extends('mainlayout/header')

@section('judul', 'Add User')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="padding: 1%;">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Add User Baru</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/adduserbaru" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nama User</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                            placeholder="Masukan Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Masukan Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="level">Level</label>
                                        <select name="level" class="custom-select rounded-0" id="level">
                                            @foreach ($leveList as $levelItem)
                                                <option value={{ $levelItem->id }}>{{ $levelItem->name_level }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="role">Role</label>
                                        <select name="role_id" id="role" class="custom-select rounded-0">
                                            @foreach ($roleUser as $roleUserList)
                                                <option value="{{ $roleUserList->id }}">{{ $roleUserList->name_role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a class="btn btn-warning" href="/user">Batal</a>
                                </div>

                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
