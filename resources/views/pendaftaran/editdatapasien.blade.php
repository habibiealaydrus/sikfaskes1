<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIK Faskes I-@yield('judul') </title>
    <link rel="icon" type="image/x-icon" href="dist/img/favicon/favicon.ico">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- costume css -->
    <link rel="stylesheet" href="../dist/css/costum.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        @include('../mainlayout/navbar')
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="../dist/img/logosimklinik.png" alt="Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">SIK FASKES I</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <strong>Selamat Datang,</strong>
                        <p>{{ $user }}</p>
                    </div>
                    {{-- <div class="info">
                <a href="#" class="d-block"></a>
            </div> --}}
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if ($role == '1')
                                    <li class="nav-item">
                                        <a href="/user" class="nav-link">
                                            <i class="fas fa-id-card-alt"></i>
                                            <p>User</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/rolelist" class="nav-link">
                                            <i class="fas fa-id-card-alt"></i>
                                            <p>Role</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/laporan" class="nav-link">
                                            <i class="	fas fa-chart-line"></i>
                                            <p>Laporan dashboard</p>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        @if ($role == 2 || $role == 1)
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-paste"></i>
                                    <p>
                                        Pendaftaran & Kasir
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pendaftaran Berobat</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pendaftaran Penunjang</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/boxed.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Kasir</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endif
                        @if ($role == 3 || $role == 1)
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-medkit"></i>
                                    <p>
                                        Perawat
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pemeriksaan Pasien</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Laporan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if ($role == 4 || $role == 1)
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-user-md"></i>
                                    <p>
                                        Dokter
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pemeriksaan Pasien</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Laporan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if ($role == 5 || $role == 1)
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-pills"></i>
                                    <p>
                                        Apoteker
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Resep Obat</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Gudang Obat</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Laporan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if ($role == 6 or $role == 1)
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-microscope"></i>
                                    <p>
                                        Laboratorium
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Pemeriksaan Pasien</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Gudang</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Laporan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Log Out</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12" style="padding:1%;">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Data Dasar Pasien</h3>
                                </div>
                                <form method="post" action="/simpandatapasienbaru">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input type="hidden" name="nomor_rekam_medis" class="form-control hide"
                                                id="medicalrecordnumber"
                                                value="{{ $datapatientedit->nomor_rekam_medis }}">
                                        </div>
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" name="nik" class="form-control" id="nik"
                                                placeholder="Nomor Induk Penduduk"
                                                value="{{ $datapatientedit->nik }}">
                                            @error('nik')
                                                <small class="badge badge-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" name="nama" class="form-control"
                                                id="exampleInputEmail1" placeholder="Nama Lengkap"
                                                value="{{ $datapatientedit->nama }}">
                                            @error('nama')
                                                <small class="badge badge-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control"
                                                id="Tempat Lahir" placeholder="Tempat Lahir"
                                                value="{{ $datapatientedit->tempat_lahir }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="tanggal" class="form-control"
                                                id="Tempat Lahir" placeholder="Tanggal Lahir"
                                                value="{{ $datapatientedit->tanggal }}">
                                            @error('tanggal')
                                                <small class="badge badge-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select name="gender" class="form-control" id="gender">
                                                <option value="{{ $datapatientedit->gender }}">
                                                    @if ($datapatientedit->gender = 'L')
                                                        Lelaki
                                                    @else
                                                        Perempuan
                                                    @endif
                                                </option>
                                                @if ($datapatientedit->gender = 'L')
                                                    <option value="P">Perempuan</option>
                                                @else
                                                    <option value="L">Lelaki</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control"
                                                id="Tempat Lahir" placeholder="Alamat sesuai identitas"
                                                value="{{ $datapatientedit->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <select name="agama" class="form-control" id="agama">
                                                <option value="1">Islam</option>
                                                <option value="2">Kristen</option>
                                                <option value="3">Budha</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Status Pernikahan</label>
                                            <select name="status_pernikahan" class="form-control" id="status">
                                                <option value="1">Belum Menikah</option>
                                                <option value="2">Menikah</option>
                                                <option value="3">Janda/Duda</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <select name="pekerjaan" class="form-control" id="status">
                                                <option value="1">Belum Bekerja</option>
                                                <option value="2">Pegawai</option>
                                                <option value="3">Wiraswasta</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- footer start --}}
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">Habibi Alaydrus</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="dist/js/pages/dashboard2.js"></script>
</body>

</html>

{{-- footer end --}}
