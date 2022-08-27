@extends('layouts.layout')

@section('titulo', 'Editar Curso')

@section('content')
    <a href="{{ route('cursos.show', $curso->id) }}">
        Volver</a>
    <h1>Editar curso: {{ $curso->nombre }}</h1>

    <form action="{{ route('cursos.update', $curso->id) }}" method="post">
        @method('put')
        @csrf

        <input type="text" name="nombre" placeholder="Nombre del curso" value="{{ old('nombre', $curso->nombre) }}"><br>
        @error('nombre')
            <small><i>{{ $message }}</i></small>
        @enderror <br>
        <input type="text" name="categoria" placeholder="Categoria" value="{{ old('categoria', $curso->categoria) }}"><br>
        @error('categoria')
            <small><i>{{ $message }}</i></small>
        @enderror
        <br>
        <textarea name="descripcion" placeholder="Añade una descripcion">{{ old('descripcion', $curso->descripcion) }}</textarea><br>
        @error('descripcion')
            <small><i>{{ $message }}</i></small>
        @enderror
        <br>
        <input type="submit" value="Actualizar Curso">

    </form>
@endsection
