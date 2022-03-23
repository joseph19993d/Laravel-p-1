<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{curso}', 'show')->name('cursos.show');
}
    );

Route::get('/',HomeController::class);


Route::controller(HomeController::class)->group(function(){
});

Route::get('/{pagina}',function($pagina){return "Vista: ( ".$pagina." ) vacia";});


