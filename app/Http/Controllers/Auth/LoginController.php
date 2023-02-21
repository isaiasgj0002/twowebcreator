<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['only'=>'showlogin']);
    }
    public function showlogin(){
        return view('auth.login');
    }
    public function login(){
        $credentials = $this->validate(request(),[
            'email'=>'required|email|string',
            'password'=>'required|string'
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return back()->withErrors(['email'=>'Datos incorrectos, intentalo de nuevo'])
        ->withInput(request(['email']));
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
