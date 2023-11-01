@extends('default.header')

@section('body')
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
    <section class="container-fluid p-0 m-0 min-vh-100 position-relative d-flex flex-column align-items-center justify-content-center"
        style="overflow: hidden;background: rgba(0,0,0,.8)">
        <video class="background-video" autoplay muted loop>
            <source src="{{ asset('/video/ufcpass.mp4') }}" type="video/mp4">
        </video>
        <div class="container content-video" id="contentConteinerVideo">
            <div class="d-flex flex-column align-items-center py-4">
                <p class="fs-4 ufcfont text-uppercase text-white" style="letter-spacing: 2px;">welcome to</p>
                <img src="{{ asset('/images/logo.png') }}" alt="Ufc logo" width="500"><br><br>
                <p class="text-center text-white fs-4" style="font-weight: 500;width: 60%">Desbloqueie MAIS o seu fã de esportes de combate com o UFC Fight Pass! Lutar é o que vivemos. E ninguém
                    traz MAIS lutas ao vivo, novos shows e eventos em vários esportes de combate de todo o mundo. Com uma
                    oferta interminável de lutas em todas as disciplinas, há sempre algo novo para assistir. Deixe que a
                    autoridade mundial em MMA traga a você a plataforma Ultimate 24 horas por dia, 7 dias por semana para
                    MAIS esportes de combate, o UFC Fight Pass!</p><br><br>
                    <button type="button"
                    class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-3 fw-900 fs-3">sign up now</button>
            </div>
        </div>
    </section>
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
