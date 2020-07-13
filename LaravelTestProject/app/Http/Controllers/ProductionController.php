<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductionController extends Controller
{
    public function addProduction(){
        return view('admin.production.add-production');
    }
    public function insertProduction(Request $request){
        return $request->all();
//        $imageNameOne    = $request->file('production_img_one');
//        $imageNameTwo    = $request->file('production_img_two');
//        $imageNameThree  = $request->file('production_img_three');


    }
//    public function uploadImage($image){
//        $imageName = $image->getClientOriginalName();
//        $directory = 'production-image/';
//        $image->move($directory, $imageName);
//        return $directory.$imageName;
//    }
}
