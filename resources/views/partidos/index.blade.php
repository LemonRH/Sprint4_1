@extends('layouts.app')

@section('title', 'Lista de Partidos')

@section('content')
    <h1>Lista de Partidos</h1>

    @if ($partidos->isEmpty())
        <p>No hay partidos registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Equipo Local</th>
                    <th>Resultado Local</th>
                    <th>Equipo Visitante</th>
                    <th>Resultado Visitante</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($partidos as $partido)
                    <tr>
                        <td>{{ $partido->fecha }}</td>
                        <td>{{ $partido->equipoLocal->nombre }}</td>
                        <td>{{ $partido->resultado_local }}</td>
                        <td>{{ $partido->equipoVisitante->nombre }}</td>
                        <td>{{ $partido->resultado_visitante }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('partidos.create') }}" class="btn">Crear Nuevo Partido</a>
    
    <a href="{{ route('partidos.edit') }}" class="btn">Editar Partido</a>
    
    <a href="{{ route('partidos.eliminar-formulario') }}" class="btn">Eliminar Partido</a>
    
@endsection
