<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\BannerAdsPagePositionRequest;
class BannerRequistPost extends Controller
{
    public function index(){
    	$data = [];
    	$data['panding_ads'] = BannerAdsPagePositionRequest::where('status',0)->get();
    	return view('backend.bannerAdsRequest.pandingAds',$data);
    }
}
