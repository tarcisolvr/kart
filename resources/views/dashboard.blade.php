
@extends('temptop')

@section('content')
    
        <body>
        
            @include('includes.navbar')

            <div class="bg-white" id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-10 px-4">
                    <div class="container-fluid">
                    <div class="row">
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

            <h1 class="title">MÉTRICAS</h1>
            <div class="row">
                <div class="col-4">
                    <label for="nomecorrida" class="form-label">Corridas Feitas</label>
                    <input id="nomecorrida" name="nome_corrida" type="text" class="form-control" placeholder="total">
                </div>

                <div class="container-fluid col-3">
                    <label for="pilotos" class="form-label">Total de Pilotos</label>
                    <input id="pilotos" name="pilotos" type="text" class="form-control" placeholder="Piloso">
                </div>

               
                               

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
                    <script>
                        var el = document.getElementById("wrapper");
                        var toggleButton = document.getElementById("menu-toggle");

                        toggleButton.onclick = function() {
                            el.classList.toggle("toggled");
                        };
                    </script>
                @endsection
    </body>

    </html>
