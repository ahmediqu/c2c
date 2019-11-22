<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Brand;
class BrandController extends Controller
{
   public function getList(){
   	return response()->json(Brand::get(),200);
   }

   public function createBrand(Request $request){
   	$brand = Brand::create($request->all());
   	return response()->json($brand,201);
   }
}
