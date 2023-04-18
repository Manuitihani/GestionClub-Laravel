<nav class="navbar navbar-expand-lg navbar-light bg-indigo-50 p-3">
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
                        {{ __('About') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ request()->is('contact') ? 'active' : '' }}" href="contact">
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
                            <li>
                                <a href="{{ route('users.edit', Auth::user()) }}" class="dropdown-item text-decoration-none pl-3 {{ request()->is('users.edit') ? 'active' : '' }}">
                                    {{ __('Profile') }}
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
                                    {{ __('Log out') }}
                                </button>
                            </form>
                        @else
                            <li>
                                <a class="dropdown-item {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">
                                    {{ __('Log in') }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item {{ request()->is('login') ? 'active' : '' }}" href="{{ route('register') }}">
                                    {{ __('Create Account') }}
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
                @auth
                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>

