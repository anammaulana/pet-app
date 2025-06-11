<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategoriModel extends Model
{
    // Nama tabel yang digunakan
    protected $table = 'kategoris';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'nama',
    ];

    public function hewan()
{
    return $this->hasMany(HewanModel::class, 'id_kategori');
}

}
