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
        <x-side-bar></x-side-bar>
    </div>
    <section
        class="container-fluid p-0 m-0 pb-5 min-vh-100 position-relative d-flex flex-column align-items-center justify-content-center index"
        style="overflow: hidden;">
        <div class="container-fluid px-5 content-video" id="contentConteinerVideo">
            <div class="d-flex flex-column py-4">
                <div class="d-flex justify-content-center flex-column row">
                    <div class="col-md-5">
                        <p class="fw-900 fs-900 text-uppercase"
                            style="color: #c80000;font-size: 6.5rem;line-height: 1;white-space: nowrap">no fight,<br>no
                            history</p><br>
                        {{-- <p class="fs-4 ufcfont text-uppercase text-white" style="letter-spacing: 2px;">welcome to</p>
                        <img src="{{ asset('/images/logo2.png') }}" alt="Ufc logo" width="500"><br><br> --}}
                        <p class="text-white fs-4" style="font-weight: 500;width: 100%;text-align: justify">A FourBio Fight
                            é uma plataforma
                            inovadora de streaming dedicada ao universo das lutas. Com um catálogo abrangente, ela oferece
                            acesso
                            exclusivo a eventos ao vivo, lutas gravadas e perfis detalhados de lutadores renomados. A missão
                            da
                            empresa vai além do entretenimento, buscando transformar vidas por meio do poder do esporte,
                            promovendo
                            valores como determinação, disciplina e superação. Seja o usuário um apaixonado por artes
                            marciais ou
                            apenas curioso sobre esse universo, a FourBio Fight é o destino definitivo.</p><br><br>
                        <button type="button"
                            class="btn btn-outline-danger border-4 rounded-5 custom-btn-signup now px-5 py-3 fw-900 fs-5"
                            style="width: 100%">ASSINAR
                            AGORA</button>
                    </div>

                </div>

                {{-- <button type="button"
                    class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-3 fw-900 fs-3">ASSINAR AGORA</button> --}}
            </div>
        </div>
    </section>
    <section class="container py-5 my-5 d-flex flex-column align-items-center justify-content-center"
        style="background: transparent">
        <h2 class="text-uppercase fw-700 fs-1" style="letter-spacing: 1px;color: #333">Escolha seu plano FB Fight Pass</h2>
        <br><br>

        <div class="row w-100">
            <div class="col-12 col-lg-6 mb-0 mb-5 mb-lg">
                <x-pay-card typesubscribe="pagamento mensal" value="R$ 25.00">

                </x-pay-card>
            </div>
            <div class="col-12 col-lg-6 mb-0 mb-5 mb-lg">
                <x-pay-card typesubscribe="pagamento anual" value="R$ 19.00" bordercolor="#d20a0a"
                    toutlip={{ true }}>

                </x-pay-card>
            </div>
        </div>
        <p class="fst-italic fw-500">A assinatura será renovada automaticamente mensalmente, a menos que seja cancelada
            antes da renovação aplicável
        </p>
    </section>
    <section class="container-fluid p-0 py-5 d-flex flex-column align-items-center justify-content-center dowloadapp-img-1"
        style="min-height: 100vh">
        <div class="container mt-5 dowloadapp-img-1">
            <p class="fw-800 fs-1" style="color: #fff;letter-spacing: 3px">A QUALQUER MOMENTO.<br>EM QUALQUER
                LUGAR.<br>QUALQUER DISPOSITIVO.</p>
            <p class="fw-700" style="color: #fff">Available on iOS, Android, Apple TV, Amazon Fire, ROKU, Xbox, LG and
                Samsung Smart TVs, and SONY TVs with Android TV</p>
            <br>
            <br>
            <button type="button" class="btn btn-outline-danger border-3 rounded-5 custom-btn-login fs-7 me-3">APPLE
                STORE</button>
            <button type="button" class="btn btn-outline-danger border-3 rounded-5 custom-btn-login fs-7 me-3">GOOGLE
                PLAY</button>
            {{-- <div class="container position-relative">
                <p class="fw-800" style="color: #d20a0a;letter-spacing: 3px">HOW IT WORKS</p>
                <div class="" style="width: 100%;padding: 5%">
                    <img src="{{ asset('/images/dowloadapp.png') }}" alt="dowloadapp" width="100%">
                </div>
            </div> --}}
        </div>
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
                    class="btn btn-outline-danger border-4 rounded-5 custom-btn-signup now px-5 py-2 fw-900 fs-5 shadow-sm">ORDER
                    NOW</button>
            </div>
        </div>
    </section>
    <footer class="container-fluid px-0 border-bottom border-5"
        style="background: #161616;border-color: #d20a0a !important">
        <div class="p-4">
            <img src="{{ asset('/images/logonotcolor.png') }}" alt="" width="200px" style="object-fit: contain">
        </div>
        <div class="d-flex justify-content-center align-items-center py-4 px-2" style="background: #0f0f0f">
            <p class="fw-500 mb-0" style="color: #585b63">FB FOUR FIGHT and associated designs are registered and/or owned
                exclusively by CH, LLC. © 2023 All rights reserved</p>
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
