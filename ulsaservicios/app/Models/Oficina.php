<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    use HasFactory;
    protected $table='nat_oficinas';
    protected $fillable=['Oficina_id','Nombre_de_la_Oficina','Encargado_id','DocumentoQueProporciona','DocumentoQueRecibe'];
}
