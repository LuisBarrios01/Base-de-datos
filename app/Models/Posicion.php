<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posicion extends Model
{
    protected $table='posiciones';
    protected $primaryKey = 'idposicion';
    protected $fillable =  array('pais', 'puntos', 'PJ', 'G', 'E', 'P',  'DG', 'Resultado');
}
