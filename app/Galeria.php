<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table = "galeria";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'imagen'
    ];

    protected $guarded=[

    ];
}
