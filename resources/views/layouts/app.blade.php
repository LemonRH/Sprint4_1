<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <header>
        <div class="container">
            <h1>Gestor de Equipos y partidos</h1>
            <nav>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/equipos">Equipos</a></li>
                    <li><a href="/partidos">Partidos</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <div class="container">
            
        </div>
    </footer>

</body>
</html>
