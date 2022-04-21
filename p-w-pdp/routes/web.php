<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Models\Curso;
/* Para que puedan funcionar los Emails
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
*/
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



//INICIO Rutas Curso-------------------------------------------------------------------------------------------------------->
/*
Route::controller(CursoController::class)->group(
    function(){
        //[CursoControlle::class, 'metodo sea index,create etc']
        Route::get('cursos','index')->name('cursos.index');//vista inicio todos los cursos
        Route::get('cursos/create','create')->name('cursos.create');//vista crear
        Route::get('cursos/{curso}', 'show')->name('cursos.show');//vista curso x
        Route::post('cursos','store')->name('cursos.store'); //crear curso
        Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');//vista editar
        Route::put('cursos/{curso}','update')->name('cursos.update');//actualizar curso
        Route::delete('cursos/{curso}','destroy')->name('curso.destroy');//eliminar curso

    }
);
*/
Route::resource('cursos', CursoController::class);
/* cursos RESOURCE CREA:
  GET|HEAD        curso ................................................. curso.index › CursoController@index
  POST            curso ................................................. curso.store › CursoController@store
  GET|HEAD        curso/create ........................................ curso.create › CursoController@create
  GET|HEAD        curso/{curso} ........................................... curso.show › CursoController@show
  PUT|PATCH       curso/{curso} ....................................... curso.update › CursoController@update
  DELETE          curso/{curso} ..................................... curso.destroy › CursoController@destroy
  GET|HEAD        curso/{curso}/edit ...................................... curso.edit › CursoController@edit
  GET|HEAD        sanctum/csrf-cookie ........................... Laravel\Sanctum › CsrfCookieController@show
*/
/* Route::resource('asignatura', CursoController::class)->parameters(['asignatura'=>'curso'])->names('cursos');
  GET|HEAD        asignatura ........................................... cursos.index › CursoController@index
  POST            asignatura ........................................... cursos.store › CursoController@store
  GET|HEAD        asignatura/create .................................. cursos.create › CursoController@create
  GET|HEAD        asignatura/{curso} ..................................... cursos.show › CursoController@show
  PUT|PATCH       asignatura/{curso} ................................. cursos.update › CursoController@update
  DELETE          asignatura/{curso} ............................... cursos.destroy › CursoController@destroy
  GET|HEAD        asignatura/{curso}/edit ................................ cursos.edit › CursoController@edit

*/

//FIN Rutas Curso-------------------------------------------------------------------------------------------------------->



//INICIO Rutas Home-------------------------------------------------------------------------------------------------------->

Route::controller(HomeController::class)->group(function(){
    Route::get('home', 'home')->name('home');
});
//FIN Rutas Home-------------------------------------------------------------------------------------------------------->
Route::view('nosotros', 'nosotros')->name('nosotros');

//INICIO email-------------------------------------------------------------------------------------------------------->
/*
Route::get('contactanos', function () {
$correo= new ContactanosMailable;
Mail::to('rodelo147@hotmail.com')->send($correo);
return'mensaje enviado';
})->name('contactanos.index');
*/
//FIN Email-------------------------------------------------------------------------------------------------------->

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');








