@extends('template.master')

@section('title', 'Pengembalian')

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pengembalian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/pengembalian/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pengembalian</label>
                    <input type="text" class="form-control" name="tanggal_pengembalian" placeholder="Input Pengembalian">
                    <label for="exampleInputEmail1">Denda</label>
                    <input type="text" class="form-control" name="denda" placeholder="Input Denda">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
                </div>
              </form>
            </div>
@endsection
