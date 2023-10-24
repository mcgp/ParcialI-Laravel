<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'duracion',
        'precio',
        'fecha_inicio'
    ];
    
    use HasFactory;
}
