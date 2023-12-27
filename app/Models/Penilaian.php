<?php

namespace App\Models;

use App\Models\Hotel;
use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penilaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_hotel',
        'id_kriteria',
    ];

    public function Idhotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }
    public function Idkriteria()
    {
        return $this->belongsTo(Kriteria::class, 'id_kriteria');
    }
}
