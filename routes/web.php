<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Lanzar paginas */
Route::get('{dominio}','DominioController@open_page')->name('open.page');
Route::get('{dominio}/contenido/pagina/galeria','DominioController@open_galeria')->name('open.galeria');
Route::get('{dominio}/contenido/pagina/blog','DominioController@open_blog')->name('open.blog');
Route::get('{dominio}/contenido/pagina/blog/{slug}','DominioController@open_blog_single')->name('open.blogsingle');
Route::get('{dominio}/contenido/pagina/contacto','DominioController@open_contacto')->name('open.contacto');
Route::post('{dominio}/contenido/pagina/contacto','DominioController@store_contacto')->name('store.contacto');
Route::get('{dominio}/contenido/pagina/{slug}','DominioController@open_entrada')->name('open.entrada');
/*Dashboard*/
Route::get('home/dashboard', 'DashboardController@index')->name('dashboard');
/*Auth*/
Route::get('/', 'Auth\LoginController@showlogin')->middleware('guest')->name('loginform');
Route::post('login', 'Auth/LoginController@login')->name('login');
Route::get('user/registrar', 'RegistroController@index')->name('registro');
Route::post('user/registrar', 'RegistroController@store')->name('store.registro');
/*Plantillas*/
Route::get('admin/plantillas','PlantillaController@index')->name('index.plantilla');
Route::get('admin/plantilla/create','PlantillaController@create')->name('create.plantilla');
Route::post('admin/plantilla/create','PlantillaController@store')->name('store.plantilla');
Route::get('admin/plantilla/actualizar/{id}','PlantillaController@edit')->name('edit.plantilla');
Route::patch('admin/plantilla/actualizar/{id}','PlantillaController@update')->name('update.plantilla');
Route::delete('admin/plantilla/{id}','PlantillaController@destroy')->name('destroy.plantilla');
/*Paginas*/
Route::get('admin/paginas','PaginaController@index')->name('index.pagina');
Route::get('admin/pagina/create','PaginaController@create')->name('create.pagina');
Route::post('admin/pagina/create','PaginaController@store')->name('store.pagina');
Route::patch('admin/pagina/{id}','PaginaController@update')->name('update.pagina');
Route::delete('admin/pagina/{id}','PaginaController@destroy')->name('destroy.pagina');
Route::patch('admin/pagina/current_page/{id}','PaginaController@current_page')->name('update.current');
Route::get('admin/change/plantilla/{id}','PaginaController@change_theme')->name('change.theme');
Route::patch('admin/change/plantilla{id}','PaginaController@update_theme')->name('update.theme');
/*Menu*/
Route::get('admin/configuracion/menu','ConfigMenuController@index')->name('index.menu');
Route::patch('admin/configuracion/menu/{id}','ConfigMenuController@update')->name('update.menu');
Route::post('admin/configuracion/menu','ConfigMenuController@store')->name('store.menu');
Route::get('admin/configuracion/menu/{id}','ConfigMenuController@edit_item')->name('edit_item');
Route::patch('admin/configuracion/menu/item/{id}','ConfigMenuController@update_item')->name('update_item');
Route::delete('admin/configuracion/menu/{id}','ConfigMenuController@destroy')->name('destroy.menu');
/*General*/
Route::get('admin/configuracion/general','ConfigGeneralController@index')->name('index.general');
Route::patch('admin/configuracion/general/{id}','ConfigGeneralController@update_general')->name('update.general');
/*Footer*/
Route::get('admin/configuracion/footer','ConfigFooterController@index')->name('index.footer');
Route::patch('admin/configuracion/footer/{id}','ConfigFooterController@update_footer')->name('update.footer');

/*Entrada*/
Route::get('admin/entradas','EntradaController@index')->name('index.entrada');
Route::get('admin/entrada/crear','EntradaController@create')->name('create.entrada');
Route::post('admin/entrada/crear','EntradaController@store')->name('store.entrada');
Route::get('admin/entrada/{id}','EntradaController@edit')->name('edit.entrada');
Route::patch('admin/entrada/{id}','EntradaController@update')->name('update.entrada');
Route::delete('admin/entrada/{id}','EntradaController@destroy')->name('destroy.entrada');

/*Equipo*/
Route::get('admin/equipo','EquipoController@index')->name('index.equipo');
Route::get('admin/equipo/crear','EquipoController@create')->name('create.equipo');
Route::post('admin/equipo/crear','EquipoController@store')->name('store.equipo');
Route::get('admin/equipo/{id}','EquipoController@edit')->name('edit.equipo');
Route::patch('admin/equipo/{id}','EquipoController@update')->name('update.equipo');
Route::delete('admin/equipo/{id}','EquipoController@destroy')->name('destroy.equipo');

/*Enlaces*/
Route::get('admin/enlaces','EnlaceController@index')->name('index.enlace');
Route::get('admin/enlace/crear','EnlaceController@create')->name('create.enlace');
Route::post('admin/enlace/crear','EnlaceController@store')->name('store.enlace');
Route::get('admin/enlace/{id}','EnlaceController@edit')->name('edit.enlace');
Route::patch('admin/enlace/{id}','EnlaceController@update')->name('update.enlace');
Route::delete('admin/enlace/{id}','EnlaceController@destroy')->name('destroy.enlace');

/*Galeria*/
Route::get('admin/galeria','GaleriaController@index')->name('index.galeria');
Route::post('admin/galeria/crear','GaleriaController@store')->name('store.galeria');
Route::delete('admin/galeria/{id}','GaleriaController@destroy')->name('destroy.galeria');

/*Seccion Uno*/
Route::get('admin/seccion_uno','SeccionUnoController@index')->name('index.seccion_uno');
Route::patch('admin/seccion_uno/{id}','SeccionUnoController@update')->name('update.seccion_uno');

/*Seccion Dos*/
Route::get('admin/seccion_dos','SeccionDosController@index')->name('index.seccion_dos');
Route::patch('admin/seccion_dos/{id}','SeccionDosController@update')->name('update.seccion_dos');

/*Silder*/
Route::get('admin/slider','SliderController@index')->name('index.slider');
Route::get('admin/slider/crear','SliderController@create')->name('create.slider');
Route::post('admin/slider/crear','SliderController@store')->name('store.slider');
Route::get('admin/slider/{id}','SliderController@edit')->name('edit.slider');
Route::patch('admin/slider/{id}','SliderController@update')->name('update.slider');
Route::delete('admin/slider/{id}','SliderController@destroy')->name('destroy.slider');

/*Blog*/
Route::get('admin/blog','BlogController@index')->name('index.blog');
Route::get('admin/blog/crear','BlogController@create')->name('create.blog');
Route::post('admin/blog/crear','BlogController@store')->name('store.blog');
Route::get('admin/blog/{id}','BlogController@edit')->name('edit.blog');
Route::patch('admin/blog/{id}','BlogController@update')->name('update.blog');
Route::delete('admin/blog/{id}','BlogController@destroy')->name('destroy.blog');
/*Mensajes*/
Route::get('admin/mensajes','ContactoController@index')->name('index.mensajes');

/*Admin*/
Route::get('administrador/usuarios','AdminController@index')->name('index.administrador');
/*Fondos */
Route::get('admin/fondos','ConfigGeneralController@select_fondo')->name('index.fondos');
Route::patch('admin/fondos/{id}','ConfigGeneralController@update_select_fondo')->name('update.fondos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
