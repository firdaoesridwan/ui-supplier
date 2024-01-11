<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;

class PetaniController extends Controller
{
    // Create
    public function create()
    {
        return view('pages.petani.create_petani');
    }

    public function store(Request $request)
    {
        Petani::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'luas_lahan' => $request->luas_lahan,
            'varietas_sawit' => $request->varietas_sawit,
            'pupuk' => $request->pupuk,
            'tahun_sawit' => $request->tahun_sawit
        ]);

        return redirect('/petani');
    }

    // Read
    public function index(Request $request)
    {
        if ($request->search) {
            $petani = Petani::where('nama', 'LIKE', "%$request->search%")->get();

            return $petani;
        }

        $petani = Petani::all();
        return view('pages.petani.petani', [
            'data' => $petani
        ]);
    }

    // Update
    public function edit($id)
    {
        $petani = Petani::find($id);
        return view('pages.petani.edit_petani', compact('petani'));
    }

    public function update(Request $request, $id)
    {
        $petani = Petani::find($id);

        $petani->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'luas_lahan' => $request->luas_lahan,
            'varietas_sawit' => $request->varietas_sawit,
            'pupuk' => $request->pupuk,
            'tahun_sawit' => $request->tahun_sawit
        ]);

        return redirect('/petani');
    }

    // Delete
    public function destroy($id)
    {
        $petani = Petani::find($id);
        $petani->delete();

        return redirect('/petani');
    }
}
