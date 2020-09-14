<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table='cat_areas';

    protected $fillable=[
    					'nombre_area',
    					'capacidad',
    					'campus_id',
    					'activo'];

    
    public function campus()
    {
    	return $this->BelongTo('App\Campus');
    }
}
