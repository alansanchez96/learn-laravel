@extends('layouts.layout')

@section('titulo', 'Curso '. $curso->nombre)

@section('content')
    <a href="{{ route('cursos.index') }}">Volver</a>

    <h1>Te encontras en el curso: {{$curso->nombre}}</h1>
    <h3>Categoria: <b>{{$curso->categoria}}</b></h3>
    <p>Descripcion: <i>{{$curso->descripcion}}</i></p>
@endsection