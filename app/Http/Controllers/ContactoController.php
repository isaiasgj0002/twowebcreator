<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $mensajes = DB::table('contacto')->where('idpagina','=',auth()->user()->current_page)->get();
        return view('admin.contacto.index',compact('mensajes'));
    }
}
