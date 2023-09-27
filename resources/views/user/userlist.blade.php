  <!-- TABLE: Users -->
  <div class="card">
      <div class="card-header border-transparent">
          <a type="button" class="btn btn-primary btn-lg" href="/adduser">
              Tambah data
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
      <!-- /.card-header -->
      <div class="card-body p-0">
          <div class="table-responsive">
              <table class="table m-0">
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Nama User</th>
                          <th>Role</th>
                          <th>Nama email</th>
                          <th>Aksi</th>
                      </tr>
                  </thead>
                  @foreach ($pengguna as $item)
                      <tbody>
                          <tr>
                              <td> {{ $pengguna->firstItem() + $loop->index }}</td>
                              <td>{{ $item->name }}</td>
                              <td><span class="badge badge-success">{{ $item->user_relation['name_role'] }}</span>
                              </td>
                              <td>{{ $item->email }}</td>
                              <td>
                                  <div class="sparkbar" data-color="#00a65a" data-height="20">
                                      <a href="/edituser/{{ $item->id }}" class="badge badge-success">Edit</a>
                                      <a href="/confirmdelete/{{ $item->id }}" class="badge badge-danger">Hapus</a>
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
      <div class="paginateuser">
          <span>
              {{ $pengguna->links() }}
          </span>
      </div>
      <!-- /.card-footer -->
  </div>
  <!-- /.card -->
