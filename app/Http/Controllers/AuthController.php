<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class AuthController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function autenticar(Request $request)
    {
        $usuario = Usuario::where('email', $request->email)->first();

        if (isset($usuario)) {

            if (password_verify($request->senha, $usuario->senha)) {

                dd("Usuário logado");
            } else {

                dd("Email ou senha incorretos");
            }
        } else {
            echo "Nenhum usuário encontrado";
        };
    }
}
