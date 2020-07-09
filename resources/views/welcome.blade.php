<!DOCTYPE html>
<html lang='lt'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Antras šansas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>


<div class="container">
    <nav class="navbar navbar-expand-lg nav-bar fixed-top" style="height: 8%">
        <div class="row">
            <div class="col-4 order-2 ml-auto top-right">
                @if (Route::has('login'))
                    <div class=" links">
                        @auth
                            <a class="nav-item" href="{{ url('/home') }}">Pagrindinis puslapis</a>
                            @else
                            <a class="nav-item" href="{{ route('login') }}">Prisijungti</a>

                            @if (Route::has('register'))
                                <a class="nav-item" href="{{ route('register') }}">Registruotis</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="col-8 order-1 top-left">
                <span class="links">
                <i class="fas fa-cat"> </i>
                <a class="nav-item"> Gyvūnų prieglauda „Antras šansas“  </a>
                </span>
            </div>
        </div>
    </nav>
</div>


<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active"
                 style="background-image: url('https://www.aspca.org/sites/default/files/blog_nc-adoption-event_030916_body-1-sunshine.jpg')">
            </div>
            <div class="carousel-item"
                 style="background-image: url('https://www.aspca.org/sites/default/files/blog_nc-adoption-event_030916_body-2-katie.jpg')">
            </div>
            <div class="carousel-item"
                 style="background-image: url('https://www.aspca.org/sites/default/files/blog_nc-adoption-event_030916_body-3-louie.jpg')">
            </div>
            <div class="carousel-item"
                 style="background-image: url('https://www.aspca.org/sites/default/files/blog_nc-adoption-event_030916_body-4-sarah.jpg')">
            </div>
            <div class="carousel-item"
                 style="background-image: url('https://www.aspca.org/sites/default/files/blog_nc-adoption-event_030916_body-5-clover.jpg')">
            </div>
        </div>
    </div>
</header>

<div class="container">

    <div class="m-b-md">
        Mūsų veikla
    </div>

</div>

<div class="container styling">

    <div class="container">

        <div class="row">

            <div class="column">
                <div class="card card primary card-style">
                    <div class="card-img-top">
                        <img class="rounded"
                             src="https://i1.wp.com/pawesomecats.com/wp-content/uploads/2016/02/cat-grooming.jpg?w=740&ssl=1"
                             alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"> Gaudome </h4>
                        <div class="card-text"> Kates gaudo apmokyti organizacijos darbuotojai su specialia,
                            sertifikuota įranga: automatinėmis gaudyklėmis, saugiais suspaudimo narvais,
                            specialiomis pirštinėmis. Gaudymuose naudojama įranga yra saugi, nesukelianti jokio
                            pavojaus gyvūno sveikatai.
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card card primary card-style">
                    <div class="card-img-top">
                        <img class="rounded"
                             src="https://i0.wp.com/pawesomecats.com/wp-content/uploads/2016/02/cat-on-sofa.jpg?w=740&ssl=1"
                             alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"> Sterilizuojame </h4>
                        <div class="card-text"> Mūsų organizacija aktyviai vykdo PSP (Pagauk – Sterilizuok –
                            Paleisk) programas, taip mažindama beglobių gyvūnų skaičių Lietuvoje. Skatiname
                            augintinių sterilizaciją/kastraciją, kaip vieną iš humaniškiausių priemonių, padedančių
                            mažinti ir kontroliuoti benamių gyvūnų skaičių.
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card card primary card-style">
                    <div class="card-img-top">
                        <img class="rounded"
                             src="https://i2.wp.com/pawesomecats.com/wp-content/uploads/2016/02/Bengal-cat.jpg?w=740&ssl=1"
                             alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"> Suteikiame medicininę pagalbą </h4>
                        <div class="card-text"> Suteikiame būtinąją veterinarinę pagalbą sužalotiems ar kitaip
                            kenčiantiems gyvūnams, fiziškai reabilituojame ir su profesionalų pagalba kovojame už
                            kiekvieno į mūsų rankas patekusio gyvūno gyvybę.
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card card primary card-style">
                    <div class="card-img-top">
                        <img class="rounded"
                             src="https://i0.wp.com/pawesomecats.com/wp-content/uploads/2016/03/norwegian-forest-cat.jpg?w=740&ssl=1"
                             alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"> Socializuojame, ieškome namų </h4>
                        <div class="card-text"> Psichologiškai reabilituojame iš namų išmestas ir lauke įgūdžių
                            išgyventi neturinčias kates. Viloje sukurdami gyvūnams namų aplinką, juos socializuojame
                            bei surandame naujus namus.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

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
<footer class="page-footer font-small" style="padding-top:1%; padding-bottom: 1%">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a> antrassansas.lt</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
</html>
