<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libroprestado extends Model
{
    
         protected $table='sheila_libro_prestados';
         protected $fillable=['código_id'];

    use HasFactory;
}
