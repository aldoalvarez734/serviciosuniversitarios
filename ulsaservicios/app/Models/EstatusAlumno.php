<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusAlumno extends Model
{
    use HasFactory;
    protected $table='nat_estatus_alumno';
    protected $fillable=['Estatus_alumno_id','activo'];
}
