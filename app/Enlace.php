<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlace extends Model
{
    protected $table = "enlace";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'imagen',
        'enlace'
    ];

    protected $guarded=[

    ];
}
