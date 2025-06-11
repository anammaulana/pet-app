@extends('layouts.dashboard_layout')

<style>

    .btn-back {
        padding: 10px 20px;
        background-color: #6c757d;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        font-size: 16px;
    }
</style>

@section('content')
    <div class="card"
        style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

        <div style="margin-bottom: 25px;">
            <h2 style="margin: 0;">Detail Hewan</h2>
            <p style="color: #555;">Lihat informasi lengkap tentang hewan ini.</p>
        </div>

        <div style="display: flex; flex-direction: column; gap: 20px;">
            <div>
                <label>Nama Hewan</label>
                <div style="padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
                    {{ $hewan->nama_hewan }}
                </div>
            </div>

            <div>
                <label>Kategori</label>
                <div style="padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
                    {{ $hewan->kategori->nama ?? '-' }}
                </div>
            </div>

            <div>
                <label>Keturunan</label>
                <div style="padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
                    {{ $hewan->keturunan ?? '-' }}
                </div>
            </div>

            <div>
                <label>Usia</label>
                <div style="padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
                    {{ ucfirst($hewan->usia) }}
                </div>
            </div>

            <div>
                <label>Jenis Kelamin</label>
                <div style="padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
                    {{ ucfirst($hewan->jenis_kelamin) }}
                </div>
            </div>

            <div>
                <label>Shelter</label>
                <div style="padding: 10px; border: 1px solid #ccc; border-radius: 8px;">
                    {{ $hewan->shelter->nama_shelter ?? '-' }}
                </div>
            </div>

            <div>
                <label>Gambar</label><br>
                @if ($hewan->gambar)
                    <img src="{{ asset('storage/' . $hewan->gambar) }}" alt="gambar"
                        style="max-width: 300px; border-radius: 10px;">
                @else
                    <p style="color: #888;">Belum ada gambar</p>
                @endif
            </div>
        </div>

        <!-- Tombol Kembali -->
    <div style="display: flex; justify-content: flex-end; margin-top: 30px;">
        <a href="{{ route('hewanAdmin.index') }}" class="btn-back">Kembali</a>
    </div>
    </div>
@endsection