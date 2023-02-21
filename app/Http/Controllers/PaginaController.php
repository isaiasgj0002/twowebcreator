<?php

namespace App\Http\Controllers;

use App\ConfigFooter;
use App\ConfigGeneral;
use App\ConfigItem;
use App\ConfigMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pagina;
use App\SeccionUno;
use App\SeccionDos;
use App\Slider;
use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PaginaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $data_paginas = DB::table('pagina')->where('iduser','=',auth()->user()->id)->orderby('id','desc')->get();
        return view('admin.pagina.index',compact('data_paginas'));
    }
    function create(){
        $plantillas = DB::table('plantilla')->orderby('id','asc')->get();
        return view('admin.pagina.create',compact('plantillas'));
    }
    function store(Request $request){
        $validate = $this->validate($request, [
            'dominio'=>'required|unique:pagina|regex:/^[0-9a-zA-Z\s]+$/u',
            'idplantilla'=>'required',
        ]);
        /*Guardar pagina */
        $pagina = new Pagina;
        $pagina->dominio=$request->get('dominio');
        $pagina->idplantilla=$request->get('idplantilla');
        $pagina->iduser=auth()->user()->id;
        $pagina->estado='activo';
        $pagina->save();
        /*Guardar configuracion por defecto */
        /*Seccion 1 */
        $seccion_uno = new SeccionUno;
        $seccion_uno->titulo = 'Titulo de mi seccion';
        $seccion_uno->descripcion = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil eum magni culpa impedit accusamus quibusdam vero reprehenderit quos cum et voluptate molestias repellat modi, rem sunt aliquid optio cumque provident tempore ducimus? Fugit ad id fugiat et ipsa illum consequatur?';
        $seccion_uno->imagen='default_s1.jpg';
        $seccion_uno->idpagina=$pagina->id;
        $seccion_uno->save();
        /*Seccion 2 */
        $seccion_dos = new SeccionDos;
        $seccion_dos->titulo = 'Titulo de mi seccion';
        $seccion_dos->descripcion = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil eum magni culpa impedit accusamus quibusdam vero reprehenderit quos cum et voluptate molestias repellat modi, rem sunt aliquid optio cumque provident tempore ducimus? Fugit ad id fugiat et ipsa illum consequatur?';
        $seccion_dos->imagen='default_s2.jpg';
        $seccion_dos->idpagina=$pagina->id;
        $seccion_dos->save();
        /*Config menu */
        $config_menu = new ConfigMenu;
        $config_menu->color='#fff';
        $config_menu->background='#2471A3';
        $config_menu->titulo='titulo de pagina';
        $config_menu->idpagina=$pagina->id;
        $config_menu->save();
        /*Menu por defecto */
        $config_item = new ConfigItem;
        $config_item->titulo='Inicio';
        $config_item->enlace='http://127.0.0.1:8000/'.$request->get('dominio');
        $config_item->icono='<i class="icon-home"></i>';
        $config_item->idmenu=$config_menu->id;
        $config_item->save();
        /*Configuracion general */
        $config_general = new ConfigGeneral;
        $config_general->fuente='Open Sans';
        $config_general->size='10px';
        $config_general->logo='logo_df.png';
        $config_general->fondo_principal='fondo_df.jpg';
        $config_general->titulo='titulo';
        $config_general->favicon='favicon_df.ico';
        $config_general->mapa='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d76420.12283573876!2d-77.06559648991389!3d-12.04345981183338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c5f619ee3ec7%3A0x14206cb9cc452e4a!2sLima!5e0!3m2!1ses-419!2spe!4v1672351099090!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        $config_general->idpagina=$pagina->id;
        $config_general->save();
        /*Configuracion del footer */
        $footer = new ConfigFooter;
        $footer->color='#fff';
        $footer->background='#2471A3';
        $footer->cr='Todos los derechos reservados';
        $footer->direccion='av principal 001';
        $footer->telefono='999999999';
        $footer->correo='info@gmail.com';
        $footer->horarios='mis horarios: 00:00 a 12:00';
        $footer->idpagina=$pagina->id;
        $footer->save();
        /*Slider por defecto */
        $slider1 = new Slider;
        $slider1->titulo = 'Slider 1';
        $slider1->imagen = 'slider_1.jpg';
        $slider1->idpagina=$pagina->id;
        $slider1->save();
        $slider2 = new Slider;
        $slider2->titulo = 'Slider 2';
        $slider2->imagen = 'slider_2.jpg';
        $slider2->idpagina=$pagina->id;
        $slider2->save();
        $slider3 = new Slider;
        $slider3->titulo = 'Slider 3';
        $slider3->imagen = 'slider_3.jpg';
        $slider3->idpagina=$pagina->id;
        $slider3->save();
        Session::flash('succes', 'Se registro tu pagina');
        return Redirect::to('admin/paginas');
    }
    function update(Request $request,$id){
        $validate = $this->validate($request, [
            'dominio'=>'required|unique:pagina|regex:/^[0-9a-zA-Z\s]+$/u',
        ]);
        $pagina = Pagina::findOrFail($id);
        $pagina->dominio=$request->get('dominio');
        $pagina->update();
        Session::flash('succes', 'Se cambio el dominio');
        return Redirect::to('admin/paginas');
    }
    function destroy($id){
        $pagina = Pagina::findOrFail($id);
        $pagina->delete();
        Session::flash('succes', 'Se elimino la pagina');
        return Redirect::to('admin/paginas');
    }
    function change_theme($id){
        $plantillas = DB::table('plantilla')->get();
        $pagina = DB::table('pagina')->where('id','=',$id)->first();
        return view('admin.pagina.change_theme',compact('plantillas','pagina'));
    }
    function update_theme(Request $request,$id){
        $pagina = Pagina::findOrFail($id);
        $pagina->idplantilla = $request->get('idplantilla');
        $pagina->update();
        Session::flash('succes', 'Se cambio la plantilla');
        return Redirect::to('admin/paginas');
    }
    public function current_page(Request $request, $id){
        $user = User::findOrFail($id);
        $user->current_page = $request->get('current_page');
        $user->update();
        Session::flash('succes', 'Se selecciono su pagina de edicion');
        return Redirect::to('admin/paginas');
    }
}
