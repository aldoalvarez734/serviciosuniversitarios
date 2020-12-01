<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestamo extends Model
{
    use HasFactory;
    protected $table = 'prestamos';
    protected $fillable = [
        'matricula_id',
        'oficina_id',
        'costo',
        'fecha_prestamo',
        'hora_prestamo',
        'fecha_prestamo_fin',
        'hora_prestamo_fin',
        'estatus_prestamo_id'];
}
