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
                    <option value="{{ $partido->id }}" 
                        data-local="{{ $partido->equipoLocal->nombre }}" 
                        data-visitante="{{ $partido->equipoVisitante->nombre }}" 
                        data-fecha="{{ $partido->fecha }}"
                        data-resultado-local="{{ $partido->resultado_local }}"
                        data-resultado-visitante="{{ $partido->resultado_visitante }}">
                        {{ $partido->equipoLocal->nombre }} vs {{ $partido->equipoVisitante->nombre }} - {{ $partido->fecha }}
                    </option>
                @endforeach
            </select>
        </div>

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
            <label for="equipo_local">Equipo Local:</label>
            <input type="text" name="equipo_local" id="equipo_local">
        </div>

        <div>
            <label for="equipo_visitante">Equipo Visitante:</label>
            <input type="text" name="equipo_visitante" id="equipo_visitante">
        </div>

        <button type="submit">Actualizar Partido</button>
    </form>

    <a href="{{ route('partidos.index') }}">Cancelar</a>

    <script>
        document.getElementById('partido_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            document.getElementById('fecha').value = selectedOption.getAttribute('data-fecha');
            document.getElementById('resultado_local').value = selectedOption.getAttribute('data-resultado-local');
            document.getElementById('resultado_visitante').value = selectedOption.getAttribute('data-resultado-visitante');
            document.getElementById('equipo_local').value = selectedOption.getAttribute('data-local');
            document.getElementById('equipo_visitante').value = selectedOption.getAttribute('data-visitante');
        });
    </script>
@endsection
