<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;
use App\User;
use \Session;

class HomeController extends Controller
{
    public function admin()
    {
        Auth::guard()->logout();
        return view('auth.admin');
    }

    public function ead(Request $request)
    {
        Auth::guard()->logout();
        // $request->session()->invalidate();
        return view('auth.ead');
    }

    public function professor(Request $request)
    {
        Auth::guard()->logout();
        // $request->session()->invalidate();
        return view('auth.professor');
    }

    public function redirect()
    {
        $userId = Auth::user()->id;
        $user = User::find( $userId );
    	if($user->permission == 'AD'){
    		return redirect( route( 'administrador.dashboard' ) );
    	}else if($user->permission == 'PF'){
    		return redirect( route( 'professor.dashboard' ) );
    	}else if($user->permission == 'AL' || $user->permission == 'AR'){
    		return redirect( route( 'aluno.dashboard' ) );
        }
    }
}
