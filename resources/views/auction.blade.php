 @extends('layouts.app')

@section('title', 'Mercado')

@section('content')
@vite(['resources/css/auction_styles.css', 'resources/js/app.js', 'resources/js/countdown.js'])

<main class="auction_details">

    <!-- DATOS DEL ANIMAL -->
    <div class="animal_details">

        <img class="moo_picture" src="/img/Vacas-lecheras.png" alt="Subasta de Vacas Lecheras"/>

        <table class="animal_table">
            <thead>
                <tr>
                    <th>Sexo</th>
                    <th>Raza</th>
                    <th>Peso</th>
                    <th>Vendedor</th>
                    <th>Lugar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $auction->cow->sex }}</td>
                    <td>{{ $auction->cow->breed }}</td>
                    <td>{{ $auction->cow->weight }} kg</td>
                    <td>{{ $auction->seller->name }}</td>
                    <td>{{ $auction->location }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- DETALLES DE LA SUBASTA -->
    <div class="details">

        <div class="auction_name">
            <h1>{{ $auction->name }}</h1>
            <p>{{ $auction->description }}</p>
        </div>

        <span>Termina en</span>

        <!-- COUNTDOWN -->
        <div class="countdown" data-end="{{ $auction->end_date }}">

            {{-- Mantengo tu estructura original de countdown --}}
            <div class="time-section" id="days">
                <div class="time-group">
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- HOURS --}}
            <div class="time-section" id="hours">
                <div class="time-group">
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- MINUTES --}}
            <div class="time-section" id="minutes">
                <div class="time-group">
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- SECONDS --}}
            <div class="time-section" id="seconds">
                <div class="time-group">
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="time-segment">
                        <div class="segment-display">
                            <div class="segment-display-top">0</div>
                            <div class="segment-display-bottom">0</div>
                            <div class="segment-overlay">
                                <div class="segment-overlay-top">0</div>
                                <div class="segment-overlay-bottom">0</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- PRECIO -->
        <div class="price">
            <span>Puja más reciente</span>
            <h2>${{ $auction->highest_bid ?? $auction->starting_price }}</h2> 
        </div>

        <!-- INPUT DE PUJA -->
        <div class="bid">
            <input type="number" id="bid_amount" name="bid_amount" placeholder="Ingresa tu puja">
            <a class="btn_pujar" href="#">Pujar Ahora</a> 
        </div>

    </div>

</main>
@endsection