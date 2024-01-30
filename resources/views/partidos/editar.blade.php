@extends('layouts.app')

@section('title', 'Editar Partido')

@section('content')
    <h1>Editar Partido</h1>

    <form action="{{ route('partidos.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="partido_id">Seleccionar Partido:</label>
            <select name="partido_id" id="partido_id" required>
                @foreach($partidos as $partido)
                    <option value="{{ $partido->id }}">
                        {{ $partido->equipoLocal->nombre }} vs {{ $partido->equipoVisitante->nombre }} - {{ $partido->fecha }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" value="{{ old('fecha') }}" required>
        </div>

        <div>
            <label for="resultado_local">Resultado Local:</label>
            <input type="number" name="resultado_local" id="resultado_local" value="{{ old('resultado_local') }}">
        </div>

        <div>
            <label for="resultado_visitante">Resultado Visitante:</label>
            <input type="number" name="resultado_visitante" id="resultado_visitante" value="{{ old('resultado_visitante') }}">
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

        <button type="submit">Actualizar Partido</button>
    </form>

    <a href="{{ route('partidos.index') }}">Cancelar</a>
@endsection
