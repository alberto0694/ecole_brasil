<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class web_site extends Controller
{
    public function download()
    {
        return view('modulo.texto-download');
    }
}
