<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class HealthSchoolController extends Controller
{
    public function index(){
    	$data = [];
    	$data['blogs'] = DB::table('blogs')->where('status',1)->orderBy('id','desc')->get();
    	$data['category'] = DB::table('categories')->where('status',1)->orderBy('id','desc')->get();
    	return view('frontend.pages.health_school',$data);
    }
}
