@extends('plantillas.plantilla')

@section('title', 'Crear cursos')

@section('content')
    <h1>En esta pagina podra crear un curso</h1>

    <form action="">
        <label>
            Nombre: 
            <br>
            <input type="text" name="name">
            
        </label>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion"  rows="5"></textarea>
            
        </label>
        <label>
            Categoria: 
            <br>
            <input type="text" name="categoria">
        </label>
    </form>
@endsection
    