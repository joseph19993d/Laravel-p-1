@extends('layouts.plantilla')
@section('title','curso create')

@section('content')
<h1>En esta pagina podras crear cursos </h1>
<a href="{{route('cursos.index')}}">Volver</a>

<form action="{{route('cursos.store')}}" method="POST">
@csrf
<label for="">
    Nombre:
    <br>
    <input type="text" name="name" value="{{old('name')}}" />
</label>
@error('name')
<br>
<small>*{{$message}}</small>
<br>

@enderror
<br>

<label >
    Descripcion:
    <br>
    <textarea name="descripcion" rows="4"  value="{{old('descripcion')}}"></textarea>
</label>
@error('descripcion')
<br>
<small>*{{$message}}</small>
<br>
@enderror
<br>

<label >
    Categoria:
    <br>
    <input type="text" name="categoria" maxlength="20" value="{{old('categoria')}}" />
</label>
@error('categoria')
<br>
<small>*{{$message}}<small>
<br>
@enderror
<p>
<button type="submit" value="">Enviar formulario </button>
</form>


@endsection
