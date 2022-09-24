<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'spesialis',
        'telepon',
        'jadwal'
        
    ];
    protected $guarded =['id'];

    // public function pasiens(){
    //     return $this->belongsTo(Pasien::class);
    // }
    
}

