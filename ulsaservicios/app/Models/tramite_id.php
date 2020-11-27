<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tramite_id extends Model
{
    use HasFactory;
        protected $table = 'abraham_tramite_id';

    protected $fillable = [
        'tramite_id',
        'nombre_de_tramite',
    	'costo',
    	'oficina_id'];
}

