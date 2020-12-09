<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialDeTramites extends Model
{
        protected $table = 'historial_de_tramites';

    protected $fillable = [
        'tramite'
    ];
}
