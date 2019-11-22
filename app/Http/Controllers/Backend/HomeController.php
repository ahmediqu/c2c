<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Frontend\Website\Contact;
use Carbon\Carbon;
use App\Models\Frontend\Website\ApplayCourse;
use DB;
use App\Models\Frontend\SellService;
use App\Job;
use App\Models\Frontend\BannerAdsPagePositionRequest;
class HomeController extends Controller
{
    public function index(){
    	$data = [];

        $data['total_sell_service'] = SellService::count();
        $data['BannerAdsPagePositionRequest'] = BannerAdsPagePositionRequest::count();
        $data['pandding_sell_service'] = SellService::where('status',0)->count();
        $data['job_panding_count'] = Job::where('status',0)->count();
    	$data['users'] = User::count();
    	return view('backend.dashboard',$data);
    }

    public function applyCourseList(){
    	$data = [];
    	$data['applied'] = DB::table('applay_courses')->get();
        return view('backend.pages.applyCourseList',$data);
    }
}
