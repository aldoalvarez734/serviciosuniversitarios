<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //
     protected $table='cat_campus';

     protected $fillable=['campus',
     						'activo'
     					];
}
