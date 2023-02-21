<?php

namespace App\Http\Controllers;

use App\SeccionDos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class SeccionDosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $pagina = DB::table('users')->where('current_page','=',auth()->user()->current_page)->first();
        $current_page = $pagina->{'current_page'};
        $seccion_dos=DB::table('seccion_dos')->where('idpagina','=',$current_page)->first();
        return view('admin.seccion_dos.index',compact('seccion_dos'));
    }
    public function update(Request $request, $id){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:150',
            'descripcion'=>'required',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $seccion_dos = SeccionDos::findOrFail($id);
        $seccion_dos->titulo = $request->get('titulo');
        $seccion_dos->descripcion = $request->get('descripcion');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/secciones',time().".".$file->getClientOriginalExtension());
            $seccion_dos->imagen=time().".".$file->getClientOriginalExtension();
        }
        $seccion_dos->idpagina = auth()->user()->current_page;
        $seccion_dos->update();
        Session::flash('succes', 'Se actualizo la configuracion');
        return Redirect::to('admin/seccion_dos');
    }
}
