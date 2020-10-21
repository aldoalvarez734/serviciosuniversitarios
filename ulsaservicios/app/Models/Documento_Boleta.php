<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento_Boleta extends Model
{
    use HasFactory;
    protected $table='nat_Documento_Boleta';
    
    protected $fillable=['Documento_id','matricula','Promedio','MateriasReprobadas','Faltas'];
}
