<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $fillable = ['NombreMascota','FechaNacimiento','tipo_id','cliente_id'];
}
