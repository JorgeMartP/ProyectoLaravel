<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    <!-- Agrega tus hojas de estilo aquí -->
    <link rel="stylesheet" href="{{ asset('CSS/app.css') }}">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ route('empresa.index') }}">Empresa</a>
            <a href="{{ route('empleado.index') }}">Empleados</a>
            <a href="{{ route('contratos.index') }}">Contratos</a>
            <a href="{{ route('horas_extras.index') }}">Horas Extra</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Aquí puedes poner tu pie de página -->
        <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
