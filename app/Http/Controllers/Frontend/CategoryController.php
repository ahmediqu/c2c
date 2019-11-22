<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\ProductCategory;
class CategoryController extends Controller
{
    public function index($id){
    	$data = [];
      $data['categories'] = DB::table('products')->where('product_category',$id)->get();
    	return view('frontend.pages.ecomarce.category',$data);
    }
}
