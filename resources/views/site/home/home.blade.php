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
                            style="text-transform: none">Trailer</button>
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
@endsection
