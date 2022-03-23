@extends('layouts.plantilla')
@section('title','index')
@section('content')
<h1>Bienvenido a la pagina principal de cursos</h1>
<a href={{route('cursos.create')}}> crear curso</a>
<ul>
    @foreach($cursos as $curso=> $cursolist)
    <li>
            (
           <a href=""> {{$cursolist->name}} </a>
            )

    </li>
    @endforeach
    {{$cursos->links()}}

</ul>
@endsection
