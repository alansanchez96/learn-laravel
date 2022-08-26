@extends('layouts.layout')

@section('titulo', 'Crear curso')

@section('content')
    <a href="{{ route('cursos.index') }}">
        Volver</a>
    <h1>Crear curso</h1>

    <form action="{{ route('cursos.store') }}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre del curso" value="{{old('nombre')}}"><br>
        @error('nombre')
            <small><i>{{ $message }}</i></small>
        @enderror <br>
        <input type="text" name="categoria" placeholder="Categoria" value="{{old('categoria')}}"><br>
        @error('categoria')
            <small><i>{{ $message }}</i></small>
        @enderror
        <br>
        <textarea name="descripcion" placeholder="Añade una descripcion" value="{{old('descripcion')}}"></textarea><br>
        @error('descripcion')
            <small><i>{{ $message }}</i></small>
        @enderror
        <br>
        <input type="submit" value="Crear curso">
    </form>
@endsection
