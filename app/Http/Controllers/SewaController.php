<?php

namespace App\Http\Controllers;

use App\Models\ListRuko;
use App\Models\Sewa;
use Exception;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Penyewaan',
            'isMenuActive' => 'penyewaan',
            'dataSewa' => Sewa::all()
        ];

        return view('admin.sewa', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Penyewaan',
            'isMenuActive' => 'penyewaan',
            'listRuko' => ListRuko::where('status', 'Tersedia')->get()
        ];

        return view('admin.tambah-sewa', $data);
    }

    public function store(Request $request)
    {

        $nomorKontrak = 'CUST-' . rand(1000, 9999);
        $data = [
            'nomor_kontrak' => $nomorKontrak,
            'nama_penyewa' => $request->input('nama_penyewa'),
            'no_hp' => $request->input('no_hp'),
            'no_unit' => $request->input('no_unit'),
            'jumlah_bayar' => $request->input('harga_sewa'),
            'tanggal_bayar' => $request->input('tanggal_bayar'),
            'tanggal_tempo' => $request->input('tanggal_tempo'),
        ];

        if (!Sewa::where('nomor_kontrak', $nomorKontrak)->first()) {
            try {
                Sewa::create($data);
                ListRuko::where('no_unit', $data['no_unit'])->update([
                    'status' => 'Disewa'
                ]);

                return redirect()->to('/admin/sewa')->with('success', 'Data berhasil ditambahkan');
            } catch (Exception $error) {
                return response()->json([
                    'status' => $error->getCode(),
                    'message' => $error->getMessage()
                ]);
            }
        }
    }

    public function edit($nomorKontrak)
    {
        $dataSewa = Sewa::where('nomor_kontrak', $nomorKontrak)->first();
        $selectedRuko = ListRuko::where('no_unit', $dataSewa->no_unit)->first();
        $data = [
            'title' => 'Tambah Penyewaan',
            'isMenuActive' => 'penyewaan',
            'dataSewa' => $dataSewa,
            'selectedRuko' => $selectedRuko,
            'listRuko' => ListRuko::where('status', 'Tersedia')->get(),
        ];

        return view('admin.edit-sewa', $data);
    }

    public function update(Request $request)
    {
        $data = [
            'nomor_kontrak' => $request->input('nomor_kontrak'),
            'nama_penyewa' => $request->input('nama_penyewa'),
            'no_hp' => $request->input('no_hp'),
            'no_unit' => $request->input('no_unit'),
            'jumlah_bayar' => $request->input('harga_sewa'),
            'tanggal_bayar' => $request->input('tanggal_bayar'),
            'tanggal_tempo' => $request->input('tanggal_tempo'),
        ];

        try {
            Sewa::where('nomor_kontrak', $data['nomor_kontrak'])->update($data);

            return redirect()->to('/admin/sewa')->with('success', 'Data berhasil diperbaharui');
        } catch (Exception $error) {
            return response()->json([
                'status' => $error->getCode(),
                'message' => $error->getMessage()
            ]);
        }
    }

    public function hapus($nomorKontrak)
    {
        Sewa::where('nomor_kontrak', $nomorKontrak)->delete();

        return redirect()->to('/admin/sewa')->with('success', 'Data kontrak berhasil dihapus');
    }
}
