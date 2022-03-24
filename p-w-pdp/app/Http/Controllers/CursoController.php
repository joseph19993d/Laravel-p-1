<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

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

    public function store(Request $request){
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
                return view("curso.show",['curso'=>$curso]);
                //return view("curso.show",compact('curso'));
            }
        }else{
            return view("curso.show",['curso'=>'Curso:'.$id.' aun no existe']);
        }
        }

    public function edit(Curso $curso){
        return view('curso.edit', compact('curso'));
    }

}
