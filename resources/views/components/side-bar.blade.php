<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <nav class="navbar navbar-expand-lg custom-sidebar shadow-sm">
        <div class="container-fluid mx-4">
            <img src="{{ asset('/images/logo2.png') }}" alt="Ufc logo" width="220">
            <button class="navbar-toggler border-0 my-3" type="button" data-bs-toggle="collapse" aria-controls="customNav"
                aria-expanded="false" aria-label="Toggle navigation" data-bs-theme="dark" id="btnopenmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="customNav">
                {{-- <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ppv</a>
                    </li>
                </ul> --}}
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
                        <a class="custom" href="{{ url('login')}}">
                            <button type="button"
                                class="btn btn-outline-danger border-3 rounded-5 custom-btn-login fs-7 me-3">LOG
                                IN</button>
                        </a>
                        <a class="custom" href="{{ url('signup') }}">
                            <button type="button"
                                class="btn btn-outline-danger border-3 rounded-5 custom-btn-signup fs-7">inscrever-se</button>
                        </a>
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
