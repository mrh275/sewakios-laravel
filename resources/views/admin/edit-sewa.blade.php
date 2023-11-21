@extends('layouts.template-admin')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Data Sewa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('admin/sewa') }}">Penyewaan</a></li>
                            <li class="breadcrumb-item active">Edit Data Sewa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ url('admin/sewa/update') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nomor-kontrak">Nomor Kontrak</label>
                                <input type="text" class="form-control" name="nomor_kontrak" id="nomor-kontrak" value="{{ $dataSewa->nomor_kontrak }}">
                            </div>
                            <div class="form-group">
                                <label for="nama-penyewa">Nama Penyewa</label>
                                <input type="text" class="form-control" name="nama_penyewa" id="nama-penyewa" value="{{ $dataSewa->nama_penyewa }}">
                            </div>
                            <div class="form-group">
                                <label for="no-unit">Unit Ruko</label>
                                <select name="no_unit" id="no-unit" class="form-control">
                                    <option value="{{ $selectedRuko->no_unit }}" id="{{ $selectedRuko->harga_sewa }}">{{ $selectedRuko->no_unit }}</option>
                                    @foreach ($listRuko as $ruko)
                                        <option value="{{ $ruko->no_unit }}" id="{{ $ruko->harga_sewa }}">{{ $ruko->no_unit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="harga-sewa">Harga Sewa</label>
                                <input type="text" class="form-control" name="harga_sewa" id="harga-sewa" readonly value="{{ $selectedRuko->harga_sewa }}">
                            </div>
                            <div class="form-group">
                                <label for="no-hp">No HP Penyewa</label>
                                <input type="text" class="form-control" name="no_hp" id="no-hp" value="{{ $dataSewa->no_hp }}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal-bayar">Tanggal Bayar</label>
                                <input type="date" class="form-control" name="tanggal_bayar" id="tanggal-bayar" value="{{ $dataSewa->tanggal_bayar }}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal-tempo">Tanggal Jatuh Tempo</label>
                                <input type="date" class="form-control" name="tanggal_tempo" id="tanggal-tempo" value="{{ $dataSewa->tanggal_tempo }}">
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

@push('scripts')
    <script>
        $('#no-unit').change(function() {
            var value = $(this).val();
            // set the value and make sure the user cannot edit it
            var name = $("option:selected", this).attr('id');
            $("#harga-sewa").val(name);
        });
    </script>
@endpush
