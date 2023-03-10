<?php

namespace App\Http\Controllers;

use App\ConfigMenu;
use App\ConfigItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class ConfigMenuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    function index(){
        $pagina = DB::table('users')->where('current_page','=',auth()->user()->current_page)->first();
        $current_page = $pagina->{'current_page'};
        $dato_pagina = DB::table('pagina')->where('id','=',auth()->user()->current_page)->first();
        $dominio = $dato_pagina->{'dominio'};
        $menu=DB::table('config_menu')->where('idpagina','=',$current_page)->first();
        $items = DB::table('config_item')->where('idmenu','=',$menu->{'id'})->get();
        $entradas = DB::table('entrada')->where('idpagina','=',auth()->user()->current_page)->get();
        return view('admin.menu.index',compact('menu','items','dominio','entradas'));
    }
    function update(Request $request, $id){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:250',
            'color'=>'required|max:50',
            'background'=>'required|max:50',
        ]);
        $menu = ConfigMenu::findOrFail($id);
        $menu->titulo = $request->get('titulo');
        $menu->color = $request->get('color');
        $menu->background = $request->get('background');
        $menu->update();
        Session::flash('succes', 'Se actualizo su menu');
        return Redirect::to('admin/configuracion/menu');
    }
    function store(Request $request){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:150',
            'enlace'=>'required|max:350',
            'icono'=>'required|max:50',
        ]);
        $item = new ConfigItem;
        $item->titulo = $request->get('titulo');
        $item->enlace = $request->get('enlace');
        $item->icono = $request->get('icono');
        $item->idmenu = $request->get('idmenu');
        $item->save();
        Session::flash('succes', 'Se agrego su elemento de menu');
        return Redirect::to('admin/configuracion/menu');
    }
    function destroy($id){
        $item = ConfigItem::findOrFail($id);
        $item->delete();
        Session::flash('succes', 'Se elimino el menu');
        return Redirect::to('admin/configuracion/menu');
    }
    public function edit_item($id){
        $pagina = DB::table('users')->where('current_page','=',auth()->user()->current_page)->first();
        $current_page = $pagina->{'current_page'};
        $dato_pagina = DB::table('pagina')->where('id','=',auth()->user()->current_page)->first();
        $dominio = $dato_pagina->{'dominio'};
        $entradas = DB::table('entrada')->where('idpagina','=',auth()->user()->current_page)->get();
        $menu=DB::table('config_menu')->where('idpagina','=',$current_page)->first();
        $item_menu = ConfigItem::findOrFail($id);
        return view('admin.menu.edit',compact('item_menu','menu','dominio','entradas'));
    }
    function update_item(Request $request, $id){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:150',
            'enlace'=>'required|max:350',
            'icono'=>'required|max:50',
        ]);
        $item = ConfigItem::findOrFail($id);
        $item->titulo = $request->get('titulo');
        $item->enlace = $request->get('enlace');
        $item->icono = $request->get('icono');
        $item->idmenu = $request->get('idmenu');
        $item->update();
        Session::flash('succes', 'Se actualizo su elemento de menu');
        return Redirect::to('admin/configuracion/menu');
    }
}
