<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\User;
use App\Models\ProductCategory;
use App\Devesion;
use App\Citry;
use App\Category;
use App\Models\Frontend\SellService;
class HomepageController extends Controller
{
    public function index(){
    	$data = [];
    	
    	$data['category'] = Category::where('status',1)->where('parent_id',0)->get();
    	$data['devesion'] = Devesion::where('status',1)->get();
    	$data['city'] = Citry::where('status',1)->get();
        return view('frontend.pages.home',$data);
    }

    public function logout(Request $request) {
       Auth::logout();
        return redirect('/login');
    }

    public function categoryPage($id){
        $data = [];
        $data['category'] = Category::where('status',1)->where('parent_id',$id)->get();
        $data['devesion'] = Devesion::where('status',1)->get();
        $data['city'] = Citry::where('status',1)->get();
        $data['all_ads'] = SellService::where('category_id',$id)->orWhere('sub_category_id',$id)->get();
        return view('frontend.pages.category_page',$data);
    }
    
    public function chat(){
        return view('frontend.pages.chat');
    }

    
}
