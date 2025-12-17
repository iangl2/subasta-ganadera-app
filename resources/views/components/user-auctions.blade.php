<article class="tarjeta">
    <img src="{{ asset('storage/' . $userAuction->cow->image) }}" 
         alt="{{ $userAuction->name }}">

    <h3>{{ $userAuction->name }}</h3>

    <p>
        <strong>Puja más reciente:</strong>
        ${{ $userAuction->highest_bid }}
    </p>

    <p>
        <strong>Peso:</strong> {{ $userAuction->cow->weight }} kg |
        <strong>Sexo:</strong> {{ ucfirst($userAuction->cow->sex) }} |
        <strong>Raza:</strong> {{ $userAuction->cow->breed }}
    </p>


    <a href="{{ route('auction', $userAuction->id) }}">
        <button class="show-more">Ver más...</button>
    </a>
</article>