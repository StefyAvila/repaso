@extends('plantillas.plantilla')

@section('title', 'Cursos')

@section('content')
     <h1>Bienvenido a la pagina principal de cursos</h1>

     <a href="{{route('cursos.create')}}">Crear Curso</a>

     <ul>
          @foreach ($cursos as $curso)
          <li>
               <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
          </li>
          @endforeach
     </ul>

     {{$cursos->links()}}
@endsection
