<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKonfirmasiController extends Controller
{
    public function index()
    {
        return view('pages.surat_konfirmasi.suratkonfirmasi');
    }
}
