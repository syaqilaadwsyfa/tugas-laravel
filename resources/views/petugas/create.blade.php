@extends('template.master')

@section('title', 'Petugas')

@section('content')

<div class="content-wrapper">
    <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Form Input Data Petugas</h3>
          </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('petugas.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Petugas</label>
                    <input type="text" class="form-control" name="nama_petugas" placeholder="Input Nama Petugas">
                    <label>Jabatan Petugas</label>
                        <select type="text" name="jabatan_petugas" class="form-control">
                          <option disabled selected>Pilih Jabatan Petugas</option>
                          <option value="Kepala Perpustakaan">Kepala Perpustakaan</option>
                          <option value="Asisten Kepala Perpustakaan">Asisten Kepala Perpustakaan</option>
                          <option value="Administrasi">Administrasi</option>
                        </select>

                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" name="no_telp_petugas" placeholder="Input No Telepon Petugas">
                    <label for="exampleInputEmail1">Alamat Petugas</label>
                    <input type="text" class="form-control" name="alamat_petugas" placeholder="Input Alamat Petugas">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: #ffffff">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
@endsection
