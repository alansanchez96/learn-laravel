@extends('layouts.layout')

@section('titulo', 'Contacto')

@section('content')
    <h1>Contacto</h1>
    <h2>Envianos un mensaje</h2>
    <form action="{{ route('contacto.store') }}" method="post">
        @csrf

        <input type="text" name="nombre" placeholder="Tu nombre" value="{{ old('nombre') }}"><br>
        @error('nombre')
            <small><i>{{ $message }}</i></small>
        @enderror <br>
        <input type="email" name="email" placeholder="Tu email" value="{{ old('email') }}"><br>
        @error('email')
            <small><i>{{ $message }}</i></small>
        @enderror <br>
        <textarea name="mensaje" placeholder="Tu mensaje">{{ old('mensaje') }}</textarea><br>
        @error('mensaje')
            <small><i>{{ $message }}</i></small>
        @enderror <br>

        <input type="submit" value="Enviar mensaje">
    </form>

    @if (session('info'))   {{-- Recibe el parametro de with('info') --}}
        <p>Mensaje enviado correctamente</p>
    @endif

@endsection
