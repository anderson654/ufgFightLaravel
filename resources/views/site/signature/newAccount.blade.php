@extends('default.header')

@section('body')
    <section class="vw-100 min-vh-100 login-background">
        <div class="w-100 min-vh-100 login-linear-background">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-5 min-vh-100 d-flex justify-content-center">
                        <div class="p-2 px-5 w-100">
                            <div class="d-flex justify-content-between">
                                <p class="text-uppercase text-white fw-900 fs-2">registre-se</p>
                                <p class="text-uppercase text-white fw-900 fs-1" style="font-family: ufc">FB</p>
                            </div>
                            <form method="POST" action="{{ url('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1"
                                        class="form-label text-uppercase text-white">E-mail*</label>
                                    <input type="email" class="form-control custom" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label text-uppercase text-white">Nome
                                        completo*</label>
                                    <input type="name" class="form-control custom" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="name" value="{{ old('name') }}">
                                    @error('name')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1"
                                        class="form-label text-uppercase text-white">Senha</label>
                                    <input type="password" class="form-control custom" id="exampleInputPassword1"
                                        name="password">
                                    @error('password')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label text-uppercase text-white">Comfirme
                                        a senha</label>
                                    <input type="password" class="form-control custom" id="exampleInputPassword1">
                                </div>
                                <p class="deecoration-one text-white fs-6 my-3">registre-se</p>
                                <button type="submit"
                                    class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-2 fw-900 fs-3 mt-3 w-100">continuar</button>

                                {{-- ou crie uma conta --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




{{-- @extends('default.header')

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
    <section class="container" id="contentConteiner">
        <div class="row py-5">
            <div class="col-md-5 min-vh-100">
                <div class="bg-dark p-3 rounded-2 shadow p-5">
                    <form method="POST" action="{{ url('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-uppercase text-white">E-mail*</label>
                            <input type="email" class="form-control custom" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" value="{{ old('email') }}">

                            @error('email')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-uppercase text-white">Nome
                                completo*</label>
                            <input type="email" class="form-control custom" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="username" value="{{ old('username') }}">
                            @error('username')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-uppercase text-white">Senha*</label>
                            <input type="password" class="form-control custom" id="exampleInputPassword1" name="password" value="{{ old('password') }}">
                            @error('password')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-uppercase text-white">Comfirme a
                                senha*</label>
                            <input type="password" class="form-control custom" id="exampleInputPassword1">
                        </div>

                        <button type="submit"
                            class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-2 fw-900 fs-3 mt-3 w-100">continuar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        var alturaDaDiv = $("#customNav").outerHeight(true);
        $("#contentConteiner").css('margin-top', alturaDaDiv);
        console.log(alturaDaDiv);
    </script>
@endsection --}}
