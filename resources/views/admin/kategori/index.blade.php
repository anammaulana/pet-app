@extends('layouts.dashboard_layout')

@section('content')
    <div class="card" style="background-color: white; height: auto; padding: 20px; margin: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); border-radius: 8px;">

        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div>
                <h2>Kategori Hewan</h2>
                <p>List data kategori hewan</p>
            </div>
           <div style="display: flex; gap: 10px;">
               
                <a href="{{route('kategoriAdmin.create')}}" style="padding: 10px 15px; background-color: #28a745; color: white; text-decoration: none; border-radius: 5px;">
                    Tambah
                </a>
            </div>
        </div>

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="padding: 10px; ">No</th>
                    <th style="padding: 10px; ">Nama Kategori</th>
                    <th style="padding: 10px; ">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kategoris as $index => $kategori)
                    <tr>
                        <td style="padding: 10px; text-align: center;">{{ $index + 1 }}</td>
                        <td style="padding: 10px; text-align: center;">{{ $kategori->nama }}</td>
                        <td style="padding: 10px; text-align: center;">
                          <a href="{{ route('kategoriAdmin.edit', $kategori->id) }}">
                             <i class="fas fa-eye" style="margin-left: 10px; color:blue;"></i>
                                </a>    
                          <a href="{{ route('kategoriAdmin.show', $kategori->id) }}">
                                <i class="fas fa-edit" style="margin-left: 10px; color: #e6a100;"></i>
                            </a>
                            <form action="{{ route('kategoriAdmin.destroy', $kategori->id) }}" method="POST" style="display:inline;"
                                onsubmit="return confirm('Hapus data ini?')">
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
                        <td colspan="7">Belum ada data Kategori Hewan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection