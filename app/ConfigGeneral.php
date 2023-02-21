<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigGeneral extends Model
{
    protected $table = "config_general";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'fuente',
        'size',
        'logo',
        'fondo_principal',
        'titulo',
        'favicon',
        'mapa',
        'fondo',
        'idpagina'
    ];

    protected $guarded=[

    ];
}
