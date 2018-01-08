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

    public static function saveBase64(Request $request, String $base64Attr, String $folder, String $name = null)
    {

        $contents = $request[$base64Attr];
        $isHash = (strpos($contents, 'data:') > -1);

        if($isHash){
            // dd($contents);
            // $unique_name = $name;
            $pos  = strpos($contents, ';');
            $type = explode(':', substr($contents, 0, $pos))[1];

            $extension = explode('/', substr($type, 0, strlen($type)))[1];
            $unique_name = 'base64/'.$folder.'/'.md5($base64Attr.time()).'.'.$extension;

            $ifp = fopen( $unique_name, 'wb' );
            $data = explode( ',', $contents );

            // we could add validation here with ensuring count( $data ) > 1
            fwrite( $ifp, base64_decode( $data[ 1 ] ) );

            // clean up the file resource
            fclose( $ifp );

            $request[$base64Attr] = $unique_name;
        }

        return $request;
    }

}
