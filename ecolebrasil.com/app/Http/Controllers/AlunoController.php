<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function create(Request $request)
    {
        $request = Controller::formatDate( $request, 'nascimento' );
        $aluno = Aluno::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::formatDate( $request, 'nascimento' );
        $aluno = Aluno::find( $id );
        $aluno->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
