<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;
   
    private $table = 'libros';

    private $fillable =     'titulo,
                            autor,
                            edicion,
                            genero,
                            anio,
                            estatus_id';
}
