<!-- resources/views/equipos/create.blade.php -->

<form action="{{ route('equipos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre del Equipo:</label>
    <input type="text" name="nombre" required>
    <button type="submit">Crear Equipo</button>
</form>
