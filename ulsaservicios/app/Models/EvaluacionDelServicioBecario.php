<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionDelServicioBecario extends Model
{
    use HasFactory;
    protected $table='nat_EvaluacionSB';
    
    protected $fillable=['Documento_id','matricula','Evaluacion','Oficina_id'];
}
