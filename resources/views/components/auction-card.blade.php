      
      @php
    use Illuminate\Support\Facades\Storage;

    $imageUrl = $auction->cow->image
        ? Storage::disk('s3')->url($auction->cow->image)
        : asset('img/placeholder.jpg'); // opcional
@endphp

      <article class="tarjeta">
        
         <img src="{{ $imageUrl }}" alt="{{ $auction->name }}">
   <h3>{{ $auction->name }}</h3>

    <p>
        <strong>Puja más reciente:</strong> ${{ $auction->highest_bid ?? $auction->starting_price }}
    </p>

    <p>
        <strong>Peso:</strong> {{ $auction->cow->weight }} kg |
        <strong>Sexo:</strong> {{ $auction->cow->sex }} |
        <strong>Raza:</strong> {{ $auction->cow->breed }}
    </p>

    <p>
        <strong>Vendedor:</strong> {{ $auction->seller->name }}
    </p>

    <a href="{{ route('auction', $auction->id) }}">
        <button class="show-more">Ver más...</button>
    </a>
      </article>