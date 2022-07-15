<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'lahir',
        'nik',
        'kelamin',
        'telepon',
        'agama',
        'pendidikan',
        'pekerjaan'
        
    ];
    protected $guarded =['id'];
}
