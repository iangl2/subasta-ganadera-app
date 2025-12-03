@extends('layouts.app')

@section('title', 'Mercado')

@section('content')
@vite(['resources/css/auction_styles.css', 'resources/js/app.js'])

<main class="main-login">
    <div class="circle-form">

        <form method="POST" action="{{ route('login.perform') }}">
            @csrf

            <h2>Bienvenido de Nuevo</h2>

            <input type="email" 
                   name="email" 
                   placeholder="Correo Electrónico" 
                   value="{{ old('email') }}"
                   required>

            @error('email')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <input type="password" 
                   name="password" 
                   placeholder="Contraseña" 
                   required>

            @error('password')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <button type="submit">Ingresar</button>

            <br><br>

            <p>¿No tienes una cuenta? <a href="/signup">Regístrate</a></p>
        </form>

    </div>
</main>
@endsection
