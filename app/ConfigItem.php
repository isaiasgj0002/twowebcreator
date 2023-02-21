<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigItem extends Model
{
    protected $table = "config_item";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'titulo',
        'enlace',
        'icono',
        'idmenu'
    ];

    protected $guarded=[

    ];
}
