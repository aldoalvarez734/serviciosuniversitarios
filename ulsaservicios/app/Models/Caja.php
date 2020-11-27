<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;

    protected $table = 'roberto__modelo_cajas';

    protected $fillable = [
        'tramite_id',
        'matricula_id',
        'fecha',
        'costo',
        'cantidad',
        'importe',
        'estatus_cobro_id'
    ];
}
