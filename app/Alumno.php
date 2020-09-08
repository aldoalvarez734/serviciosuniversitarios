<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table='alumnos';

    protected $fillable=['matricula',
						'carrera_id',
						'nombre',
						'paterno',
						'materno',
						'semestre_id',
						'estatus_id'];
}



