<?php

namespace App\Models;

use App\Models\Penilaian;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hotel extends Model
{
    use HasFactory;

    public function penilaian()
    {
        return $this->hasOne(Penilaian::class, 'id_hotel');
    }
}
