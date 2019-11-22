<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frontend\SellService;
use Auth;
use App\User;
use Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use DB;
use App\Job;
class ProfileController extends Controller
{
    public function index(){
    	$data = [];
    	$data['adsCount'] = SellService::where('user_id',Auth::user()->id)->count();
    	$data['uploadAds'] = SellService::where('user_id',Auth::user()->id)->get();
    	$data['divisions'] = DB::table('devesions')->where('status',1)->get();
    	return view('frontend.pages.profile.index',$data);
    }

    public function setting(){
    	$data = [];
    	$data['divisions'] = DB::table('devesions')->where('status',1)->get();
    	return view('frontend.pages.profile.settings',$data);
    }

    public function savePassword(){
    	$validator = Validator::make(request()->all(),[
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           
        ]);
    	if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try{
        $user = User::find(Auth::user()->id);
        if( Input::get('password') == Input::get('password_confirmation')){
            $user->password = bcrypt(Input::get('password'));
            $user->save();
            $this->setSuccess('Password Successfully Changed');
            return redirect('logout');
        }else{
            $this->setError('Error!! ');
            return back();
        }
    }catch(\Exception $e){
            
            $this->setError($e->getMessage());
        }
    }

    public function account(){
        $data = [];
        $data['adsCount'] = SellService::where('user_id',Auth::user()->id)->count();
        $data['uploadAds'] = SellService::where('user_id',Auth::user()->id)->get();
        $data['divisions'] = DB::table('devesions')->where('status',1)->get();
        return view('frontend.pages.profile.myaccount',$data);
    }

    public function myPostedJob(){
        $data = [];
        $data['jobCount'] = Job::where('user_id',Auth::user()->id)->count();
        $data['jobs'] = Job::where('user_id',Auth::user()->id)->get();
        $data['divisions'] = DB::table('devesions')->where('status',1)->get();
        return view('frontend.pages.profile.myjobs',$data);
    }
}
