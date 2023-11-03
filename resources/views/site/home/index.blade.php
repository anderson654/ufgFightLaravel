@extends('default.header')

<style>
    body {
        background: #585b63 !important;
    }
</style>

@section('body')
    <div class="container-fluid fixed-top p-0" id="customNav">
        <nav class="navbar navbar-expand-lg custom-sidebar shadow-sm">
            <div class="container-fluid mx-4">
                <img src="{{ asset('/images/logo2.png') }}" alt="Ufc logo" width="220">
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
                        @auth
                            <form class="m-0" role="form" method="post" action="{{ route('logout') }}" id="logout-form">
                                @csrf
                                <a href="{{ url('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <button type="button"
                                        class="btn btn-outline-danger border-3 rounded-0 custom-btn-signup fs-7">sair</button>
                                </a>
                            </form>
                        @else
                            <button type="button"
                                class="btn btn-outline-danger border-3 rounded-0 custom-btn-login fs-7 me-3">LOG
                                IN</button>
                            <button type="button"
                                class="btn btn-outline-danger border-3 rounded-0 custom-btn-signup fs-7">sign-up</button>
                        @endauth
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
    <section class="container-fluid min-vh-100 event-dashboard">
        <div class="px-5 d-flex w-100 align-items-end" id="contentConteiner" style="min-height: 100%">
            <div class="pt-5 width-description fw-500 fs-5">
                <p class="text-uppercase fw-900" style="color: rgba(255,255,255,0.5)"><span class="fs-4"
                        style="font-family: ufc;color: red;margin-right: 10px">ufc</span>Evento</p>
                <p class="fw-900 fst-italic fs-1" style="color: rgba(255,255,255)">Construindo Campeões</p>
                <p class="deecoration-one text-white fs-6 my-3">Descrição</p>
                <p class="text-white">Prepare-se para uma experiência única no mundo da luta!
                    Estamos emocionados em convidar você para o nosso evento "Construindo Campeões", onde teremos a honra de
                    receber o grande mestre Rafael Cordeiro. Ele compartilhará conosco todos os segredos que não são
                    revelados no mundo das artes marciais, revelando como se tornar um verdadeiro campeão, inspirado por
                    lendas como Mike Tyson, Michael Costa, Marlon Mathias, Maurício Rua (Shogun), Murilo Rua, Anderson
                    Silva, Wanderley Silva, Fabrício Werdum, Jaime Yager, Rafael dos Anjos, Beneil Dariush e Cris Cyborg...
                </p>
                <br>
                <br>
                <button type="button"
                    class="btn btn-outline-danger border-4 rounded-0 custom-btn-login now px-5 py-2 fw-900 fs-3 w-100"
                    data-bs-toggle="modal" data-bs-target="#exampleModal">assista
                    agora</button>
                <br>
                <br>
                <br>
            </div>
        </div>
        {{-- <div class="row py-5">
            <div class="col-md-5 min-vh-100">
                <div class="bg-dark p-3 rounded-2 shadow p-5">

                </div>
            </div>
        </div> --}}
    </section>
    <section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-body">
                    <iframe src="https://player.vimeo.com/video/879491202?h=8a89de1bd8&title=0&byline=0&portrait=0"
                        width="100%" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        var alturaDaDiv = $("#customNav").outerHeight(true);
        $("#contentConteiner").css('padding-top', alturaDaDiv);
        console.log(alturaDaDiv);
    </script>
@endsection
