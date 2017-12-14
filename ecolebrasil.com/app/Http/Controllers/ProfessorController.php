<?php

namespace App\Http\Controllers;

use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{

    public function create(Request $request)
    {
        $request = Controller::formatDate( $request, 'nascimento' );
        $professor = Professor::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $request = Controller::formatDate( $request, 'nascimento' );
        $professor = Professor::find( $id );
        $professor->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
