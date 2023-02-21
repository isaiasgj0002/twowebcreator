<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeccionDos extends Model
{
    protected $table = "seccion_dos";
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
