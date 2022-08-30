<?php


use App\Http\Controllers\MaquilladoresController;
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

Route::get('/', function () {

    if (Auth::check()) {//Verificamos si el usuario ya esta autenticado


        //Estas opciones son para trabajar con el menu principal
        $opcionPrincipal = "home";
        $opcionSegundaria = "";
        $contexto = ['opcion1'=>$opcionPrincipal,
                     'opcion2'=>$opcionSegundaria
                    ];
        return view('home',$contexto);

    
    }else{//Si no estas autenticado te manda al login
    
        return view('auth.login');
    
    }

    
    
})->name('inicio');

Auth::routes();
Route::get('/logout','App\Http\Controllers\Auth\LoginController@logout')->name('logout');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//EL middleware es para evitar que entre si no esta autenticado
Route::get('/maquilladores', 'App\Http\Controllers\MaquilladoresController@index')->middleware(('auth'))->name('maquilladores');
Route::get('/maquilladores/{id}/mostrar', 'App\Http\Controllers\MaquilladoresController@mostrar')->middleware(('auth'))->name('maquilladores-mostrar');


//Vista de productos(articulos o cosmeticos)
Route::get('/productos', 'App\Http\Controllers\MaquilladoresController@index')->middleware(('auth'));
