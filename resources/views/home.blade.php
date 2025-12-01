


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
            <h2 id="events-heading">Próximos Eventos</h2>
            <ul class="events-list articles">
                <li>
                  <article class="event-article">
                    <div class="event-article-wrapper">
                      <figure class="event-figure">
                        <img class="event-img" src="{{ asset('img/Vacas-lecheras.png') }}" alt="Subasta de Vacas Lecheras en Rancho El Buen Pastor" />
                      </figure>
                      <div class="event-body">
                        <h2 class="event-title">Subasta de Vacas Lecheras</h2>
                        <p class="event-info">
                          Fecha: <time datetime="2025-10-15">15 de Octubre, 2025</time><br>
                          Lugar: <span class="event-address">Rancho El Buen Pastor</span>
                        </p>
                        <a href="subasta-vacas.html" class="event-read-more">
                          Ver detalles <span class="sr-only">de Subasta de Vacas Lecheras</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="event-article">
                    <div class="event-article-wrapper">
                      <figure class="event-figure">
                        <img class="event-img" src="{{ asset('img/Vacas.jpg') }}" alt="Subasta de Ganado Bovino en Hacienda La Esperanza" />
                      </figure>
                      <div class="event-body">
                        <h2 class="event-title">Subasta de Ganado Bovino</h2>
                        <p class="event-info">
                          Fecha: <time datetime="2025-11-22">22 de Noviembre, 2025</time><br>
                          Lugar: <span class="event-address">Hacienda La Esperanza</span>
                        </p>
                        <a href="subasta-bovino.html" class="event-read-more">
                          Ver detalles <span class="sr-only">de Subasta de Ganado Bovino</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </article>
                </li>
                <li>
                  <article class="event-article">
                    <div class="event-article-wrapper">
                      <figure class="event-figure">
                        <img class="event-img" src="{{ asset('img/ImgOvinos.webp') }}" alt="Subasta de Ganado Ovino en Granja Los Pastores" />
                      </figure>
                      <div class="event-body">
                        <h2 class="event-title">Subasta de Ganado Ovino</h2>
                        <p class="event-info">
                          Fecha: <time datetime="2025-11-30">30 de Noviembre, 2025</time><br>
                          Lugar: <span class="event-address">Granja Los Pastores</span>
                        </p>
                        <a href="subasta-ovinos.html" class="event-read-more">
                          Ver detalles <span class="sr-only">de Subasta de Ganado Ovino</span>
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </article>
                </li>
            </ul>
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

