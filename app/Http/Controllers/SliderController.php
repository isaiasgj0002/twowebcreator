<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $slider = DB::table('slider')->where('idpagina','=',auth()->user()->current_page)->get();
        return view('admin.slider.index',compact('slider'));
    }
    function create(){
        return view('admin.slider.create');
    }
    function store(Request $request){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:250',
            'imagen'=>'required|mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $slider = new Slider;
        $slider->titulo = $request->get('titulo');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/sliders',time().".".$file->getClientOriginalExtension());
            $slider->imagen=time().".".$file->getClientOriginalExtension();
        }
        $slider->idpagina = auth()->user()->current_page;
        $slider->save();
        Session::flash('succes', 'Se registro el slider');
        return Redirect::to('admin/slider');
    }
    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit',compact('slider'));
    }
    public function update(Request $request, $id){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:150',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $slider = Slider::findOrFail($id);
        $slider->titulo = $request->get('titulo');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/sliders',time().".".$file->getClientOriginalExtension());
            $slider->imagen=time().".".$file->getClientOriginalExtension();
        }
        $slider->idpagina = auth()->user()->current_page;
        $slider->update();
        Session::flash('succes', 'Se actualizo la configuracion');
        return Redirect::to('admin/slider');
    }
    public function destroy($id){
        $slider = Slider::findOrFail($id);
        $slider->delete();
        Session::flash('succes', 'Se elimino la configuracion seleccionada');
        return Redirect::to('admin/slider');
    }
}
