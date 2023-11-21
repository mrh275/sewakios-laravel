<?php

namespace App\Http\Controllers;

use App\Models\ListRuko;
use Exception;
use Illuminate\Http\Request;

class ListRukoController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Ruko',
            'isMenuActive' => 'ruko',
            'dataRuko' => ListRuko::all()
        ];

        return view('admin.ruko', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Daftar Ruko',
            'isMenuActive' => 'ruko',
        ];

        return view('admin.tambah-ruko', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'no_unit' => $request->input('no_unit'),
            'gedung' => $request->input('gedung'),
            'tipe_unit' => $request->input('tipe_unit'),
            'jumlah_lantai' => $request->input('jumlah_lantai'),
            'harga_sewa' => $request->input('harga_sewa'),
        ];

        try {
            ListRuko::create($data);

            return redirect('/admin/ruko')->with('success', 'Data ruko berhasil ditambahkan');
        } catch (Exception $error) {
            return redirect('/admin/ruko')->with('error', $error->getMessage());
        } catch (Exception $error) {
            return response()->json([
                'message' => $error->getMessage(),
                'status' => $error->getCode()
            ]);
        }
    }

    public function edit($no_unit)
    {
        $data = [
            'title' => 'Daftar Ruko',
            'isMenuActive' => 'ruko',
            'dataRuko' => ListRuko::where('no_unit', $no_unit)->first()
        ];

        return view('admin.edit-ruko', $data);
    }

    public function update(Request $request)
    {
        $data = [
            'no_unit' => $request->input('no_unit'),
            'gedung' => $request->input('gedung'),
            'tipe_unit' => $request->input('tipe_unit'),
            'jumlah_lantai' => $request->input('jumlah_lantai'),
            'harga_sewa' => $request->input('harga_sewa'),
        ];

        try {
            ListRuko::where('no_unit', $data['no_unit'])->update($data);

            return redirect('/admin/ruko')->with('success', 'Data ruko berhasil diperbaharui');
        } catch (Exception $error) {
            return redirect('/admin/ruko')->with('error', $error->getMessage());
        } catch (Exception $error) {
            return response()->json([
                'message' => $error->getMessage(),
                'status' => $error->getCode()
            ]);
        }
    }

    public function hapus($no_unit)
    {
        ListRuko::where('no_unit', $no_unit)->delete();

        return redirect()->to('/admin/ruko')->with('success', 'Data ruko berhasil dihapus');
    }
}
