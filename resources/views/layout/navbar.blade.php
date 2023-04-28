<nav id="navBar" class="navbar navbar-expand-lg navbar-light p-3 border-b-2 border-gray-300">
    <div class="container-fluid">

        <a class="navbar-brand" href="/">
            @if(Route::currentRouteName() == 'users.edit') {{-- ou Route::is('') --}}
                <img src="../img/logo.png" width="50" height="50" alt="" class="d-inline-block">
                Gestion du club
            @else
                <img src="img/logo.png" width="50" height="50" alt="" class="d-inline-block">
                Gestion du club
            @endif
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                {{--modifier class active dynamiquement--}}
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                       href="/"><i class="fa-solid fa-house"></i>
                        {{ __('Home') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('apropos') ? 'active' : '' }}" href="apropos">
                        <i class="fa-solid fa-circle-info"></i>
                        {{ __('About') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('contact') ? 'active' : '' }}" href="contact">
                        <i class="fa-solid fa-envelope"></i>
                        {{ __('Contact') }}
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mx-2 " href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-users"></i>
                        {{ __('Members') }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @auth
                            <li class="border-bottom">
                                <a href="{{ route('users.edit', Auth::user()) }}" class="d-flex align-middle dropdown-item text-decoration-none pl-3 {{ request()->is('users.edit') ? 'active' : '' }}">
                                    <div class="d-inline-flex my-auto">
                                        <i class="fa-solid fa-user mr-2"></i>
                                    </div>
                                    <div class="col-11 d-inline-block">
                                        <span class="text-gray-600">{{ Auth::user()->name }}</span>
                                        <hr class="my-0">
                                        {{ __('Profile') }}
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="dropdown-item text-decoration-none pl-3 {{ request()->is('dashboard') ? 'active' : '' }}">
                                    <i class="fa-solid fa-sliders"></i>
                                    Préférences
                                </a>
                            </li>

                            @if(Auth::user()->admin)
                                <li>
                                    <a href="{{ route('dashboard') }}" class="dropdown-item text-decoration-none pl-3 {{ request()->is('dashboard') ? 'active' : '' }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                </li>
                            @endif

                            {{-- Se déconnecter --}}
                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item text-decoration-none pl-3">
                                @csrf
                                <button type="submit" href="{{ route('logout') }}">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    {{ __('Log out') }}
                                </button>
                            </form>
                        @else
                            <li>
                                <a class="dropdown-item {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    {{ __('Log in') }}
                                </a>
                            </li>
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

