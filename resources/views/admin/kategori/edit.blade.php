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
        background-color: white;
        appearance: none;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 6px;
        display: block;
    }

    .form-error {
        color: red;
        font-size: 14px;
    }

    .form-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 30px;
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
        <h2 style="margin: 0;">Edit Kategori</h2>
        <p style="color: #555;">Form Edit Kategori</p>
    </div>

    <form action="{{ route('kategoriAdmin.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama" class="form-label">Nama Kategori</label>
            <input type="text" name="nama" id="nama" class="form-control"
                   value="{{ old('nama', $kategori->nama) }}" required />
            @error('nama')
                <span class="form-error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-buttons">
            <a href="{{ route('kategoriAdmin.index') }}" class="btn-cancel">Batal</a>
            <button type="submit" class="btn-submit">Update</button>
        </div>
    </form>
</div>
@endsection
