<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SahusoftCom\YoutubeApi\AuthService;

class YoutubeController extends Controller
{
    public function youtube()
    {
			$authServiceObject = new AuthService();
			$authUrl = $authServiceObject->getLoginUrl;
    }

}
