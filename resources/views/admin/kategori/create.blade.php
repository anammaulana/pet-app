@extends('layouts.dashboard_layout')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Tambah Kategori</h2>
        <p style="color: #555;">Form Tambah Kategori</p>
    </div>

    <form action="#" method="POST">
        @csrf 

        <div style="display: flex; gap: 40px;">
            <!-- Kolom Kiri -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="nama_kategori" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                        value="{{ old('nama_kategori') }}" required />
                    @error('nama_kategori')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

            </div>

          
        </div>

        <!-- Tombol -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
            <a href="#" class="btn"
                style="padding: 10px 20px; background-color: red; color: white; border-radius: 6px; text-decoration: none; font-size: 18px;">
                Batal
            </a>
            <button type="submit" class="btn btn-primary"
                style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 6px; font-size: 18px;">
                Simpan
            </button>
        </div>
    </form> 
</div>
@endsection