<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
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
        ];

        return view('admin.tambah-sewa', $data);
    }
}
