@extends('layouts.app')

@section('title', 'Lista de Equipos')

@section('content')
    <h1>Lista de Equipos</h1>

    <ul>
        @foreach($equipos as $equipo)
            <li>{{ $equipo->nombre }}</li>
        @endforeach
    </ul>

    <div>
        <a href="{{ route('equipos.create') }}" class="btn btn-primary">Crear Equipo</a>
        <a href="{{ route('equipos.editar-formulario') }}" class="btn btn-primary">Editar Equipo</a>
        <a href="{{ route('equipos.eliminar-formulario') }}" class="btn btn-danger">Eliminar Equipo</a>
    </div>
@endsection
