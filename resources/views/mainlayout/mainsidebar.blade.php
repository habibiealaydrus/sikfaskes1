 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="/" class="brand-link">
         <img src="dist/img/logosimklinik.png" alt="Logo" class="brand-image img-circle elevation-3"
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
