<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento_id extends Model
{
    use HasFactory;
    protected $table='nat_DocumentoID';
    
    protected $fillable=['Documento_id','NombreDelDocumento'];
}
