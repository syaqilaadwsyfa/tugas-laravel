@extends('template.master')

@push('css')
<link rel="stylesheet" href="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endpush

@section('title', 'Anggota')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Anggota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Anggota</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <div class="col text-right">
                <a href="{{ route('anggota.create') }}" class="btn btn-sm btn-primary">
                  <i class="fas fa-plus"></i> Create Anggota
                </a>
              </div>
  </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTables" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                      <th>Jenis Kelamin</th>
                      <th>Jurusan Anggota</th>
                      <th>No Telp</th>
                      <th>Alamat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($anggotas as $key => $value)
                    <tr>
                      <td>{{ $key + 1 }}</td>
                      <td>{{ $value->nama_anggota }} </td>
                      <td>@if ($value->jk_anggota == 'L')
                        Laki-laki
                    @else
                        Perempuan
                      @endif</td>
                      <td>{{ $value->jurusan_anggota}} </td>
                      <td>{{ $value->no_telp_anggota}} </td>
                      <td>{{ $value->alamat_anggota}} </td>
                    <td>
                    <div class="btn-group">
                        <a href="{{ route('anggota.show', $value->id) }}" class="btn btn-sm btn-info" style="margin-left: 8px;">
                          Detail
                        </a>
                        <a href="{{ route('anggota.edit', $value->id) }}" class="btn btn-sm btn-warning" style="margin-left: 8px;">
                          Edit
                        </a>
                        <a href="" type="sumbit" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal" style="margin-left: 8px;">Hapus</a>

                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a href="{{ route('petugas.index') }}" type="button" class="btn btn-primary">Save changes</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
        </div>
        <div class="modal-body">
          <p>Anda yakin akan menghapus Data Anggota?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <form action="{{ route('anggota.destroy', $value->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger" style="margin-left: 8px;">Hapus</button>
                        </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
  <!-- DataTables  & Plugins -->
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/adminlte/AdminLTE.3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $('#dataTables').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
