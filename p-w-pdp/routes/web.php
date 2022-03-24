<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Models\Curso;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');

});
*/
Route::controller(CursoController::class)->group(
    function(){
        //[CursoControlle::class, 'metodo sea index,create etc']
        Route::get('cursos','index')->name('cursos.index');
        Route::get('cursos/create','create')->name('cursos.create');
        Route::get('cursos/{curso}', 'show')->name('cursos.show');
        Route::post('cursos','store')->name('cursos.store');
        Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');


    }
);




Route::get('/',HomeController::class); //laravel menor a 9


Route::controller(HomeController::class)->group(function(){
});

Route::get('/{pagina}',function($pagina){return "Vista: ( ".$pagina." ) vacia";});





