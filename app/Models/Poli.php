<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function dokter()
    {
        return $this->hasMany(Dokter::class);
    }
}
