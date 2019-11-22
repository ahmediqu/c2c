<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Frontend\SellService;
use App\Job;
class JobsController extends Controller
{
    public function jobs(){
    	$data = [];
        $data['job_cat'] = DB::table('categories')->where('parent_id',13)->get();
        return view('frontend.pages.jobs',$data);
    }

    public function jobsPost($id){
    	 $data = [];
    	 $data['job_cat'] = DB::table('categories')->where('parent_id',13)->get();
        $data['jobs'] = Job::where('status',1)->where('job_cat',$id)->get();
    	return view('frontend.pages.jobPost',$data);
    }

    public function job_details($id){
        $job=DB::table('jobs')->where('id',$id)->first();
        return view('frontend.pages.jobs.jobdetails',compact('job'));
    }
}
