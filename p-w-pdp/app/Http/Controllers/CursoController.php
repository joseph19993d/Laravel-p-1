<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller

{

    public function index(){
        $cursos = Curso::paginate();
        // return $cursos;
        return view("curso.index", //['cursos'=>$cursos]
        compact('cursos')
     );}
    public function create(){
        return view("curso.create");}

    public function show($curso)
        {

       // $curso2= Curso::where('id',$curs)->first();
        $cursodb= Curso::find($curso);

        if(isset($cursodb)){
            if ($cursodb->name){
                return view("curso.show",['curso'=>$cursodb->name]);
            }
        }else{
            return view("curso.show",['curso'=>'Curso:'.$curso.' aun no existe']);
        }
        }

}
