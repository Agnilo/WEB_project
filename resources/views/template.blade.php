<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Antras šansas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-lg nav-bar fixed-top" style="height: 8%">
    <div class="container">
        <div class="row">

            <div class="col-4 order-2 ml-auto drop-top-right">
                <div class="dropdown dropdown-menu-right">
                    <button class="dropbtn font-weight-bold" style="text-transform: uppercase;">Meniu
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{ route('home') }}">
                            Pagrindinis
                        </a>

                        <a href="{{ route('animals') }}">
                            Gyvūnai
                        </a>
                        <a href="{{ route('logout') }}">
                            Atsijungti
                        </a>
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
            <div class="col-8 order-1 top-left">
                <span class="links">
                <i class="fas fa-cat"> </i>
                <a class="nav-item"> Gyvūnų prieglauda „Antras šansas“  </a>
                </span>
            </div>
        </div>
    </div>

</nav>

<main class="py-4">
    <div class="container">
        @include('partials.alerts')
        @yield('content')
    </div>
</main>


<div class="container-fluid" style="background-color: #6f5a39; margin-top: 5%">

    <div style="padding-top: 2%; padding-bottom: 2%">
        <h4 class="heading"> Mūsų rekvizitai </h4>

        <p class="all"> VšĮ „Antras šansas“ </p>
        <p class="all"> Įmonės kodas 12345678 </p>
        <p class="all"> Sąskaitos nr. LT123456789123456789 (AB SWEDBANK) </p>
        <p class="all"> SWIFT kodas ABCDEF1G (aukojantiems iš užsienio) </p>
        <p class="all"> Paypal: antrassansas@gmail.com </p>
        <p class="all"> Paysera: LT123456789123456789 </p>
        <p class="all"> Paaukoti telefonu galite SKAMBINDAMI arba siųsdami
            tuščią SMS žinutę trumpuoju numeriu 1234. Vieno
            skambučio/SMS auka — 2EUR. Norėdami skirti didesnę
            sumą, skambinti arba siųsti SMS žinutę galite tiek kartų,
            kiek norite.</p>
    </div>

</div>

<!-- Footer -->
<footer class="page-footer font-small" >

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a> antrassansas.lt</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->


</body>
</html>
