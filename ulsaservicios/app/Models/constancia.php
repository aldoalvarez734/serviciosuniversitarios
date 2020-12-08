<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class constancia extends Model
{
    use HasFactory;
    protected $table = 'constancia';
    protected $fillable = [
        'matricula_id',
        'oficina_id',
        'costo',
        'fecha_constancia',
        'carrera_id',
        'estatus_constancia_id',
        'constancia_id',
        'tipo_constancia_id',
    ];
}
