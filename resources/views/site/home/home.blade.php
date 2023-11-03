@extends('default.header')

@section('body')
    <div class="position-absolute top-0 start-0 vw-100 py-3 px-5" style="z-index: 10">
        <div class="d-flex w-100 justify-content-between align-items-center">
            <div style="width: 200px"></div>
            <img src="{{ asset('/images/logosideebar1.png') }}" alt="Ufc logo" width="150" style="object-fit: contain">
            <div class="d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-magnifying-glass" style="color: rgba(255, 255, 255, .6);"></i>
                <i class="fa-solid fa-ellipsis-v mx-5" style="color: rgba(255, 255, 255, .6);"></i>
                <div class="rounded-circle border d-flex justify-content-center align-items-center"
                    style="width:50px;height:50px" alt="Avatar">
                    <img src="{{ asset('/images/logosideebar1.png') }}" alt="Avatar" class="img-avatar" width="100%"
                        style="object-fit: cover">
                </div>
            </div>
        </div>
    </div>
    <section class="index min-vh-100" style="padding-top: 66px">
        <div class="d-flex p-5 row">
            <div class="col-md-5" style="padding-top: 50px;padding-bottom: 100px">
                <img src="{{ asset('/images/logo3.png') }}" alt="Avatar" class="img-avatar mb-4" width="100%"
                    style="object-fit: cover">
                <div class="ps-3">
                    <p class="fw-700" style="color: #c80000"><span class="px-2 me-2"
                            style="border:2px solid #c80000;border-radius: 4px">+16</span> 2023 - Fighy + 2h 40min</p>
                    <p class="fw-700 text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, explicabo
                        dolores temporibus consequatur sint iusto ad aperiam. Modi quam ducimus, fugit laborum explicabo
                        deserunt dolores a, quo alias, quae minus.</p>
                    <div class="d-flex">
                        <a class="custom" href="{{ url('dashboard') }}">
                            <button type="button"
                                class="btn btn-outline-danger border-3 rounded-5 custom-btn-signup now px-5 py-2 me-3 fw-700 fs-7"
                                style="text-transform: none"><i class="fa-solid fa-play me-1"></i>Play</button>
                        </a>
                        <button type="button"
                            class="btn btn-outline-danger border-3 rounded-5 custom-btn-login px-5 py-2 fs-7 fw-700"
                            style="text-transform: none" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" id="playVideo">Trailer</button>
                    </div>
                </div>
            </div>
            <div class="carrocel">
                <a class="custom" href="{{ url('dashboard') }}">
                    <img src="{{ asset('/images/newfigth.jpeg') }}" alt="Avatar" class="img-avatar mb-4" width="300"
                        style="object-fit: contain">
                </a>
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
                                src="https://player.vimeo.com/video/36737096?h=48f73fad9e&autoplay=1&title=0&byline=0&portrait=0"
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
