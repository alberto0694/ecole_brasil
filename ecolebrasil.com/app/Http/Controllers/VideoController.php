<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
     public function create(Request $request)
    {
        $video = Video::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $video = Video::find( $id );
        $video->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
         $video = Video::find($id);
         $video->comentarios()->delete();
         $video->delete();
         return;
    }
}
