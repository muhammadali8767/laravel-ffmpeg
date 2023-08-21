<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function upload(Request $request) {
        $file = $request->file('video');
        $fileName = '';
        dd(Storage::put($fileName, $file));
//        $responce = ;
//        return response()->json($responce);
    }
}
