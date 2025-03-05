<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Periferico extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'Precio'
    ];
}
