<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PromoteController extends Controller
{
    public function promote($id){
    	$data = [];
    	$data['id'] = $id;
    	$data['product'] = DB::table('sell_services')
    							
    							
    							->where('id',$id)
    							->first();
    	return view('frontend.pages.promote',$data);
    }
}
