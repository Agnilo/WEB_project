<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Antras šansas</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg nav-bar fixed-top" style="height: 8%">
        <div class="container">
            <div class="row">
                <div class="col-8 top-left">
                    <span class="links">
                        <i class="fas fa-cat"> </i>
                        <a class="nav-item" href="{{ url('/home') }}">
                            Gyvūnų prieglauda „Antras šansas“
                        </a>
                    </span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Right Side Of Navbar -->
                <div class="col-4 ml-auto drop-top-right">
                    <div class=" links">
                        <!-- Authentication Links -->
                        @guest
                            <a class="nav-item" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                            @if (Route::has('register'))
                                <a class="nav-item" href="{{ route('register') }}">{{ __('Regsitruotis') }}</a>

                            @endif
                        @else
                            <div class="nav-item dropdown links dropdown-menu-right" style="padding-right: 20%">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu links" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Atsijungti') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="{{ route('home') }}">
                                        Pagrindinis
                                    </a>
                                    @endguest


                                @can('manage-users')
                                    <a class="dropdown-item" href="{{route('admin.users.index')}}">
                                        Vartotojai
                                    </a>
                                    <a class="dropdown-item" href="{{url('/admin/create')}}">
                                        Sukurti gyvūną
                                    </a>
                                @endcan
                            </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>


    <main class="py-4">
        @include('partials.alerts')
        @yield('content')
    </main>

</div>

</body>
</html>
