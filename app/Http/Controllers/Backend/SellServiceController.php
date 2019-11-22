<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Frontend\SellService;
use App\RentApartmentFlat;
class SellServiceController extends Controller
{
    public function pandding_product(){
    	$data = [];
    	$data['pandding_product'] = DB::table('sell_services')->where('status',0)->get();
    	return view('backend.pages.sellService.pandding_product',$data);
    }

    public function productDetails($id){
    	$data = [];
        $data['id'] = $id;
    	$data['productDetails'] = DB::table('sell_services')
    	->join('users','sell_services.user_id','=','users.id')->where('sell_services.id',$id)->first();
    	return view('backend.pages.sellService.product_details',$data);
    }

    public function producApproved(Request $request,$id){
    	$approved = SellService::findOrFail($id);
    	$approved->status = 1;

    	$approved->save();
    	$this->setSuccess('Product Approved !!');
    	return back();
    }
}
