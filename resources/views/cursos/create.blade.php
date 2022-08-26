@extends('layouts.layout')

@section('titulo', 'Crear curso')

@section('content')
    <a href="{{ route('cursos.index') }}">Volver</a>
    <h1>Crear curso</h1>

    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre del curso"><br><br>
        <input type="text" name="categoria" placeholder="Categoria"><br><br>
        <textarea name="descripcion" placeholder="Añade una descripcion"></textarea><br><br>
        <input type="submit" value="Crear curso">
    </form>
@endsection
