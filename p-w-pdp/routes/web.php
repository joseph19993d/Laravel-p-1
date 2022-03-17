<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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


Route::get('/{pagina}',function($pagina){
    return "Vista vacia: ".$pagina;
});
Route::get('/',function(){
    return "Vista vacia";
});
Route::get('cursos/create',function(){ return "en esta pagina se podra crear un curso";});
Route::get('cursos/{variable}',function($variable){ return "en esta pagina se podra crear un curso";});
Route::get('cursos/{v1}/{v2}', function($v1,$v2){return "Las varible son[".$v1."]"."[".$v2."]";});


