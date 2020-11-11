<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = 'cat_campus';

    protected $fillable = [
        'campus',
        'usuario_id',
        'activo',
    ];
    
}
