<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            @if(Route::currentRouteName() == 'users.edit') {{-- ou Route::is('') --}}
                <img src="../img/logo.png" width="50" height="50" alt="" class="d-inline-block">
                Gestion du club
            @else
                <img src="img/logo.png" width="50" height="50" alt="" class="d-inline-block">
                Gestion du club
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                {{--modifier class active dynamiquement--}}
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page"
                       href="/"><i class="fa-solid fa-house"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="apropos">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="contact">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-users"></i>
                         Membres
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @auth
                            <li><a href="{{ route('users.edit', Auth::user()) }}">Profil</a></li>

                            @if(Auth::user()->admin)
                                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            @endif

                            {{-- Se déconnecter --}}
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" href="{{ route('logout') }}">Déconnexion</button>
                            </form>
                        @else
                            <li><a href="{{ route('login') }}">Connexion</a></li>
                        @endauth
                        {{--<li><a class="dropdown-item" href="login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Connexion</a></li>
                        <li><a class="dropdown-item" href=""><i class="fa-solid fa-user"></i> Profil</a></li>
                        <li><a class="dropdown-item" href=""><i class="fa-solid fa-sliders"></i> Préférences</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href=""><i class="fa-solid fa-arrow-right-from-bracket"></i> Se déconnecter</a></li>--}}
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

