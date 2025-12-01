@extends('layouts.app')

@section('title', 'Mercado')

@section('content')
       @vite(['resources/css/market.css', 'resources/js/app.js'])
<main class="marketplace" x-data="{ openAuctionModal: false }">>
  <aside class="filtros">
    <h2>Filtros</h2>
    <form>
      <label>
        Raza:
        <select>
          <option>Brahman</option>
          <option>Angus</option>
          <option>Charolais</option>
        </select>
      </label>

      <label>
        Precio máximo:
        <input type="number" name="precio" placeholder="Ej. 2000" />
      </label>

      <button type="submit"  @click="openAuctionModal = true">Aplicar</button>
        <x-modal-create-auction />
    </form>
  </aside>

  <section class="productos-section">
    <div class="top-bar">
      <h2>Subastas disponibles</h2>
      <button class="crear-subasta">+ Crear Subasta</button>
    </div>

    <div class="productos">
              @foreach($auctions as $auction)
            @include('components.auction-card', ['auction' => $auction])
        @endforeach
    </div>
  </section>
</main>

@endsection
