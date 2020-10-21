<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlEscolar extends Model
{
    use HasFactory;
        protected $table = 'abraham_modelo_servicioescolar';

    protected $fillable = [
        'tramite_id',
        'encargado_id',
        'fecha_de_tramite'
        'Matricula_id'
        'Estatus_id'
}
