<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class DoctorController extends Controller
{
    public function index(){
    	$data = [];
    	$data['specialities'] = DB::table('specialities')->where('status',1)->get();
    	return view('frontend.pages.doctor',$data);
    }
}
