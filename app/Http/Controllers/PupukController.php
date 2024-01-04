<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PupukController extends Controller
{
    public function index()
    {
        return view('pages.pupuk.pupuk');
    }
}
