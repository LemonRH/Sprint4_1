@extends('layouts.app')

@section('title', 'Editar Equipo')

@section('content')
    <h1>Editar Equipo</h1>

    <form action="{{ route('equipos.editar') }}" method="post">
        @csrf
        <label for="equipo_id">Selecciona un equipo:</label>
        <select name="equipo_id" id="equipo_id">
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <label for="nuevo_nombre">Nuevo Nombre:</label>
        <input type="text" name="nuevo_nombre" id="nuevo_nombre" required>

        <button type="submit">Guardar Cambios</button>
    </form>
@endsection
