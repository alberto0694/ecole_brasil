<?php

namespace App\Http\Controllers;

use App\AlunoRestrito;
use Illuminate\Http\Request;

class AlunoRestritoController extends Controller
{
    public function dashboard()
    {
        return view('aluno_restrito.dashboard');
    }

    public function profile()
    {
        return view('aluno_restrito.perfil.index');
    }
}
