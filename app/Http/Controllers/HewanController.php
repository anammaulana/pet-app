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

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_hewan' => 'required|string|max:255',
            'id_kategori' => 'required|exists:kategoris,id',
            'keturunan' => 'nullable|string|max:255',
            'usia' => 'required|string',
            'jenis_kelamin' => 'required|string',
            'id_shelter' => 'required|exists:shelters,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $hewan = HewanModel::findOrFail($id);
    
        $hewan->nama_hewan = $request->nama_hewan;
        $hewan->id_kategori = $request->id_kategori;
        $hewan->keturunan = $request->keturunan;
        $hewan->usia = $request->usia;
        $hewan->jenis_kelamin = $request->jenis_kelamin;
        $hewan->id_shelter = $request->id_shelter;
    
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($hewan->gambar && \Storage::exists('public/' . $hewan->gambar)) {
                \Storage::delete('public/' . $hewan->gambar);
            }
    
            $file = $request->file('gambar');
            $path = $file->store('hewan', 'public'); // simpan di storage/app/public/hewan
            $hewan->gambar = $path;
        }
    
        $hewan->save();
    
        return redirect()->route('hewanAdmin.index')->with('success', 'Data hewan berhasil diperbarui.');
    }


    public function destroy($id)
    {
        $hewan = HewanModel::findOrFail($id);
        $hewan->delete();

        return redirect()->route('hewanAdmin.index')->with('success', 'Hewan berhasil dihapus.');
    }

}