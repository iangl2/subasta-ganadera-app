 @extends('layouts.app')

@section('title', 'Mercado')

@section('content')
@vite(['resources/css/auction_styles.css', 'resources/js/app.js', 'resources/js/countdown.js', 'resources/css/bid-success.css'])

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
@php
    use Carbon\Carbon;
    $ended = Carbon::now()->greaterThan(Carbon::parse($auction->end_date));
@endphp

<!-- mensajes flash -->
@if(session('success'))
    <div class="alert alert-success confetti">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<div class="bid">
    <form method="POST" action="{{ route('auction.placeBid', $auction->id) }}">
        @csrf

        <label for="bid_amount">Ingresa tu puja</label>
        <input
            type="number"
            id="bid_amount"
            name="amount"
            step="0.01"
            min="0.01"
            value="{{ old('amount') }}"
            @if($ended) disabled @endif
            required
        >

        @error('amount')
            <div class="field-error">{{ $message }}</div>
        @enderror

        <button
            type="submit"
            class="btn_pujar"
            @if($ended) disabled title="La subasta finalizó" @endif
        >
            Pujar Ahora
        </button>
    </form>

    @if($ended)
        <p class="muted">La subasta ha finalizado.</p>
    @endif
</div>


    </div>

</main>
@endsection