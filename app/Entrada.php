<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = "entrada";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'slug',
        'titulo',
        'contenido'
    ];

    protected $guarded=[

    ];
}
