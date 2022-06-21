@extends('template')

@section('content')
    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
           <form method="POST" action="{{ route('autenticar') }}" class="col-4">
            @csrf
                <img class="logo" src="{{ asset('img/logo.png')}}"/>
                <h1 class="title">Login</h1>

                <div class="row mb-3">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email">
                </div>
                <div class="row mb-3">
                    <input type="password" name="senha" class="form-control form-control-lg" placeholder="Senha">
                </div>
                <div class="row mb-3">
                    <button type="submit" class="btn btn-block btn-dark btn-lg">Entrar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
