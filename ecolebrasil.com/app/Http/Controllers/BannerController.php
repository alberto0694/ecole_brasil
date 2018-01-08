<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function create(Request $request)
    {
        $request = Controller::saveBase64($request, 'midia', 'banners');
        $banner = Banner::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find( $id );
        $request = Controller::saveBase64($request, 'midia', 'banners', $banner->midia);
        $banner->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
