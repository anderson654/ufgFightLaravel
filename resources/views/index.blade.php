@extends('default.header')
@section('head')
    <style>
        body {
            background: #fff !important;
        }
    </style>
@endsection

@section('body')
    <div class="clip-path-element"></div>
    <div class="container-fluid fixed-top p-0">
        <nav class="navbar navbar-expand-lg custom-sidebar shadow-sm" id="customNav">
            <div class="container-fluid mx-4">
                <img src="{{ asset('/images/logo.png') }}" alt="Ufc logo" width="220">
                <button class="navbar-toggler border-0 my-3" type="button" data-bs-toggle="collapse"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                    data-bs-theme="dark" id="btnopenmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">schedule</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ppv</a>
                        </li>
                    </ul>
                    <div class="m-3">
                        <button type="button"
                            class="btn btn-outline-danger border-3 rounded-0 custom-btn-login fs-7 me-3">LOG
                            IN</button>
                        <button type="button"
                            class="btn btn-outline-danger border-3 rounded-0 custom-btn-signup fs-7">sign-up</button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid p-0 custom-submenu" style="width: 100%;">
            <a href="http://">
                <div class="d-flex justify-content-center p-4">
                    <p class="m-0">schedule</p>
                </div>
            </a>
            <a href="http://">
                <div class="d-flex justify-content-center p-4">
                    <p class="m-0">ppv</p>
                </div>
            </a>
            <div class="d-flex justify-content-center m-3">
                <button type="button" class="btn btn-outline-danger border-3 rounded-0 custom-btn-login sub fs-7 me-3">LOG
                    IN</button>
                <button type="button"
                    class="btn btn-outline-danger border-3 rounded-0 custom-btn-signup sub fs-7">sign-up</button>
            </div>
        </div>
    </div>
    <section
        class="container-fluid p-0 m-0 pb-5 min-vh-100 position-relative d-flex flex-column align-items-center justify-content-center"
        style="overflow: hidden;background: rgba(0,0,0,.8)">
        <video class="background-video" autoplay muted loop>
            <source src="{{ asset('/video/ufcpass.mp4') }}" type="video/mp4">
        </video>
        <div class="container content-video" id="contentConteinerVideo">
            <div class="d-flex flex-column align-items-center py-4">
                <p class="fs-4 ufcfont text-uppercase text-white" style="letter-spacing: 2px;">welcome to</p>
                <img src="{{ asset('/images/logo.png') }}" alt="Ufc logo" width="500"><br><br>
                <p class="text-center text-white fs-4" style="font-weight: 500;width: 60%">Desbloqueie MAIS o seu fã de
                    esportes de combate com o UFC Fight Pass! Lutar é o que vivemos. E ninguém
                    traz MAIS lutas ao vivo, novos shows e eventos em vários esportes de combate de todo o mundo. Com uma
                    oferta interminável de lutas em todas as disciplinas, há sempre algo novo para assistir. Deixe que a
                    autoridade mundial em MMA traga a você a plataforma Ultimate 24 horas por dia, 7 dias por semana para
                    MAIS esportes de combate, o UFC Fight Pass!</p><br><br>
                <button type="button"
                    class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-3 fw-900 fs-3">sign up
                    now</button>
            </div>
        </div>
    </section>
    <section class="container py-5 my-5 d-flex flex-column align-items-center justify-content-center"
        style="background: transparent">
        <h2 class="text-uppercase fw-700 fs-1" style="letter-spacing: 1px;color: #333">CHOOSE YOUR UFC FIGHT PASS PLAN</h2>
        <br><br>

        <div class="row w-100">
            <div class="col-12 col-lg-6 mb-0 mb-5 mb-lg">
                <x-pay-card typesubscribe="monthly pass" value="R$ 25.00">

                </x-pay-card>
            </div>
            <div class="col-12 col-lg-6 mb-0 mb-5 mb-lg">
                <x-pay-card typesubscribe="annual pass" value="R$ 25.00" bordercolor="#d20a0a" toutlip={{ true }}>

                </x-pay-card>
            </div>
        </div>
        <p class="fst-italic fw-500">Subscription will auto-renew monthly unless cancelled prior to the applicable renewal
        </p>
    </section>
    <section class="container-fluid py-5 d-flex flex-column align-items-center justify-content-center"
        style="background: #f4f4f4">
        <div class="container mt-5 events w-100">
            <p class="text-uppercase fw-700" style="color: #d20a0a;letter-spacing: 2px">EXPERIENCE COMBAT SPORTS</p>
            <p class="fs-1 fw-800" style="color: #333">LIKE NEVER BEFORE</p>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <x-card-events urlImage="{{ asset('/images/fight1.jpeg') }}">

                    </x-card-events>
                </div>
                <div class="col-lg-4">
                    <x-card-events urlImage="{{ asset('/images/fight2.jpeg') }}">

                    </x-card-events>
                </div>
                <div class="col-lg-4">
                    <x-card-events urlImage="{{ asset('/images/fight3.jpeg') }}">

                    </x-card-events>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-0 py-5 d-flex flex-column align-items-center justify-content-center"
        style="background: #000;min-height: 50vh">
        <div class="container-fluid mt-5 dowloadapp-img-1">
            <div class="container position-relative">
                <p class="fw-800" style="color: #d20a0a;letter-spacing: 3px">HOW IT WORKS</p>
                <p class="fw-800 fs-1" style="color: #fff;letter-spacing: 3px">ANYTIME. ANYWHERE. ANY DEVICE.</p>
                <div class="" style="width: 100%;padding: 5%">
                    <img src="{{ asset('/images/dowloadapp.png') }}" alt="dowloadapp" width="100%">
                </div>
                <p class="fw-700" style="color: #fff">Available on iOS, Android, Apple TV, Amazon Fire, ROKU, Xbox, LG and
                    Samsung Smart TVs, and SONY TVs with Android TV</p>
            </div>
        </div>
    </section>

    <section class="container-fluid p-0 py-5 d-flex flex-column align-items-center justify-content-center next-event"
        style="min-height: 50vh">
        <div class="container py-5">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <p class="fw-800 fs-5 text-light">NEXT UFC PAY-PER-VIEW EVENT</p>
                <p class="fs-1 mb-0" style="font-family: ufc;color: #d20a0a">UFC 294</p>
                <p class="fw-900 fst-italic text-light" style="font-size: 5rem;letter-spacing: 2px">Prochazka vs Pereira
                </p>
                <p class="fw-900 fs-2" style="color: rgba(255,255,255,.5)">SATURDAY, NOVEMBER 11, 2023</p>
                <p class="mb-5 w-75 text-center text-light fw-500 fs-3">UFC returns to New York City. The main event will
                    see former division champ, Jiří
                    Procházka, and former
                    middleweight titleholder, Alex Pereira, battle for the vacant UFC light heavyweight crown!</p>
                <button type="button"
                    class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-3 fw-900 fs-4 shadow-sm">ORDER
                    NOW</button>
            </div>
        </div>
    </section>
    <footer class="container-fluid px-0 border-bottom border-5"
        style="background: #161616;border-color: #d20a0a !important">
        <div class="py-4 px-2">
            <img src="{{ asset('/images/logonotcolor.png') }}" alt="" width="200px"
                style="object-fit: contain">
        </div>
        <div class="d-flex justify-content-center align-items-center py-4 px-2" style="background: #0f0f0f">
            <p class="fw-500 mb-0" style="color: #585b63">UFC and associated designs are registered and/or owned
                exclusively by Zuffa, LLC. © 2019 All rights reserved</p>
        </div>
    </footer>
@endsection

@section('scripts')
    <script>
        var alturaDaDiv = $("#customNav").height();
        $("#contentConteinerVideo").css('margin-top', alturaDaDiv);

        //atribuição depois que carregar o front
        $(document).ready(function() {
            $("#btnopenmenu").click(() => {
                const element = $(".custom-submenu");
                closeAndOpenMenu(element);
            });
        });

        function closeAndOpenMenu(element) {
            const maxHeight = element.css("max-height");
            if (maxHeight === '0px') {
                element.css("max-height", '40vh');
            } else {
                element.css("max-height", '0vh');
            }
        }
    </script>
@endsection
