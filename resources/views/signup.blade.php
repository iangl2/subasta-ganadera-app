@extends('layouts.app')

@section('title', 'Mercado')

@section('content')
@vite(['resources/css/auction_styles.css', 'resources/js/app.js'])

<main class="main-login">
    <div class="circle-form">

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <h2>Crea tu Cuenta</h2>

            <input type="text" 
                   name="name"
                   placeholder="Nombre Completo" 
                   value="{{ old('name') }}"
                   required>
            @error('name')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <input type="email" 
                   name="email"
                   placeholder="Correo Electrónico" 
                   value="{{ old('email') }}"
                   required>
            @error('email')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <input type="tel" 
                   name="phone"
                   placeholder="Número de Teléfono"
                   required>

            <input type="password" 
                   name="password"
                   placeholder="Contraseña" 
                   required>

            <input type="password" 
                   name="password_confirmation"
                   placeholder="Confirmar Contraseña" 
                   required>

            @error('password')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <button type="submit">Crear Cuenta</button>

            <br><br>

            <p>¿Ya tienes una cuenta? <a href="/login">Inicia Sesión</a></p>
        </form>

    </div>
</main>
@endsection
