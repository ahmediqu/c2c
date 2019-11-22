<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use DB;
class ProductDetailsController extends Controller
{
    public function index($id){
    	$data = [];
    	$data['product_details'] = DB::table('products')->where('id',$id)->first();

    	return view('frontend.pages.ecomarce.product_details',$data);
    }
}
