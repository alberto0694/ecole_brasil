<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;

class Register extends Controller
{
    public function insertUser(Request $r)
    {
    	$user = User::create($r->all());
    	dd($user);
    }

    public function showRegister()
    {
    	return view('auth.register');
    }
}
