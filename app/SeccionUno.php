<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionUno extends Model
{
    protected $table = "seccion_uno";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'imagen',
        'descripcion',
        'titulo'
    ];

    protected $guarded=[

    ];
}
