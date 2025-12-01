<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title', 'Subastas Ganaderas de Panamá - Ganado de Calidad Premium | Remates Ganaderos')</title>
    <meta name="description" content="La mejor subasta ganadera de Panamá. Ganado bovino de raza pura, reproductores de elite, vacas lecheras y toros de calidad. Remates ganaderos transparentes desde 1985.">
    <meta name="keywords" content="subasta ganadera panamá, ganado bovino, reproductores elite, vacas lecheras, toros reproducción, remate ganadero, ganadería panamá, brahman, angus, holstein">
    <meta name="author" content="Subastas Ganaderas de Panamá">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body >

    {{-- Header global --}}
    @include('components.header')

    {{-- Contenido dinámico --}}
   
        @yield('content')
    

    {{-- Footer global --}}
    @include('components.footer')

</body>
</html>