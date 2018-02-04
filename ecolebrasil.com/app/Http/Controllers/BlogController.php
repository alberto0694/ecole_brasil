<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function create(Request $request)
    {
        $blog = Blog::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find( $id );
        $blog->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
