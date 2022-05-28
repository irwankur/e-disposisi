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

          <form method="post" action="/tambah_pengguna">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukan email">
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>

              <select name="jabatan" class="form-control">
                <option value="1">Operator</option>
                <option value="2">Staff</option>
                <option value="3">Kasubag Tata Usaha</option>
                <option value="4">Kepala Unit</option>
              </select>

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>

        </div>
      </div>

    </div>


  </div>
@endsection