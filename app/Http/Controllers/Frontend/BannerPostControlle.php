<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Backend\BannerPosition;
use App\Models\Frontend\BannerAdsPagePositionRequest;
use Auth;
class BannerPostControlle extends Controller
{
    public function index(){
    	$data = [];
    	$data['banner_page'] = BannerPosition::where('status',1)->get();
    	return view('frontend.pages.banner.index',$data);
    }

    public function store(Request $request){
    	$banner_request = new BannerAdsPagePositionRequest();
    	$banner_request->user_id = Auth::user()->id;
    	 $banner = $request->file('banner');
        if ($banner) {
            $image_name = Auth::user()->id.time().'.'.request()->banner->getClientOriginalExtension();


            $image_full_name = $image_name;
            $destination_path = 'uploads/banner/';
            $image_url = $destination_path . $image_full_name;
            $success = $request->file('banner')->move($destination_path, $image_full_name);
            if ($success) {
                $banner_request->banner = $image_url;
            }
        }
        $banner_request->link = $request->link;
    	$banner_request->number = $request->number;
    	$banner_request->page_name = $request->page_name;
    	$banner_request->save();
    	$this->setSuccess('Your request successfully send.we are contact with you very soon');
    	return back();
    }

}
