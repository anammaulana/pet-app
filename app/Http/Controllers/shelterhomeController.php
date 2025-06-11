<?php

namespace App\Http\Controllers;

use App\Models\ShelterModel;
use Illuminate\Http\Request;

class shelterhomeController extends Controller
{
   public function index(Request $request)
{
    $query = ShelterModel::query();

    if ($request->filled('nama')) {
        $query->where('nama_shelter', 'like', '%' . $request->nama . '%');
    }

    $shelters = $query->get();

    return view('shelter_rescue.index', compact('shelters'));
}

public function show(Request $request, $id)
{
    $shelter = ShelterModel::findOrFail($id);

    // Ambil hewan dari shelter ini
    $hewans = $shelter->hewans();

    // Filter berdasarkan keturunan
    if ($request->filled('keturunan')) {
        $hewans->where('keturunan', $request->keturunan);
    }

    // Filter berdasarkan usia
    if ($request->filled('usia')) {
        $hewans->where('usia', $request->usia);
    }

    // Filter berdasarkan jenis kelamin
    if ($request->filled('jenis_kelamin')) {
        $hewans->where('jenis_kelamin', $request->jenis_kelamin);
    }

    // Jalankan query
    $filteredHewans = $hewans->get();

    return view('shelter_rescue.detail', [
        'shelters' => $shelter,
        'hewans' => $filteredHewans,
    ]);
}



}
