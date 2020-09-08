<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    protected $table='cat_semestre';

    protected $fillable=['semestre',
						'activo'];
}
