<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngkutanController extends Controller
{
    public function index()
    {
        return view('pages.angkutan.angkutan');
    }
}
