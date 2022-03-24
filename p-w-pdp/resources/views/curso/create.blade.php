@extends('layouts.plantilla')
@section('title','show')

@section('content')
<h1>En esta pagina podras crear cursos </h1>

<form action="{{route('cursos.store')}}" method="POST">
@csrf
<label for="">
    Nombre:
    <br>
    <input type="text" name="name" />
</label>
<br>

<label for="">
    Descripcion:
    <br>
    <textarea name="descripcion" id="" cols="30" rows="5" ></textarea>
</label>
<br>

<label for="">
    Categoria:
    <br>
    <input type="text" name="categoria" maxlength="20" />
</label>
<p>
<button type="submit" value="">Enviar formulario </button>
</form>


@endsection
