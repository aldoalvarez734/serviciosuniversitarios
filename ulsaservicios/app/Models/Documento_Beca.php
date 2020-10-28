<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento_Beca extends Model
{
    use HasFactory;
    protected $table='nat_Documento_Beca';
    
    protected $fillable=['Documento_id','matricula','PorcentajeTotal_%','Credito_%','Beca_%'];
}
