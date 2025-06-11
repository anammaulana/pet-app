<?php

namespace App\Http\Controllers;

use App\Models\kategoriModel;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
   public function index()
    {
        // Ambil semua data dari tabel kategoris
        $kategoris = kategoriModel::all();

        // Kirim data ke view (jika pakai blade)
        return view('admin.kategori.index', compact('kategoris'));

        
    }

     public function create()
    {
        // Tampilkan form tambah kategori
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        // Simpan ke database
        kategoriModel::create([
            'nama' => $request->nama,
        ]);

        // Redirect ke index dengan pesan sukses
        return redirect()->route('kategoriAdmin.index')->with('success', 'Kategori berhasil ditambahkan.');
    }
    public function show($id)
    {
        $kategori = kategoriModel::findOrFail($id);
        return view('admin.kategori.detail', compact('kategori'));
    }

    public function edit($id)
    {
        $kategori = kategoriModel::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
    ]);

    $kategori = kategoriModel::findOrFail($id);
    $kategori->update([
        'nama' => $request->nama,
    ]);

    return redirect()->route('kategoriAdmin.index')->with('success', 'Kategori berhasil diperbarui.');
}

public function destroy($id)
{
    $kategori = kategoriModel::findOrFail($id);
    $kategori->delete();

    return redirect()->route('kategoriAdmin.index')->with('success', 'Kategori berhasil dihapus.');
}
}
