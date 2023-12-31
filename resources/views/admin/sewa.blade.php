@extends('layouts.template-admin')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Penyewaan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Penyewaan</li>
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
                                <a href="{{ url('/admin/sewa/tambah') }}" class="btn btn-primary">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Kontrak</th>
                                            <th>Nama Penyewa</th>
                                            <th>No Unit Ruko</th>
                                            <th>Jumlah Bayar</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Tanggal Tenor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataSewa as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->nomor_kontrak }}</td>
                                                <td>{{ $data->nama_penyewa }}</td>
                                                <td>{{ $data->no_unit }}</td>
                                                <td>{{ $data->jumlah_bayar }}</td>
                                                <td>{{ $data->tanggal_bayar }}</td>
                                                <td>{{ $data->tanggal_tempo }}</td>
                                                <td>
                                                    <a href="{{ url('admin/sewa/edit') . '/' . $data->nomor_kontrak }}" class="btn btn-warning">Edit</a>
                                                    <a href="{{ url('admin/sewa/hapus') . '/' . $data->nomor_kontrak }}" class="btn btn-danger">Hapus</a>
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
