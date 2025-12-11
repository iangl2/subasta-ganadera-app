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
                                    <img src="https://www.svgrepo.com/show/122119/user-image-with-black-background.svg" 
                                         class="profile-image" alt="User-Profile-Image">
                                </div>
                                <h6 class="profile-name">Usuario</h6>
                                <i class="icon-edit"></i>
                                <div class="details-row">
                                    <div class="details-group">
                                        <p class="field-label">Correo Electrónico</p>
                                        <h6 class="field-value">ejemplo@gmail.com</h6>
                                    </div>
                                    <div class="details-group">
                                        <p class="field-label">Teléfono</p>
                                        <h6 class="field-value">66666666</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Right side -->
                        <div class="profile-details">
                            <div class="profile-details-content">

                                
                                <h6 class="section-title">Mis Pujas</h6>
                                

                              
                                <h6 class="section-title">Mi Ganado</h6>
                                
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
