<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;
use App\User;

class HomeController extends Controller
{
    public function admin()
    {
        return view('auth.admin');
    }

    public function ead()
    {
        return view('auth.ead');
    }

    public function redirect()
    {
        $userId = Auth::id();
        $user = User::find( $userId );

    	if($user->permission == 'AD'){
    		return redirect( route( 'administrador.dashboard' ) );
    	}else if($user->permission == 'PF'){
    		dd('professor');
    	}else{
    		dd('aluno');
    	}
    }
}
