@extends('layouts.dashboard_layout')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Edit Shelter</h2>
        <p style="color: #555;">Perbarui data shelter & rescue</p>
    </div>

    <form action="{{ route('shelterAdmin.update', $shelter->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="display: flex; flex-direction: column; gap: 20px;">

            <div>
                <label for="nama_shelter" style="display: block; margin-bottom: 5px;">Nama Shelter</label>
                <input type="text" name="nama_shelter" id="nama_shelter"
                       class="form-control" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                       value="{{ old('nama_shelter', $shelter->nama_shelter) }}" required>
                @error('nama_shelter')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="alamat" style="display: block; margin-bottom: 5px;">Alamat</label>
                <textarea name="alamat" id="alamat"
                          class="form-control" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;" required>{{ old('alamat', $shelter->alamat) }}</textarea>
                @error('alamat')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="no_telpon" style="display: block; margin-bottom: 5px;">No Telpon</label>
                <input type="text" name="no_telpon" id="no_telpon"
                       class="form-control" style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                       value="{{ old('no_telpon', $shelter->no_telpon) }}" required>
                @error('no_telpon')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="gambar" style="display: block; margin-bottom: 5px;">Upload Gambar (Opsional)</label>
                <input type="file" name="gambar" id="gambar"
                       class="form-control" style="padding: 10px;">
                @error('gambar')
                    <span style="color: red;">{{ $message }}</span>
                @enderror

                @if ($shelter->gambar)
                    <div style="margin-top: 10px;">
                        <p style="margin-bottom: 5px;">Gambar Saat Ini:</p>
                        <img src="{{ asset('storage/' . $shelter->gambar) }}" alt="Gambar Shelter"
                             style="max-width: 300px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    </div>
                @endif
            </div>

        </div>

        <!-- Tombol -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
            <a href="{{ route('shelterAdmin.index') }}" class="btn"
               style="padding: 10px 20px; background-color: red; color: white; border-radius: 6px; text-decoration: none; font-size: 18px;">
                Batal
            </a>
            <button type="submit" class="btn btn-primary"
                    style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 6px; font-size: 18px;">
                Perbarui
            </button>
        </div>
    </form>
</div>
@endsection
