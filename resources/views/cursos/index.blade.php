@extends('layouts.layout')

@section('titulo', 'Cursos')

@section('content')
    <h1>Bienvenido a nuestros cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear nuevo curso</a>
    <h2>Aqui veras nuestros cursos disponibles</h2>

    <ul>
        @foreach ($cursos as $curso)
            <a href="{{ route('cursos.show', $curso->slug) }}"><li>{{$curso->nombre}}</li></a>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection