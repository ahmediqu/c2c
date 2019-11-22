<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Job;
class JobController extends Controller
{
    public function pandingJob(){
    	$data = [];
    	$data['pandding_jobs'] = DB::table('jobs')->where('status',0)->get();
    	return view('backend.job.panding_job',$data);
    }

    public function pandingJobDetails($id){
    	$data = [];
        $data['id'] = $id;
    	$data['productDetails'] = DB::table('jobs')
    	->join('users','jobs.user_id','=','users.id')->where('jobs.id',$id)->first();
    	return view('backend.job.panding_job_details',$data);
    }

    public function pandingJobApprove(Request $request,$id){
    	$approved = Job::findOrFail($id);
    	$approved->status = 1;

    	$approved->save();
    	$this->setSuccess('Job Approved !!');
    	return back();
    }
}
