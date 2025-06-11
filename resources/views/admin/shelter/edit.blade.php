@extends('layouts.dashboard_layout')

@section('content')

<style>
    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px;
        box-sizing: border-box;
    }

    .form-label {
        font-weight: 300;
        margin-bottom: 6px;
        display: block;
    }

    .form-group {
        margin-bottom: 5;
    }

    .btn-utama {
        padding: 10px 20px;
        font-size: 18px;
        border-radius: 6px;
        text-decoration: none;
        color: white;
    }

    .btn-batal {
        background-color: #6c757d;
    }

    .btn-simpan {
        background-color: #007bff;
        border: none;
    }
</style>

<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Edit Shelter</h2>
        <p style="color: #555;">Perbarui data shelter & rescue</p>
    </div>

    <form action="{{ route('shelterAdmin.update', $shelter->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div style="display: flex; flex-direction: column; gap: 20px;">

            <div class="form-group">
                <label for="nama_shelter" class="form-label">Nama Shelter</label>
                <input type="text" name="nama_shelter" id="nama_shelter"
                       class="form-control"
                       value="{{ old('nama_shelter', $shelter->nama_shelter) }}" required>
                @error('nama_shelter')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat"
                          class="form-control" rows="3" required>{{ old('alamat', $shelter->alamat) }}</textarea>
                @error('alamat')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_telpon" class="form-label">No Telpon</label>
                <input type="text" name="no_telpon" id="no_telpon"
                       class="form-control"
                       value="{{ old('no_telpon', $shelter->no_telpon) }}" required>
                @error('no_telpon')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar" class="form-label">Upload Gambar (Opsional)</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
                @error('gambar')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            @if ($shelter->gambar)
                <div class="form-group">
                    <p class="form-label" style="margin-top: 10px;">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $shelter->gambar) }}" alt="Gambar Shelter"
                         style="max-width: 300px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                </div>
            @endif

        </div>

        <!-- Tombol -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
            <a href="{{ route('shelterAdmin.index') }}" class="btn-utama btn-batal">Batal</a>
            <button type="submit" class="btn-utama btn-simpan">Update</button>
        </div>

    </form>
</div>

@endsection
