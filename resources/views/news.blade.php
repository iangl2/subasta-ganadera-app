@extends('layouts.app')

@section('title', 'Noticias')

@section('content')
       @vite(['resources/css/news.css', 'resources/js/app.js', 'resources/js/news.js'])

<main>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - Subasta Ganadera de Panamá</title>
    <meta name="description" content="Últimas noticias del sector ganadero en Panamá. Manténgase informado sobre subastas, mercado ganadero y tecnología agropecuaria.">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/noticias.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div data-include="../components/header.html"></div>

    <main class="main noticias-main">
        <!-- Hero Section -->
        <section class="noticias-hero">
            <div class="container">
                
                <p class="noticias-hero-subtitle">Mantente informado sobre las últimas novedades del sector ganadero en Panamá</p>
            </div>
        </section>

        <!-- Noticias Principales -->
        <section class="noticias-section">
            <div class="container">
                <div class="noticias-grid" id="noticias-container">
                    <!-- Las noticias se cargarán dinámicamente aquí -->
                </div>
            </div>
        </section>

        <!-- Noticias Recomendadas -->
        <section class="noticias-recomendadas-section">
            <div class="container">
                <h2 class="section-title">Noticias Recomendadas</h2>
                <div class="noticias-recomendadas-grid" id="noticias-recomendadas-container">
                    <!-- Las noticias recomendadas se cargarán dinámicamente aquí -->
                </div>
            </div>
        </section>
    </main>

    <div data-include="../components/footer.html"></div>

    <script src="../js/header.js"></script>
    <script src="../js/include.js"></script>
    <script src="../js/noticias.js"></script>
</body>
</html>
</main>


@endsection
