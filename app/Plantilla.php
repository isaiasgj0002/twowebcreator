<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantilla extends Model
{
    protected $table = "plantilla";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'titulo',
        'descripcion',
        'portada'
    ];

    protected $guarded=[

    ];
}
