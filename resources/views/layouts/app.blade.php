<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        header { background: #840ba8; color: white; padding: 15px 30px; }
        main { padding: 30px; }
        footer { background: #ecf0f1; text-align: center; padding: 10px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f55698; color: white; }
    </style>
</head>
<body>
    <header>
        <h1>Catálogo de libros</h1>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Actividad evaluable Laravel - RA2 y RA3</p>
    </footer>
</body>
</html>