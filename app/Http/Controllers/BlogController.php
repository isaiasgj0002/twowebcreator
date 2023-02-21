<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $blog = DB::table('blog')->where('idpagina','=',auth()->user()->current_page)->get();
        return view('admin.blog.index',compact('blog'));
    }
    function create(){
        return view('admin.blog.create');
    }
    function store(Request $request){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:250',
            'excerpt'=>'required|max:800',
            'contenido'=>'required',
            'imagen'=>'required|mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $blog = new Blog;
        $blog->slug = Str::slug($request->get('titulo'),'_');
        $blog->titulo = $request->get('titulo');
        $blog->excerpt = $request->get('excerpt');
        $blog->contenido = $request->get('contenido');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/blog',time().".".$file->getClientOriginalExtension());
            $blog->imagen=time().".".$file->getClientOriginalExtension();
        }
        $blog->idpagina = auth()->user()->current_page;
        $blog->save();
        Session::flash('succes', 'Se registro el blog');
        return Redirect::to('admin/blog');
    }
    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('blog'));
    }
    public function update(Request $request, $id){
        $validate = $this->validate($request, [
            'titulo'=>'required|max:250',
            'excerpt'=>'required|max:800',
            'contenido'=>'required',
            'imagen'=>'mimes:jpeg,bmp,jpg,png|max:5000',
        ]);
        $blog = Blog::findOrFail($id);
        $blog->slug = Str::slug($request->get('titulo'),'_');
        $blog->titulo = $request->get('titulo');
        $blog->excerpt = $request->get('excerpt');
        $blog->contenido = $request->get('contenido');
        if(Input::hasFile('imagen')){
            $file = Input::file('imagen');
            $file->move(public_path().'/blog',time().".".$file->getClientOriginalExtension());
            $blog->imagen=time().".".$file->getClientOriginalExtension();
        }
        $blog->idpagina = auth()->user()->current_page;
        $blog->update();
        Session::flash('succes', 'Se actualizo el blog');
        return Redirect::to('admin/blog');
    }
    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        Session::flash('succes', 'Se elimino el blog');
        return Redirect::to('admin/blog');
    }
}
