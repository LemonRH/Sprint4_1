<!-- resources/views/equipos/index.blade.php -->

<h1>Lista de Equipos</h1>

<ul>
    @foreach($equipos as $equipo)
        <li>{{ $equipo->nombre }}</li>
    @endforeach
</ul>
