<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mdia extends Model
{
    use HasFactory;

    public function msemana()
    {
        return $this->belongsTo(msemana::class, 'msemana_id');
    }

    public function mrecetas()
    {
        return $this->hasMany(mreceta::class, 'mdia_id');
    }   
}
