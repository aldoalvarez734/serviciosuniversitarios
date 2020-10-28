<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado_id extends Model
{
    use HasFactory;
    protected $table='nat_EncargadoID';
    
    protected $fillable=['Encargado_id','Cargo','Nombre','Paterno','Materno'];
}
