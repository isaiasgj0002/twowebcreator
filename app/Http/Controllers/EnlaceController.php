<?php

namespace App\Http\Controllers;

use App\Enlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class EnlaceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $enlace = DB::table('enlace')->where('idpagina','=',auth()->user()->current_page)->get();
        return view('admin.enlace.index',compact('enlace'));
    }
    function create(){
        return view('admin.enlace.create');
    }
    function store(Request $request){
        $validate = $this->validate($request, [
            'enlace'=>'required|max:250',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $enlace = new Enlace;
        $enlace->enlace = $request->get('enlace');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/enlaces',time().".".$file->getClientOriginalExtension());
            $enlace->imagen=time().".".$file->getClientOriginalExtension();
        }
        $enlace->idpagina = auth()->user()->current_page;
        $enlace->save();
        Session::flash('succes', 'Se registro el enlace');
        return Redirect::to('admin/enlaces');
    }
    public function edit($id){
        $enlace = Enlace::findOrFail($id);
        return view('admin.enlace.edit',compact('enlace'));
    }
    public function update(Request $request, $id){
        $validate = $this->validate($request, [
            'enlace'=>'required|max:250',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $enlace = Enlace::findOrFail($id);
        $enlace->enlace = $request->get('enlace');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/equipo',time().".".$file->getClientOriginalExtension());
            $enlace->imagen=time().".".$file->getClientOriginalExtension();
        }
        $enlace->idpagina = auth()->user()->current_page;
        $enlace->update();
        Session::flash('succes', 'Se actualizo el enlace');
        return Redirect::to('admin/enlaces');
    }
    public function destroy($id){
        $enlace = Enlace::findOrFail($id);
        $enlace->delete();
        Session::flash('succes', 'Se elimino el enlace');
        return Redirect::to('admin/enlaces');
    }
}
