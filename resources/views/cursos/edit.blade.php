@extends('layouts.layout')

@section('titulo', 'Editar Curso')

@section('content')
    <a href="{{ route('cursos.show', $curso->id) }}">Volver</a>
    <h1>Editar curso: {{ $curso->nombre }}</h1>

    <form action="{{ route('cursos.update', $curso->id) }}" method="post">
        @csrf
        @method('put');

        <input type="text" name="nombre" placeholder="Nombre del curso" value="{{ $curso->nombre }}"><br><br>
        <input type="text" name="categoria" placeholder="Categoria" value="{{ $curso->categoria }}"><br><br>
        <textarea name="descripcion" placeholder="Añade una descripcion">{{ $curso->descripcion }}</textarea><br><br>
        <input type="submit" value="Actualizar Curso">

    </form>
@endsection
