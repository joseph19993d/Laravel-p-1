@extends('layouts.plantilla')
@section('title','curso '.$curso->name)
@section('content')
<h1>Bienvenido al curso: {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">Volver</a>
<a href="{{route('cursos.edit',$curso)}}">Editar </a>
<p> <strong> Categoria:</strong>  {{$curso->categoria}}</p>
<p> <strong> Descripcion:</strong>  {{$curso->descripcion}}</p>

@endsection

