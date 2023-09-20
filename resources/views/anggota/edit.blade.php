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
            <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" value="{{$anggotas[0]->kode_anggota}}">
                </div>
                @error('kode_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="nama">Nama Anggota</label>
                  <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{$anggotas[0]->nama_anggota}}">
                </div>
                @error('nama_anggota')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="jk_anggota">Jenis Kelamin</label>
                      <select name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jk_anggota }}">
                      <option value="Laki-laki" @if($anggotas[0]->jk_anggota == 'Laki-laki') selected @endif>Laki-laki</option>
                      <option value="Perempuan" @if($anggotas[0]->jk_anggota == 'Perempuan') selected @endif>Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan_anggota">Jurusan</label>
                          <select name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jurusan_anggota }}">
                          <option value="RPL" @if($anggotas[0]->jurusan_anggota == 'RPL') selected @endif>RPL</option>
                          <option value="TKJ" @if($anggotas[0]->jurusan_anggota == 'TKJ') selected @endif>TKJ</option>
                          <option value="TL" @if($anggotas[0]->jurusan_anggota == 'TL') selected @endif>TL</option>
                          <option value="TKR" @if($anggotas[0]->jurusan_anggota == 'TKR') selected @endif>TKR</option>
                          <option value="DPIB" @if($anggotas[0]->jurusan_anggota == 'DPIB') selected @endif>DPIB</option>
                          <option value="TEI" @if($anggotas[0]->jurusan_anggota == 'TEI') selected @endif>TEI</option>
                          </select>
                        </div>

                  @error('jurusan_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                  <label for="no_telp_anggota">No Telepon</label>
                  <input type="number" name="no_telp_anggota" id="no_telp_anggota" class="form-control" @error('no_telp_anggota') is-invalid @enderror value="{{$anggotas[0]->no_telp_anggota}}">
                  </div>
                  @error('no_telp_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <input type="text" name="alamat_anggota" id="alamat_anggota" class="form-control" @error('alamat_anggota') is-invalid @enderror value="{{$anggotas[0]->alamat_anggota}}">
                  </div>
                  @error('alamat_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-warning" style="margin-left: 20px">Update</button>
                <a href="" class="btn btn-secondary" style="margin-left: 8px;" data-toggle="modal" data-target="#exampleModal">Back</a>
              <!-- /.card-body -->

              <div class="card-footer" style="background-color: #ffffff;">
                {{-- <button type="submit" class="btn btn-warning">Update</button>
                <a href="{{ route('anggota.index') }}" class="btn btn-secondary" style="margin-left: 8px;">Back</a> --}}

              </div>
            </form>
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
