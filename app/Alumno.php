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



	public function carrera()
	{
		return $this->belongsTo('App\Carrera');
	}

	public function semestre()
	{
		return $this->belongsTo('App\Semestre');
	}

	public function estatus_alumno()
	{
		return $this->belongsTo('App\EstatusAlumno');
	}
}



