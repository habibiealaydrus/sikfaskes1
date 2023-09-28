  <!-- TABLE: Users -->
  <div class="card">
      <div class="card-header border-transparent">
          <a type="button" class="btn btn-primary btn-lg" href="/daftarpasienbaru">
              Daftar Pasien Baru
          </a>
          <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
              </button>
          </div>
      </div>
      @if (Session::has('status'))
          <div class="alert alert-{{ Session::get('button') }} alert-dismissible fade show" role="alert">
              <strong>{{ Session::get('massage') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
          </div>
      @endif
      <!-- /.card-header -->
      <div class="card-body p-0">
          <div class="table-responsive">
              <table class="table m-0">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Nama pasien</th>
                          <th>Alamat</th>
                          <th>Gender</th>
                          <th>Tanggal Lahir</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($dataPasien as $dataPasienItem)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $dataPasienItem->nama }}</td>
                              <td>{{ $dataPasienItem->alamat }}</td>
                              <td>{{ $dataPasienItem->gender }}</td>
                              <td>{{ $dataPasienItem->tanggal }}</td>
                              <td>
                                  <div class="sparkbar" data-color="#00a65a" data-height="20">
                                      <a href="#" class="badge badge-success">Edit</a>
                                      <a href="#" class="badge badge-danger">Hapus</a>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
          <!-- /.table-responsive -->
      </div>
      <!-- /.card-body -->
      <div class="paginateuser">
          <span>
          </span>
      </div>
      <!-- /.card-footer -->
  </div>
  <!-- /.card -->
