<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $users = DB::table('users')->where('role','=','USUARIO')->paginate(3);
        $dominios = DB::table('pagina')->get();
        return view('panel.usuarios.index',compact('users','dominios'));
    }
}
