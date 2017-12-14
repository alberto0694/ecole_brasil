<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DateTime;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public static function formatDate(Request $request, String $dateAttr)
    {
        $dt = DateTime::createFromFormat('d/m/Y', $request[$dateAttr]);
        $request->merge([$dateAttr => $dt]);
        return $request;
    }

}
