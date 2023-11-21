@extends('layouts.template-admin')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Daftar Ruko</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Ruko</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ url('/admin/ruko/tambah') }}" class="btn btn-primary">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Gedung</th>
                                            <th>No Unit</th>
                                            <th>Tipe</th>
                                            <th>Lantai</th>
                                            <th>Harga Sewa</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataRuko as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->gedung }}</td>
                                                <td>{{ $data->no_unit }}</td>
                                                <td>{{ $data->tipe_unit }}</td>
                                                <td>{{ $data->jumlah_lantai }}</td>
                                                <td>{{ $data->harga_sewa }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <a href="{{ url('admin/ruko/edit') . '/' . $data->no_unit }}" class="btn btn-warning">Edit</a>
                                                    <a href="{{ url('admin/ruko/hapus') . '/' . $data->no_unit }}" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });
        });
    </script>
@endpush
