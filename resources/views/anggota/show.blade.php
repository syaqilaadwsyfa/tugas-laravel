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
              <h3 class="card-title">Form Anggota</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('anggota.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="text" name="kode_anggota" class="form-control" value="{{ $anggotas[0]->kode_anggota }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="nama_anggota">Nama Anggota</label>
                    <input type="text" name="nama_anggota" class="form-control" value="{{ $anggotas[0]->nama_anggota }}" disabled>
                  </div>
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                  <input type="text" name="jk_anggota" class="form-control" id="jk_anggota" value="@if ($anggotas[0]->jk_anggota == "L")Laki-laki
                      @else Perempuan
                  @endif" disabled>
                </div>
                <div class="form-group">
                    <label for="jurusan_anggota">Jurusan</label>
                    <input type="text" name="jurusan_anggota" class="form-control" value="{{ $anggotas[0]->jurusan_anggota }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="no_telp_anggota">No Telepon</label>
                    <input type="text" name="no_telp_anggota" class="form-control" value="{{ $anggotas[0]->no_telp_anggota }}" disabled>
                  </div>
                <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="10" class="form-control" disabled>{{ $anggotas[0]->alamat_anggota }}</textarea>
                </div>
                <a href="" class="btn btn-secondary" style="margin-left: 8px;" data-toggle="modal" data-target="#exampleModal">Back</a>

                    </div>
                  </div>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                {{-- <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Back</a> --}}

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
          <p>Anda yakin akan kembali ke halaman Data Anggota?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <a href="{{ route('anggota.index') }}" type="button" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>
  </div>
@endsection
