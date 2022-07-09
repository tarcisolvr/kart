
<div class="bg-white" id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-10 px-4">
        <div class="d-flex align-items-center">

            <h2 class="fs-2 m-0">
                <h6 class="text-muted">Olá, {{ session('user.nome') }}</h6>
            </h2>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <a class="container-fluid" href="{{ route('logout') }}">
                    <i class="fas fa-sign-out-alt me-2">Sair</i>
                    <h6 href="{{ route('logout') }}"></h6>

                </a>

            </ul>
        </div>
    </nav>
