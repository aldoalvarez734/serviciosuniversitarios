<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libroprestado extends Model
{
    
         protected $table='libros_prestados';
         protected $fillable=['libro_id',
     						'fecha_prestamo',
     						'fecha_devolucion',
     						'alumno_id',
     						'campus_id'];

 
}
