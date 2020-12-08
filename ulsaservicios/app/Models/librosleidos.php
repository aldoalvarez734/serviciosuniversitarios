<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class librosleidos extends Model
{
  
         protected $table='libros_leidos';
         protected $fillable=['libro_id',
     						'titulo',
     						'devuelto',
     						'status_id',
     						'alumno_id',
     						'campus_id']; 

}
