<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requerimiento extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function paciente()
    {
        return $this->belongsTo(paciente::class, 'paciente_id');
    }
}
