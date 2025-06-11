<?php

namespace App\Http\Controllers;

use App\Models\HewanModel;
use Illuminate\Http\Request;

class anjingController extends Controller
{
  public function index(Request $request)
{
    // Mulai query dan ambil relasi
    $query = HewanModel::with(['kategori', 'shelter'])
        ->whereHas('kategori', function ($q) {
            $q->where('nama', 'anjing');
        });

    // Filter berdasarkan keturunan
    if ($request->filled('keturunan')) {
        $query->where('keturunan', $request->keturunan);
    }

    // Filter berdasarkan usia
    if ($request->filled('usia')) {
        $query->where('usia', $request->usia);
    }

    // Filter berdasarkan jenis kelamin
    if ($request->filled('jenis_kelamin')) {
        $query->where('jenis_kelamin', $request->jenis_kelamin);
    }

    // Ambil hasil akhir
    $hewan = $query->get();

    return view('anjing.index', compact('hewan'));
}

}
