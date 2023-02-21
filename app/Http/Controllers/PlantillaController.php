<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plantilla;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PlantillaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $data_plantilla = DB::table('plantilla')->paginate('10');
        return view('panel.plantillas.index',compact('data_plantilla'));
    }
    function create(){
        return view('panel.plantillas.create');
    }
    function store(Request $request){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:150',
            'descripcion'=>'required',
            'portada'=>'required|mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $plantilla = new Plantilla;
        $plantilla->titulo = $request->get('titulo');
        $plantilla->descripcion = $request->get('descripcion');
        if(Input::hasFile('portada')){
            $file = Input::file('portada');
            $file->move(public_path().'/portadas',time().".".$file->getClientOriginalExtension());
            $plantilla->portada=time().".".$file->getClientOriginalExtension();
        }
        $plantilla->save();
        Session::flash('succes', 'Se registro la plantilla');
        return Redirect::to('admin/plantillas');
    }
    function edit($id){
        $plantilla=DB::table('plantilla')->where('id','=',$id)->first();
        return view('panel.plantillas.edit',compact('plantilla'));
    }
    function update(Request $request, $id){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:150',
            'descripcion'=>'required|max:150',
            'portada'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $plantilla = Plantilla::findOrFail($id);
        $plantilla->titulo = $request->get('titulo');
        $plantilla->descripcion = $request->get('descripcion');
        if(Input::hasFile('portada')){
            $file = Input::file('portada');
            $file->move(public_path().'/portadas',time().".".$file->getClientOriginalExtension());
            $plantilla->portada=time().".".$file->getClientOriginalExtension();
        }
        $plantilla->update();
        Session::flash('succes', 'Se actualizo la plantilla');
        return Redirect::to('admin/plantillas');
    }
    function destroy($id){
        $plantilla = Plantilla::findOrFail($id);
        $plantilla->delete();
        Session::flash('succes', 'Se elimino la plantilla');
        return Redirect::to('admin/plantillas');
    }
}
