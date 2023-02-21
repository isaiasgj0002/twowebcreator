<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = "blog";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'idpagina',
        'slug',
        'imagen',
        'titulo',
        'excerpt',
        'contenido'
    ];

    protected $guarded=[

    ];
}
