<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

</head>
<body>
    <body class="body">
    <div class="header">
        @yield('header'){{-- Encabezado --}}
    </div>

    <nav class="nav">
        @yield('nav'){{-- Menu de navegación --}}
    </nav>

    <div class="main">
        @yield('main'){{-- Menu de crear y buscar --}}
    </div>

    <div class="content">
        @yield('content'){{-- Resultado de registros contenido --}}
    </div>

    <div class="form">
        @yield('form'){{-- Resultado de registros contenido --}}
    </div>

    <div class="footer">
        @yield('footer'){{-- Pie de pagina --}}
    </div>
</body>
</body>
</html>