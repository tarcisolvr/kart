@extends('temptop')

@section('content')
    @include('includes.navbar')
    @include('includes.topo')
    <div class="container-fluid">


        <form method="POST" action="{{ route('running.store') }}">
            @csrf
            <h1 class="title">Cadastre uma corrida</h1>
            <div class="row">
                <div class="col-4">
                    <label for="nomecorrida" class="form-label">Nome corrida</label>
                    <input id="nomecorrida" name="nome_corrida" type="text" class="form-control" placeholder="Nome">
                </div>

                <div class="container-fluid col-3">
                    <label for="data" class="form-label">Data</label>
                    <input id="data" name="data" type="date" class="form-control" placeholder="Data">
                </div>

                <div class="container-fluid col-3">
                    <label for="horainicio" class="form-label">Hora inicio</label>
                    <input id="horainicio" name="hora_inicio" type="time" class="form-control" placeholder="Hora Inicio">
                </div>

                <div class="container-fluid col-3">
                    <label for="horafim" class="form-label">Hora fim</label>
                    <input id="horafim" name="hora_fim" type="time" class="form-control" placeholder="Hora Fim">
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-dark">Cadastrar</button>
            </div>
        </form>
    </div>
    </div>
@endsection
