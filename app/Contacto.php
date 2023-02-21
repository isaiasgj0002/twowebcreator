<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    protected $table = "contacto";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'nombres',
        'correo',
        'telefono',
        'mensaje'
    ];

    protected $guarded=[

    ];
}
