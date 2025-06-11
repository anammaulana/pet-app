<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShelterModel extends Model
{

     protected $table = 'shelters';
   protected $fillable = [
        'nama_shelter',
        'alamat',
        'no_telpon',
        'gambar',
        'latitude',
        'longitude',
    ];
}
