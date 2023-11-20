@extends('layouts.template-admin')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tambah Data Sewa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/sewa') }}">Penyewaan</a></li>
                            <li class="breadcrumb-item active">Tambah Data Sewa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ url('admin/sewa/store') }}" method="post">
                            <div class="form-group">
                                <label for="nama-penyewa">Nama Penyewa</label>
                                <input type="text" class="form-control" name="nama_penyewa" id="nama-penyewa">
                            </div>
                            <div class="form-group">
                                <label for="no-unit">Unit Ruko</label>
                                <select name="no_unit" id="no-unit" class="form-control">
                                    <option value="">Pilih :</option>
                                    <option value="1">Unit 1</option>
                                    <option value="2">Unit 2</option>
                                    <option value="3">Unit 3</option>
                                    <option value="4">Unit 4</option>
                                    <option value="5">Unit 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga-sewa">Harga Sewa</label>
                                <input type="text" class="form-control" name="harga_sewa" id="harga-sewa">
                            </div>
                            <div class="form-group">
                                <label for="no-hp">No HP Penyewa</label>
                                <input type="text" class="form-control" name="no_hp" id="no-hp">
                            </div>
                            <div class="form-group">
                                <label for="tanggal-bayar">Tanggal Bayar</label>
                                <input type="date" class="form-control" name="tanggal_bayar" id="tanggal-bayar">
                            </div>
                            <div class="form-group">
                                <label for="tanggal-tempo">Tanggal Jatuh Tempo</label>
                                <input type="date" class="form-control" name="tanggal_tempo" id="tanggal-tempo">
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
