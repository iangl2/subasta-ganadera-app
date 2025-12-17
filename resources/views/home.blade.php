


@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
       @vite(['resources/css/styles.css', 'resources/js/app.js'])


    <main class="main">
        <!-- Hero adaptado -->
        <section class="section banner-section">
            <div class="container banner-column">
                <div class="banner-inner">
                    <h1 class="title-large">Bienvenido a Subasta Ganadera</h1>
                    <p class="text-base font-normal">
                        La plataforma líder para subastas de ganado en línea. Encuentra las mejores oportunidades para productores y compradores en Panamá.
                    </p>
                    <button type="button" class="btn btn-primary">
                        Descubre más <i class="bx bx-chevron-right"></i>
                    </button>
                </div>
                <div class="banner-image-wrapper">
                    <img src="{{ asset('img/beautiful-cow-green-grass-with-blue-sky-removebg-preview.png') }}" class="banner-image" width="480" height="360" alt="banner image">
                </div>

            </div>
        </section>

        <!-- Upcoming Events (sin cambios) -->
        <section id="upcoming-events" aria-labelledby="events-heading">
          <section id="featured-auctions">
             <h2 id="events-heading">Subastas activas</h2>

<div class="auction-carousel">
    <div class="auction-carousel-track">
        @forelse ($auctions as $auction)
            <div class="auction-card">
               @php
                    $imageUrl = $auction->cow->image
                        ? Storage::disk('s3')->url($auction->cow->image)
                        : asset('img/placeholder.jpg');
                @endphp
                <img class="auction-image" src="{{ $imageUrl }}" alt="{{ $auction->name }}">

                <h3>{{ $auction->cow->breed }}</h3>

                <p>
                    Peso: {{ $auction->cow->weight }} kg <br>
                    Sexo: {{ ucfirst($auction->cow->gender) }}
                </p>

                <p class="price">
                    Puja actual: ${{ number_format($auction->highest_bid, 2) }}
                </p>

                <a href="{{ route('auction', $auction->id) }}">
                    Ver subasta
                </a>
            </div>
        @empty
            <p>No hay subastas activas en este momento.</p>
        @endforelse
    </div>
</div>

</section>

        </section>


        <section id="about" aria-labelledby="about-heading">
            <h2 id="about-heading">¿Quiénes somos?</h2>
            <div class="about-container">
                <figure class="about-image">
                    <img src="{{ asset('img/Equipo.webp') }}" alt="Equipo de trabajo de Subasta Ganadera de Panamá" width="300"/>
                </figure>
                <div class="about-text">
                    <p>
                        Somos una comunidad de ganaderos, técnicos y entusiastas del campo que creemos en el trabajo en conjunto para fortalecer 
                        el sector ganadero de Panamá. Nuestro sistema de subasta nace con la idea de apoyar a los productores, facilitar 
                        las oportunidades de negocio y crear un espacio transparente y accesible donde todos podamos crecer y compartir los 
                        beneficios de la tradición ganadera con la innovación digital.
                    </p>
                </div>
            </div>
        </section>
    </main>

@endsection

