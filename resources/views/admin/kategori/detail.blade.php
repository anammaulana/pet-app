@extends('layouts.dashboard_layout')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Detail Kategori Hewan</h2>
        <p style="color: #555;">Lihat informasi lengkap tentang kategori ini.</p>
    </div>

    <div style="display: flex; gap: 40px;">
        <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
            <div>
                <label for="nama" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama Kategori</label>
                <input type="text" name="nama" id="nama" class="form-control" readonly
                    style="width: 50%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;"
                    value="{{ $kategori->nama }}" />
            </div>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
        <a href="{{ route('kategoriAdmin.index') }}" class="btn"
            style="padding: 10px 20px; background-color: #6c757d; color: white; border-radius: 6px; text-decoration: none; font-size: 16px;">
            Kembali
        </a>
    </div>

</div>
@endsection
