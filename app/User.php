<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "users";
    protected $primarykey = "id";

    public $timestamps = false;

    protected $fillable=[
        'name',
        'email',
        'password',
        'role',
        'portada',
        'current_page'
    ];

    protected $guarded=[

    ];
}
