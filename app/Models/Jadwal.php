<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $fillable = [
        'jadwal'
        
    ];
    protected $guarded =['id'];
    public function jadwal()
    {

        return $this->hasMany(Dokter::class);
    }
    
}
