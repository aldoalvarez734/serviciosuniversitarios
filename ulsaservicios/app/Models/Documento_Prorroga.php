<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento_Prorroga extends Model
{
    use HasFactory;
    protected $table='nat_Documento_Prorroga';
    
    protected $fillable=['Documento_id','matricula','FechaVencimiento'];
}
