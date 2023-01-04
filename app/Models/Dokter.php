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
        'id_poli',
        'telepon',
        'jadwalpraktek'
        
    ];
    protected $guarded =['id'];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwalpraktek', 'id');
    
    }

    public function rekam(){
        return $this->hasMany(Rekam::class);
    }

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
}

