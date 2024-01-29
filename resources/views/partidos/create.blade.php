<!-- resources/views/partidos/create.blade.php -->

@extends('layouts.app')

@section('title', 'Crear Partido')

@section('content')
    <h1>Crear Partido</h1>

    <form action="{{ route('partidos.store') }}" method="post">
        @csrf

        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
        </div>

        <div>
            <label for="resultado_local">Resultado Local:</label>
            <input type="number" name="resultado_local" id="resultado_local">
        </div>

        <div>
            <label for="resultado_visitante">Resultado Visitante:</label>
            <input type="number" name="resultado_visitante" id="resultado_visitante">
        </div>

        <div>
            <label for="equipo_local_id">Equipo Local:</label>
            <select name="equipo_local_id" id="equipo_local_id" required>
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="equipo_visitante_id">Equipo Visitante:</label>
            <select name="equipo_visitante_id" id="equipo_visitante_id" required>
                @foreach($equipos as $equipo)
                    <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Crear Partido</button>
    </form>
@endsection