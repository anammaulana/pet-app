@extends('layouts.dashboard_layout')

@section('content')
<div class="card" style="background-color: white; padding: 30px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 12px;">

    <div style="margin-bottom: 25px;">
        <h2 style="margin: 0;">Tambah Hewan</h2>
        <p style="color: #555;">Form Tambah Hewan</p>
    </div>

    <form action="#" method="POST">
        @csrf 

        <div style="display: flex; gap: 40px;">
            <!-- Kolom Kiri -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="nama_hewan" style="font-weight: 300; margin-bottom: 6px; display: block;">Nama hewan</label>
                    <input type="text" name="nama_hewan" id="nama_hewan" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                        value="{{ old('nama_hewan') }}" required />
                    @error('nama_hewan')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="id_kategori" style="font-weight: 300; margin-bottom: 6px; display: block;">Kategori</label>
                    <input type="text" name="id_kategori" id="id_kategori" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                        value="{{ old('id_kategori') }}" required />
                    @error('id_kategori')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="keturunan" style="font-weight: 300; margin-bottom: 6px; display: block;">Keturunan</label>
                    <div style="position: relative;">
                        <input type="date" name="keturunan" id="keturunan" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                            value="{{ old('keturunan') }}" required />
                        <i class="fas fa-calendar-alt" style="position: absolute; right: 10px; top: 12px; color: #888;"></i>
                    </div>
                    @error('keturunan')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                  <div>
                    <label for="gambar" style="font-weight: 300; margin-bottom: 6px; display: block;">Gambar</label>
                    <div style="position: relative;">
                        <input type="date" name="gambar" id="gambar" class="form-control"
                            style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                            value="{{ old('gambar') }}" required />
                        <i class="fas fa-calendar-alt" style="position: absolute; right: 10px; top: 12px; color: #888;"></i>
                    </div>
                    @error('gambar')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

            </div>

            <!-- Kolom Kanan -->
            <div style="flex: 1; display: flex; flex-direction: column; gap: 20px;">
                <div>
                    <label for="usia" style="font-weight: 300; margin-bottom: 6px; display: block;">Usia</label>
                    <input type="text" name="usia" id="usia" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                        value="{{ old('usia') }}" required />
                    @error('usia')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="jns_kelamin" style="font-weight: 300; margin-bottom: 6px; display: block;">Jenis Kelamin</label>
                    <input type="text" name="jns_kelamin" id="jns_kelamin" class="form-control"
                        style="width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"
                        value="{{ old('jns_kelamin') }}" required />
                    @error('no_str')
                        <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Tombol -->
        <div style="display: flex; justify-content: flex-end; gap: 10px; margin-top: 30px;">
            <a href="{{ route('dokters.index') }}" class="btn"
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