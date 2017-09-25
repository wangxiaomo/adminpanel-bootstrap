<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class TinymceController extends Controller {
    public function __invoke() {
        $accepted_origins = [
            "http://localhost",
            "http://127.0.0.1",
            "http://5th.minmore.com",
        ];
        // verify origin
        $origin = request()->server('HTTP_ORIGIN');
        if($origin){
            if(in_array($origin, $accepted_origins)){
                header('Access-Control-Allow-Origin: ' . $origin);
            }else{
                header("HTTP/1.0 403 Origin Denied");
            }
        }
        $file = request()->file('file');
        // verify extension
        if(!in_array($file->extension(), ['gif','jpg','png'])){
            header("HTTP/1.0 500 Invalid extension.");
        }
        $path = $file->store('public/tinymce/' . date('Y/md'));
        return response()->json(['location'  =>  Storage::url($path)]);
    }
}
