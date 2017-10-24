<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
    	return view('layouts.index');
    }

    public function escola()
    {
    	return view('layouts.escola');
    }    

}
