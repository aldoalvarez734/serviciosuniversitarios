<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
    protected $table='cat_carrera';

    protected $fillable=[   'nombre_carrera',
							'coordinacion_id',
							'activo',];



	public function coordinacion()
	{
		return $this->belongsTo('App\Coordinacion');
	}

	

}


