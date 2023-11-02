@extends('default.header')

@section('body')
    <section class="vw-100 min-vh-100 login-background">
        <div class="w-100 min-vh-100 login-linear-background">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-md-5 min-vh-100 d-flex justify-content-center">
                        <div class="p-2 px-5 w-100">
                            <div class="d-flex justify-content-between">
                                <p class="text-uppercase text-white fw-900 fs-2">entrar</p>
                                <p class="text-uppercase text-white fw-900 fs-1" style="font-family: ufc">ufc</p>
                            </div>
                            <form method="POST" action="{{ url('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputEmail" class="form-label text-uppercase text-white">E-mail*</label>
                                    <input type="email" class="form-control custom" id="inputEmail"
                                        aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div> --}}
                                </div>
                                <div class="mb-3">
                                    <label for="inputName" class="form-label text-uppercase text-white">Password</label>
                                    <input type="password" class="form-control custom" id="inputName" name="password">
                                    @error('password')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <a href="" class="custom fw-600">
                                    <p class="text-white">Esqueceu a senha?</p>
                                </a>
                                <button type="submit"
                                    class="btn btn-outline-danger border-4 rounded-0 custom-btn-signup now px-5 py-2 fw-900 fs-3 mt-3 w-100">entrar</button>

                                {{-- ou crie uma conta --}}
                                <p class="deecoration-one text-white fs-6 my-3">Ou crie uma conta</p>
                                <a href="{{ url('signup') }}">
                                    <button type="button"
                                        class="btn btn-outline-danger border-4 rounded-0 custom-btn-login now px-5 py-2 fw-900 fs-3 w-100">assine</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
