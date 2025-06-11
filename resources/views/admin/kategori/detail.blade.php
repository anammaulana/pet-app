@extends('layouts.dashboard_layout')

@section('content')

<style>
    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px;
        background-color: #ffffff;
        box-sizing: border-box;
    }

    .form-label {
        font-weight: 500;
        margin-bottom: 6px;
        display: block;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .btn-back {
        padding: 10px 20px;
        background-color: #6c757d;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        font-size: 16px;
    }
</style>

<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Detail Kategori Hewan</h2>
        <p style="color: #555;">Lihat informasi lengkap tentang kategori ini.</p>
    </div>

    <div class="form-group">
        <label for="nama" class="form-label">Nama Kategori</label>
        <input type="text" name="nama" id="nama" class="form-control" readonly
               value="{{ $kategori->nama }}" />
    </div>

    <!-- Tombol Kembali -->
    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
        <a href="{{ route('kategoriAdmin.index') }}" class="btn-back">Kembali</a>
    </div>

</div>
@endsection
