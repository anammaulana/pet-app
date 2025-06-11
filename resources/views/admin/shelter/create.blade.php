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
        font-weight: 500;
        margin-bottom: 6px;
        display: block;
    }

    .form-group {
        margin-bottom: 5px;
    }

    .btn-cancel {
        padding: 10px 20px;
        background-color: #6c757d;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        font-size: 18px;
    }

    .btn-submit {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 18px;
    }
</style>

<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Tambah Shelter</h2>
        <p style="color: #555;">Form Tambah Shelter & Rescue</p>
    </div>

    <form action="{{ route('shelterAdmin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div class="form-group">
                <label for="nama_shelter" class="form-label">Nama Shelter</label>
                <input type="text" name="nama_shelter" id="nama_shelter" class="form-control"
                       value="{{ old('nama_shelter') }}" required>
                @error('nama_shelter')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required>{{ old('alamat') }}</textarea>
                @error('alamat')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="no_telpon" class="form-label">No Telpon</label>
                <input type="text" name="no_telpon" id="no_telpon" class="form-control"
                       value="{{ old('no_telpon') }}" required>
                @error('no_telpon')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
                @error('gambar')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <!-- Tombol -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
            <a href="{{ route('shelterAdmin.index') }}" class="btn-cancel">Batal</a>
            <button type="submit" class="btn-submit">Simpan</button>
        </div>
    </form>
</div>
@endsection
