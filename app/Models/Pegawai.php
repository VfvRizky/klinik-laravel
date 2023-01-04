<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodepegawai',
        'nama',
        'alamat',
        'kelamin',
        'telepon',
        'agama',
        'jabatan'
    ];
}
