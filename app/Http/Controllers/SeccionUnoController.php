<?php

namespace App\Http\Controllers;

use App\SeccionUno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class SeccionUnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $pagina = DB::table('users')->where('current_page','=',auth()->user()->current_page)->first();
        $current_page = $pagina->{'current_page'};
        $seccion_uno=DB::table('seccion_uno')->where('idpagina','=',$current_page)->first();
        return view('admin.seccion_uno.index',compact('seccion_uno'));
    }
    public function update(Request $request, $id){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:150',
            'descripcion'=>'required',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $seccion_uno = SeccionUno::findOrFail($id);
        $seccion_uno->titulo = $request->get('titulo');
        $seccion_uno->descripcion = $request->get('descripcion');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/secciones',time().".".$file->getClientOriginalExtension());
            $seccion_uno->imagen=time().".".$file->getClientOriginalExtension();
        }
        $seccion_uno->idpagina = auth()->user()->current_page;
        $seccion_uno->update();
        Session::flash('succes', 'Se actualizo la configuracion');
        return Redirect::to('admin/seccion_uno');
    }
}
