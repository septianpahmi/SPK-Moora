<?php

namespace App\Models;

use App\Models\Subkriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kriteria extends Model
{
    use HasFactory;

    public function subkriteria()
    {
        return $this->hasMany(Subkriteria::class, 'id_kriteria');
    }
}
