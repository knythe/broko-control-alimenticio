<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receta extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function mrecetas()
    {
        return $this->hasMany(mreceta::class, 'receta_id');
    }
}
