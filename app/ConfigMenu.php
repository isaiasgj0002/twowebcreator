<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigMenu extends Model
{
    protected $table = "config_menu";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'titulo',
        'color',
        'background',
        'idpagina'
    ];

    protected $guarded=[

    ];
}
