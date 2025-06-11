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
        margin-bottom: 5px;
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

    .form-section {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
</style>

<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Tambah Hewan</h2>
        <p style="color: #555;">Form Tambah Data Hewan</p>
    </div>

    <form action="{{ route('hewanAdmin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-section">
            <div class="form-group">
                <label for="nama_hewan" class="form-label">Nama Hewan</label>
                <input type="text" name="nama_hewan" id="nama_hewan"
                       class="form-control" value="{{ old('nama_hewan') }}" required>
                @error('nama_hewan')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_kategori" class="form-label">Kategori</label>
                <select name="id_kategori" id="id_kategori" class="form-control" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategoris as $kategori)
                        <option value="{{ $kategori->id }}" {{ old('id_kategori') == $kategori->id ? 'selected' : '' }}>
                            {{ $kategori->nama }}
                        </option>
                    @endforeach
                </select>
                @error('id_kategori')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="keturunan" class="form-label">Keturunan</label>
                <select name="keturunan" id="keturunan" class="form-control">
                    <option value="">-- Pilih Keturunan (Opsional) --</option>
                    <option value="Persia" {{ old('keturunan') == 'Persia' ? 'selected' : '' }}>Persia</option>
                    <option value="Maine coon" {{ old('keturunan') == 'Maine coon' ? 'selected' : '' }}>Maine Coon</option>
                    <option value="British Short Hair" {{ old('keturunan') == 'British Short Hair' ? 'selected' : '' }}>British Short Hair</option>
                </select>
                @error('keturunan')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="usia" class="form-label">Usia</label>
                <select name="usia" id="usia" class="form-control" required>
                    <option value="">-- Pilih Usia --</option>
                    <option value="anak" {{ old('usia') == 'anak' ? 'selected' : '' }}>Anak</option>
                    <option value="dewasa" {{ old('usia') == 'dewasa' ? 'selected' : '' }}>Dewasa</option>
                    <option value="senior" {{ old('usia') == 'senior' ? 'selected' : '' }}>Senior</option>
                </select>
                @error('usia')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="jantan" {{ old('jenis_kelamin') == 'jantan' ? 'selected' : '' }}>Jantan</option>
                    <option value="betina" {{ old('jenis_kelamin') == 'betina' ? 'selected' : '' }}>Betina</option>
                </select>
                @error('jenis_kelamin')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_shelter" class="form-label">Shelter</label>
                <select name="id_shelter" id="id_shelter" class="form-control" required>
                    <option value="">-- Pilih Shelter --</option>
                    @foreach($shelters as $shelter)
                        <option value="{{ $shelter->id }}" {{ old('id_shelter') == $shelter->id ? 'selected' : '' }}>
                            {{ $shelter->nama_shelter }}
                        </option>
                    @endforeach
                </select>
                @error('id_shelter')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar" class="form-label">Upload Gambar</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
                @error('gambar')
                    <span class="form-error">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-buttons">
            <a href="{{ route('hewanAdmin.index') }}" class="btn-cancel">Batal</a>
            <button type="submit" class="btn-submit">Simpan</button>
        </div>
    </form>
</div>
@endsection
