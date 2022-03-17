<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){return "Bienvenido a cursos";}
    public function create(){ return "pagin de crear";}
    public function show($curso){  return "El curso a crar es: ".$curso;}
}
