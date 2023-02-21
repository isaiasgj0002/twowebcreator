<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    protected $table = "pagina";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'iduser',
        'dominio',
        'estado',
        'idplantilla'
    ];

    protected $guarded=[

    ];
}
