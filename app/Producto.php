<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

    protected $fillable=[
        "nombre_articulo",
        "seccion",
        "precio",
        "fecha",
        "ruta",
        "pais_origen"
    ];
}
