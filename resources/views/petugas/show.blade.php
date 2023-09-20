@extends('template.master')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Petugas</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('petugas.index') }}" method="POST">
              @csrf
              <div class="card-body">
                {{-- <div class="form-group">
                    <label for="kode_petugas">Kode petugas</label>
                    <input type="text" name="kode_petugas" class="form-control" value="{{ $petugass[0]->kode_petugas }}" disabled>
                  </div> --}}
                  <div class="form-group">
                    <label for="nama_petugas">Nama Petugas</label>
                    <input type="text" name="nama_petugas" class="form-control" value="{{ $petugas[0]->nama_petugas }}" disabled>
                  </div>
                <div class="form-group">
                  <label for="jk_petugas">Jabatan Petugas</label>
                  <input type="text" name="jk_petugas" class="form-control" id="jk_petugas" value="{{ $petugas[0]->jabatan_petugas }}" disabled>
                </div>
                  <div class="form-group">
                    <label for="no_telp_petugas">No Telepon</label>
                    <input type="number" name="no_telp_petugas" class="form-control" value="{{ $petugas[0]->no_telp_petugas }}" disabled>
                  </div>
                <div class="form-group">
                  <label for="alamat_petugas">Alamat</label>
                  <textarea name="alamat_petugas" id="alamat_petugas" cols="30" rows="10" class="form-control" disabled>{{ $petugas[0]->alamat_petugas }}</textarea>
                </div>
                <a href="" class="btn btn-secondary" style="margin-left: 8px;" data-toggle="modal" data-target="#exampleModal">Back</a>

                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                {{-- <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Back</a> --}}

              </div>

          </div>
          <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>

  <!-- /.content -->
</div>
<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
        </div>
        <div class="modal-body">
          <p>Anda yakin akan kembali ke halaman Data Petugas?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <a href="{{ route('petugas.index') }}" type="button" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
@endsection
