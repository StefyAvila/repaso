@extends('plantillas.plantilla')

@section('title','Curso ' . $curso->name)

@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>

    <a href="{{route('cursos.index')}}">Volver a Curso</a>
    <p><strong>Categoria:</strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
@endsection
    