@extends('template.master')

@section('title', 'Rak')

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/rak/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Rak</label>
                    <input type="text" class="form-control" name="nama_rak" placeholder="Input Nama Rak">
                    <label for="exampleInputEmail1">Lokasi Rak</label>
                    <input type="text" class="form-control" name="lokasi_rak" placeholder="Input Lokasi Rak">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
@endsection
