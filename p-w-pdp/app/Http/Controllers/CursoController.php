<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;
use App\Http\Requests\StoreCurso;
use Illuminate\Contracts\Cache\Store;
use PhpParser\Node\Expr\FuncCall;

class CursoController extends Controller

{

    public function index(){
        $cursos = Curso::orderBy('id','desc')->paginate();
        // return $cursos;
        return view("curso.index", //['cursos'=>$cursos]
        compact('cursos')
     );}


    public function create(){
        return view("curso.create");
    }


  //  public function store(Request $request){
    public function store(StoreCurso $request){
       // return $request->all();

       $curso= new Curso();
       $curso->name = $request->name;
       $curso->descripcion = $request->descripcion;
       $curso->categoria = $request->categoria;
       $curso->save();
        ?> <script> console.log('fase 1 stroe finished'); </script>   <?php
        return redirect()->route('cursos.show',$curso);

        ?> <script> console.log('fase 2 stroe finished'); </script>   <?php
    }


    public function show($id)
        {

       // $curso2= Curso::where('id',$curs)->first();
        $curso= Curso::find($id);

        if(isset($curso)){
            if ($curso->name){
                //return view("curso.show",['curso'=>$curso]);
                return view("curso.show",compact('curso'));
                // return  redirect()->route('cursos.show',$curso);

            }
        }else{
            return view("curso.show",['curso'=>'Curso:'.$id.' aun no existe']);
        }
        }


    public function edit(Curso $curso){
        return view('curso.edit', compact('curso'));
    }


    //public function update(Request $request, Curso $curso){
    public function update(StoreCurso $request, Curso $curso){
        //$curso = new Curso();
        /*
        $request-> validate([
        'name'=>'required',
        'descripcion'=>'required',
        'categoria'=>'required'
        ]);
        */

        $curso->name= $request->name;
        $curso->descripcion= $request->descripcion;
        $curso->categoria= $request->categoria;
        $curso->save();
        return  redirect()->route('cursos.show',$curso);
       //return view("curso.show",['curso'=>$curso]);



    }

}
