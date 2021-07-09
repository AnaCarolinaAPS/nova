<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://kit.fontawesome.com/460dd6b0eb.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('img/logo-circle.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="wrapper">
        {{-- @if($split == true)
            <!-- Preloader -->
            <div class="preloader">
                <img src="{{ asset ('img/logo-circle.png') }}" alt="AdminLTELogo" height="150" width="150" style="margin: auto auto;">
            </div>
        @endif --}}
        <!-- Navbar -->
        <top-menu>
            <template v-slot:menu-right>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <div class="info">
                            <img src="{{ asset ('img/logo-circle.png') }}" class="img-circle elevation-2" alt="Usuario" style="width: 2.0rem; margin-right: 8px;">
                            {{ Auth::user()->name }}
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog"></i> Mi Perfil
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{-- {{ __('Logout') }} --}}
                            <i class="fas fa-sign-out-alt"></i> Salir
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        {{-- <a href="#" class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i> Salir
                        </a> --}}
                    </div>
                </li>
            </template>
        </top-menu>
        <aside-menu logo="{{ asset ('img/logo-circle.png') }}" empresa="Nova Electronicos" link="{{ route('inicio') }}" avatar="{{ asset ('img/user2-160x160.jpg') }}" usuario="Alexander Pierce">
            <li class="nav-item">
                <a href="{{ route('inicio') }}" class="nav-link {{ (Route::currentRouteName() == 'inicio') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-house-user"></i>
                    <p>
                        Inicio
                    </p>
                </a>
            </li>
            <li class="nav-item {{ (Route::currentRouteName() == 'categorias.index' || Route::currentRouteName() == 'marcas' || Route::currentRouteName() == 'productos') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ (Route::currentRouteName() == 'categorias.index' || Route::currentRouteName() == 'marcas' || Route::currentRouteName() == 'productos') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Catastros
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('categorias.index') }}" class="nav-link {{ (Route::currentRouteName() == 'categorias.index') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Categorias</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ (Route::currentRouteName() == 'marcas') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Marcas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ (Route::currentRouteName() == 'productos') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Productos</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-laptop"></i>
                    <p>
                        Site
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Banners</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Historia</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sucursales</p>
                        </a>
                    </li>
                </ul>
            </li>
        </aside-menu>
        <div class="content-wrapper">

        {{-- <main class="py-4"> --}}
            @yield('content')
        {{-- </main> --}}
        </div>
    </div>
</body>
</html>
