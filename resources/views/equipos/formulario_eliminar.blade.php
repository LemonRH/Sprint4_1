<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Equipo</title>
</head>
<body>
    <h1>Eliminar Equipo</h1>

    <form action="{{ route('equipos.eliminar') }}" method="POST">
        @csrf
        @method('DELETE')

        <label for="equipo_id">Selecciona un equipo:</label>
        <select name="equipo_id" required>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <button type="submit">Eliminar Equipo</button>
    </form>

    <a href="{{ route('equipos.index') }}">Cancelar</a>
</body>
</html>
