@extends('layouts.plantilla')
@section('title','Cursos Edit')
@section('content')

<h1> En esta pagina podras editar el curso:  {{$curso->name}}</h1>



<form action="{{route('cursos.store')}}" method="POST">
@csrf
<label for="">
    Nombre:
    <br>
    <input type="text" name="name" value="{{$curso->name}}"/>
</label>
<br>

<label for="">
    Descripcion:
    <br>
    <textarea name="descripcion" id="" cols="30" rows="5"  >{{$curso->descripcion}}</textarea>
</label>
<br>

<label for="">
    Categoria:
    <br>
    <input type="text" name="categoria" maxlength="20" value="{{$curso->categoria}}" />
</label>
<p>
<button type="submit" value="">Enviar formulario </button>
</form>


@endsection
