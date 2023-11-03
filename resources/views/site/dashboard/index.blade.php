@extends('default.header')

<style>
    body {
        background: #585b63 !important;
    }
</style>

@section('body')
    <div class="container-fluid fixed-top p-0" id="customNav">
        <x-side-bar></x-side-bar>
    </div>
    <section class="container-fluid min-vh-100 event-dashboard">
        <div class="px-5 d-flex w-100 align-items-end" id="contentConteiner" style="min-height: 100%">
            <div class="pt-5 width-description fw-500 fs-5">
                <p class="text-uppercase fw-900" style="color: rgba(255,255,255,0.5)"><span class="fs-4"
                        style="font-family: ufc;color: red;margin-right: 10px">fb</span>Evento</p>
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
                    data-bs-toggle="modal" data-bs-target="#exampleModal" id='playVideo'>assista
                    agora</button>
                <br>
                <br>
                <br>
            </div>
        </div>
    </section>
    <section>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content d-flex p-0" style="background: transparent">
                    <div class="modal-body">

                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="meuVideo"
                                src="https://player.vimeo.com/video/36737096?h=48f73fad9e&autoplay=0&title=0&byline=0&portrait=0"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
                                allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
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

        $(document).ready(function() {
            var modal = document.getElementById('exampleModal');
            var video = document.getElementById('meuVideo');
            var btnAutoPlay = document.getElementById('playVideo');

            modal.onclick = function() {
                modal.style.display = "none";
                video.contentWindow.postMessage('{"method":"pause"}', '*');
            }
            btnAutoPlay.onclick = function() {
                video.contentWindow.postMessage('{"method":"play"}', '*');
            }
        });
    </script>
@endsection
