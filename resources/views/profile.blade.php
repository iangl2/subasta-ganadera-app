@extends('layouts.app')

@section('title', 'Perfil')

@section('content')
       @vite(['resources/css/profile.css', 'resources/js/app.js', 'resources/js/profile.js'])

<main>
    <div class="page-wrapper">
    <div class="content-wrapper">
        <div class="row-wrapper center-content">
            <div class="profile-card-container">
                <div class="profile-card">
                    <div class="profile-row">

                        <!-- Left side -->
                        <div class="profile-sidebar">
                            <div class="profile-sidebar-content">
                                <div class="profile-image-wrapper">
                                    <img src="https://uxwing.com/wp-content/themes/uxwing/download/peoples-avatars/account-white-icon.png" 
                                         class="profile-image" alt="User-Profile-Image">
                                </div>
                                <h6 class="profile-name">{{ Auth::user()->name }}</h6>
                                <i class="icon-edit"></i>
                                <div class="details-row">
                                    <div class="details-group">
                                        <p class="field-label">Correo Electrónico</p>
                                        <h6 class="field-value">{{ Auth::user()->email }}</h6>
                                    </div>
                                    <div class="details-group">
                                        <p class="field-label">Teléfono</p>
                                        <h6 class="field-value">{{ $user->phone ?? 'No registrado' }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right side -->
                        <div class="profile-details">
                            <div class="profile-details-content">

                                
                                <h6 class="section-title">Mis Pujas</h6>
                                
                                @if($bidAuctions->isEmpty())
                                <p>No has realizado pujas aún.</p>
                                @else
                                    <div class="tarjetas-grid">
                                        @foreach($bidAuctions as $auction)
                                            <x-user-auctions :auction="$auction" />
                                        @endforeach
                                    </div>
                                @endif
                              
                                <h6 class="section-title">Mi Ganado</h6>

                                @if($myAuctions->isEmpty())
                                    <p>No has creado subastas.</p>
                                @else
                                    <div class="tarjetas-grid">
                                        @foreach($myAuctions as $auction)
                                            <x-user-auctions :auction="$auction" />
                                        @endforeach
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>


@endsection
