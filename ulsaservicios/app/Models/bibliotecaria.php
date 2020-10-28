<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bibliotecaria extends Model
{
    use HasFactory;
    protected $table='sheila_bibliotecarias';
    protected $fillable=[
        'nombre',
        'clave',
        'campus'];
}
