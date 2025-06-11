<?php

namespace App\Http\Controllers;

use App\Models\HewanModel;
use App\Models\kategoriModel;
use App\Models\ShelterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HewanController extends Controller
{
    public function index()
    {
        $hewans = HewanModel::with(['kategori', 'shelter'])->latest()->get();
        return view('admin.hewan.index', compact('hewans'));
    }

    public function create()
    {
        $kategoris = kategoriModel::all();
        $shelters = ShelterModel::all();
        return view('admin.hewan.create', compact('kategoris', 'shelters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategoris,id',
            'keturunan' => 'nullable|in:Persia,Maine coon,British Short Hair',
            'usia' => 'required|in:anak,dewasa,senior',
            'jenis_kelamin' => 'required|in:jantan,betina',
            'gambar' => 'nullable|image|max:2048',
            'id_shelter' => 'required|exists:shelters,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('hewans', 'public');
        }

        HewanModel::create($data);

        return redirect()->route('hewanAdmin.index')->with('success', 'Hewan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $hewan = HewanModel::findOrFail($id);
        $kategoris = kategoriModel::all();
        $shelters = ShelterModel::all();
        return view('admin.hewan.detail', compact('hewan', 'kategoris', 'shelters'));
    }

    public function edit($id)
    {
        $kategoris = kategoriModel::all();
        $shelters = ShelterModel::all();
        $hewan = HewanModel::findOrFail($id);
        return view('admin.hewan.edit', compact('hewan', 'kategoris', 'shelters'));
    }

    public function update(Request $request, HewanModel $hewan)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategoris,id',
            'keturunan' => 'nullable|in:Persia,Maine coon,British Short Hair',
            'usia' => 'required|in:anak,dewasa,senior',
            'jenis_kelamin' => 'required|in:jantan,betina',
            'gambar' => 'nullable|image|max:2048',
            'id_shelter' => 'required|exists:shelters,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($hewan->gambar) {
                \Storage::disk('public')->delete($hewan->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('hewans', 'public');
        }

        $hewan->update($data);

        return redirect()->route('hewanAdmin.index')->with('success', 'Hewan berhasil diperbarui.');
    }

    public function destroy(HewanModel $hewan)
    {
        if ($hewan->gambar) {
            \Storage::disk('public')->delete($hewan->gambar);
        }

        $hewan->delete();
        return redirect()->route('hewanAdmin.index')->with('success', 'Hewan berhasil dihapus.');
    }

}