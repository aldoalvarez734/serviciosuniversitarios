<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenovacionBeca extends Model
{
    protected $table = 'renovacion_becas';

    protected $fillable = [
        'NoRenovacion',
        'Alumno',
        'activo',
    ];
}
