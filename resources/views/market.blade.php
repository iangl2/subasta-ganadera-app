@extends('layouts.app')

@section('title', 'Mercado')

@section('content')
       @vite(['resources/css/market.css', 'resources/js/app.js', 'resources/js/modal.js'])

<main class="marketplace" >
 <aside class="filtros">
  <h2>Filtros</h2>

  <form method="GET" action="{{ route('market') }}">

    {{-- RAZA --}}
    <label>
      Raza:
      <input
        type="text"
        name="breed"
        placeholder="Ej. Angus"
        value="{{ request('breed') }}"
      />
    </label>

    {{-- PESO MÍNIMO --}}
    <label>
      Peso mínimo (kg):
      <input
        type="range"
        name="weight"
        min="0"
        max="1000"
        step="10"
        value="{{ request('weight', 0) }}"
        oninput="this.nextElementSibling.value = this.value"
      />
      <output>{{ request('weight', 0) }}</output>
    </label>

    {{-- SEXO --}}
    <label>
      Sexo:
      <select name="sex">
        <option value="">Cualquiera</option>
        <option value="macho" {{ request('sex') === 'macho' ? 'selected' : '' }}>Macho</option>
        <option value="hembra" {{ request('sex') === 'hembra' ? 'selected' : '' }}>Hembra</option>
      </select>
    </label>

    {{-- PRECIO MÁXIMO --}}
      <label>
        Precio máximo:
        <input type="number" name="max_price" value="{{ request('max_price') }}">
    </label>

    <button type="submit">Aplicar</button>
  </form>
</aside>

  
  <section class="productos-section">
    <div class="top-bar">
      <h2>Subastas disponibles</h2>

    @auth
      
    <button class="crear-subasta">+ Crear Subasta</button>
    @endauth
    </div>

    <div class="productos">
              @foreach($auctions as $auction)
            @include('components.auction-card', ['auction' => $auction])
            @endforeach
    </div>

   @if ($auctions->hasPages())
<div class="pagination">
    
    {{-- Página anterior --}}
    @if ($auctions->onFirstPage())
        <span class="page disabled">«</span>
    @else
        <a class="page" href="{{ $auctions->previousPageUrl() }}">«</a>
    @endif

    {{-- Números de página --}}
    @foreach ($auctions->getUrlRange(1, $auctions->lastPage()) as $page => $url)
        @if ($page == $auctions->currentPage())
            <span class="page active">{{ $page }}</span>
        @else
            <a class="page" href="{{ $url }}">{{ $page }}</a>
        @endif
    @endforeach

    {{-- Página siguiente --}}
    @if ($auctions->hasMorePages())
        <a class="page" href="{{ $auctions->nextPageUrl() }}">»</a>
    @else
        <span class="page disabled">»</span>
    @endif

</div>
@endif
  </section>


  <x-modal-create-auction />
</main>

@endsection
