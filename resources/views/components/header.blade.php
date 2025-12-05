       @vite(['resources/css/header.css', 'resources/js/app.js'])
   
   <header  id="header">
        <nav class="navbar">
            <a href="/" class="brand">
                <img src="/img/LogoSG.png" alt="Logotipo de Subasta Ganadera de Panamá" />
                
            </a>
     
            
                <ul class="menu">
                    <li class="menu-item"><a href="/" class="menu-link">Inicio</a></li>
                    <li class="menu-item"><a href="/market" class="menu-link">Subastas</a></li>
                    <li class="menu-item"><a href="/news" class="menu-link">Noticias</a></li>
                    <li class="menu-item">
 @guest
                        <a href="/login" class="">
                            <button type="button" class="menu-block btn btn-neutral">
                                Ingresar
                            </button>
                        </a>
                        @endguest
                                        @auth
                    <li class="menu-item user-dropdown">
                        <button class="user-button">
                            {{ auth()->user()->name }}
                            <span class="arrow">▼</span>
                        </button>

                        <ul class="dropdown-menu">
                            <li><a 
                                href="/profile"
                                >Ver perfil</a></li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="logout-btn">Cerrar sesión</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth

                    </li>
                </ul>
           
            
        </nav>
    </header>