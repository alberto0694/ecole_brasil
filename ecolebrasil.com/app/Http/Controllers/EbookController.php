<?php

namespace App\Http\Controllers;

use App\ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
     public function create(Request $request)
    {
        // dd($request);
        $request = Controller::saveBase64($request, 'card', 'ebooks');
        $request = Controller::saveBase64($request, 'file', 'ebooks');
        $ebook = Ebook::create( $request->all() );
        return;
    }

    public function update(Request $request, $id)
    {
        $ebook = Ebook::find( $id );
        $request = Controller::saveBase64($request, 'card', 'ebooks', $ebook->file);
        $request = Controller::saveBase64($request, 'file', 'ebooks', $ebook->file);
        $ebook->update( $request->all() );
        return;
    }

    public function delete(Request $request, $id)
    {
        //
    }
}
