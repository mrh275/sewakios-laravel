<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SewaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Penyewaan',
            'isMenuActive' => 'penyewaan'
        ];

        return view('admin.sewa', $data);
    }
}
