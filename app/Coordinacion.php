<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinacion extends Model
{
    protected $table='cat_coordinacion';
    
    protected $fillable=['nombre_coordinacion'];
}
