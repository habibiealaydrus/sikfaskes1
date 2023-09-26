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
                         <th>No.</th>
                         <th>Nama Role</th>
                         <th>aksi</th>
                     </tr>
                 </thead>
                 @foreach ($Nama_role as $role_Nama)
                     <tbody>
                         <tr>
                             <td>{{ $Nama_role->firstItem() + $loop->index }}</td>
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
         <div class="paginaterole">
             {{ $Nama_role->links() }}
         </div>
     </div>
     <!-- /.card-body -->

     <!-- /.card-footer -->
 </div>
 <!-- /.card -->
