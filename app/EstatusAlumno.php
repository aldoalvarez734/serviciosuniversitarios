<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstatusAlumno extends Model
{
    //
    protected $table='cat_estatus_alumno';
    protected $fillable=['estatus','activo'];
}
