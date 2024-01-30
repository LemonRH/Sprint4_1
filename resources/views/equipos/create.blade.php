@extends('layouts.app')

@section('title', 'Crear Equipo')

@section('content')
    <h1>Crear Equipo</h1>

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre del Equipo:</label>
        <input type="text" name="nombre" required>
        <button type="submit">Crear Equipo</button>
    </form>
@endsection
