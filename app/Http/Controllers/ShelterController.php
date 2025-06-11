<?php

namespace App\Http\Controllers;

use App\Models\ShelterModel;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function index()
    {
        $shelters = ShelterModel::all();
        return view('admin.shelter.index', compact('shelters'));
    }

    public function create()
    {
        return view('admin.shelter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_shelter' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telpon' => 'required|string|max:20',
            'gambar' => 'nullable|image|max:2048',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('shelters', 'public');
        }

        ShelterModel::create($data);

        return redirect()->route('shelterAdmin.index')->with('success', 'Shelter berhasil ditambahkan.');
    }

    public function show($id)
    {
        $shelter = ShelterModel::findOrFail($id);
        return view('admin.shelter.detail', compact('shelter'));
    }

    public function edit($id)
    {
        $shelter = ShelterModel::findOrFail($id);
        return view('admin.shelter.edit', compact('shelter'));
    }

    public function update(Request $request, $id)
    {
        $shelter = ShelterModel::findOrFail($id);

        $request->validate([
            'nama_shelter' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_telpon' => 'required|string|max:20',
            'gambar' => 'nullable|image|max:2048',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('shelters', 'public');
        }

        $shelter->update($data);

        return redirect()->route('shelterAdmin.index')->with('success', 'Shelter berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $shelter = ShelterModel::findOrFail($id);
        $shelter->delete();

        return redirect()->route('shelterAdmin.index')->with('success', 'Shelter berhasil dihapus.');
    }
}
