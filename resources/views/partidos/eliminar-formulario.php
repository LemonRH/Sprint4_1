@extends('layouts.app')

@section('title', 'Eliminar Partido')

@section('content')
    <h1>Eliminar Partido</h1>

    <form action="{{ route('partidos.eliminar') }}" method="POST">
        @csrf
        @method('DELETE')

        <label for="partido_id">Selecciona un partido:</label>
        <select name="partido_id" required>
            @foreach($partidos as $partido)
                <option value="{{ $partido->id }}">{{ $partido->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Eliminar Partido</button>
    </form>

    <a href="{{ route('partidos.index') }}">Cancelar</a>
@endsection
