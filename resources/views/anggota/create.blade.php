@extends('template.master')

@section('title', 'Anggota')

@section('content')
    <div class="content-wrapper">
        <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Input Data Anggota</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('anggota.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Anggota</label>
                    <input type="text" id="kode_anggota" class="form-control" name="kode_anggota" placeholder="Input Kode Anggota">
                    <label for="exampleInputEmail1">Nama Anggota</label>
                    <input type="text" class="form-control" name="nama_anggota" placeholder="Input Nama Anggota">
                        <label>Jenis Kelamin</label>
                        <select type="text" name="jk_anggota" class="form-control">
                          <option disabled selected>Pilih Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>

                    <label>Jurusan</label>
                        <select type="text" name="jurusan_anggota" class="form-control">
                          <option disabled selected>Pilih Jurusan</option>
                          <option value="RPL">RPL</option>
                          <option value="TKJ">TKJ</option>
                          <option value="TL">TL</option>
                          <option value="TKR">TKR</option>
                          <option value="DPIB">DPIB</option>
                          <option value="TEI">TEI</option>
                        </select>

                    <label for="exampleInputEmail1">No Telepon</label>
                    <input type="number" class="form-control" name="no_telp_anggota" placeholder="Input No Telp Anggota">
                    <label for="exampleInputEmail1">Alamat Anggota</label>
                    <input type="text" class="form-control" name="alamat_anggota" placeholder="Input Alamat Anggota">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer" style="background-color: #ffffff">
                  {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary" onclick="reset()" style="margin-left: 8px;">Reset</button>
                </div>
              </form>
            </div>
        </div>
    </div>


            <script>
              let kodeAnggota = document.getElementById('kode_anggota')

              function reset() {
                kodeAnggota.clear()
              }
            </script>
@endsection
