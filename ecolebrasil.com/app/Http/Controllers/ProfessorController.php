<?php

namespace App\Http\Controllers;

use App\Professor;
use App\User;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function dashboard()
    {
        return view('professor.dashboard');
    }

    public function profile()
    {
        return view('professor.perfil.index');
    }

    public function create(Request $request)
    {
        $user = User::where('email', '=', $request['email'])->first();

        if($user == null){
            $user = User::create([
                'name' => $request['nome'],
                'email' => $request['email'],
                'permission' => 'PF',
                'password' => bcrypt($request['password']),
            ]);
        }

        $request = Controller::saveBase64($request, 'avatar', 'professores');
        $request = Controller::formatDate( $request, 'nascimento' );
        $request['user_id'] = $user->id;
        $professor = Professor::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::find( $id );
        $user = User::find( $professor->user_id );
        $data['email'] = $request->email;

        if($request->password != ''){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);
        $request = Controller::saveBase64($request, 'avatar', 'professores', $professor->avatar);
        $request = Controller::formatDate($request, 'nascimento');
        $professor->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
