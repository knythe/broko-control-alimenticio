<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mreceta extends Model
{
    use HasFactory;

    public function mdia()
    {
        return $this->belongsTo(mdia::class, 'mdia_id');
    }

    public function receta()
    {
        return $this->belongsTo(receta::class, 'receta_id');
    }
}
