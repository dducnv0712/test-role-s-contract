<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function clientInfo(Request $request){
        return response()->json([
            "ip"=>$request->ip(),
            "request_info"=>$request
        ],200);
    }
    //
//    public function imageBase64(Request $request)
//    {
//        $image = $request->image;
//        preg_match("/data:image\/(.*?);/",$image,$image_extension); // extract the image extension
//        $image = preg_replace('/data:image\/(.*?);base64,/','',$image); // remove the type part
//        $image = str_replace(' ', '+', $image);
//        $imageName = 'image_' . time() . '.' . $image_extension[1]; //generating unique file name;
//        Storage::disk('public')->put($imageName,base64_decode($image));
//        return response()->json([
//            "message"=>"rat thanh cong"
//        ], 200);
//    }
}