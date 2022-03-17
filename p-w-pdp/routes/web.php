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




Route::get('/cursos',[CursoController::class,'index']);
Route::get('cursos/create',[CursoController::class,'create']);
Route::get('cursos/{curso}',[CursoController::class, 'show']);


Route::get('/',[HomeController::class, 'home']);
Route::get('/{pagina}',function($pagina){return "Vista: ( ".$pagina." ) vacia";});

