<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HewanModel extends Model
{
use HasFactory;

  protected $table = 'hewans';


    protected $fillable = [
        'nama_hewan',
        'id_kategori',
        'keturunan',
        'usia',
        'jenis_kelamin',
        'gambar',
        'id_shelter',
    ];

    // Relasi ke Kategori
    public function kategori()
    {
        return $this->belongsTo(kategoriModel::class, 'id_kategori');
    }

    // Relasi ke Shelter
    public function shelter()
    {
        return $this->belongsTo(ShelterModel::class, 'id_shelter');
    }
}
