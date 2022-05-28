@extends('admin.template.main')

@section('container')
  <!-- Content Row -->
  <div class="row">

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Pengguna</h1>

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">

          <div class="mb-3">
            <a href="/tambah_pengguna" class="btn btn-primary">Tambah</a>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Jabatan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($user as $row)
                <tr>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->email }}</td>
                  <td>
                    @if($row->role == 1)
                      Operator
                    @elseif($row->role == 2)
                      Staff
                    @elseif($row->role == 3)
                      Kasubag Tata Usaha
                    @else
                      Kepala Unit
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <a href="/hapus_pengguna/{{ $row->id }}" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>


  </div>
@endsection