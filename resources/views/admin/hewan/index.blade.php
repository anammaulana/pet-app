@extends('layouts.dashboard_layout')

@section('content')
    <div class="card" style="background-color: white; height: auto; padding: 20px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px;">

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div>
                <h2>Data Hewan</h2>
                <p>List data hewan yang tersedia</p>
            </div>
            <div style="display: flex; gap: 10px;">
              
                    <a href="{{ route('hewanAdmin.create') }}" style="padding: 10px 15px; background-color: blue; color: white; text-decoration: none; border-radius: 5px;">
                        Tambah
                    </a>
            </div>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="padding: 10px;">No</th>
                    <th style="padding: 10px;">Nama Hewan</th>
                    <th style="padding: 10px;">Kategori</th>
                    <th style="padding: 10px;">Usia</th>
                    <th style="padding: 10px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($hewans as $index => $hewan)
                    <tr>
                        <td style="padding: 10px; text-align: center;">{{ $index + 1 }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $hewan->nama_hewan }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $hewan->kategori->nama }}</td>
                        <td style="padding: 10px; text-align: center;">{{ ucfirst($hewan->usia) }}</td>
                        <td style="padding: 10px; text-align: center;">
                            <a href="{{ route('hewanAdmin.show', $hewan->id) }}" style="text-decoration: none;">
                                <i class="fas fa-eye" style="margin-left: 10px; color:blue;"></i>
                            </a>
                            <a href="{{ route('hewanAdmin.edit', $hewan->id) }}" style="text-decoration: none;">
                                <i class="fas fa-edit" style="margin-left: 10px; color: #e6a100;"></i>
                            </a>
                            <form action="{{ route('hewanAdmin.destroy', $hewan->id) }}" method="POST" style="display:inline;"
                                onsubmit="return confirm('Hapus data hewan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="outline: none; border: none; background: none; cursor: pointer;">
                                    <i class="fas fa-trash-alt" style="margin-left: 10px; color: red;"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 20px;">Belum ada data hewan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
