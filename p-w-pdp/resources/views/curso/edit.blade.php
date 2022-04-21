@extends('layouts.plantilla')
@section('title','Cursos Edit')
@section('content')

<h1> En esta pagina podras editar el curso:  {{$curso->name}}</h1>


<form action="{{route('cursos.update', $curso)}}" method="POST">

@csrf
@method('put') <!-- METODO INPORTANTE, ES LA FORMA COMO LO RECIVIRA WEB -->



<label for="">
    Nombre:
    <br>
    <input type="text" name="name" value="{{old('name',$curso->name)}}"/>
</label>
@error('name')
<br>
<small>*{{$message}}</small>
<br>
@enderror
<br>



<label for="">
    Descripcion:
    <br>
    <textarea name="descripcion" id="" cols="30" rows="5" value  >{{old('descripcion', $curso->descripcion)}}</textarea>
</label>
@error('descripcion')
<br>
<small>*{{$message}}</small>
<br>
@enderror
<br>



<label for="">
    Categoria:
    <br>
    <input type="text" name="categoria" maxlength="20" value="{{old('categoria',$curso->categoria)}}" />
</label>
@error('categoria')
<br>
<small>*{{$message}}</small>
<br>
@enderror
<p>



<button type="submit" value="">Enviar formulario </button>
</form>


@endsection
