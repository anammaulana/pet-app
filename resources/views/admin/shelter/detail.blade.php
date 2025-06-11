@extends('layouts.dashboard_layout')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Detail Shelter</h2>
        <p style="color: #555;">Lihat informasi lengkap tentang shelter ini.</p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
        <!-- Kolom Kiri: Informasi -->
        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div>
                <label style="font-weight: 300;">Nama Shelter</label>
                <input type="text" class="form-control" readonly
                       style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;"
                       value="{{ $shelter->nama_shelter }}">
            </div>
            <div>
                <label style="font-weight: 300;">Alamat</label>
                <textarea class="form-control" rows="3" readonly
                          style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;">{{ $shelter->alamat }}</textarea>
            </div>
            <div>
                <label style="font-weight: 300;">No Telepon</label>
                <input type="text" class="form-control" readonly
                       style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;"
                       value="{{ $shelter->no_telpon }}">
            </div>
        </div>

        <!-- Kolom Kanan: Gambar -->
        <div>
            <label style="font-weight: 300;">Gambar Shelter</label>
            @if ($shelter->gambar)
                <img src="{{ asset('storage/' . $shelter->gambar) }}" alt="Gambar Shelter"
                     style="width: 100%; max-width: 100%; border-radius: 10px; margin-top: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            @else
                <p style="margin-top: 10px; color: #888;">Belum ada gambar.</p>
            @endif
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
        <a href="{{ route('shelterAdmin.index') }}" class="btn"
           style="padding: 10px 20px; background-color: #6c757d; color: white; border-radius: 6px; text-decoration: none; font-size: 16px;">
            Kembali
        </a>
    </div>

</div>
@endsection
