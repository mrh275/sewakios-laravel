@extends('layouts.template-admin')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Ruko</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/ruko') }}">Ruko</a></li>
                            <li class="breadcrumb-item active">Tambah Data Ruko</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ url('admin/ruko/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="no-unit">No Unit</label>
                                <input type="text" class="form-control" name="no_unit" id="no-unit">
                            </div>
                            <div class="form-group">
                                <label for="gedung">Gedung</label>
                                <input type="text" class="form-control" name="gedung" id="gedung">
                            </div>
                            <div class="form-group">
                                <label for="tipe_unit">Tipe Unit</label>
                                <input type="text" class="form-control" name="tipe_unit" id="tipe_unit">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_lantai">Jumlah Lantai</label>
                                <input type="number" class="form-control" name="jumlah_lantai" id="jumlah_lantai">
                            </div>
                            <div class="form-group">
                                <label for="harga_sewa">Harga Sewa</label>
                                <input type="number" class="form-control" name="harga_sewa" id="harga_sewa">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
